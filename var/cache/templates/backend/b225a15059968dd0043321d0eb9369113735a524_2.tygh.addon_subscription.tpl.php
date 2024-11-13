<?php
/* Smarty version 4.3.0, created on 2024-11-13 04:58:20
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/addons/components/detailed_page/tabs/addon_subscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6734a26ced6f08_50617385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b225a15059968dd0043321d0eb9369113735a524' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/addons/components/detailed_page/tabs/addon_subscription.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_6734a26ced6f08_50617385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('license','license_number','addon_license_key_tooltip'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons:subscription_tab"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons:subscription_tab"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "subscription") {?>hidden<?php }?>" id="content_subscription">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_addon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
_subs_form" class=" form-edit form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="addon" value="<?php echo htmlspecialchars((string) $_REQUEST['addon'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="storefront_id" value="<?php echo htmlspecialchars((string) $_REQUEST['storefront_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_REQUEST['return_url']) {?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("license"),'target'=>"#license"), 0, false);
?>
        <div id="license" class="collapse in collapse-visible">
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("license_number");?>
:</label>
                <div class="controls">
                    <input type="text" name="marketplace_license_key"
                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['marketplace_license_key'], ENT_QUOTES, 'UTF-8');?>
"
                            size="30"/>
                    <p class="muted description"><?php echo $_smarty_tpl->__("addon_license_key_tooltip");?>
</p>
                </div>
            </div>
        </div>

    </form>
<!--content_subscription--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons:subscription_tab"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
