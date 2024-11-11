{** block-description:tmpl_subscription **}
{if $addons.newsletters}
<div class="ty-footer-form-block ty-footer-form-block--responsive">
    <form action="{""|fn_url}" method="post" name="subscribe_form" class="cm-processing-personal-data">
        <input type="hidden" name="redirect_url" value="{$config.current_url}" />
        <input type="hidden" name="newsletter_format" value="2" />
        {hook name="newsletters:email_subscription_block"}

        <div class="footer__widget">
            <div class=" ty-control-group">
                <label class="cm-required cm-email hidden" for="subscr_email{$block.block_id}">{__("email")}</label>
                <input type="text" name="subscribe_email" id="subscr_email{$block.block_id}" size="20" value="{__("enter_email")}" class="cm-hint ty-input-text" style="height:48px !important" />
                {include file="buttons/go.tpl" but_name="newsletters.add_subscriber" but_text="Go"  alt=__("go")}
            </div>
        </div>
        {include file="common/image_verification.tpl" option="newsletters"}
        {/hook}
    </form>
</div>
{/if}