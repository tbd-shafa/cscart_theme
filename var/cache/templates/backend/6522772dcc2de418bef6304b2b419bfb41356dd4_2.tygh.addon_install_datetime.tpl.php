<?php
/* Smarty version 4.3.0, created on 2024-11-13 04:58:23
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/addons/components/manage/addon_install_datetime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6734a26fbc1f08_68734217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6522772dcc2de418bef6304b2b419bfb41356dd4' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/addons/components/manage/addon_install_datetime.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6734a26fbc1f08_68734217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('show_install_datetime', (($tmp = $_smarty_tpl->tpl_vars['show_install_datetime']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_install_datetime']->value) {?>
        <div class="hidden"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['install_datetime'], ENT_QUOTES, 'UTF-8');?>
</div>
<?php }
}
}
