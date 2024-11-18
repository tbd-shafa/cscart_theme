<?php
/* Smarty version 4.3.0, created on 2024-11-17 23:26:11
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/static_templates/auth_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673aec130db878_00085122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05123ca3da95a6d446f0abc61dd18414a3424488' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/static_templates/auth_info.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673aec130db878_00085122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_login_form','register_new_account','text_recover_password_title','text_recover_password','text_login_form','register_new_account','text_recover_password_title','text_recover_password'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-login-info">
	<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "login_form") {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"auth_info:login_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"auth_info:login_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	    <div class="ty-login-info__txt">
		    <?php echo $_smarty_tpl->__("text_login_form");?>

		    <a href="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("register_new_account");?>
</a>
		</div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"auth_info:login_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "recover_password" && $_smarty_tpl->tpl_vars['runtime']->value['action'] != "recover") {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"auth_info:recover_password"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"auth_info:recover_password"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("text_recover_password_title");?>
</h4>
	    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("text_recover_password");?>
</div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"auth_info:recover_password"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"auth_info:extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"auth_info:extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"auth_info:extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/auth_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/auth_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-login-info">
	<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "login_form") {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"auth_info:login_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"auth_info:login_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	    <div class="ty-login-info__txt">
		    <?php echo $_smarty_tpl->__("text_login_form");?>

		    <a href="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("register_new_account");?>
</a>
		</div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"auth_info:login_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "recover_password" && $_smarty_tpl->tpl_vars['runtime']->value['action'] != "recover") {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"auth_info:recover_password"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"auth_info:recover_password"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("text_recover_password_title");?>
</h4>
	    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("text_recover_password");?>
</div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"auth_info:recover_password"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"auth_info:extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"auth_info:extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"auth_info:extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div><?php }
}
}
