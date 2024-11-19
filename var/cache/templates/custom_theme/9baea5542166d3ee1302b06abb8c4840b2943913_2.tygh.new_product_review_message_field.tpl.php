<?php
/* Smarty version 4.3.0, created on 2024-11-19 04:04:14
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673c7ebe5397c5_81013351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9baea5542166d3ee1302b06abb8c4840b2943913' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c7ebe5397c5_81013351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-control-group">
    <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
        <label class="hidden
            <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>
                cm-required cm-trim
            <?php }?>"
            for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>

        </label>
    <?php }?>

    <textarea id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="ty-input-textarea ty-input-textarea--limit ty-input-text-full"
        <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
            placeholder="<?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>
"
            title="<?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>
"
        <?php }?>
    ></textarea>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-control-group">
    <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
        <label class="hidden
            <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>
                cm-required cm-trim
            <?php }?>"
            for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>

        </label>
    <?php }?>

    <textarea id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="ty-input-textarea ty-input-textarea--limit ty-input-text-full"
        <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
            placeholder="<?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>
"
            title="<?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>
"
        <?php }?>
    ></textarea>
</div>
<?php }
}
}
