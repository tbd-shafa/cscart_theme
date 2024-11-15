<?php
/* Smarty version 4.3.0, created on 2024-11-14 22:18:29
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/orders/components/orders_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6736e7b593aa83_94612455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c28f238c6a404ecb3e332c242034316dde1c6dd6' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/orders/components/orders_search_form.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 2,
    'tygh:common/status.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_6736e7b593aa83_94612455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('order_id','total','order_status','storefront_search_button','order_id','total','order_status','storefront_search_button'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="ty-orders-search-options" name="orders_search_form" method="get">

<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("order_id");?>
</label>
        <input type="text" name="order_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" size="10" class="ty-search-form__input" />
    </div>
    <?php }?>

    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("total");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol'];?>
)</label>
        <input type="text" name="total_sec_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['total_sec_from'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />&nbsp;&#8211;&nbsp;<input type="text" name="total_sec_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['total_sec_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"orders_search_form"), 0, false);
?>
</div>

<hr>

<div class="ty-control-group">
    <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("order_status");?>
</label>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['search']->value['status'],'display'=>"checkboxes",'name'=>"status",'checkboxes_meta'=>"ty-orders-search__options-status"), 0, false);
?>
</div>

<div class="buttons-container ty-search-form__buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->__("storefront_search_button"),'but_name'=>"dispatch[orders.search]"), 0, false);
?>
</div>
</form><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/orders_search_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/orders_search_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="ty-orders-search-options" name="orders_search_form" method="get">

<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("order_id");?>
</label>
        <input type="text" name="order_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" size="10" class="ty-search-form__input" />
    </div>
    <?php }?>

    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("total");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol'];?>
)</label>
        <input type="text" name="total_sec_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['total_sec_from'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />&nbsp;&#8211;&nbsp;<input type="text" name="total_sec_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['total_sec_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"orders_search_form"), 0, true);
?>
</div>

<hr>

<div class="ty-control-group">
    <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("order_status");?>
</label>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['search']->value['status'],'display'=>"checkboxes",'name'=>"status",'checkboxes_meta'=>"ty-orders-search__options-status"), 0, true);
?>
</div>

<div class="buttons-container ty-search-form__buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->__("storefront_search_button"),'but_name'=>"dispatch[orders.search]"), 0, true);
?>
</div>
</form><?php }
}
}
