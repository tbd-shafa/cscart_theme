<?php
/* Smarty version 4.3.0, created on 2024-11-22 04:07:06
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/vendor_rating/components/relative_vendor_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674073ea591db4_74211061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c6c009adaeea79749c88d17995cdbffbdaa17c' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/vendor_rating/components/relative_vendor_rating.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674073ea591db4_74211061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_icon', true);
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit'] === $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] === $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit'] && $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit'] === "0") {?>
    <?php $_smarty_tpl->_assignInScope('show_icon', false);
}
if ($_smarty_tpl->tpl_vars['show_icon']->value) {?>
    <span class="ty-vendor-rating">
        <?php if ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit'] && $_smarty_tpl->tpl_vars['rating']->value < $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable34=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--bronze",'title'=>$_prefixVariable34.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->tpl_vars['rating']->value < $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable35=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--silver",'title'=>$_prefixVariable35.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable36=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--gold",'title'=>$_prefixVariable36.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php }?>
    </span>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_rating/components/relative_vendor_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_rating/components/relative_vendor_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_icon', true);
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit'] === $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] === $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit'] && $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit'] === "0") {?>
    <?php $_smarty_tpl->_assignInScope('show_icon', false);
}
if ($_smarty_tpl->tpl_vars['show_icon']->value) {?>
    <span class="ty-vendor-rating">
        <?php if ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit'] && $_smarty_tpl->tpl_vars['rating']->value < $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable37=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--bronze",'title'=>$_prefixVariable37.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->tpl_vars['rating']->value < $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable38=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--silver",'title'=>$_prefixVariable38.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable39=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--gold",'title'=>$_prefixVariable39.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php }?>
    </span>
<?php }
}
}
}
