<?php
/* Smarty version 4.3.0, created on 2024-11-15 03:07:59
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/block_manager/render/location.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67372b8fecd3b1_68974189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef4d1f53f29b626de92f9637d8169b519628fe9b' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/block_manager/render/location.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67372b8fecd3b1_68974189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('choose_your_country'));
?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['top_panel']) {?>
<div class="tygh-top-panel clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['top_panel'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['header']) {?>
<div class="tygh-header clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['header'];?>

</div>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager:frontend_location_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager:frontend_location_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['containers']->value['content']) {?>
    <div class="tygh-content clearfix">
        <?php echo $_smarty_tpl->tpl_vars['containers']->value['content'];?>

    </div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager:frontend_location_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['containers']->value['footer']) {?>
<div class="tygh-footer clearfix" id="tygh_footer">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['footer'];?>

</div>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_entry_page']->value) {?>
        <div id="entry_page"></div>
            <?php echo '<script'; ?>
>
                $('#entry_page').ceDialog('open', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
href: fn_url('companies.entry_page'), resizable: false, title: '<?php echo $_smarty_tpl->__("choose_your_country");?>
', width: 325, height: 420, dialogClass: 'entry-page'<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
            <?php echo '</script'; ?>
>
    <?php }
}?>

<?php if (fn_check_meta_redirect($_REQUEST['meta_redirect_url'])) {?>
    <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars((string) fn_url(fn_check_meta_redirect($_REQUEST['meta_redirect_url'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
