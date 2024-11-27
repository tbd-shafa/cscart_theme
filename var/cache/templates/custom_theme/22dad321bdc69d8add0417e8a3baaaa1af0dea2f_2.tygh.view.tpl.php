<?php
/* Smarty version 4.3.0, created on 2024-11-27 02:25:40
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/pages/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6746f3a49e0562_93863483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22dad321bdc69d8add0417e8a3baaaa1af0dea2f' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/pages/view.tpl',
      1 => 1732007837,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6746f3a49e0562_93863483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/js/main.js"><?php echo '</script'; ?>
>
 <style>

.custom_breadcome {
    width: calc(100vw - 8px);
    margin-left: calc((1170px - 100vw) / 2);
}
 </style>

 <?php if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == "B" && $_smarty_tpl->tpl_vars['page']->value['seo_name'] != "blog") {?>

    <div class="custom_breadcome">
    <section class="blog-details-hero set-bg" data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog__details__hero__text">
                            <h2 style="color:black;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</h2>
                            <ul>
                                <li style="color:black;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['author'], ENT_QUOTES, 'UTF-8');?>
</li>
                            <li style="color:black;"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <section class="related-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title related-blog-title">
                            <h2>Post You May Like</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_blogs']->value, 'related');
$_smarty_tpl->tpl_vars['related']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['related']->value) {
$_smarty_tpl->tpl_vars['related']->do_else = false;
?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                        
                                        <div class="blog__item__pic">
                                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['related']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['related']->value['title'], ENT_QUOTES, 'UTF-8');?>
" >
                                        </div>
                        
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['related']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</li>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['related']->value['comment_count'] > 0) {?>
                                    <li><i class="fa fa-comment-o"></i> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['related']->value['comment_count'], ENT_QUOTES, 'UTF-8');?>
 </li>
                                    <?php }?>
                                    
                                </ul>
                                <h5> <a href="http://localhost/cs-cart/blog/<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['related']->value['seo_name'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
/"><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['related']->value['title'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</a></h5>
                                <p><?php echo htmlspecialchars((string) smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['related']->value['description'] ?: ''),150,"..."), ENT_QUOTES, 'UTF-8');?>
  </p>
                            </div>
                        </div>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                </div>
            </div>
        </section>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_type'] == "B" && $_smarty_tpl->tpl_vars['page']->value['seo_name'] == "blog") {?>
     <div class="custom_breadcome">
        <section class="breadcrumb-section set-bg" data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</h2>
                            <div class="breadcrumb__option">
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
">Home</a>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div <?php echo smarty_function_live_edit(array('name'=>"page:description:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
   

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php } else { ?>
    <div class="custom_breadcome">
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</h2>
                            <div class="breadcrumb__option">
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
">Home</a>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="ty-wysiwyg-content">

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div <?php echo smarty_function_live_edit(array('name'=>"page:description:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/pages/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/pages/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/js/main.js"><?php echo '</script'; ?>
>
 <style>

.custom_breadcome {
    width: calc(100vw - 8px);
    margin-left: calc((1170px - 100vw) / 2);
}
 </style>

 <?php if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == "B" && $_smarty_tpl->tpl_vars['page']->value['seo_name'] != "blog") {?>

    <div class="custom_breadcome">
    <section class="blog-details-hero set-bg" data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog__details__hero__text">
                            <h2 style="color:black;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</h2>
                            <ul>
                                <li style="color:black;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['author'], ENT_QUOTES, 'UTF-8');?>
</li>
                            <li style="color:black;"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <section class="related-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title related-blog-title">
                            <h2>Post You May Like</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_blogs']->value, 'related');
$_smarty_tpl->tpl_vars['related']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['related']->value) {
$_smarty_tpl->tpl_vars['related']->do_else = false;
?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                        
                                        <div class="blog__item__pic">
                                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['related']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['related']->value['title'], ENT_QUOTES, 'UTF-8');?>
" >
                                        </div>
                        
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['related']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</li>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['related']->value['comment_count'] > 0) {?>
                                    <li><i class="fa fa-comment-o"></i> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['related']->value['comment_count'], ENT_QUOTES, 'UTF-8');?>
 </li>
                                    <?php }?>
                                    
                                </ul>
                                <h5> <a href="http://localhost/cs-cart/blog/<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['related']->value['seo_name'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
/"><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['related']->value['title'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</a></h5>
                                <p><?php echo htmlspecialchars((string) smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['related']->value['description'] ?: ''),150,"..."), ENT_QUOTES, 'UTF-8');?>
  </p>
                            </div>
                        </div>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                </div>
            </div>
        </section>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_type'] == "B" && $_smarty_tpl->tpl_vars['page']->value['seo_name'] == "blog") {?>
     <div class="custom_breadcome">
        <section class="breadcrumb-section set-bg" data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</h2>
                            <div class="breadcrumb__option">
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
">Home</a>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div <?php echo smarty_function_live_edit(array('name'=>"page:description:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
   

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php } else { ?>
    <div class="custom_breadcome">
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</h2>
                            <div class="breadcrumb__option">
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
">Home</a>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="ty-wysiwyg-content">

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div <?php echo smarty_function_live_edit(array('name'=>"page:description:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php }
}
}
