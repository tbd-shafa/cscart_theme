<?php
/* Smarty version 4.3.0, created on 2024-11-24 21:31:35
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/banners/blocks/custom_design.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67440bb706ff57_21992920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '930e05d163019b334a8b48c24bfb12181eb103c9' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/banners/blocks/custom_design.tpl',
      1 => 1730790030,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67440bb706ff57_21992920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><style>
    .banner__pic img {
        width: 555px;
        height: 296px;
    }
</style>
<div class="banner">
    <div class="container">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['type'] == "G" && $_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['image_path']) {?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == "B") {?>target="_blank"<?php }?>>
                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['banner']->value['banner'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
">
                            </a>
                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/banners/blocks/custom_design.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/blocks/custom_design.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><style>
    .banner__pic img {
        width: 555px;
        height: 296px;
    }
</style>
<div class="banner">
    <div class="container">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['type'] == "G" && $_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['image_path']) {?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == "B") {?>target="_blank"<?php }?>>
                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['banner']->value['banner'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
">
                            </a>
                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php }
}
}
