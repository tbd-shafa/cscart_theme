<?php
/* Smarty version 4.3.0, created on 2024-11-12 04:48:01
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/terms_and_conditions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67334e8162b977_43737580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86636a2c935c1d04220e80f310efcfadbeb53624' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/terms_and_conditions.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67334e8162b977_43737580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('checkout_terms_n_conditions_name','checkout_terms_n_conditions','terms_and_conditions_content','checkout_edp_terms_n_conditions','license_agreement','checkout_terms_n_conditions_alert','checkout_terms_n_conditions_name','checkout_terms_n_conditions','terms_and_conditions_content','checkout_edp_terms_n_conditions','license_agreement','checkout_terms_n_conditions_alert'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-control-group ty-checkout__terms">
    <?php $_smarty_tpl->_assignInScope('const_suffix', (($tmp = $_smarty_tpl->tpl_vars['const_suffix']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('is_id_accept_terms_checked', ($_smarty_tpl->tpl_vars['user_data']->value["id_accept_terms".((string)$_smarty_tpl->tpl_vars['const_suffix']->value)] === "Y"));?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:terms_and_conditions"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="cm-field-container">
        <label for="id_accept_terms<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-check-agreement"><input type="hidden" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="accept_terms" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="N" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.id_accept_terms<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><input type="checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="id_accept_terms<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="accept_terms" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="Y" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-agreement checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['is_id_accept_terms_checked']->value) {?>checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements();"<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.id_accept_terms<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "terms_link", null, null);?><a id="sw_terms_and_conditions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("checkout_terms_n_conditions_name");?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->__("checkout_terms_n_conditions",array("[terms_href]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'terms_link')));?>
</label>

        <div class="hidden" id="terms_and_conditions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("terms_and_conditions_content");?>

        </div>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:terms_and_conditions_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['cart_agreements']->value) {?>
    <?php $_smarty_tpl->_assignInScope('is_product_agreements_checked', ($_smarty_tpl->tpl_vars['user_data']->value["product_agreements_".((string)$_smarty_tpl->tpl_vars['const_suffix']->value)] === "Y"));?>
    <div class="ty-control-group ty-license-agreement__checkbox">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:terms_and_conditions_downloadable"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_downloadable"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="cm-field-container">
            <label for="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-check-agreement ty-license-agreement__checkbox__checkbox"><input type="hidden" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="agreements[]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="N" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><input type="checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="agreements[]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="Y" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-agreement checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['is_product_agreements_checked']->value) {?>checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements();"<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><span><?php echo $_smarty_tpl->__("checkout_edp_terms_n_conditions");?>
</span>&nbsp;<a id="sw_elm_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("license_agreement");?>
</a></label>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_downloadable"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <div class="hidden" id="elm_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_agreements']->value, 'product_agreements');
$_smarty_tpl->tpl_vars['product_agreements']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_agreements']->value) {
$_smarty_tpl->tpl_vars['product_agreements']->do_else = false;
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_agreements']->value, 'agreement');
$_smarty_tpl->tpl_vars['agreement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['agreement']->value) {
$_smarty_tpl->tpl_vars['agreement']->do_else = false;
?>
                <p><?php echo $_smarty_tpl->tpl_vars['agreement']->value['license'];?>
</p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-check-agreement',
            message: '<?php echo strtr((string)$_smarty_tpl->__("checkout_terms_n_conditions_alert"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            func: function(id) {
                return $('#' + id).prop('checked');
            }
        });
    }(Tygh, Tygh.$));

    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        function fn_check_agreements() {
            var $blockingBlock = $('.ty-payment-method-iframe');

            if ($blockingBlock.length > 0) {
                var agreementCount = $('input[type=checkbox].cm-agreement').length,
                    acceptedAgreementCount = $('input[type=checkbox].cm-agreement:checkbox:checked').length,
                    checked = agreementCount === acceptedAgreementCount;

                $blockingBlock.toggleClass('hidden', checked);
            }
        }

        $.ceEvent('on', 'ce.ajaxdone', function (elms, inline_scripts, params, data) {
            if (data && data.html && data.html.litecheckout_step_payment) {
                var $elm = $(data.html.litecheckout_step_payment).find('.ty-payment-method-iframe');

                if ($elm.length > 0) {
                    fn_check_agreements();
                }
            }
        });

        $.ceEvent('on', 'ce.commoninit', function (context) {
            var $blockingBlock = $('.ty-payment-method-iframe', context);
            if (!$blockingBlock.length) {
                return;
            }
            fn_check_agreements();
        });
    <?php }
echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/terms_and_conditions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/terms_and_conditions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-control-group ty-checkout__terms">
    <?php $_smarty_tpl->_assignInScope('const_suffix', (($tmp = $_smarty_tpl->tpl_vars['const_suffix']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('is_id_accept_terms_checked', ($_smarty_tpl->tpl_vars['user_data']->value["id_accept_terms".((string)$_smarty_tpl->tpl_vars['const_suffix']->value)] === "Y"));?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:terms_and_conditions"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="cm-field-container">
        <label for="id_accept_terms<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-check-agreement"><input type="hidden" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="accept_terms" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="N" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.id_accept_terms<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><input type="checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="id_accept_terms<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="accept_terms" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="Y" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-agreement checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['is_id_accept_terms_checked']->value) {?>checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements();"<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.id_accept_terms<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "terms_link", null, null);?><a id="sw_terms_and_conditions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("checkout_terms_n_conditions_name");?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->__("checkout_terms_n_conditions",array("[terms_href]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'terms_link')));?>
</label>

        <div class="hidden" id="terms_and_conditions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("terms_and_conditions_content");?>

        </div>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:terms_and_conditions_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['cart_agreements']->value) {?>
    <?php $_smarty_tpl->_assignInScope('is_product_agreements_checked', ($_smarty_tpl->tpl_vars['user_data']->value["product_agreements_".((string)$_smarty_tpl->tpl_vars['const_suffix']->value)] === "Y"));?>
    <div class="ty-control-group ty-license-agreement__checkbox">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:terms_and_conditions_downloadable"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_downloadable"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="cm-field-container">
            <label for="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-check-agreement ty-license-agreement__checkbox__checkbox"><input type="hidden" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="agreements[]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="N" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><input type="checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="agreements[]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="Y" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-agreement checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['is_product_agreements_checked']->value) {?>checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements();"<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><span><?php echo $_smarty_tpl->__("checkout_edp_terms_n_conditions");?>
</span>&nbsp;<a id="sw_elm_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("license_agreement");?>
</a></label>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_downloadable"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <div class="hidden" id="elm_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_agreements']->value, 'product_agreements');
$_smarty_tpl->tpl_vars['product_agreements']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_agreements']->value) {
$_smarty_tpl->tpl_vars['product_agreements']->do_else = false;
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_agreements']->value, 'agreement');
$_smarty_tpl->tpl_vars['agreement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['agreement']->value) {
$_smarty_tpl->tpl_vars['agreement']->do_else = false;
?>
                <p><?php echo $_smarty_tpl->tpl_vars['agreement']->value['license'];?>
</p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-check-agreement',
            message: '<?php echo strtr((string)$_smarty_tpl->__("checkout_terms_n_conditions_alert"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            func: function(id) {
                return $('#' + id).prop('checked');
            }
        });
    }(Tygh, Tygh.$));

    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        function fn_check_agreements() {
            var $blockingBlock = $('.ty-payment-method-iframe');

            if ($blockingBlock.length > 0) {
                var agreementCount = $('input[type=checkbox].cm-agreement').length,
                    acceptedAgreementCount = $('input[type=checkbox].cm-agreement:checkbox:checked').length,
                    checked = agreementCount === acceptedAgreementCount;

                $blockingBlock.toggleClass('hidden', checked);
            }
        }

        $.ceEvent('on', 'ce.ajaxdone', function (elms, inline_scripts, params, data) {
            if (data && data.html && data.html.litecheckout_step_payment) {
                var $elm = $(data.html.litecheckout_step_payment).find('.ty-payment-method-iframe');

                if ($elm.length > 0) {
                    fn_check_agreements();
                }
            }
        });

        $.ceEvent('on', 'ce.commoninit', function (context) {
            var $blockingBlock = $('.ty-payment-method-iframe', context);
            if (!$blockingBlock.length) {
                return;
            }
            fn_check_agreements();
        });
    <?php }
echo '</script'; ?>
>
<?php }
}
}
