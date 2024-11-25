<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:05:04
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467f0926fd2_47299452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a5847dbc867495f11630ef3ab5e463274e854be' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/new_product_review_captcha.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_674467f0926fd2_47299452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.submit_review','product_reviews.submit_review'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('max_images_upload', (($tmp = $_smarty_tpl->tpl_vars['config']->value['tweaks']['product_reviews']['max_images_upload'] ?? null)===null||$tmp==='' ? 10 ?? null : $tmp));?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            max_images_upload: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['max_images_upload']->value, ENT_QUOTES, 'UTF-8');?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>


<section id="new_post_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="ty-product-review-new-product-review <?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        class="<?php if (!$_smarty_tpl->tpl_vars['post_redirect_url']->value) {?>cm-ajax cm-form-dialog-closer<?php }?> ty-product-review-new-product-review__form"
        name="add_post_form"
        enctype="multipart/form-data"
        id="add_post_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >

        <input type="hidden" name="result_ids" value="posts_list*,new_post*,average_rating*">
        <input type="hidden" name="product_review_data[product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post_redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="selected_section" value="" />

        <div class="ty-product-review-new--review__body" id="new_post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value), 0, false);
?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_reviews:add_product_review"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_reviews:add_product_review"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_reviews_images_upload_allowed'=>$_smarty_tpl->tpl_vars['product_reviews_images_upload_allowed']->value), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'post_redirect_url'=>$_smarty_tpl->tpl_vars['post_redirect_url']->value,'product_review_data'=>$_smarty_tpl->tpl_vars['product_review_data']->value,'countries'=>$_smarty_tpl->tpl_vars['countries']->value), 0, false);
?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_reviews:add_product_review"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!--new_product_review_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <footer class="buttons-container ty-product-review-new-product-review__footer">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("product_reviews.submit_review"),'but_meta'=>"ty-btn__primary ty-width-full",'but_role'=>"submit",'but_name'=>"dispatch[product_reviews.add]"), 0, false);
?>
        </footer>
    </form>
<!--new_product_review_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></section>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('max_images_upload', (($tmp = $_smarty_tpl->tpl_vars['config']->value['tweaks']['product_reviews']['max_images_upload'] ?? null)===null||$tmp==='' ? 10 ?? null : $tmp));?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            max_images_upload: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['max_images_upload']->value, ENT_QUOTES, 'UTF-8');?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>


<section id="new_post_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="ty-product-review-new-product-review <?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        class="<?php if (!$_smarty_tpl->tpl_vars['post_redirect_url']->value) {?>cm-ajax cm-form-dialog-closer<?php }?> ty-product-review-new-product-review__form"
        name="add_post_form"
        enctype="multipart/form-data"
        id="add_post_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >

        <input type="hidden" name="result_ids" value="posts_list*,new_post*,average_rating*">
        <input type="hidden" name="product_review_data[product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post_redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="selected_section" value="" />

        <div class="ty-product-review-new--review__body" id="new_post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value), 0, true);
?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_reviews:add_product_review"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_reviews:add_product_review"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_reviews_images_upload_allowed'=>$_smarty_tpl->tpl_vars['product_reviews_images_upload_allowed']->value), 0, true);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value), 0, true);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'post_redirect_url'=>$_smarty_tpl->tpl_vars['post_redirect_url']->value,'product_review_data'=>$_smarty_tpl->tpl_vars['product_review_data']->value,'countries'=>$_smarty_tpl->tpl_vars['countries']->value), 0, true);
?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_reviews:add_product_review"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value), 0, true);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <!--new_product_review_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <footer class="buttons-container ty-product-review-new-product-review__footer">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("product_reviews.submit_review"),'but_meta'=>"ty-btn__primary ty-width-full",'but_role'=>"submit",'but_name'=>"dispatch[product_reviews.add]"), 0, true);
?>
        </footer>
    </form>
<!--new_product_review_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></section>
<?php }
}
}
