<?php
/* Smarty version 4.3.0, created on 2024-11-19 04:03:59
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/settings/license_errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673c7eafeac1c3_34216665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c92b6b0bd68b2ae97456e51a10f6e5181b3ccbc' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/settings/license_errors.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c7eafeac1c3_34216665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('licensing.license_error_license_is_','licensing.license_error_license_is_','please_enter_license_here','activate'));
if ($_smarty_tpl->tpl_vars['show']->value) {?>
    <a id="license_errors"
       class="cm-dialog-opener cm-dialog-auto-size hidden cm-dialog-non-closable"
       data-ca-target-id="license_errors_dialog"
    ></a>

    <div class="hidden trial-expired-dialog license-errors-dialog"
         title="<?php echo $_smarty_tpl->__("licensing.license_error_license_is_".((string)(mb_strtolower($_smarty_tpl->tpl_vars['license_errors']->value['status'], 'UTF-8'))).".title",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
"
         id="license_errors_dialog"
    >
        <form name="license_errors_form"
              id="license_errors_dialog_form"
              action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
        >
            <input type="hidden"
                   name="redirect_url"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"
            />
            <input type="hidden"
                   name="store_mode"
                   value="full"
            />
            <div class="license-errors trial-expired">
                <p><?php echo $_smarty_tpl->__("licensing.license_error_license_is_".((string)(mb_strtolower($_smarty_tpl->tpl_vars['license_errors']->value['status'], 'UTF-8'))).".text",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null),"[helpdesk_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['helpdesk_url']));?>
</p>
                <div class="license type-error item">
                    <input type="text"
                           name="license_number"
                           class="type-error"
                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store_mode_license']->value, ENT_QUOTES, 'UTF-8');?>
"
                           placeholder="<?php echo $_smarty_tpl->__("please_enter_license_here");?>
"
                    />
                    <input name="dispatch[settings.change_store_mode]"
                           type="submit"
                           value="<?php echo $_smarty_tpl->__("activate");?>
"
                           class="btn btn-primary"
                    />
                </div>
            </div>
        </form>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
        Tygh.$(document).ready(function () {
            Tygh.$('#license_errors').trigger('click');
        });

        Tygh.$(window).load(function () {
            Tygh.$('#license_errors_dialog_form').off('submit');
        });
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
