<?php
/* Smarty version 4.3.0, created on 2024-11-19 04:04:31
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/review_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673c7ecf459816_95645966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bc4080c9ee489714ff10635d44b0c323cd968d0' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/review_row.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/manage/post.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/reviews/helpfulness.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/reviews/review_status.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/reviews/review_tools_list.tpl' => 1,
  ),
),false)) {
function content_673c7ecf459816_95645966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('id','product_reviews.rating','message','product','customer','product_reviews.helpfulness','status','date'));
?>

<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <?php $_smarty_tpl->_assignInScope('current_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php $_smarty_tpl->_assignInScope('product_review_id', $_smarty_tpl->tpl_vars['product_review']->value['product_review_id']);?>
    
    <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['product_review']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cs-product-reviews-manage-review-row cm-longtap-target"
        data-ca-longtap-action="setCheckBox"
        data-ca-longtap-target="input.cm-item"
        data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <td class="left table__check-items-cell">
            <input name="reviews_ids[]"
                    type="checkbox"
                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-item hide cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['product_review']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
            />
            <input name="reviews[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_review_id]"
                type="hidden"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
            <input name="reviews[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]"
                type="hidden"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review']->value['product']['product_id'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </td>

                <?php if ($_smarty_tpl->tpl_vars['show_product']->value) {?>
            <td width="10%">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['product_review']->value['product']['main_pair']['detailed'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value))), 0, false);
?>
            </td>
        <?php }?>

                <td width="43%" data-th="<?php echo $_smarty_tpl->__("id");?>

            / <?php echo $_smarty_tpl->__("product_reviews.rating");?>

            / <?php echo $_smarty_tpl->__("message");?>

            / <?php echo $_smarty_tpl->__("product");?>

            / <?php echo $_smarty_tpl->__("customer");?>
"
    >
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/manage/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'product_review_images'=>$_smarty_tpl->tpl_vars['product_review']->value['images'],'rating_value'=>$_smarty_tpl->tpl_vars['product_review']->value['rating_value'],'product'=>$_smarty_tpl->tpl_vars['product_review']->value['product'],'product_review_reply'=>$_smarty_tpl->tpl_vars['product_review']->value['reply'],'user_data'=>$_smarty_tpl->tpl_vars['product_review']->value['user_data'],'show_product'=>$_smarty_tpl->tpl_vars['show_product']->value), 0, false);
?>
        </td>

                <td width="13%" data-th="<?php echo $_smarty_tpl->__("product_reviews.helpfulness");?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/reviews/helpfulness.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('helpfulness'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness'],'size'=>"small"), 0, false);
?>
        </td>

                <td width="10%" data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <div class="pull-left">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/reviews/review_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review_status'=>$_smarty_tpl->tpl_vars['product_review']->value['status'],'product_review_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'product_review_status_descr'=>$_smarty_tpl->tpl_vars['product_review_status_descr']->value,'rev'=>$_smarty_tpl->tpl_vars['rev']->value), 0, false);
?>
            </div>
        </td>

                <td width="9%" class="nowrap mobile-hide">
            <div class="hidden-tools">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/reviews/review_tools_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'is_allowed_to_delete_product_reviews'=>$_smarty_tpl->tpl_vars['is_allowed_to_delete_product_reviews']->value,'current_redirect_url'=>$_smarty_tpl->tpl_vars['current_redirect_url']->value), 0, false);
?>
            </div>
        </td>

                <td width="15%" data-th="<?php echo $_smarty_tpl->__("date");?>
">
            <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

        </td>
    </tr>
<?php }
}
}
