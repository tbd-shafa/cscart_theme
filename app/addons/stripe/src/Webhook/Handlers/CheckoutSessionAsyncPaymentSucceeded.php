<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Addons\Stripe\Webhook\Handlers;

use Exception;
use Stripe\PaymentIntent;
use Stripe\Stripe as StripeSetup;
use Tygh\Addons\Stripe\Payments\Stripe;
use Tygh\Addons\Stripe\Webhook\Handler;
use Stripe\Event;
use Tygh\Enum\OrderStatuses;
use Tygh\Registry;
use Tygh\Tygh;

class CheckoutSessionAsyncPaymentSucceeded implements Handler
{
    /**
     * Handles the checkout.session.async_payment_succeeded event
     *
     * @param Event $event Stripe event
     *
     * @return void
     */
    public function handle(Event $event)
    {
        StripeSetup::setApiKey(Stripe::getProcessorParameters()['secret_key']);

        /** @var \Stripe\Checkout\Session $session */
        $session = $event->data->object;

        try {
            $payment_intent = PaymentIntent::retrieve((string) $session->payment_intent);

            if (
                empty($payment_intent->metadata['order_id'])
                || empty($payment_intent->metadata['payment_type'])
                || $payment_intent->metadata['payment_type'] !== 'stripe'
            ) {
                return;
            }

            if (fn_allowed_for('ULTIMATE')) {
                Registry::set('runtime.company_id', false);
            }

            /** @var array $order_info */
            $order_info = fn_get_order_info((int) $payment_intent->metadata['order_id']);
            $settled_order_statuses = fn_get_settled_order_statuses();

            if (
                $order_info
                && !in_array($order_info['status'], $settled_order_statuses)
            ) {
                /** @var \Tygh\Lock\Factory $lock_factory */
                $lock_factory = Tygh::$app['lock.factory'];
                $lock = $lock_factory->createLock('stripe_webhook_handle_order_status_' . $payment_intent->metadata['order_id'], 60.0, false);
                if (!$lock->acquire()) {
                    do {
                        $lock->wait();
                    } while (!$lock->acquire());
                }

                fn_change_non_settled_order_status($order_info, OrderStatuses::PAID);

                $lock->release();
            }
        } catch (Exception $e) {
            fn_log_event('general', 'runtime', [
                'message' => __('stripe.webhook_handle_error', [
                    '[error]' => $e->getMessage(),
                ]),
            ]);
        }
    }
}
