<?php
/* Smarty version 4.3.0, created on 2024-11-14 05:27:38
  from '/opt/lampp/htdocs/cs-cart/design/backend/mail/templates/common/options_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6735faca171d13_98872628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49eae8992b2f2c5af47ed68b5638348053840beb' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/mail/templates/common/options_info.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/modifier.tpl' => 2,
  ),
),false)) {
function content_6735faca171d13_98872628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('options','options'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['po']->value['value']) {?>
            <?php $_smarty_tpl->_assignInScope('has_option', true);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['has_option']->value) {?>
        <strong><?php echo $_smarty_tpl->__("options");?>
:</strong>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po', false, NULL, 'po_opt', array (
));
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>

            <?php if (($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP")) && !$_smarty_tpl->tpl_vars['po']->value['value']) {?>
                <?php continue 1;?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['option_displayed']->value) {?>,&nbsp;<?php }?>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>


            <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oi']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']], 'file', false, NULL, 'po_files', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['total'];
?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last'] : null)) {?>,&nbsp;<?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers'] == "Y") {?>
                <?php if (!$_smarty_tpl->tpl_vars['skip_modifiers']->value && floatval($_smarty_tpl->tpl_vars['po']->value['modifier'])) {?>
                    &nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['po']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['po']->value['modifier'],'display_sign'=>true), 0, true);
?>)
                <?php }?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('option_displayed', true);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
} else { ?>
    &nbsp;
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/options_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/options_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['po']->value['value']) {?>
            <?php $_smarty_tpl->_assignInScope('has_option', true);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['has_option']->value) {?>
        <strong><?php echo $_smarty_tpl->__("options");?>
:</strong>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po', false, NULL, 'po_opt', array (
));
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>

            <?php if (($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP")) && !$_smarty_tpl->tpl_vars['po']->value['value']) {?>
                <?php continue 1;?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['option_displayed']->value) {?>,&nbsp;<?php }?>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>


            <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oi']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']], 'file', false, NULL, 'po_files', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['total'];
?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last'] : null)) {?>,&nbsp;<?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers'] == "Y") {?>
                <?php if (!$_smarty_tpl->tpl_vars['skip_modifiers']->value && floatval($_smarty_tpl->tpl_vars['po']->value['modifier'])) {?>
                    &nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['po']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['po']->value['modifier'],'display_sign'=>true), 0, true);
?>)
                <?php }?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('option_displayed', true);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
} else { ?>
    &nbsp;
<?php }
}
}
}
