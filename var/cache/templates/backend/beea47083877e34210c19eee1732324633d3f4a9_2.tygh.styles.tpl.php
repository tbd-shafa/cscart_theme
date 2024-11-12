<?php
/* Smarty version 4.3.0, created on 2024-11-11 21:09:12
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/statuses/components/styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6732e2f8a03e60_43734441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beea47083877e34210c19eee1732324633d3f4a9' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/statuses/components/styles.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6732e2f8a03e60_43734441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
$_smarty_tpl->_assignInScope('statuses', fn_get_statuses($_smarty_tpl->tpl_vars['type']->value));
if ($_smarty_tpl->tpl_vars['statuses']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "styles", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuses']->value, 'status_data', false, 'status');
$_smarty_tpl->tpl_vars['status_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value => $_smarty_tpl->tpl_vars['status_data']->value) {
$_smarty_tpl->tpl_vars['status_data']->do_else = false;
?>
        <?php if (!$_smarty_tpl->tpl_vars['status_data']->value || !$_smarty_tpl->tpl_vars['status_data']->value['params'] || !$_smarty_tpl->tpl_vars['status_data']->value['params']['color']) {?>
            <?php continue 1;?>
        <?php }?>
        .<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 {
            .buttonBackground(lighten(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
, 5%), darken(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
, 5%));
        }
        .<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
-status-dropdown-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
:before,
        .<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
-status-link-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
:before, {
            color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
;
        }
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_function_style(array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'styles'),'type'=>"less"),$_smarty_tpl);?>

<?php }
}
}
