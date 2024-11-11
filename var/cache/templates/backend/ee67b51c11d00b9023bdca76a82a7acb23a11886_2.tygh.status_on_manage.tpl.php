<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:49:09
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/status_on_manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731fd4532ca02_19649960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee67b51c11d00b9023bdca76a82a7acb23a11886' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/status_on_manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731fd4532ca02_19649960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
$_smarty_tpl->_assignInScope('items_status', (($tmp = $_smarty_tpl->tpl_vars['items_status']->value ?? null)===null||$tmp==='' ? (fn_get_product_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value)) ?? null : $tmp));
$_smarty_tpl->_assignInScope('statuses', (($tmp = $_smarty_tpl->tpl_vars['statuses']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('dynamic_object', (($tmp = $_smarty_tpl->tpl_vars['dynamic_object']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('non_editable', (($tmp = $_smarty_tpl->tpl_vars['non_editable_status']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('popup_additional_class', (($tmp = $_smarty_tpl->tpl_vars['popup_additional_status_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('status', (($tmp = $_smarty_tpl->tpl_vars['status']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:status_name_container"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:status_name_container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['non_editable']->value || $_smarty_tpl->tpl_vars['display']->value == "text") {?>
    <span class="view-status view-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 view-status--type view-status--type-products-manage">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:status_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:status_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['items_status']->value[$_smarty_tpl->tpl_vars['status']->value] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_status_text']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:status_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </span>
<?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('prefix', (($tmp = $_smarty_tpl->tpl_vars['prefix']->value ?? null)===null||$tmp==='' ? "select" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('btn_meta', (($tmp = $_smarty_tpl->tpl_vars['btn_meta']->value ?? null)===null||$tmp==='' ? "btn-link" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('status_target_id', (($tmp = $_smarty_tpl->tpl_vars['status_target_id']->value ?? null)===null||$tmp==='' ? ((($tmp = $_smarty_tpl->tpl_vars['st_result_ids']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('update_controller', (($tmp = $_smarty_tpl->tpl_vars['update_controller']->value ?? null)===null||$tmp==='' ? "tools" ?? null : $tmp));?>

    <div class="cm-popup-box <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>dropdown<?php }?> dropleft <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['popup_additional_class']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="product_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_select">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:status_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:status_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
            <a href="#"
                <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap"<?php }?>
                class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['btn_meta']->value, ENT_QUOTES, 'UTF-8');?>
 btn dropdown-toggle link--monochrome <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>cm-combination<?php }?> status-dropdown status-dropdown-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 status-dropdown--type status-dropdown--type-products-manage"
                data-toggle="dropdown"
            ><?php }
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['items_status']->value[$_smarty_tpl->tpl_vars['status']->value] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_status_text']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?><span class="caret status-caret"></span></a>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:status_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php if ($_smarty_tpl->tpl_vars['id']->value && !$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
            <ul class="dropdown-menu">
                <?php $_smarty_tpl->_assignInScope('extra_params', "&table=".((string)$_smarty_tpl->tpl_vars['table']->value)."&id_name=".((string)$_smarty_tpl->tpl_vars['object_id_name']->value));?>
                <?php if ($_smarty_tpl->tpl_vars['st_return_url']->value) {?>
                    <?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['st_return_url']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_assignInScope('extra_params', ((string)$_smarty_tpl->tpl_vars['extra_params']->value)."&redirect_url=".$_prefixVariable9);?>
                <?php }?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items_status']->value, 'status_name', false, 'status_id');
$_smarty_tpl->tpl_vars['status_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status_id']->value => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('st', (($tmp = $_smarty_tpl->tpl_vars['st']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
                    <li <?php if ($_smarty_tpl->tpl_vars['status']->value == $_smarty_tpl->tpl_vars['status_id']->value) {?>class="disabled"<?php }?>>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:status_select_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:status_select_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <a class="status-link status-link-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 status-link--type status-link--type-products-manage <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>cm-confirm<?php }?> <?php if ($_smarty_tpl->tpl_vars['status']->value == $_smarty_tpl->tpl_vars['status_id']->value) {?>active<?php } else { ?>cm-ajax cm-post <?php if ($_smarty_tpl->tpl_vars['ajax_full_render']->value) {?>cm-ajax-full-render<?php }
}?>"
                            <?php if ($_smarty_tpl->tpl_vars['status_target_id']->value) {?>
                                data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                            href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['update_controller']->value).".update_status?id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&status=".((string)$_smarty_tpl->tpl_vars['status_id']->value).((string)$_smarty_tpl->tpl_vars['extra_params']->value).((string)$_smarty_tpl->tpl_vars['dynamic_object']->value)), ENT_QUOTES, 'UTF-8');?>
"
                            onclick="return fn_check_object_status(this, '<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
', '<?php if ($_smarty_tpl->tpl_vars['statuses']->value) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['status_id']->value]['params']['color'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}?>');"
                            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:status_select_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

            <?php if (!$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'avail_box')) {?>
                <?php echo smarty_function_script(array('src'=>"js/tygh/select_popup.js"),$_smarty_tpl);?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "avail_box", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>
        <?php }?>
    <!--product_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_select--></div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:status_name_container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
