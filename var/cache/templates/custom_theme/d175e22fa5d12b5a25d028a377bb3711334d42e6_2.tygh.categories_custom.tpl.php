<?php
/* Smarty version 4.3.0, created on 2024-11-27 02:25:40
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/categories/categories_custom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6746f3a49189e4_36919925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd175e22fa5d12b5a25d028a377bb3711334d42e6' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/categories/categories_custom.tpl',
      1 => 1732535937,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6746f3a49189e4_36919925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><style>
.cat{
    padding-top:5px;
}
</style>
<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

<div class="hero__categories">
    <div class="hero__categories__all" style="height:45px;">
        <div class="cat" style="paddding-top:1px;">
        <i class="fa fa-bars"></i>
            All departments
        </div>
       
    </div>
    <ul style="padding-top:1px;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_level_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/categories/categories_custom.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/categories/categories_custom.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><style>
.cat{
    padding-top:5px;
}
</style>
<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

<div class="hero__categories">
    <div class="hero__categories__all" style="height:45px;">
        <div class="cat" style="paddding-top:1px;">
        <i class="fa fa-bars"></i>
            All departments
        </div>
       
    </div>
    <ul style="padding-top:1px;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_level_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<?php }
}
}
}
