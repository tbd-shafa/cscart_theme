<?php
/* Smarty version 4.3.0, created on 2024-11-19 04:04:04
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/common/content_more.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673c7eb46d1405_91498766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c098a34ea1f77c0894533f26d2abb93b6b2430bb' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/common/content_more.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c7eb46d1405_91498766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('content_more','content_more'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('text_limit', (($tmp = $_smarty_tpl->tpl_vars['text_limit']->value ?? null)===null||$tmp==='' ? 600 ?? null : $tmp));
if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->_assignInScope('display', (mb_strlen($_smarty_tpl->tpl_vars['text']->value, 'UTF-8') > $_smarty_tpl->tpl_vars['text_limit']->value));
}
$_smarty_tpl->_assignInScope('text', (($tmp = $_smarty_tpl->tpl_vars['text']->value ?? null)===null||$tmp==='' ? "–" ?? null : $tmp));
$_smarty_tpl->_assignInScope('more_text', (($tmp = $_smarty_tpl->tpl_vars['more_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("content_more") ?? null : $tmp));?>

<div class="ty-content-more" data-ca-elem="contentMore">
    <div class="ty-content-more__text <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-elem="contentMoreText">
        <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </div>
    <div class="ty-content-more__btn-wrapper <?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>hidden<?php }?>" data-ca-elem="contentMoreBtnWrapper">
        <button type="button" class="ty-content-more__btn" data-ca-elem="contentMoreBtn">
            <?php echo $_smarty_tpl->tpl_vars['more_text']->value;?>

        </button>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/content_more.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/content_more.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('text_limit', (($tmp = $_smarty_tpl->tpl_vars['text_limit']->value ?? null)===null||$tmp==='' ? 600 ?? null : $tmp));
if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->_assignInScope('display', (mb_strlen($_smarty_tpl->tpl_vars['text']->value, 'UTF-8') > $_smarty_tpl->tpl_vars['text_limit']->value));
}
$_smarty_tpl->_assignInScope('text', (($tmp = $_smarty_tpl->tpl_vars['text']->value ?? null)===null||$tmp==='' ? "–" ?? null : $tmp));
$_smarty_tpl->_assignInScope('more_text', (($tmp = $_smarty_tpl->tpl_vars['more_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("content_more") ?? null : $tmp));?>

<div class="ty-content-more" data-ca-elem="contentMore">
    <div class="ty-content-more__text <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-elem="contentMoreText">
        <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </div>
    <div class="ty-content-more__btn-wrapper <?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>hidden<?php }?>" data-ca-elem="contentMoreBtnWrapper">
        <button type="button" class="ty-content-more__btn" data-ca-elem="contentMoreBtn">
            <?php echo $_smarty_tpl->tpl_vars['more_text']->value;?>

        </button>
    </div>
</div>
<?php }
}
}
