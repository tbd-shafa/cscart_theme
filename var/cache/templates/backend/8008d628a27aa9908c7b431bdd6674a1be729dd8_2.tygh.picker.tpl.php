<?php
/* Smarty version 4.3.0, created on 2024-11-20 02:32:48
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/pickers/filters/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673dbad00c7279_72850581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8008d628a27aa9908c7b431bdd6674a1be729dd8' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/pickers/filters/picker.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:pickers/filters/js.tpl' => 3,
  ),
),false)) {
function content_673dbad00c7279_72850581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_filters','add_filters','position_short','name','no_items'));
$_smarty_tpl->_assignInScope('data_id', (($tmp = $_smarty_tpl->tpl_vars['data_id']->value ?? null)===null||$tmp==='' ? "filters_list" ?? null : $tmp));
$_smarty_tpl->_assignInScope('rnd', rand());
$_smarty_tpl->_assignInScope('data_id', ((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value));
$_smarty_tpl->_assignInScope('view_mode', (($tmp = $_smarty_tpl->tpl_vars['view_mode']->value ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp));
$_smarty_tpl->_assignInScope('start_pos', (($tmp = $_smarty_tpl->tpl_vars['start_pos']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if (($_smarty_tpl->tpl_vars['item_ids']->value) && !is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('item_ids', smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['item_ids']->value));
}?>

<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_buttons", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['multiple']->value == true) {?>
                <?php $_smarty_tpl->_assignInScope('display', "checkbox");?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('display', "radio");?>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['extra_url']->value) {?>
                <?php $_smarty_tpl->_assignInScope('extra_url', '');?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
                <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
            <?php }?>
            <div class="pull-right">
                <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="<?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>choose-icon<?php } else { ?>buttons-container<?php }?>"><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('lang_add_filters', $_smarty_tpl->__("add_filters"));?>
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus",'assign'=>'but_text_icon'),$_smarty_tpl);?>

                        <?php $_smarty_tpl->_assignInScope('_but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['but_text_icon']->value)." ".((string)$_smarty_tpl->tpl_vars['lang_add_filters']->value) ?? null : $tmp));?>
                        <?php $_smarty_tpl->_assignInScope('_but_role', "add");?>
                    <?php } else { ?>
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus",'assign'=>'_but_text'),$_smarty_tpl);?>

                        <?php $_smarty_tpl->_assignInScope('_but_role', "icon");?>
                    <?php }?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("product_filters.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener btn"), 0, false);
?>

                <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
            </div>

            <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_filters") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if (!$_smarty_tpl->tpl_vars['prepend']->value) {?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_buttons');?>

        <?php }?>
    <?php }
if ($_smarty_tpl->tpl_vars['view_mode']->value != "button") {?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <div class="clearfix"></div>
    <div class="table-responsive-wrapper">
        <table width="100%" class="table table-middle table--relative table-responsive table-responsive-w-titles">
        <thead>
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['positions']->value) {?><th><?php echo $_smarty_tpl->__("position_short");?>
</th><?php }?>
            <th width="100%"><?php echo $_smarty_tpl->__("name");?>
</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
    <?php } else { ?>
        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['multiple']->value && !$_smarty_tpl->tpl_vars['item_ids']->value) {?>hidden<?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {?>cm-display-radio pull-left<?php }?>">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <tr class="hidden">
            <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>" data-th="&nbsp;">
    <?php }?>
    <input id="f<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" />
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            </td>
        </tr>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'f_id', false, NULL, 'items', array (
  'first' => true,
  'iteration' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['f_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f_id']->value) {
$_smarty_tpl->tpl_vars['f_id']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index'];
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/filters/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_id'=>$_smarty_tpl->tpl_vars['f_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'hide_input'=>true,'first_item'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null),'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration'] : null)+$_smarty_tpl->tpl_vars['start_pos']->value,'extra_class'=>"input-large"), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
        <div class="input-append">
            <div class="pull-left">
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/filters/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'extra_class'=>"input-large"), 0, true);
?>
            </div>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_buttons');?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/filters/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."filter_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'hide_input'=>true,'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>"0"), 0, true);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    </tbody>
    <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
    <tr>
        <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>" data-th="&nbsp;" class="table-responsive__td--hide-th-mobile"><p class="no-items"><?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>
</p></td>
    </tr>
    </tbody>
    </table>
    </div>
    <?php } else { ?>
    </div>
    <?php }
}?>
</div>
<?php }
}
