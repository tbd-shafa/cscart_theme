<?php
/* Smarty version 4.3.0, created on 2024-11-13 02:57:39
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/blog/blocks/custom_posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67348623396ea8_60708934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '658f220c5b87a90d8dce9bfa6abbd24c3cf61fea' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/blog/blocks/custom_posts.tpl',
      1 => 1731324225,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67348623396ea8_60708934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_three_blogs']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'all_blog');
$_smarty_tpl->tpl_vars['all_blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['all_blog']->value) {
$_smarty_tpl->tpl_vars['all_blog']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['blog']->value['blog_id'] == $_smarty_tpl->tpl_vars['all_blog']->value['page_id']) {?>
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_blog']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_blog']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" style="width: 360px; height: 259px;">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</li>
                                 <?php if ($_smarty_tpl->tpl_vars['blog']->value['comment_count'] > 0) {?>
                                <li><i class="fa fa-comment-o"></i> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog']->value['comment_count'], ENT_QUOTES, 'UTF-8');?>
 </li>
                                <?php }?>
                            </ul>
                            <h5><a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['all_blog']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['all_blog']->value['page'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</a></h5>
                            <p>
                              <?php echo htmlspecialchars((string) smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['blog']->value['description'] ?: ''),150,"..."), ENT_QUOTES, 'UTF-8');?>
 
                            </p>
                        </div>
                    </div>
                   <?php }?>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>




<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/blocks/custom_posts.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/blocks/custom_posts.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_three_blogs']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'all_blog');
$_smarty_tpl->tpl_vars['all_blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['all_blog']->value) {
$_smarty_tpl->tpl_vars['all_blog']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['blog']->value['blog_id'] == $_smarty_tpl->tpl_vars['all_blog']->value['page_id']) {?>
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_blog']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_blog']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" style="width: 360px; height: 259px;">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</li>
                                 <?php if ($_smarty_tpl->tpl_vars['blog']->value['comment_count'] > 0) {?>
                                <li><i class="fa fa-comment-o"></i> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog']->value['comment_count'], ENT_QUOTES, 'UTF-8');?>
 </li>
                                <?php }?>
                            </ul>
                            <h5><a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['all_blog']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['all_blog']->value['page'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</a></h5>
                            <p>
                              <?php echo htmlspecialchars((string) smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['blog']->value['description'] ?: ''),150,"..."), ENT_QUOTES, 'UTF-8');?>
 
                            </p>
                        </div>
                    </div>
                   <?php }?>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>




<?php }
}
}
