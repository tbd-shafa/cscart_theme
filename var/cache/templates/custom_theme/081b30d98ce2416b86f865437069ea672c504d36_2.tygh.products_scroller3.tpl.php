<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:09:03
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/products/products_scroller3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731f3dfbcd581_45422059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '081b30d98ce2416b86f865437069ea672c504d36' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/products/products_scroller3.tpl',
      1 => 1731306043,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731f3dfbcd581_45422059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><style>
.featured__item__pic.set-bg {
    width: 270px !important;
    height: 270px !important;
    background-size: contain;
}

</style>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <?php $_smarty_tpl->_assignInScope('displayed_categories', array());?>
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <?php if (in_array($_smarty_tpl->tpl_vars['category']->value['category_id'],$_smarty_tpl->tpl_vars['product']->value['category_ids']) && !in_array($_smarty_tpl->tpl_vars['category']->value['category_id'],$_smarty_tpl->tpl_vars['displayed_categories']->value)) {?>
                                        <li data-filter=".category_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</li>
                                        <?php $_smarty_tpl->_assignInScope('displayed_categories', array_merge($_smarty_tpl->tpl_vars['displayed_categories']->value,array($_smarty_tpl->tpl_vars['category']->value['category_id'])));?>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('filter_classes', '');?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['category_ids'], 'cat_id');
$_smarty_tpl->tpl_vars['cat_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat_id']->value) {
$_smarty_tpl->tpl_vars['cat_id']->do_else = false;
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['category']->value['category_id'] == $_smarty_tpl->tpl_vars['cat_id']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('filter_classes', ((string)$_smarty_tpl->tpl_vars['filter_classes']->value)." category_".((string)$_smarty_tpl->tpl_vars['cat_id']->value));?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_classes']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <div class="featured__item">
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_products_with_images']->value, 'all_product');
$_smarty_tpl->tpl_vars['all_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['all_product']->value) {
$_smarty_tpl->tpl_vars['all_product']->do_else = false;
?>
                          <?php if ($_smarty_tpl->tpl_vars['product']->value['product_id'] == $_smarty_tpl->tpl_vars['all_product']->value['product_id']) {?>
                            <div class="featured__item__pic set-bg" data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_product']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" height="270px;" width="270px;">
                                <ul class="featured__item__pic__hover">
                                   
                                   
                                    <li><a href="<?php echo htmlspecialchars((string) fn_url("wishlist.add?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-heart"></i></a></li>
                                    <!-- Add to Compare -->
                                    <li><a href="<?php echo htmlspecialchars((string) fn_url("product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-retweet"></i></a></li>
                                    <!-- Add to Cart -->
                                    <li>
                                        <form action="<?php echo htmlspecialchars((string) fn_url("checkout.add"), ENT_QUOTES, 'UTF-8');?>
" method="post">
                                            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="1" />
                                            <button type="submit"><i class="fa fa-shopping-cart"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                           <?php }?>
                           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <div class="featured__item__text">
                                <h6><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a></h6>
                                <h5>$<?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['product']->value['price'],2), ENT_QUOTES, 'UTF-8');?>
</h5>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller3.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_scroller3.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><style>
.featured__item__pic.set-bg {
    width: 270px !important;
    height: 270px !important;
    background-size: contain;
}

</style>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <?php $_smarty_tpl->_assignInScope('displayed_categories', array());?>
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <?php if (in_array($_smarty_tpl->tpl_vars['category']->value['category_id'],$_smarty_tpl->tpl_vars['product']->value['category_ids']) && !in_array($_smarty_tpl->tpl_vars['category']->value['category_id'],$_smarty_tpl->tpl_vars['displayed_categories']->value)) {?>
                                        <li data-filter=".category_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</li>
                                        <?php $_smarty_tpl->_assignInScope('displayed_categories', array_merge($_smarty_tpl->tpl_vars['displayed_categories']->value,array($_smarty_tpl->tpl_vars['category']->value['category_id'])));?>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('filter_classes', '');?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['category_ids'], 'cat_id');
$_smarty_tpl->tpl_vars['cat_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat_id']->value) {
$_smarty_tpl->tpl_vars['cat_id']->do_else = false;
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['category']->value['category_id'] == $_smarty_tpl->tpl_vars['cat_id']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('filter_classes', ((string)$_smarty_tpl->tpl_vars['filter_classes']->value)." category_".((string)$_smarty_tpl->tpl_vars['cat_id']->value));?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_classes']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <div class="featured__item">
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_products_with_images']->value, 'all_product');
$_smarty_tpl->tpl_vars['all_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['all_product']->value) {
$_smarty_tpl->tpl_vars['all_product']->do_else = false;
?>
                          <?php if ($_smarty_tpl->tpl_vars['product']->value['product_id'] == $_smarty_tpl->tpl_vars['all_product']->value['product_id']) {?>
                            <div class="featured__item__pic set-bg" data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_product']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" height="270px;" width="270px;">
                                <ul class="featured__item__pic__hover">
                                   
                                   
                                    <li><a href="<?php echo htmlspecialchars((string) fn_url("wishlist.add?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-heart"></i></a></li>
                                    <!-- Add to Compare -->
                                    <li><a href="<?php echo htmlspecialchars((string) fn_url("product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-retweet"></i></a></li>
                                    <!-- Add to Cart -->
                                    <li>
                                        <form action="<?php echo htmlspecialchars((string) fn_url("checkout.add"), ENT_QUOTES, 'UTF-8');?>
" method="post">
                                            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="1" />
                                            <button type="submit"><i class="fa fa-shopping-cart"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                           <?php }?>
                           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <div class="featured__item__text">
                                <h6><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a></h6>
                                <h5>$<?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['product']->value['price'],2), ENT_QUOTES, 'UTF-8');?>
</h5>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>
<?php }
}
}
}
