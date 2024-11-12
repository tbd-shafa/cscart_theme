<?php
/* Smarty version 4.3.0, created on 2024-11-11 21:09:16
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/customer/title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6732e2fca7f793_64578389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29ccbdd85899ced1845d6cbbc90063e173ae11e9' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/customer/title.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6732e2fca7f793_64578389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.customer_information','sign_in','create_profile','create_profile','lite_checkout.customer_information','sign_in','create_profile','create_profile'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__group">
    <div class="litecheckout__item litecheckout__item--fill">
        <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.customer_information") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
    </div>

        <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <div class="litecheckout__item">
            <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "login_form") {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>"
                    data-ca-target-id="litecheckout_login_block"
                    class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary"
                    rel="nofollow"
            >
                <?php echo $_smarty_tpl->__("sign_in");?>

            </a>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['allow_multiple_profiles']->value) {?>
        <div class="litecheckout__item litecheckout__item--center">
            <a
                class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close litecheckout__link"
                href="<?php echo htmlspecialchars((string) fn_url("checkout.update_profile"), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-target-id="create_user_profile"
                data-ca-dialog-title="<?php echo $_smarty_tpl->__("create_profile");?>
"
            ><?php echo $_smarty_tpl->__("create_profile");?>
</a>
        </div>
    <?php }?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/title.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/title.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__group">
    <div class="litecheckout__item litecheckout__item--fill">
        <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.customer_information") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
    </div>

        <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <div class="litecheckout__item">
            <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "login_form") {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>"
                    data-ca-target-id="litecheckout_login_block"
                    class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary"
                    rel="nofollow"
            >
                <?php echo $_smarty_tpl->__("sign_in");?>

            </a>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['allow_multiple_profiles']->value) {?>
        <div class="litecheckout__item litecheckout__item--center">
            <a
                class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close litecheckout__link"
                href="<?php echo htmlspecialchars((string) fn_url("checkout.update_profile"), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-target-id="create_user_profile"
                data-ca-dialog-title="<?php echo $_smarty_tpl->__("create_profile");?>
"
            ><?php echo $_smarty_tpl->__("create_profile");?>
</a>
        </div>
    <?php }?>
</div>
<?php }
}
}
