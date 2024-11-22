<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/attachments/views/attachments/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406761361521_34810479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98022a01169d30b5c2ca29d6a78be57f49e0bd5d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/attachments/views/attachments/update.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:common/select_usergroups.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_67406761361521_34810479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.formatfilesize.php','function'=>'smarty_modifier_formatfilesize',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','name','position','file','usergroups'));
if ($_smarty_tpl->tpl_vars['attachment']->value['attachment_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['attachment']->value['attachment_id']);?>    
<?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('id', "0");
}
$_smarty_tpl->_assignInScope('tabs_count', 1);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hide_inputs']->value, ENT_QUOTES, 'UTF-8');?>
" name="attachments_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="selected_section" value="attachments" />
<input type="hidden" name="object_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="object_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="attachment_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs clear tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <li id="tab_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
    <div id="content_tab_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="control-group">
            <label for="elm_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" name="attachment_data[description]" id="elm_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" size="60" class="input-medium" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("position");?>
</label>
            <div class="controls">
                <input type="text" name="attachment_data[position]" id="elm_position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['position'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label for="type_<?php echo htmlspecialchars((string) md5("attachment_files[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if (!$_smarty_tpl->tpl_vars['attachment']->value) {?>cm-required<?php }?>"><?php echo $_smarty_tpl->__("file");?>
</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['attachment']->value['filename']) {?>
                    <div class="text-type-value">
                        <a href="<?php echo htmlspecialchars((string) fn_url("attachments.getfile?attachment_id=".((string)$_smarty_tpl->tpl_vars['attachment']->value['attachment_id'])."&object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&object_id=".((string)$_smarty_tpl->tpl_vars['object_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['filename'], ENT_QUOTES, 'UTF-8');?>
</a> (<?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['attachment']->value['filesize']);?>
)
                    </div>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"attachment_files[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), 0, false);
?>
                <?php }?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("usergroups");?>
</label>
            <div class="controls">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"elm_usergroup_".((string)$_smarty_tpl->tpl_vars['id']->value),'name'=>"attachment_data[usergroup_ids]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H"))),'usergroup_ids'=>$_smarty_tpl->tpl_vars['attachment']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>false), 0, false);
?>
            </div>
        </div>
    </div>
</div>

<div class="buttons-container">
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_assignInScope('hide_first_button', $_smarty_tpl->tpl_vars['hide_inputs']->value);?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[attachments.update]",'cancel_action'=>"close",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
</div>

</form>
<?php }
}
