<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/status_on_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406760b8d426_08049114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49dba99cc63654b84fa54c2734d37df018b00dc1' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/status_on_update.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406760b8d426_08049114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),));
\Tygh\Languages\Helper::preloadLangVars(array('status','status'));
$_smarty_tpl->_assignInScope('status', (($tmp = $_smarty_tpl->tpl_vars['obj']->value['status'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('items_status', (($tmp = $_smarty_tpl->tpl_vars['items_status']->value ?? null)===null||$tmp==='' ? (fn_get_product_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value)) ?? null : $tmp));
$_smarty_tpl->_assignInScope('non_editable', (($tmp = $_smarty_tpl->tpl_vars['non_editable_status']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_status_container"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_status_container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['non_editable']->value || $_smarty_tpl->tpl_vars['display']->value == "text" || $_smarty_tpl->tpl_vars['display']->value == "select" || $_smarty_tpl->tpl_vars['display']->value == "popup") {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "status_title", null, null);?>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['items_status']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'UTF-8');?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['display']->value == "select") {?>
    <select class="input-small <?php if ($_smarty_tpl->tpl_vars['meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items_status']->value, 'status_name', false, 'status_id');
$_smarty_tpl->tpl_vars['status_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status_id']->value => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['status']->value === $_smarty_tpl->tpl_vars['status_id']->value) {?>
                        selected="selected"
                    <?php }?>
            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value == "popup") {?>
    <input <?php if ($_smarty_tpl->tpl_vars['meta']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
           type="hidden"
           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
           id="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['input_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['input_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
"
    />
    <div class="cm-popup-box btn-group dropleft">
        <a id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-toggle btn-link" data-toggle="dropdown">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'status_title');?>

            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu cm-select">
            <?php $_smarty_tpl->_assignInScope('items_status', fn_get_default_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value));?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items_status']->value, 'status_name', false, 'status_id');
$_smarty_tpl->tpl_vars['status_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status_id']->value => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->do_else = false;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['status']->value == $_smarty_tpl->tpl_vars['status_id']->value) {?>class="disabled"<?php }?>>
                    <a class="status-link-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['status']->value == $_smarty_tpl->tpl_vars['status_id']->value) {?>active<?php }?>"
                       onclick="return fn_check_object_status(this, '<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
', '<?php if ($_smarty_tpl->tpl_vars['statuses']->value) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['status_id']->value]['color'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}?>');"
                       data-ca-result-id="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['input_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['input_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <?php if (!$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'avail_box')) {?>
        <?php echo smarty_function_script(array('src'=>"js/tygh/select_popup.js"),$_smarty_tpl);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "avail_box", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['non_editable']->value || $_smarty_tpl->tpl_vars['display']->value == "text") {?>
    <div class="control-group">
        <label class="control-label cm-required"><?php echo $_smarty_tpl->__("status");?>
:</label>
        <div class="controls">
            <div class="text-type-value <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_status_style']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'status_title');?>
</div>
        </div>
    </div>
<?php } else { ?>
<div class="control-group">
    <label class="control-label cm-required"><?php echo $_smarty_tpl->__("status");?>
:</label>
    <div class="controls" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data_product_statuses']->value);?>
>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items_status']->value, 'status_name', false, 'status_id', 'status_cycle', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['status_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status_id']->value => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_status_cycle']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_status_cycle']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_status_cycle']->value['index'];
?>
            <label class="radio inline" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                <input type="radio"
                       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                       class="product__status-switcher"
                       id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['status']->value === $_smarty_tpl->tpl_vars['status_id']->value || (!$_smarty_tpl->tpl_vars['status']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_status_cycle']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_status_cycle']->value['first'] : null))) {?>checked="checked"<?php }?>
                       value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                />
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>

            </label>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_status_container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
