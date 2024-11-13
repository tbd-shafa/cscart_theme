<?php
/* Smarty version 4.3.0, created on 2024-11-13 01:35:22
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/addons/components/addons/addon_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673472da690766_10766802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e441461403f4adce8609120a8df0535eb8dac7' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/addons/components/addons/addon_reviews.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/addons/addon_post.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_673472da690766_10766802 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('addons.show_all_reviews','addons.hide_all_reviews','no_data'));
$_smarty_tpl->_assignInScope('reviews_displayed_number', (($tmp = $_smarty_tpl->tpl_vars['reviews_displayed_number']->value ?? null)===null||$tmp==='' ? 3 ?? null : $tmp));?>

<div class="addons-addon-reviews">

    <?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
        <div class="addons-addon-reviews__grid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'addon_review', false, 'addon_key');
$_smarty_tpl->tpl_vars['addon_review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon_key']->value => $_smarty_tpl->tpl_vars['addon_review']->value) {
$_smarty_tpl->tpl_vars['addon_review']->do_else = false;
?>

                <?php if ($_smarty_tpl->tpl_vars['addon_key']->value === $_smarty_tpl->tpl_vars['reviews_displayed_number']->value) {?>
                    <?php break 1;?>
                <?php }?>

                <div class="addons-addon-reviews__item">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating_value'=>$_smarty_tpl->tpl_vars['addon_review']->value['rating_value'],'message'=>$_smarty_tpl->tpl_vars['addon_review']->value['message'],'timestamp'=>$_smarty_tpl->tpl_vars['addon_review']->value['timestamp'],'user_data'=>array('name'=>$_smarty_tpl->tpl_vars['addon_review']->value['name'])), 0, true);
?>
                </div>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>


        <?php if ($_smarty_tpl->tpl_vars['total_addon_reviews']->value > $_smarty_tpl->tpl_vars['reviews_displayed_number']->value) {?>

            <div>
                
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("addons.show_all_reviews"),'but_role'=>"action",'but_id'=>"on_addon_reviews_grid",'but_meta'=>"cm-combination"), 0, false);
?>

                <div id="addon_reviews_grid" name="addon_reviews_grid" class="hidden">

                    <div class="addons-addon-reviews__grid">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'addon_review', false, 'addon_key');
$_smarty_tpl->tpl_vars['addon_review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon_key']->value => $_smarty_tpl->tpl_vars['addon_review']->value) {
$_smarty_tpl->tpl_vars['addon_review']->do_else = false;
?>

                            <?php if ($_smarty_tpl->tpl_vars['addon_key']->value < $_smarty_tpl->tpl_vars['reviews_displayed_number']->value) {?>
                                <?php continue 1;?>
                            <?php }?>

                            <div class="addons-addon-reviews__item">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating_value'=>$_smarty_tpl->tpl_vars['addon_review']->value['rating_value'],'message'=>$_smarty_tpl->tpl_vars['addon_review']->value['message'],'timestamp'=>$_smarty_tpl->tpl_vars['addon_review']->value['timestamp'],'user_data'=>array('name'=>$_smarty_tpl->tpl_vars['addon_review']->value['name'])), 0, true);
?>
                            </div>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </div>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("addons.hide_all_reviews"),'but_role'=>"action",'but_id'=>"off_addon_reviews_grid",'but_meta'=>"cm-combination"), 0, true);
?>

                </div>
            </div>
        <?php }?>

    <?php } else { ?>

        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>

    <?php }?>

</div>
<?php }
}
