<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/form_file_uploader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406760bd5cf9_21110085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbb07be0fcc028a3cab55078cb8bae405b81a293' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/form_file_uploader.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_67406760bd5cf9_21110085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('file_uploader.default_message','file_uploader.fallback_message','file_uploader.fallback_text','file_uploader.file_too_big','file_uploader.invalid_file_type','file_uploader.response_error','file_uploader.cancel_upload','file_uploader.upload_canceled','file_uploader.cancel_upload_confirmation','file_uploader.remove_file','file_uploader.remove_file_confirmation','file_uploader.max_files_exceeded','file_uploader.file_size_units_tb','file_uploader.file_size_units_gb','file_uploader.file_size_units_mb','file_uploader.file_size_units_kb','file_uploader.file_size_units_b','drop_images_to_upload','or','drop_images_select_short','drop_images_select','add_image_from_server','add_image_from_url','delete_all_images','alternative_text','preview','remove','image_has_been_deleted','recover','url','cannot_upload_file'));
$_smarty_tpl->_assignInScope('object_id', (($tmp = $_smarty_tpl->tpl_vars['image_object_id']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp));
$_smarty_tpl->_assignInScope('template_id', uniqid("fileupload_template_"));
$_smarty_tpl->_assignInScope('thumbnail_width', (($tmp = $_smarty_tpl->tpl_vars['thumbnail_width']->value ?? null)===null||$tmp==='' ? 250 ?? null : $tmp));
$_smarty_tpl->_assignInScope('thumbnail_height', (($tmp = $_smarty_tpl->tpl_vars['thumbnail_height']->value ?? null)===null||$tmp==='' ? 250 ?? null : $tmp));
$_smarty_tpl->_assignInScope('post_max_size', fn_return_bytes($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"))/(1024*1024));
$_smarty_tpl->_assignInScope('upload_max_filesize', fn_return_bytes($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"))/(1024*1024));
$_smarty_tpl->_assignInScope('settings_image_filesize', (($tmp = $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['image_file_size'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['upload_max_filesize']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('existing_files', array());?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['existing_pairs']->value, 'pair');
$_smarty_tpl->tpl_vars['pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pair']->value) {
$_smarty_tpl->tpl_vars['pair']->do_else = false;
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['existing_files']) ? $_smarty_tpl->tpl_vars['existing_files']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[intval($_smarty_tpl->tpl_vars['pair']->value['pair_id'])] = array();
$_smarty_tpl->_assignInScope('existing_files', $_tmp_array);?>

    <?php if ($_smarty_tpl->tpl_vars['pair']->value['image_id']) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['existing_files']) ? $_smarty_tpl->tpl_vars['existing_files']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[intval($_smarty_tpl->tpl_vars['pair']->value['pair_id'])]['icon'] = fn_image_to_display($_smarty_tpl->tpl_vars['pair']->value['icon'],$_smarty_tpl->tpl_vars['thumbnail_width']->value,$_smarty_tpl->tpl_vars['thumbnail_height']->value);
$_smarty_tpl->_assignInScope('existing_files', $_tmp_array);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['pair']->value['detailed_id']) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['existing_files']) ? $_smarty_tpl->tpl_vars['existing_files']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[intval($_smarty_tpl->tpl_vars['pair']->value['pair_id'])]['detailed'] = fn_image_to_display($_smarty_tpl->tpl_vars['pair']->value['detailed'],$_smarty_tpl->tpl_vars['thumbnail_width']->value,$_smarty_tpl->tpl_vars['thumbnail_height']->value);
$_smarty_tpl->_assignInScope('existing_files', $_tmp_array);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div class="file-uploader cm-file-uploader"
    data-ca-upload-url="<?php echo htmlspecialchars((string) fn_url("image.upload"), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-thumbnail-width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-thumbnail-height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnail_height']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-existing-pairs="<?php echo htmlspecialchars((string) json_encode(array_values((($tmp = $_smarty_tpl->tpl_vars['existing_pairs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp))), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-existing-pair-thumbnails="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['existing_files']->value), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-template-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-max-files-count="100"
    data-ca-new-files-param-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file_name']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-default-image-pair-type="A"
    data-ca-max-file-size="<?php echo htmlspecialchars((string) min(array($_smarty_tpl->tpl_vars['upload_max_filesize']->value,$_smarty_tpl->tpl_vars['post_max_size']->value,$_smarty_tpl->tpl_vars['settings_image_filesize']->value)), ENT_QUOTES, 'UTF-8');?>
"

    data-ca-image-pair-types="<?php echo htmlspecialchars((string) json_encode(array_filter((($tmp = $_smarty_tpl->tpl_vars['image_pair_types']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp))), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-allow-sorting="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allow_update_files']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-destroy-after-initializing="<?php echo htmlspecialchars((string) !$_smarty_tpl->tpl_vars['allow_update_files']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-allow-thumbnail-upload="true"
    data-ca-image-pair-object-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-file-uploader-is-show-remove-file-confirmation="true"

    data-ca-file-uploader-tr-default-message="<?php echo $_smarty_tpl->__("file_uploader.default_message");?>
"
    data-ca-file-uploader-tr-fallback-message="<?php echo $_smarty_tpl->__("file_uploader.fallback_message");?>
"
    data-ca-file-uploader-tr-fallback-text="<?php echo $_smarty_tpl->__("file_uploader.fallback_text");?>
"
    data-ca-file-uploader-tr-file-too-big="<?php echo $_smarty_tpl->__("file_uploader.file_too_big");?>
"
    data-ca-file-uploader-tr-invalid-file-type="<?php echo $_smarty_tpl->__("file_uploader.invalid_file_type");?>
"
    data-ca-file-uploader-tr-response-error="<?php echo $_smarty_tpl->__("file_uploader.response_error");?>
"
    data-ca-file-uploader-tr-cancel-upload="<?php echo $_smarty_tpl->__("file_uploader.cancel_upload");?>
"
    data-ca-file-uploader-tr-upload-canceled="<?php echo $_smarty_tpl->__("file_uploader.upload_canceled");?>
"
    data-ca-file-uploader-tr-cancel-upload-confirmation="<?php echo $_smarty_tpl->__("file_uploader.cancel_upload_confirmation");?>
"
    data-ca-file-uploader-tr-remove-file="<?php echo $_smarty_tpl->__("file_uploader.remove_file");?>
"
    data-ca-file-uploader-tr-remove-file-confirmation="<?php echo $_smarty_tpl->__("file_uploader.remove_file_confirmation");?>
"
    data-ca-file-uploader-tr-max-files-exceeded="<?php echo $_smarty_tpl->__("file_uploader.max_files_exceeded");?>
"
    data-ca-file-uploader-tr-file-size-units-tb="<?php echo $_smarty_tpl->__("file_uploader.file_size_units_tb");?>
"
    data-ca-file-uploader-tr-file-size-units-gb="<?php echo $_smarty_tpl->__("file_uploader.file_size_units_gb");?>
"
    data-ca-file-uploader-tr-file-size-units-mb="<?php echo $_smarty_tpl->__("file_uploader.file_size_units_mb");?>
"
    data-ca-file-uploader-tr-file-size-units-kb="<?php echo $_smarty_tpl->__("file_uploader.file_size_units_kb");?>
"
    data-ca-file-uploader-tr-file-size-units-b="<?php echo $_smarty_tpl->__("file_uploader.file_size_units_b");?>
"   
>

    <div class="file-uploader__files-container clearfix" data-ca-fileuploader-files-container>

    <?php if ($_smarty_tpl->tpl_vars['allow_update_files']->value) {?>
        <div class="file-uploader__pickers">
            <div class="file-uploader__file-square <?php if (!$_smarty_tpl->tpl_vars['existing_files']->value) {?>file-uploader__file-square--no-files<?php }?>">
                <div class="file-uploader__pickers-content">
                    <p><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-picture icon file-uploader__pickers-icon"),$_smarty_tpl);?>
</p>
                    <p class="file-uploader__pickers-text">
                        <?php echo $_smarty_tpl->__("drop_images_to_upload");?>

                        <span class="file-uploader__pickers-text file-uploader__pickers-text--small"><?php echo $_smarty_tpl->__("or");?>
</span>
                    </p>
                    <div class="btn-group file-uploader__pickers-buttons" id="last_edited_items" data-ca-fileupload-picker-container>
                        <a class="btn file-uploader__pickers-buttons-select" data-ca-fileupload-picker-local>
                            <?php if ($_smarty_tpl->tpl_vars['existing_files']->value) {?>
                                <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("drop_images_select_short") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                            <?php } else { ?>
                                <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("drop_images_select") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </a>
                        <a class="btn file-uploader__pickers-buttons-select dropdown-toggle" data-toggle="dropdown" data-ca-fileupload-picker-btn href="#"><span class="caret"></span></a>
                        <ul class="dropdown-menu file-uploader__pickers-menu" data-ca-fileupload-picker-menu>
                            <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value) >= 1) {?>
                                <?php if (!$_smarty_tpl->tpl_vars['hide_server']->value) {?>
                                    <li><a data-ca-fileupload-picker-server><?php echo $_smarty_tpl->__("add_image_from_server");?>
</a></li>
                                <?php }?>
                                <li><a data-ca-fileupload-picker-url><?php echo $_smarty_tpl->__("add_image_from_url");?>
</a></li>
                                <?php if ($_smarty_tpl->tpl_vars['existing_files']->value) {?>
                                    <li class="divider"></li>
                                    <li><a data-ca-fileupload-remove-all><?php echo $_smarty_tpl->__("delete_all_images");?>
</a></li>
                                <?php }?>
                            <?php }?>
                        </ul>
                    <!--last_edited_items--></div>
                </div>
            </div>
        </div>
    <?php }?>

    </div>
</div>

<div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="display: none;">
    <div class="file-uploader__file">
        <div class="file-uploader__file-square">
            <div class="file-uploader__file-progressbar">
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                    aria-valuenow="0">
                    <div class="bar" style="width: 0;" data-dz-uploadprogress></div>
                </div>
            </div>
            <div class="file-uploader__file-section file-uploader__file-section_text-data" data-dz-errormessage></div>
            <div class="file-uploader__file-section file-uploader__file-section_image">
                <img class="file-uploader__file-preview-image" data-dz-thumbnail/>
            </div>

            <div class="file-uploader__file-section file-uploader__file-section_under-image">
                <textarea
                    class="cm-file-uploader-dynamic-field file-uploader__file-description-input"
                    data-ca-alt-text-detailed
                    placeholder="<?php echo $_smarty_tpl->__("alternative_text");?>
"
                    <?php if (!$_smarty_tpl->tpl_vars['allow_update_files']->value) {?>disabled<?php }?>></textarea>

                <div class="file-uploader__file-control-menu file-uploader__file-control-menu--expanded">
                    <div class="file-uploader__file-control-menu-buttons-wrapper">
                        <a href="" target="_blank" class="cm-tooltip file-uploader__file-button file-uploader__file-button-preview" data-ca-preview-detailed
                            title="<?php echo $_smarty_tpl->__("preview");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-eye-open"),$_smarty_tpl);?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['allow_update_files']->value) {?>
                            <a class="cm-tooltip file-uploader__file-button file-uploader__file-button-delete"
                                data-ca-dz-remove title="<?php echo $_smarty_tpl->__("remove");?>
">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-trash"),$_smarty_tpl);?>

                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="cm-hide-with-inputs">
                <div class="file-uploader__remove-overlay hidden">
                    <div class="file-uploader__remove-text"><?php echo $_smarty_tpl->__("image_has_been_deleted");?>
</div>
                    <div>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_onclick'=>"javascript:void(0)",'but_meta'=>"file-uploader__remove-button-recover",'but_text'=>$_smarty_tpl->__("recover")), 0, false);
?>
                    </div>
                </div>
                <input type="hidden" name="product_data[removed_image_pair_ids][]" value="" data-ca-image-remove>
                <input type="hidden" name="" value="" class="cm-file-uploader-dynamic-field" data-ca-image-type>
                <input type="hidden" name="" value="" class="cm-file-uploader-dynamic-field" data-ca-image-object-id>
                <input type="hidden" name="" value="" class="cm-file-uploader-dynamic-field" data-ca-image-pair-id>
                <input type="hidden" name="" value="" class="cm-file-uploader-dynamic-field" data-ca-image-position>
                <input type="hidden" name="" value="" class="cm-file-uploader-dynamic-field" data-ca-upload-type>
                <input type="hidden" name="" value="" class="cm-file-uploader-dynamic-field" data-ca-upload-file>
                <input type="hidden" name="" value="" class="cm-file-uploader-dynamic-field" data-ca-is-new-file>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    Tygh.lang.url = '<?php echo strtr((string)$_smarty_tpl->__("url"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
    Tygh.lang.cannot_upload_file = '<?php echo strtr((string)$_smarty_tpl->__("cannot_upload_file"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
