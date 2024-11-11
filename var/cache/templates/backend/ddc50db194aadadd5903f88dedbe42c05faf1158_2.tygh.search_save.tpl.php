<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:49:11
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/search_filters/search_save.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731fd47e6cd13_02770630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddc50db194aadadd5903f88dedbe42c05faf1158' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/search_filters/search_save.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_6731fd47e6cd13_02770630 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('name','cancel','save','save_this_search_as','save_this_search_as','save_this_search_as'));
if (!$_smarty_tpl->tpl_vars['not_saved']->value && strpos($_REQUEST['dispatch'],".picker") === false) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "search_save", null, null);?>
        <div data-ca-search-filters="searchSave">
            <div class="form-horizontal" data-ca-search-filters="searchSaveContent">
                <div class="control-group">
                    <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
_view_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
                    <div class="controls">
                        <input type="text"
                            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
_view_name"
                            name="new_view"
                            class="input-xlarge"
                            value="<?php if ($_smarty_tpl->tpl_vars['search']->value['view_id'] && $_smarty_tpl->tpl_vars['views']->value[$_smarty_tpl->tpl_vars['search']->value['view_id']]) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['views']->value[$_smarty_tpl->tpl_vars['search']->value['view_id']]['name'], ENT_QUOTES, 'UTF-8');
}?>"
                            form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-search-filters="viewName"
                            data-ca-search-filters-update="ignore"
                        />
                    </div>
                </div>
            </div>
            <div class="buttons-container">
                <a class="cm-dialog-closer cm-inline-dialog-closer tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
                <?php if (fn_check_view_permissions('')) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>"submit",'but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['search_filters']->value['dispatch']).".save_view]",'but_meta'=>"btn-primary cm-search-filters-save-view",'method'=>"GET",'but_id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)."_search_filters_save_view"), 0, false);
?>
                <?php }?>
            </div>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)."_search_save",'text'=>$_smarty_tpl->__("save_this_search_as"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'search_save'),'link_class'=>"cm-dialog-auto-size hidden cm-search-filters-search-save",'title'=>$_smarty_tpl->__("save_this_search_as"),'act'=>"general",'link_text'=>$_smarty_tpl->__("save_this_search_as"),'meta'=>"hidden"), 0, false);
}
}
}
