<?php
/* Smarty version 4.3.0, created on 2024-11-14 22:17:58
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/block_manager/extract_nested_forms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6736e79681c432_32444253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deeab62e75b85b4eda0482c039da2f3510038a69' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/block_manager/extract_nested_forms.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6736e79681c432_32444253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "wrapper", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['wrapper']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>"&nbsp;"), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (strpos($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'wrapper'),"<form") && strpos($_smarty_tpl->tpl_vars['content']->value,"<form")) {?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, smarty_modifier_explode("<form",$_smarty_tpl->tpl_vars['content']->value), 'form');
$_smarty_tpl->tpl_vars['form']->index = -1;
$_smarty_tpl->tpl_vars['form']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['form']->value) {
$_smarty_tpl->tpl_vars['form']->do_else = false;
$_smarty_tpl->tpl_vars['form']->index++;
$_smarty_tpl->tpl_vars['form']->first = !$_smarty_tpl->tpl_vars['form']->index;
$__foreach_form_62_saved = $_smarty_tpl->tpl_vars['form'];
?>
        <?php if ($_smarty_tpl->tpl_vars['form']->first) {?>
            <?php continue 1;?>
        <?php }?>

                <?php $_smarty_tpl->_assignInScope('form', "<form".((string)$_smarty_tpl->tpl_vars['form']->value));?>
        <?php $_smarty_tpl->_assignInScope('start', strpos($_smarty_tpl->tpl_vars['form']->value,"<form"));?>
        <?php $_smarty_tpl->_assignInScope('form_content', substr($_smarty_tpl->tpl_vars['form']->value,$_smarty_tpl->tpl_vars['start']->value,(strpos($_smarty_tpl->tpl_vars['form']->value,"</form")+7-$_smarty_tpl->tpl_vars['start']->value)));?>
        <?php $_smarty_tpl->_assignInScope('form_tag', ((string)(substr($_smarty_tpl->tpl_vars['form_content']->value,0,(strpos($_smarty_tpl->tpl_vars['form_content']->value,">")+1))))."</form>");?>
        <?php $_smarty_tpl->_assignInScope('form_id', substr($_smarty_tpl->tpl_vars['form_tag']->value,(strpos($_smarty_tpl->tpl_vars['form_content']->value,"id=\"")+4)));?>
        <?php $_smarty_tpl->_assignInScope('form_id', substr($_smarty_tpl->tpl_vars['form_id']->value,0,(strpos($_smarty_tpl->tpl_vars['form_id']->value,"\""))));?>

                <?php $_smarty_tpl->_assignInScope('content', smarty_modifier_replace($_smarty_tpl->tpl_vars['content']->value,$_smarty_tpl->tpl_vars['form_content']->value,(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['form_content']->value,"<form","<x-form"),"</form","</x-form"),"id=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."\">","id=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."_base\">"),"<input","<input form=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."\""),"<select","<select form=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."\""),"<textarea","<textarea form=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."\""),"<button","<button form=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."\""))));?>

                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['form_tag']->value," class=\""," class=\"hidden cm-outside-inputs ");?>


                <?php $_smarty_tpl->_assignInScope('content', $_smarty_tpl->tpl_vars['content']->value ,false ,2);?>
    <?php
$_smarty_tpl->tpl_vars['form'] = $__foreach_form_62_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/block_manager/extract_nested_forms.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/block_manager/extract_nested_forms.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "wrapper", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['wrapper']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>"&nbsp;"), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (strpos($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'wrapper'),"<form") && strpos($_smarty_tpl->tpl_vars['content']->value,"<form")) {?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, smarty_modifier_explode("<form",$_smarty_tpl->tpl_vars['content']->value), 'form');
$_smarty_tpl->tpl_vars['form']->index = -1;
$_smarty_tpl->tpl_vars['form']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['form']->value) {
$_smarty_tpl->tpl_vars['form']->do_else = false;
$_smarty_tpl->tpl_vars['form']->index++;
$_smarty_tpl->tpl_vars['form']->first = !$_smarty_tpl->tpl_vars['form']->index;
$__foreach_form_63_saved = $_smarty_tpl->tpl_vars['form'];
?>
        <?php if ($_smarty_tpl->tpl_vars['form']->first) {?>
            <?php continue 1;?>
        <?php }?>

                <?php $_smarty_tpl->_assignInScope('form', "<form".((string)$_smarty_tpl->tpl_vars['form']->value));?>
        <?php $_smarty_tpl->_assignInScope('start', strpos($_smarty_tpl->tpl_vars['form']->value,"<form"));?>
        <?php $_smarty_tpl->_assignInScope('form_content', substr($_smarty_tpl->tpl_vars['form']->value,$_smarty_tpl->tpl_vars['start']->value,(strpos($_smarty_tpl->tpl_vars['form']->value,"</form")+7-$_smarty_tpl->tpl_vars['start']->value)));?>
        <?php $_smarty_tpl->_assignInScope('form_tag', ((string)(substr($_smarty_tpl->tpl_vars['form_content']->value,0,(strpos($_smarty_tpl->tpl_vars['form_content']->value,">")+1))))."</form>");?>
        <?php $_smarty_tpl->_assignInScope('form_id', substr($_smarty_tpl->tpl_vars['form_tag']->value,(strpos($_smarty_tpl->tpl_vars['form_content']->value,"id=\"")+4)));?>
        <?php $_smarty_tpl->_assignInScope('form_id', substr($_smarty_tpl->tpl_vars['form_id']->value,0,(strpos($_smarty_tpl->tpl_vars['form_id']->value,"\""))));?>

                <?php $_smarty_tpl->_assignInScope('content', smarty_modifier_replace($_smarty_tpl->tpl_vars['content']->value,$_smarty_tpl->tpl_vars['form_content']->value,(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['form_content']->value,"<form","<x-form"),"</form","</x-form"),"id=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."\">","id=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."_base\">"),"<input","<input form=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."\""),"<select","<select form=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."\""),"<textarea","<textarea form=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."\""),"<button","<button form=\"".((string)$_smarty_tpl->tpl_vars['form_id']->value)."\""))));?>

                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['form_tag']->value," class=\""," class=\"hidden cm-outside-inputs ");?>


                <?php $_smarty_tpl->_assignInScope('content', $_smarty_tpl->tpl_vars['content']->value ,false ,2);?>
    <?php
$_smarty_tpl->tpl_vars['form'] = $__foreach_form_63_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
