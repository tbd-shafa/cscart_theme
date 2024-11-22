<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/update_product_feature.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067611d0924_27108503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47818685459d315930dbaa8ad12b1bd1f6f90643' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/update_product_feature.override.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tooltip.tpl' => 1,
  ),
),false)) {
function content_674067611d0924_27108503 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.feature_used_by_variation_group.tooltip'));
if ($_smarty_tpl->tpl_vars['feature']->value['product_variation_group']) {?>
    <div class="control-group">
        <label class="control-label" for="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <a href="<?php echo htmlspecialchars((string) fn_url("product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['feature_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>

            </a>
            <div>
                <small>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>

                </small>
            </div>
        </label>
        <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>
                    <span class="shift-input"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->__("product_variations.feature_used_by_variation_group.tooltip",array("[code]"=>$_smarty_tpl->tpl_vars['feature']->value['product_variation_group']['code']))), 0, false);
?>
        </div>
    </div>
<?php }
}
}
