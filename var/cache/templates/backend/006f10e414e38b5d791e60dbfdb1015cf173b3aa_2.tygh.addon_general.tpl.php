<?php
/* Smarty version 4.3.0, created on 2024-11-13 04:58:20
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/addons/components/detailed_page/tabs/addon_general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6734a26ce3e825_11344531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '006f10e414e38b5d791e60dbfdb1015cf173b3aa' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/addons/components/detailed_page/tabs/addon_general.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/notification/requires_upgrade.tpl' => 1,
    'tygh:common/subheader.tpl' => 3,
  ),
),false)) {
function content_6734a26ce3e825_11344531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.sanitize_html.php','function'=>'smarty_modifier_sanitize_html',),));
\Tygh\Languages\Helper::preloadLangVars(array('what_is_new','version','addons.no_changelog','where_access_addon','menu_items','description'));
?>
<div class="cm-hide-save-button <?php if (!empty($_smarty_tpl->tpl_vars['selected_section']->value) && $_smarty_tpl->tpl_vars['selected_section']->value !== "detailed") {?>hidden<?php }?>" id="content_detailed">
    <div class="form-horizontal form-edit">

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/notification/requires_upgrade.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ($_smarty_tpl->tpl_vars['current_package']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("what_is_new"),'target'=>"#acc_what_new"), 0, false);
?>
            <div id="acc_what_new" class="collapse in collapse-visible">
                <div class="control-group">
                    <label class="control-label" for="addon_what_new">
                        <?php echo $_smarty_tpl->__("version");?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_package']->value['file_name'], ENT_QUOTES, 'UTF-8');?>

                        <div class="muted">
                            <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['current_package']->value['available_since'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                        </div>
                    </label>
                    <div class="controls">
                        <?php if ($_smarty_tpl->tpl_vars['current_package']->value['readme']) {?>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['current_package']->value['readme'];?>

                            </p>
                        <?php } else { ?>
                            <p class="muted">
                                <?php echo $_smarty_tpl->__("addons.no_changelog");?>
.
                            </p>
                        <?php }?>
                    </div>
                </div>
            </div>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['addon_install_datetime']->value && $_smarty_tpl->tpl_vars['addon']->value['menu_items']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("where_access_addon"),'target'=>"#acc_where_access_addon"), 0, true);
?>
            <div id="acc_where_access_addon" class="collapse in collapse-visible">
                <div class="control-group">
                    <label class="control-label" for="addon_name"><?php echo $_smarty_tpl->__("menu_items");?>
:</label>
                    <div class="controls">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon']->value['menu_items'], 'menu_item', false, 'href');
$_smarty_tpl->tpl_vars['menu_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['href']->value => $_smarty_tpl->tpl_vars['menu_item']->value) {
$_smarty_tpl->tpl_vars['menu_item']->do_else = false;
?>
                            <p>
                                <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_item']->value['title'] ? $_smarty_tpl->tpl_vars['menu_item']->value['title'] : $_smarty_tpl->__($_smarty_tpl->tpl_vars['menu_item']->value['id']), ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->tpl_vars['menu_item']->value['parents']) {?>
                                        (<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_item']->value['parents'], 'parent', false, NULL, 'addon_menu_item_parents', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['parent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['total'];
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent']->value['title'] ? $_smarty_tpl->tpl_vars['parent']->value['title'] : $_smarty_tpl->__($_smarty_tpl->tpl_vars['parent']->value['id']), ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_addon_menu_item_parents']->value['last'] : null)) {?> / <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>)
                                    <?php }?>
                                </a>
                            </p>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("description"),'target'=>"#acc_description"), 0, true);
?>
        <div id="acc_description" class="collapse in collapse-visible">

                        <div>
                <?php if ($_smarty_tpl->tpl_vars['addon']->value['marketplace']['product']['full_description']) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "unsafe_addon_description", null);?>
                        <?php echo $_smarty_tpl->tpl_vars['addon']->value['marketplace']['product']['full_description'];?>

                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <p><?php echo smarty_modifier_sanitize_html($_smarty_tpl->tpl_vars['unsafe_addon_description']->value);?>
</p>
                <?php } else { ?>
                    <p><?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>
</p>
                <?php }?>
            </div>
        </div>
    </div>
<!--content_detailed--></div>
<?php }
}
