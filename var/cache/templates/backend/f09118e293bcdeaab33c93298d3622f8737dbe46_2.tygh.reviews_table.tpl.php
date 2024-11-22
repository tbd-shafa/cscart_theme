<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406761530b00_40606872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f09118e293bcdeaab33c93298d3622f8737dbe46' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/table_col_head.tpl' => 9,
    'tygh:addons/product_reviews/views/product_reviews/components/manage/review_row.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
  ),
),false)) {
function content_67406761530b00_40606872 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('id','product_reviews.rating','message','product','customer','product_reviews.helpfulness','status','date','no_data'));
?>

<?php $_smarty_tpl->_assignInScope('show_product', (($tmp = $_smarty_tpl->tpl_vars['show_product']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('search', $_smarty_tpl->tpl_vars['product_reviews_search']->value);
$_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_product_reviews" ?? null : $tmp));?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="product_reviews_form" id="product_reviews_form">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_smarty_tpl->tpl_vars['rev']->value,'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_reviews_table", null, null);?>
            <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden longtap-selection">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                    <tr>
                        <th class="center mobile-hide table__check-items-column table__check-items-column--disabled">
                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <?php if ($_smarty_tpl->tpl_vars['show_product']->value) {?>
                            <th width="10%"></th>
                        <?php }?>
                        <th width="43%">
                            <div class="th-text-overflow-wrapper">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"product_review_id",'text'=>$_smarty_tpl->__("id"),'class'=>"th-text-overflow--width-auto"), 0, false);
?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"rating_value",'text'=>$_smarty_tpl->__("product_reviews.rating")), 0, true);
?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("message")), 0, true);
?>
                                <?php if ($_smarty_tpl->tpl_vars['show_product']->value) {?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("product")), 0, true);
?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("customer")), 0, true);
?>
                            </div>
                        </th>
                        <th width="13%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"helpfulness",'text'=>$_smarty_tpl->__("product_reviews.helpfulness")), 0, true);
?>
                        </th>
                        <th width="10%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("status")), 0, true);
?>
                        </th>
                        <th width="9%" class="mobile-hide">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"&nbsp;"), 0, true);
?>
                        </th>
                        <th width="15%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"product_review_timestamp",'text'=>$_smarty_tpl->__("date")), 0, true);
?>
                        </th>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_reviews']->value, 'product_review');
$_smarty_tpl->tpl_vars['product_review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_review']->value) {
$_smarty_tpl->tpl_vars['product_review']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/manage/review_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value,'show_product'=>$_smarty_tpl->tpl_vars['show_product']->value,'rev'=>$_smarty_tpl->tpl_vars['rev']->value), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>'product_reviews_form','object'=>"product_reviews",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_reviews_table')), 0, false);
?>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_smarty_tpl->tpl_vars['rev']->value,'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, true);
?>
</form>
<?php }
}
