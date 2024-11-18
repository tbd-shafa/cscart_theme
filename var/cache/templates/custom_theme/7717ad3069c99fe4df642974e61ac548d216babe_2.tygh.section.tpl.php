<?php
/* Smarty version 4.3.0, created on 2024-11-17 23:26:07
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/common/section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673aec0f0a4a27_52954625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7717ad3069c99fe4df642974e61ac548d216babe' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/common/section.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673aec0f0a4a27_52954625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('open_action','hide','open_action','hide'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('id', sprintf("s_%s",md5($_smarty_tpl->tpl_vars['section_title']->value)));
$_smarty_tpl->_assignInScope('rnd', rand());
if ($_COOKIE[$_smarty_tpl->tpl_vars['id']->value] || $_smarty_tpl->tpl_vars['collapse']->value) {?>
    <?php $_smarty_tpl->_assignInScope('collapse', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('collapse', false);
}?>

<div class="ty-section<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>" id="ds_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div  class="ty-section__title <?php if (!$_smarty_tpl->tpl_vars['collapse']->value) {?>open<?php }?> cm-combination cm-save-state cm-ss-reverse" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <span><?php echo $_smarty_tpl->tpl_vars['section_title']->value;?>
</span>
        <span class="ty-section__switch ty-section_switch_on"><?php echo $_smarty_tpl->__("open_action");
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-section__arrow",'id'=>''),$_smarty_tpl);?>
</span>
        <span class="ty-section__switch ty-section_switch_off"><?php echo $_smarty_tpl->__("hide");
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-section__arrow",'id'=>''),$_smarty_tpl);?>
</span>
    </div>
    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['section_body_class']->value ?? null)===null||$tmp==='' ? "ty-section__body" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>
</div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/section.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/section.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('id', sprintf("s_%s",md5($_smarty_tpl->tpl_vars['section_title']->value)));
$_smarty_tpl->_assignInScope('rnd', rand());
if ($_COOKIE[$_smarty_tpl->tpl_vars['id']->value] || $_smarty_tpl->tpl_vars['collapse']->value) {?>
    <?php $_smarty_tpl->_assignInScope('collapse', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('collapse', false);
}?>

<div class="ty-section<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>" id="ds_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div  class="ty-section__title <?php if (!$_smarty_tpl->tpl_vars['collapse']->value) {?>open<?php }?> cm-combination cm-save-state cm-ss-reverse" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <span><?php echo $_smarty_tpl->tpl_vars['section_title']->value;?>
</span>
        <span class="ty-section__switch ty-section_switch_on"><?php echo $_smarty_tpl->__("open_action");
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-section__arrow",'id'=>''),$_smarty_tpl);?>
</span>
        <span class="ty-section__switch ty-section_switch_off"><?php echo $_smarty_tpl->__("hide");
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-section__arrow",'id'=>''),$_smarty_tpl);?>
</span>
    </div>
    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['section_body_class']->value ?? null)===null||$tmp==='' ? "ty-section__body" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>
</div>
</div>
<?php }
}
}
