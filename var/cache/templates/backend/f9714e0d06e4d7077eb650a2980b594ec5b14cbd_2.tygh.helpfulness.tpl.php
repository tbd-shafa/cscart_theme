<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/helpfulness.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406761597e97_45871662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9714e0d06e4d7077eb650a2980b594ec5b14cbd' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/helpfulness.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406761597e97_45871662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.helpfulness','product_reviews.vote_up','product_reviews.vote_down'));
?>

<?php if ($_smarty_tpl->tpl_vars['helpfulness']->value) {?>

    <span title="<?php echo $_smarty_tpl->__("product_reviews.helpfulness");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['helpfulness']->value['helpfulness'], ENT_QUOTES, 'UTF-8');?>

<?php echo $_smarty_tpl->__("product_reviews.vote_up");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['helpfulness']->value['vote_up'], ENT_QUOTES, 'UTF-8');?>

<?php echo $_smarty_tpl->__("product_reviews.vote_down");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['helpfulness']->value['vote_down'], ENT_QUOTES, 'UTF-8');?>
"
        class="
            <?php if ($_smarty_tpl->tpl_vars['size']->value === "small") {?>
                slashed-child
            <?php } else { ?>
                spaced-child
            <?php }?>
        "
    >

        <span>
            <?php if ($_smarty_tpl->tpl_vars['size']->value !== "small") {?>
                <span class="flex-inline">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-thumbs-up muted"),$_smarty_tpl);?>

                </span>
            <?php }?>
            <span class="text-success">
                <?php if ($_smarty_tpl->tpl_vars['helpfulness']->value['vote_up'] > 0) {?>+<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['helpfulness']->value['vote_up'], ENT_QUOTES, 'UTF-8');?>

            </span>
        </span>

        <span>
            <?php if ($_smarty_tpl->tpl_vars['size']->value !== "small") {?>
                <span class="flex-inline">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-thumbs-down muted"),$_smarty_tpl);?>

                </span>
            <?php }?>
            <span class="text-error">
                <?php if ($_smarty_tpl->tpl_vars['helpfulness']->value['vote_down'] > 0) {?>−<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['helpfulness']->value['vote_down'], ENT_QUOTES, 'UTF-8');?>

            </span>
        </span>

    </span>
<?php }
}
}
