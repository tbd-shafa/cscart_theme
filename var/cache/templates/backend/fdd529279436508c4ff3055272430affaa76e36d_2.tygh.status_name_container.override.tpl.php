<?php
/* Smarty version 4.3.0, created on 2024-11-13 21:33:06
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_name_container.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67358b92978033_93010432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdd529279436508c4ff3055272430affaa76e36d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_name_container.override.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67358b92978033_93010432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.approve_product','vendor_data_premoderation.disapprove_product'));
if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL") && fn_check_permissions("premoderation","m_approve","admin")) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:status_name_container"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:status_name_container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="btn-group" id="product_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_select">
            <?php $_smarty_tpl->_assignInScope('current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'id'=>"premoderation_approve_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'title'=>$_smarty_tpl->__("vendor_data_premoderation.approve_product",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product'])),'href'=>"premoderation.m_approve?product_ids[]=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value),'icon'=>"icon-thumbs-up",'class'=>"btn",'method'=>"POST"), true);?>


            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'id'=>"premoderation_disapprove_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'title'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_product",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product'])),'href'=>"premoderation.m_decline?product_ids[]=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value),'icon'=>"icon-thumbs-down",'class'=>"btn",'target_id'=>"disapproval_reason_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), true);?>

        <!--product_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_select--></div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:status_name_container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
