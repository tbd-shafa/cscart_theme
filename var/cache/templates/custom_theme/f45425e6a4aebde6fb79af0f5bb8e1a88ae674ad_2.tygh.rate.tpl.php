<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:05:04
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/rate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467f0944995_77224724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f45425e6a4aebde6fb79af0f5bb8e1a88ae674ad' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/rate.tpl',
      1 => 1732017771,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674467f0944995_77224724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?> <style>
    .fa-star {
      font-size: 2em;
      color: orange; /* Default yellow */
      cursor: pointer;
      transition: color 0.3s ease;
    }
    .fa-star.highlight {
      color: darkorange; /* Highlighted yellow */
    }
  </style>
<?php $_smarty_tpl->_assignInScope('product_reviews_ratings', array_reverse($_smarty_tpl->tpl_vars['product_reviews_ratings']->value,true));?>
<div class="ty-product-review-rate cm-field-container">

    <div class="ty-product-review-rate__stars" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_reviews_ratings']->value, 'title', false, 'val');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('item_rate_id', ((string)$_smarty_tpl->tpl_vars['rate_id']->value)."_".((string)$_smarty_tpl->tpl_vars['val']->value));?>
            <input type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-review-rate__stars-radio ty-visually-hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <label class="ty-product-review-rate__stars-label
                    <?php if ($_smarty_tpl->tpl_vars['size']->value === "large") {?>
                        ty-product-review-rate__stars-label--large
                    <?php } elseif ($_smarty_tpl->tpl_vars['size']->value === "xlarge") {?>
                        ty-product-review-rate__stars-label--xlarge
                    <?php }?>
                    "
                for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            >
                 <span class="fa fa-star"></span>
            </label>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/rate.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/rate.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?> <style>
    .fa-star {
      font-size: 2em;
      color: orange; /* Default yellow */
      cursor: pointer;
      transition: color 0.3s ease;
    }
    .fa-star.highlight {
      color: darkorange; /* Highlighted yellow */
    }
  </style>
<?php $_smarty_tpl->_assignInScope('product_reviews_ratings', array_reverse($_smarty_tpl->tpl_vars['product_reviews_ratings']->value,true));?>
<div class="ty-product-review-rate cm-field-container">

    <div class="ty-product-review-rate__stars" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_reviews_ratings']->value, 'title', false, 'val');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('item_rate_id', ((string)$_smarty_tpl->tpl_vars['rate_id']->value)."_".((string)$_smarty_tpl->tpl_vars['val']->value));?>
            <input type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-review-rate__stars-radio ty-visually-hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <label class="ty-product-review-rate__stars-label
                    <?php if ($_smarty_tpl->tpl_vars['size']->value === "large") {?>
                        ty-product-review-rate__stars-label--large
                    <?php } elseif ($_smarty_tpl->tpl_vars['size']->value === "xlarge") {?>
                        ty-product-review-rate__stars-label--xlarge
                    <?php }?>
                    "
                for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            >
                 <span class="fa fa-star"></span>
            </label>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}
}
