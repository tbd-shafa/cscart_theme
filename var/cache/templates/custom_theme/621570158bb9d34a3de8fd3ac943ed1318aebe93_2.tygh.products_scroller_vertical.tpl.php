<?php
/* Smarty version 4.3.0, created on 2024-11-20 02:32:21
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/products/products_scroller_vertical.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673dbab5dbd552_09054946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '621570158bb9d34a3de8fd3ac943ed1318aebe93' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/products/products_scroller_vertical.tpl',
      1 => 1730801437,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673dbab5dbd552_09054946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><style>
.latest-product__item__pic {
    width: 110px !important;
    height: 110px !important;
}
</style>
                    <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<div class="latest-product__text">
    <h4></h4>
    <div class="latest-product__slider owl-carousel">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product', false, NULL, 'productLoop', array (
  'index' => true,
  'first' => true,
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['total'];
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['index'] : null)%3 == 0) {?>
                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['first'] : null)) {?></div><?php }?>
                <div class="latest-prdouct__slider__item">
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_products_with_images']->value, 'all_product');
$_smarty_tpl->tpl_vars['all_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['all_product']->value) {
$_smarty_tpl->tpl_vars['all_product']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_id'] == $_smarty_tpl->tpl_vars['all_product']->value['product_id']) {?>
                    <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_product']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="110" height="110"  alt="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                        <div class="latest-product__item__text">
                            <h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</h6>
                            <span>$<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span> <!-- Adjust price as needed -->
                        </div>
                    </a>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['last'] : null)) {?></div><?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller_vertical.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_scroller_vertical.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><style>
.latest-product__item__pic {
    width: 110px !important;
    height: 110px !important;
}
</style>
                    <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<div class="latest-product__text">
    <h4></h4>
    <div class="latest-product__slider owl-carousel">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product', false, NULL, 'productLoop', array (
  'index' => true,
  'first' => true,
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['total'];
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['index'] : null)%3 == 0) {?>
                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['first'] : null)) {?></div><?php }?>
                <div class="latest-prdouct__slider__item">
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_products_with_images']->value, 'all_product');
$_smarty_tpl->tpl_vars['all_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['all_product']->value) {
$_smarty_tpl->tpl_vars['all_product']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_id'] == $_smarty_tpl->tpl_vars['all_product']->value['product_id']) {?>
                    <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_product']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="110" height="110"  alt="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                        <div class="latest-product__item__text">
                            <h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</h6>
                            <span>$<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span> <!-- Adjust price as needed -->
                        </div>
                    </a>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productLoop']->value['last'] : null)) {?></div><?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}
}
}
