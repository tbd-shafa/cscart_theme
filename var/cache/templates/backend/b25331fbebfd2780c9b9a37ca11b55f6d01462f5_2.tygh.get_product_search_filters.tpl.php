<?php
/* Smarty version 4.3.0, created on 2024-11-20 05:21:11
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/search_filters/get_product_search_filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673de247946182_86547875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b25331fbebfd2780c9b9a37ca11b55f6d01462f5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/search_filters/get_product_search_filters.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/search_filters/products_quantity.tpl' => 1,
    'tygh:views/products/components/search_filters/products_company_id.tpl' => 1,
    'tygh:views/products/components/search_filters/products_status.tpl' => 1,
    'tygh:views/products/components/search_filters/products_category.tpl' => 1,
    'tygh:views/products/components/search_filters/products_period.tpl' => 1,
    'tygh:views/products/components/search_filters/products_sort_by.tpl' => 1,
    'tygh:views/products/components/search_filters/products_filter_items.tpl' => 1,
    'tygh:views/products/components/search_filters/products_feature_items.tpl' => 1,
    'tygh:views/products/components/search_filters/products_order_ids.tpl' => 1,
  ),
),false)) {
function content_673de247946182_86547875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('price','shipping_freight','weight','searching_all_products','category','status','subcategories','yes','no','creation_date','sort_by','search_in','product_name','short_description','full_description','keywords','filters','features','sku','popularity','quantity','free_shipping','yes','no','purchased_in_orders','updated_last','hour_or_hours'));
?>

<?php $_smarty_tpl->_assignInScope('search_filters', array('form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'page_part'=>$_smarty_tpl->tpl_vars['page_part']->value,'search_form_prefix'=>$_smarty_tpl->tpl_vars['product_search_form_prefix']->value,'search_type'=>$_smarty_tpl->tpl_vars['search_type']->value,'selected_section'=>$_smarty_tpl->tpl_vars['selected_section']->value,'advanced_search'=>$_smarty_tpl->tpl_vars['advanced_search']->value,'data'=>array()));?>



<?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/search_filters/products_quantity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/search_filters/products_company_id.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/search_filters/products_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php ob_start();
echo $_smarty_tpl->__("price");
$_prefixVariable19=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];
$_prefixVariable20=ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/search_filters/products_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable21 = ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/search_filters/products_period.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable22 = ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/search_filters/products_sort_by.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable23 = ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/search_filters/products_filter_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable24 = ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/search_filters/products_feature_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable25 = ob_get_clean();
ob_start();
echo $_smarty_tpl->__("shipping_freight");
$_prefixVariable26=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];
$_prefixVariable27=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("weight");
$_prefixVariable28=ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/search_filters/products_order_ids.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable29 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['search_filters']) ? $_smarty_tpl->tpl_vars['search_filters']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data'] = array_merge($_smarty_tpl->tpl_vars['search_filters']->value['data'],array('q'=>array('id'=>"q",'type'=>"input",'category'=>"primary",'priority'=>1000,'label'=>$_smarty_tpl->__("searching_all_products"),'value'=>$_smarty_tpl->tpl_vars['search']->value['q']),'price'=>array('id'=>"price",'type'=>"range",'category'=>"primary",'label'=>$_prefixVariable19."&nbsp;(".$_prefixVariable20.")",'data'=>array('name_from'=>"price_from",'value_from'=>$_smarty_tpl->tpl_vars['search']->value['price_from'],'name_to'=>"price_to",'value_to'=>$_smarty_tpl->tpl_vars['search']->value['price_to'])),'category'=>array('id'=>"category",'type'=>"dropdown",'category'=>"primary",'label'=>$_smarty_tpl->__("category"),'size'=>"large",'content'=>$_prefixVariable21),'status'=>array('id'=>"status",'type'=>"radio",'category'=>"primary",'label'=>$_smarty_tpl->__("status"),'nested_data'=>$_smarty_tpl->tpl_vars['all_product_statuses']->value),'subcats'=>array('id'=>"subcats",'type'=>"radio",'category'=>"primary",'label'=>$_smarty_tpl->__("subcategories"),'nested_data'=>array('subcats_yes'=>array('key'=>"subcats_yes",'label'=>$_smarty_tpl->__("yes"),'value'=>smarty_modifier_enum("YesNo::YES"),'is_checked'=>(($_smarty_tpl->tpl_vars['search']->value['subcats'] === smarty_modifier_enum("YesNo::YES")) || ($_smarty_tpl->tpl_vars['search']->value['subcats'] !== smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['search']->value['subcats'] !== smarty_modifier_enum("YesNo::NO")))),'subcats_no'=>array('key'=>"subcats_no",'label'=>$_smarty_tpl->__("no"),'value'=>smarty_modifier_enum("YesNo::NO"),'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['subcats'] === smarty_modifier_enum("YesNo::NO"))))),'period'=>array('id'=>"period",'type'=>"dropdown",'category'=>"primary",'label'=>$_smarty_tpl->__("creation_date"),'content'=>$_prefixVariable22),'sort_by'=>array('id'=>"sort_by",'type'=>"dropdown",'category'=>"primary",'label'=>$_smarty_tpl->__("sort_by"),'content'=>$_prefixVariable23),'search_in'=>array('id'=>"search_in",'type'=>"checkbox",'category'=>"secondary",'label'=>$_smarty_tpl->__("search_in"),'nested_data'=>array('pname'=>array('key'=>"pname",'label'=>$_smarty_tpl->__("product_name"),'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['pname'] === smarty_modifier_enum("YesNo::YES"))),'pshort'=>array('key'=>"pshort",'label'=>$_smarty_tpl->__("short_description"),'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['pshort'] === smarty_modifier_enum("YesNo::YES"))),'pfull'=>array('key'=>"pfull",'label'=>$_smarty_tpl->__("full_description"),'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['pfull'] === smarty_modifier_enum("YesNo::YES"))),'pkeywords'=>array('key'=>"pkeywords",'label'=>$_smarty_tpl->__("keywords"),'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['pkeywords'] === smarty_modifier_enum("YesNo::YES"))))),'filter_items'=>array('id'=>"filter_items",'type'=>"popup",'category'=>"secondary",'is_enabled'=>(isset($_smarty_tpl->tpl_vars['filter_items']->value)),'label'=>$_smarty_tpl->__("filters"),'content'=>$_prefixVariable24),'feature_items'=>array('id'=>"feature_items",'type'=>"popup",'category'=>"secondary",'is_enabled'=>(isset($_smarty_tpl->tpl_vars['feature_items']->value)),'label'=>$_smarty_tpl->__("features"),'content'=>$_prefixVariable25),'pcode'=>array('id'=>"pcode",'type'=>"input",'category'=>"secondary",'label'=>$_smarty_tpl->__("sku"),'value'=>$_smarty_tpl->tpl_vars['search']->value['pcode']),'pcode_from_q'=>array('id'=>"pcode_from_q",'type'=>"hidden",'category'=>"secondary",'is_hidden'=>true,'value'=>smarty_modifier_enum("YesNo::YES")),'popularity'=>array('id'=>"popularity",'type'=>"range",'category'=>"secondary",'label'=>$_smarty_tpl->__("popularity"),'data'=>array('name_from'=>"popularity_from",'value_from'=>$_smarty_tpl->tpl_vars['search']->value['popularity_from'],'name_to'=>"popularity_to",'value_to'=>$_smarty_tpl->tpl_vars['search']->value['popularity_to'])),'shipping_freight'=>array('id'=>"shipping_freight",'type'=>"range",'category'=>"secondary",'label'=>$_prefixVariable26."&nbsp;(".$_prefixVariable27.")",'data'=>array('name_from'=>"shipping_freight_from",'value_from'=>$_smarty_tpl->tpl_vars['search']->value['shipping_freight_from'],'name_to'=>"shipping_freight_to",'value_to'=>$_smarty_tpl->tpl_vars['search']->value['shipping_freight_to'])),'weight'=>array('id'=>"weight",'type'=>"range",'category'=>"secondary",'label'=>$_prefixVariable28."&nbsp;(".((string)$_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol']).")",'data'=>array('name_from'=>"weight_from",'value_from'=>$_smarty_tpl->tpl_vars['search']->value['weight_from'],'name_to'=>"weight_to",'value_to'=>$_smarty_tpl->tpl_vars['search']->value['weight_to'])),'amount'=>array('id'=>"amount",'type'=>"range",'category'=>"secondary",'is_enabled'=>!$_smarty_tpl->tpl_vars['have_amount_filter']->value,'label'=>$_smarty_tpl->__("quantity"),'data'=>array('name_from'=>"amount_from",'value_from'=>$_smarty_tpl->tpl_vars['search']->value['amount_from'],'name_to'=>"amount_to",'value_to'=>$_smarty_tpl->tpl_vars['search']->value['amount_to'])),'company_id'=>array('id'=>"company_id",'type'=>"popup",'category'=>"secondary",'is_enabled'=>$_smarty_tpl->tpl_vars['is_enabled_select_vendor']->value,'is_hidden'=>$_smarty_tpl->tpl_vars['is_hidden_select_vendor']->value,'label'=>$_smarty_tpl->tpl_vars['select_vendor_label']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'select_vendor')),'free_shipping'=>array('id'=>"free_shipping",'type'=>"radio",'category'=>"secondary",'label'=>$_smarty_tpl->__("free_shipping"),'nested_data'=>array('free_shipping_empty'=>array('key'=>"free_shipping_empty",'label'=>"--",'value'=>false,'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['free_shipping'] !== smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['search']->value['free_shipping'] !== smarty_modifier_enum("YesNo::NO"))),'free_shipping_yes'=>array('key'=>"free_shipping_yes",'label'=>$_smarty_tpl->__("yes"),'value'=>smarty_modifier_enum("YesNo::YES"),'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['free_shipping'] === smarty_modifier_enum("YesNo::YES"))),'free_shipping_no'=>array('key'=>"free_shipping_no",'label'=>$_smarty_tpl->__("no"),'value'=>smarty_modifier_enum("YesNo::NO"),'is_checked'=>($_smarty_tpl->tpl_vars['search']->value['free_shipping'] === smarty_modifier_enum("YesNo::NO"))))),'order_ids'=>array('id'=>"order_ids",'type'=>"popup",'category'=>"secondary",'label'=>$_smarty_tpl->__("purchased_in_orders"),'content'=>$_prefixVariable29),'updated_in_hours'=>array('id'=>"updated_in_hours",'type'=>"input",'category'=>"secondary",'label'=>$_smarty_tpl->__("updated_last"),'value'=>$_smarty_tpl->tpl_vars['search']->value['updated_in_hours'],'placeholder'=>$_smarty_tpl->__("hour_or_hours"))));
$_smarty_tpl->_assignInScope('search_filters', $_tmp_array);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_assignInScope('search_filters', $_smarty_tpl->tpl_vars['search_filters']->value ,false ,2);
}
}
