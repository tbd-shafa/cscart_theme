<?php
/* Smarty version 4.3.0, created on 2024-12-03 00:43:06
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/discussion/views/discussion/components/new_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674ec49a01df75_21750433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '717a423e5403e2897990a79bee701159624c63b6' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/discussion/views/discussion/components/new_post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/components/rate.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_674ec49a01df75_21750433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('your_name','your_rating','your_message','submit','your_name','your_rating','your_message','submit'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-discussion-post-popup<?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>" id="new_post_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_post_title']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="<?php if (!$_smarty_tpl->tpl_vars['post_redirect_url']->value) {?>cm-ajax cm-form-dialog-closer<?php }?> posts-form" name="add_post_form" id="add_post_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<input type="hidden" name="result_ids" value="posts_list*,new_post*,average_rating*">
<input type ="hidden" name="post_data[thread_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type ="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post_redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="" />

<div id="new_post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="ty-control-group">
    <label for="dsc_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-trim"><?php echo $_smarty_tpl->__("your_name");?>
</label>
    <input type="text" id="dsc_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="post_data[name]" value="<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['discussion']->value['post_data']['name']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion']->value['post_data']['name'], ENT_QUOTES, 'UTF-8');
}?>" size="50" class="ty-input-text-large" />
</div>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "R" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
<div class="ty-control-group">
    <?php $_smarty_tpl->_assignInScope('rate_id', "rating_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-multiple-radios"><?php echo $_smarty_tpl->__("your_rating");?>
</label>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rate_id'=>$_smarty_tpl->tpl_vars['rate_id']->value,'rate_name'=>"post_data[rating_value]"), 0, false);
?>
</div>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:add_post"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:add_post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "C" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
<div class="ty-control-group">
    <label for="dsc_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-trim"><?php echo $_smarty_tpl->__("your_message");?>
</label>
    <textarea id="dsc_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="post_data[message]" class="ty-input-textarea ty-input-text-large" rows="5" cols="72"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion']->value['post_data']['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
</div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:add_post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"discussion"), 0, false);
?>

<!--new_post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("submit"),'but_meta'=>"ty-btn__secondary",'but_role'=>"submit",'but_name'=>"dispatch[discussion.add]"), 0, false);
?>
</div>

</form>
<!--new_post_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/components/new_post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/components/new_post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-discussion-post-popup<?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>" id="new_post_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_post_title']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="<?php if (!$_smarty_tpl->tpl_vars['post_redirect_url']->value) {?>cm-ajax cm-form-dialog-closer<?php }?> posts-form" name="add_post_form" id="add_post_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<input type="hidden" name="result_ids" value="posts_list*,new_post*,average_rating*">
<input type ="hidden" name="post_data[thread_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type ="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post_redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="" />

<div id="new_post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="ty-control-group">
    <label for="dsc_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-trim"><?php echo $_smarty_tpl->__("your_name");?>
</label>
    <input type="text" id="dsc_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="post_data[name]" value="<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['discussion']->value['post_data']['name']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion']->value['post_data']['name'], ENT_QUOTES, 'UTF-8');
}?>" size="50" class="ty-input-text-large" />
</div>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "R" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
<div class="ty-control-group">
    <?php $_smarty_tpl->_assignInScope('rate_id', "rating_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-multiple-radios"><?php echo $_smarty_tpl->__("your_rating");?>
</label>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rate_id'=>$_smarty_tpl->tpl_vars['rate_id']->value,'rate_name'=>"post_data[rating_value]"), 0, true);
?>
</div>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:add_post"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:add_post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "C" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
<div class="ty-control-group">
    <label for="dsc_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-trim"><?php echo $_smarty_tpl->__("your_message");?>
</label>
    <textarea id="dsc_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="post_data[message]" class="ty-input-textarea ty-input-text-large" rows="5" cols="72"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion']->value['post_data']['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
</div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:add_post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"discussion"), 0, true);
?>

<!--new_post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("submit"),'but_meta'=>"ty-btn__secondary",'but_role'=>"submit",'but_name'=>"dispatch[discussion.add]"), 0, true);
?>
</div>

</form>
<!--new_post_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
