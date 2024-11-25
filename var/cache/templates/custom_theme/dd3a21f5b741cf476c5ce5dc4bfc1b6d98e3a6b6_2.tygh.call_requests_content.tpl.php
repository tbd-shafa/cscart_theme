<?php
/* Smarty version 4.3.0, created on 2024-11-24 21:31:25
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/call_requests/views/call_requests/components/call_requests_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67440bad6bada2_80582768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd3a21f5b741cf476c5ce5dc4bfc1b6d98e3a6b6' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/call_requests/views/call_requests/components/call_requests_content.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:components/phone.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_67440bad6bada2_80582768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('your_name','or','email','call_requests.enter_phone_or_email_text','call_requests.convenient_time','submit','your_name','or','email','call_requests.enter_phone_or_email_text','call_requests.convenient_time','submit'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form name="call_requests_form<?php if (!$_smarty_tpl->tpl_vars['product']->value) {?>_main<?php }?>" id="form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax<?php if (!$_smarty_tpl->tpl_vars['product']->value) {?> cm-ajax-full-render<?php }?> cm-processing-personal-data" data-ca-processing-personal-data-without-click="true" <?php if ($_smarty_tpl->tpl_vars['product']->value) {?> data-ca-product-form="product_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"call_requests:call_requests_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"call_requests:call_requests_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
    <input type="hidden" name="call_data[product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <div class="ty-cr-product-info-container">
        <div class="ty-cr-product-info-image">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, false);
?>
        </div>
        <div class="ty-cr-product-info-header">
            <h3 class="ty-product-block-title"><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</bdi></h3>
        </div>
    </div>
<?php }?>

<div class="ty-control-group">
    <label class="ty-control-group__title" for="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_name"><?php echo $_smarty_tpl->__("your_name");?>
</label>
    <input id="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_name" size="50" class="ty-input-text-full" type="text" name="call_data[name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['call_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"call_data_".((string)$_smarty_tpl->tpl_vars['id']->value)."_phone",'name'=>"call_data[phone]",'value'=>$_smarty_tpl->tpl_vars['call_data']->value['phone'],'required'=>!$_smarty_tpl->tpl_vars['product']->value,'width'=>"full"), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['product']->value) {?>

    <div class="ty-cr-or">— <?php echo $_smarty_tpl->__("or");?>
 —</div>

    <div class="ty-control-group">
        <label for="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_email" class="ty-control-group__title cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
        <input id="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_email" class="ty-input-text-full" size="50" type="text" name="call_data[email]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['call_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>

    <div class="cr-popup-error-box">
        <div class="hidden cm-cr-error-box help-inline">
            <p><?php echo $_smarty_tpl->__("call_requests.enter_phone_or_email_text");?>
</p>
        </div>
    </div>

<?php } else { ?>

    <div class="ty-control-group">
        <label for="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_convenient_time_from" class="ty-control-group__title"><?php echo $_smarty_tpl->__("call_requests.convenient_time");?>
</label>
        <bdi>
            <input id="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_convenient_time_from" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_from]" value="" placeholder="<?php echo htmlspecialchars((string) (defined('CALL_REQUESTS_DEFAULT_TIME_FROM') ? constant('CALL_REQUESTS_DEFAULT_TIME_FROM') : null), ENT_QUOTES, 'UTF-8');?>
" /> -
            <input id="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_convenient_time_to" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_to]" value="" placeholder="<?php echo htmlspecialchars((string) (defined('CALL_REQUESTS_DEFAULT_TIME_TO') ? constant('CALL_REQUESTS_DEFAULT_TIME_TO') : null), ENT_QUOTES, 'UTF-8');?>
" />
        </bdi>
    </div>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"call_request"), 0, false);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"call_requests:call_requests_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="cm-block-add-subscribe">
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[call_requests.request]",'but_text'=>$_smarty_tpl->__("submit"),'but_role'=>"submit",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"), 0, false);
?>
</div>

</form>

<!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/views/call_requests/components/call_requests_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/views/call_requests/components/call_requests_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form name="call_requests_form<?php if (!$_smarty_tpl->tpl_vars['product']->value) {?>_main<?php }?>" id="form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax<?php if (!$_smarty_tpl->tpl_vars['product']->value) {?> cm-ajax-full-render<?php }?> cm-processing-personal-data" data-ca-processing-personal-data-without-click="true" <?php if ($_smarty_tpl->tpl_vars['product']->value) {?> data-ca-product-form="product_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"call_requests:call_requests_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"call_requests:call_requests_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
    <input type="hidden" name="call_data[product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <div class="ty-cr-product-info-container">
        <div class="ty-cr-product-info-image">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?>
        </div>
        <div class="ty-cr-product-info-header">
            <h3 class="ty-product-block-title"><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</bdi></h3>
        </div>
    </div>
<?php }?>

<div class="ty-control-group">
    <label class="ty-control-group__title" for="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_name"><?php echo $_smarty_tpl->__("your_name");?>
</label>
    <input id="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_name" size="50" class="ty-input-text-full" type="text" name="call_data[name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['call_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"call_data_".((string)$_smarty_tpl->tpl_vars['id']->value)."_phone",'name'=>"call_data[phone]",'value'=>$_smarty_tpl->tpl_vars['call_data']->value['phone'],'required'=>!$_smarty_tpl->tpl_vars['product']->value,'width'=>"full"), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['product']->value) {?>

    <div class="ty-cr-or">— <?php echo $_smarty_tpl->__("or");?>
 —</div>

    <div class="ty-control-group">
        <label for="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_email" class="ty-control-group__title cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
        <input id="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_email" class="ty-input-text-full" size="50" type="text" name="call_data[email]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['call_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>

    <div class="cr-popup-error-box">
        <div class="hidden cm-cr-error-box help-inline">
            <p><?php echo $_smarty_tpl->__("call_requests.enter_phone_or_email_text");?>
</p>
        </div>
    </div>

<?php } else { ?>

    <div class="ty-control-group">
        <label for="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_convenient_time_from" class="ty-control-group__title"><?php echo $_smarty_tpl->__("call_requests.convenient_time");?>
</label>
        <bdi>
            <input id="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_convenient_time_from" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_from]" value="" placeholder="<?php echo htmlspecialchars((string) (defined('CALL_REQUESTS_DEFAULT_TIME_FROM') ? constant('CALL_REQUESTS_DEFAULT_TIME_FROM') : null), ENT_QUOTES, 'UTF-8');?>
" /> -
            <input id="call_data_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_convenient_time_to" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_to]" value="" placeholder="<?php echo htmlspecialchars((string) (defined('CALL_REQUESTS_DEFAULT_TIME_TO') ? constant('CALL_REQUESTS_DEFAULT_TIME_TO') : null), ENT_QUOTES, 'UTF-8');?>
" />
        </bdi>
    </div>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"call_request"), 0, true);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"call_requests:call_requests_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="cm-block-add-subscribe">
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[call_requests.request]",'but_text'=>$_smarty_tpl->__("submit"),'but_role'=>"submit",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"), 0, true);
?>
</div>

</form>

<!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
