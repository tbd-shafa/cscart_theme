<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:05:04
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467f099b707_55869720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd844d7d41d10c8e17bb12d2a3568fefb3cd2f180' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/update_cart.tpl' => 2,
  ),
),false)) {
function content_674467f099b707_55869720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('file_is_too_large','files_are_too_large','remove_this_item','save','product_reviews.uploader_drop_zone_description','or','upload_another_file','upload_file','product_reviews.uploader_drop_zone_info','or','specify_url','file_is_too_large','files_are_too_large','remove_this_item','save','product_reviews.uploader_drop_zone_description','or','upload_another_file','upload_file','product_reviews.uploader_drop_zone_info','or','specify_url'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"));
$_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"));?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }
}?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            post_max_size_bytes: '<?php echo htmlspecialchars((string) fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_bytes: '<?php echo htmlspecialchars((string) fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',
            max_images_upload: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['max_images_upload']->value, ENT_QUOTES, 'UTF-8');?>
',

            post_max_size_mbytes: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_mbytes: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
'
        });

        _.tr({
            file_is_too_large: '<?php echo strtr((string)$_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            files_are_too_large: '<?php echo strtr((string)$_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<div class="ty-nowrap" id="file_uploader_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-fileuploader__file-section" id="message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file hidden">
            <?php ob_start();
if ($_smarty_tpl->tpl_vars['multiupload']->value !== 'Y') {
echo "Tygh.fileuploader.toggle_links(this.id, 'show');";
}
$_prefixVariable1=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-fileuploader__icon",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_prefixVariable1." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');")),$_smarty_tpl);?>

            <span class="ty-fileuploader__filename ty-filename-link upload-filename"></span>
            <?php if ($_smarty_tpl->tpl_vars['location']->value == 'cart') {?>
                <br />
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart_save_file",'but_name'=>"dispatch[checkout.update]",'but_meta'=>"hidden hidden-phone hidden-tablet",'but_text'=>$_smarty_tpl->__("save")), 0, false);
?>
            <?php }?>
        </p>
    </div>

    <div class="ty-fileuploader__file-link <?php if ($_smarty_tpl->tpl_vars['multiupload']->value != "Y" && $_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>" id="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><input type="hidden" name="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>" id="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><div class="ty-fileuploader__file-local upload-file-local ty-fileuploader__drop-zone ty-fileuploader__drop-zone--visible" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-product-review="fileuploaderDropZone" ><div class="ty-fileuploader__drop-zone-description"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-image"),$_smarty_tpl);?>
<div class="ty-fileuploader__drop-zone-text"><?php echo $_smarty_tpl->__("product_reviews.uploader_drop_zone_description");?>
</br><?php echo $_smarty_tpl->__("or");?>
</div></div><input type="file" class="ty-fileuploader__file-input" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value == "Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');<?php if ($_smarty_tpl->tpl_vars['location']->value == 'cart') {?>$('#button_cart_save_file').click();<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><div class="ty-fileuploader__drop-zone-buttons ty-fileuploader__drop-zone-buttons--visible" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-product-review="fileuploaderDropZoneButtons" ><a data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>class="ty-fileuploader__a-another hidden"<?php }?>><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_another_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a><a data-ca-target-id="local_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-multi="N" class="ty-fileuploader__a<?php if ($_smarty_tpl->tpl_vars['images']->value) {?> hidden<?php }?>"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("upload_file") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></div><div class="ty-fileuploader__drop-zone-description"><?php echo $_smarty_tpl->__("product_reviews.uploader_drop_zone_info",array('[max_size]'=>$_smarty_tpl->tpl_vars['upload_max_filesize']->value));?>
</div><?php if ($_smarty_tpl->tpl_vars['allow_url_uploading']->value) {?>&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;<a onclick="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value == "Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" id="url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("specify_url");?>
</a><?php }?></div><?php if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="hidden_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-skip-avail-switch"><?php }?></div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"));
$_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"));?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }
}?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            post_max_size_bytes: '<?php echo htmlspecialchars((string) fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_bytes: '<?php echo htmlspecialchars((string) fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',
            max_images_upload: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['max_images_upload']->value, ENT_QUOTES, 'UTF-8');?>
',

            post_max_size_mbytes: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_mbytes: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
'
        });

        _.tr({
            file_is_too_large: '<?php echo strtr((string)$_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            files_are_too_large: '<?php echo strtr((string)$_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<div class="ty-nowrap" id="file_uploader_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-fileuploader__file-section" id="message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file hidden">
            <?php ob_start();
if ($_smarty_tpl->tpl_vars['multiupload']->value !== 'Y') {
echo "Tygh.fileuploader.toggle_links(this.id, 'show');";
}
$_prefixVariable2=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-fileuploader__icon",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_prefixVariable2." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');")),$_smarty_tpl);?>

            <span class="ty-fileuploader__filename ty-filename-link upload-filename"></span>
            <?php if ($_smarty_tpl->tpl_vars['location']->value == 'cart') {?>
                <br />
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart_save_file",'but_name'=>"dispatch[checkout.update]",'but_meta'=>"hidden hidden-phone hidden-tablet",'but_text'=>$_smarty_tpl->__("save")), 0, true);
?>
            <?php }?>
        </p>
    </div>

    <div class="ty-fileuploader__file-link <?php if ($_smarty_tpl->tpl_vars['multiupload']->value != "Y" && $_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>" id="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><input type="hidden" name="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>" id="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><div class="ty-fileuploader__file-local upload-file-local ty-fileuploader__drop-zone ty-fileuploader__drop-zone--visible" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-product-review="fileuploaderDropZone" ><div class="ty-fileuploader__drop-zone-description"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-image"),$_smarty_tpl);?>
<div class="ty-fileuploader__drop-zone-text"><?php echo $_smarty_tpl->__("product_reviews.uploader_drop_zone_description");?>
</br><?php echo $_smarty_tpl->__("or");?>
</div></div><input type="file" class="ty-fileuploader__file-input" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value == "Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');<?php if ($_smarty_tpl->tpl_vars['location']->value == 'cart') {?>$('#button_cart_save_file').click();<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><div class="ty-fileuploader__drop-zone-buttons ty-fileuploader__drop-zone-buttons--visible" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-product-review="fileuploaderDropZoneButtons" ><a data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>class="ty-fileuploader__a-another hidden"<?php }?>><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_another_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a><a data-ca-target-id="local_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-multi="N" class="ty-fileuploader__a<?php if ($_smarty_tpl->tpl_vars['images']->value) {?> hidden<?php }?>"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("upload_file") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></div><div class="ty-fileuploader__drop-zone-description"><?php echo $_smarty_tpl->__("product_reviews.uploader_drop_zone_info",array('[max_size]'=>$_smarty_tpl->tpl_vars['upload_max_filesize']->value));?>
</div><?php if ($_smarty_tpl->tpl_vars['allow_url_uploading']->value) {?>&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;<a onclick="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value == "Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" id="url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("specify_url");?>
</a><?php }?></div><?php if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="hidden_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-skip-avail-switch"><?php }?></div>
</div>
<?php }
}
}
