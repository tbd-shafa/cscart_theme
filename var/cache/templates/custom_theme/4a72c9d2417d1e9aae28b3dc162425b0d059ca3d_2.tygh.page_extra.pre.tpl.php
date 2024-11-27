<?php
/* Smarty version 4.3.0, created on 2024-11-27 02:00:02
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/blog/hooks/pages/page_extra.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6746eda212bc28_94753772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a72c9d2417d1e9aae28b3dc162425b0d059ca3d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/blog/hooks/pages/page_extra.pre.tpl',
      1 => 1732701583,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
  ),
),false)) {
function content_6746eda212bc28_94753772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>

<?php if ($_smarty_tpl->tpl_vars['subpages']->value) {?>

<section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                          <div class="blog__sidebar__search">
                        <form id="blog-search-form" action="#" method="get">
                            <input type="text" id="search-input" name="q" placeholder="Search By Tittle..." required>
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>

                    <?php echo '<script'; ?>
 type="text/javascript">
                        // Wait until the document is fully loaded
                        document.addEventListener("DOMContentLoaded", function() {
                            console.log(11);
                            var form = document.getElementById('blog-search-form');
                            console.log(form);
                            var input = document.getElementById('search-input');
                            console.log(input);
                            // Handle form submission
                            form.addEventListener('submit', function(event) {
                                event.preventDefault(); // Prevent default form submission

                            
                                var query = input.value.trim(); // Get the input value
                                // Convert to lowercase and replace spaces with hyphens
                                var transformedQuery = query
                                .toLowerCase()
                                .replace(/[’‘'"]/g, '')   // Remove special quotes
                                .replace(/[^a-z0-9\s-]/g, '') // Remove other special characters
                                .replace(/\s+/g, '-'); 
                                console.log('Transformed Query:', transformedQuery);
                                if (query) {
                                     var targetUrl = 'http://localhost/cs-cart/blog/' + transformedQuery;
                                     // Redirect to the desired URL
                                      window.location.href = targetUrl;
                                }
                            });
                        });
                    <?php echo '</script'; ?>
>
                    
                        <div class="blog__sidebar__item">
                            <h4>Tags</h4>
                            <ul>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                <li><a href="<?php echo htmlspecialchars((string) fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</a></li>                            
                                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                               
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Recent Blogs</h4>
                            <div class="blog__sidebar__recent">
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_three_blogs']->value, 'latest_three');
$_smarty_tpl->tpl_vars['latest_three']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['latest_three']->value) {
$_smarty_tpl->tpl_vars['latest_three']->do_else = false;
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subpages']->value, 'subpage');
$_smarty_tpl->tpl_vars['subpage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subpage']->value) {
$_smarty_tpl->tpl_vars['subpage']->do_else = false;
?>
                                 <?php if ($_smarty_tpl->tpl_vars['latest_three']->value['blog_id'] == $_smarty_tpl->tpl_vars['subpage']->value['page_id']) {?>
                                <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" height="70px;" width="70px;">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['latest_three']->value['title'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</h6>
                                        <span><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['latest_three']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </div>
                                </a>
                                 <?php }?>
                                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                   <a href="<?php echo htmlspecialchars((string) fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</a>                           
                                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <div class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subpages']->value, 'subpage');
$_smarty_tpl->tpl_vars['subpage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subpage']->value) {
$_smarty_tpl->tpl_vars['subpage']->do_else = false;
?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pics">
                                    <img  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" height="259px;" width="360px;">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['subpage']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</li>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_blogs_with_descriptions']->value, 'all_blog');
$_smarty_tpl->tpl_vars['all_blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['all_blog']->value) {
$_smarty_tpl->tpl_vars['all_blog']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['subpage']->value['page_id'] == $_smarty_tpl->tpl_vars['all_blog']->value['blog_id']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['all_blog']->value['comment_count'] > 0) {?>
                                         <li><i class="fa fa-comment-o"></i> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_blog']->value['comment_count'], ENT_QUOTES, 'UTF-8');?>
 </li>
                                        <?php }?>
                                        
                                        <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <h5><a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a></h5>
                                    <p><?php echo htmlspecialchars((string) smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['subpage']->value['description'] ?: ''),150,"..."), ENT_QUOTES, 'UTF-8');?>
</p>
                                    <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <div class="col-lg-12">

                              <?php $_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>
                                <?php $_smarty_tpl->_assignInScope('pagination', fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value));?>

                                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
                                    <div class="ty-pagination-container cm-pagination-container" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                                    <?php if ($_smarty_tpl->tpl_vars['save_current_page']->value) {?>
                                        <input type="hidden" name="page" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['search']->value['page'] ?? null)===null||$tmp==='' ? $_REQUEST['page'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['save_current_url']->value) {?>
                                        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
                                    <?php }?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_pages'] > 1) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['top_pagination'] == "Y" && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y" || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
                                    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"page"));?>
                                    <?php $_smarty_tpl->_assignInScope('ajax_class', !$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml'] || $_smarty_tpl->tpl_vars['force_ajax']->value ? "cm-ajax" : '');?>
                                    <?php $_smarty_tpl->_assignInScope('ajax_full_render_class', $_smarty_tpl->tpl_vars['full_render']->value ? "cm-ajax-full-render" : '');?>
                                    <?php $_smarty_tpl->_assignInScope('extra_id', (($tmp = $_smarty_tpl->tpl_vars['extra_id']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

                                    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
                                    <div class="ty-pagination__bottom">
                                    <?php }?>
                                    <div class="ty-pagination">
                                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_range']) {?>
                                            <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['prev_range']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_range'], ENT_QUOTES, 'UTF-8');?>
" class="cm-history hidden-phone ty-pagination__item ty-pagination__range <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_range_from'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_range_to'], ENT_QUOTES, 'UTF-8');?>
</a>
                                        <?php }?>
                                        <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>ty-pagination__prev cm-history <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_full_render_class']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['prev_page'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_page'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id']->value).($_smarty_tpl->tpl_vars['extra_id']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i class="fa fa-long-arrow-left"></i></a>

                                        <div class="ty-pagination__items">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['navi_pages'], 'pg');
$_smarty_tpl->tpl_vars['pg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
$_smarty_tpl->tpl_vars['pg']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['pg']->value != $_smarty_tpl->tpl_vars['pagination']->value['current_page']) {?>
                                                    <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pg']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-history ty-pagination__item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_full_render_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id']->value).($_smarty_tpl->tpl_vars['extra_id']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                                <?php } else { ?>
                                                    <span class="ty-pagination__selected"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>

                                        <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>ty-pagination__next cm-history <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_full_render_class']->value, ENT_QUOTES, 'UTF-8');
}?> ty-pagination__right-arrow" <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['next_page']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_page'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id']->value).($_smarty_tpl->tpl_vars['extra_id']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i class="fa fa-long-arrow-right"></i></a>

                                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_range']) {?>
                                            <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['next_range']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_range'], ENT_QUOTES, 'UTF-8');?>
" class="cm-history ty-pagination__item hidden-phone ty-pagination__range <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_range_from'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_range_to'], ENT_QUOTES, 'UTF-8');?>
</a>
                                        <?php }?>
                                    </div>
                                    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
                                        </div>
                                    <?php }?>
                                    <?php } else { ?>
                                        <div class="hidden"><a data-ca-scroll=".cm-pagination-container" href="" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden"></a></div>
                                    <?php }?>
                                <?php }?>

                                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
                                    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pagination_open", null, null);?>N<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php } elseif ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pagination_open", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php }?>                            
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }?>


<?php }?>


<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/hooks/pages/page_extra.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/hooks/pages/page_extra.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>

<?php if ($_smarty_tpl->tpl_vars['subpages']->value) {?>

<section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                          <div class="blog__sidebar__search">
                        <form id="blog-search-form" action="#" method="get">
                            <input type="text" id="search-input" name="q" placeholder="Search By Tittle..." required>
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>

                    <?php echo '<script'; ?>
 type="text/javascript">
                        // Wait until the document is fully loaded
                        document.addEventListener("DOMContentLoaded", function() {
                            console.log(11);
                            var form = document.getElementById('blog-search-form');
                            console.log(form);
                            var input = document.getElementById('search-input');
                            console.log(input);
                            // Handle form submission
                            form.addEventListener('submit', function(event) {
                                event.preventDefault(); // Prevent default form submission

                            
                                var query = input.value.trim(); // Get the input value
                                // Convert to lowercase and replace spaces with hyphens
                                var transformedQuery = query
                                .toLowerCase()
                                .replace(/[’‘'"]/g, '')   // Remove special quotes
                                .replace(/[^a-z0-9\s-]/g, '') // Remove other special characters
                                .replace(/\s+/g, '-'); 
                                console.log('Transformed Query:', transformedQuery);
                                if (query) {
                                     var targetUrl = 'http://localhost/cs-cart/blog/' + transformedQuery;
                                     // Redirect to the desired URL
                                      window.location.href = targetUrl;
                                }
                            });
                        });
                    <?php echo '</script'; ?>
>
                    
                        <div class="blog__sidebar__item">
                            <h4>Tags</h4>
                            <ul>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                <li><a href="<?php echo htmlspecialchars((string) fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</a></li>                            
                                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                               
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Recent Blogs</h4>
                            <div class="blog__sidebar__recent">
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_three_blogs']->value, 'latest_three');
$_smarty_tpl->tpl_vars['latest_three']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['latest_three']->value) {
$_smarty_tpl->tpl_vars['latest_three']->do_else = false;
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subpages']->value, 'subpage');
$_smarty_tpl->tpl_vars['subpage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subpage']->value) {
$_smarty_tpl->tpl_vars['subpage']->do_else = false;
?>
                                 <?php if ($_smarty_tpl->tpl_vars['latest_three']->value['blog_id'] == $_smarty_tpl->tpl_vars['subpage']->value['page_id']) {?>
                                <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" height="70px;" width="70px;">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['latest_three']->value['title'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</h6>
                                        <span><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['latest_three']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </div>
                                </a>
                                 <?php }?>
                                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                   <a href="<?php echo htmlspecialchars((string) fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</a>                           
                                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <div class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subpages']->value, 'subpage');
$_smarty_tpl->tpl_vars['subpage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subpage']->value) {
$_smarty_tpl->tpl_vars['subpage']->do_else = false;
?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pics">
                                    <img  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" height="259px;" width="360px;">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['subpage']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</li>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_blogs_with_descriptions']->value, 'all_blog');
$_smarty_tpl->tpl_vars['all_blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['all_blog']->value) {
$_smarty_tpl->tpl_vars['all_blog']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['subpage']->value['page_id'] == $_smarty_tpl->tpl_vars['all_blog']->value['blog_id']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['all_blog']->value['comment_count'] > 0) {?>
                                         <li><i class="fa fa-comment-o"></i> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['all_blog']->value['comment_count'], ENT_QUOTES, 'UTF-8');?>
 </li>
                                        <?php }?>
                                        
                                        <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <h5><a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a></h5>
                                    <p><?php echo htmlspecialchars((string) smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['subpage']->value['description'] ?: ''),150,"..."), ENT_QUOTES, 'UTF-8');?>
</p>
                                    <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <div class="col-lg-12">

                              <?php $_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>
                                <?php $_smarty_tpl->_assignInScope('pagination', fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value));?>

                                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
                                    <div class="ty-pagination-container cm-pagination-container" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                                    <?php if ($_smarty_tpl->tpl_vars['save_current_page']->value) {?>
                                        <input type="hidden" name="page" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['search']->value['page'] ?? null)===null||$tmp==='' ? $_REQUEST['page'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['save_current_url']->value) {?>
                                        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
                                    <?php }?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_pages'] > 1) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['top_pagination'] == "Y" && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y" || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
                                    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"page"));?>
                                    <?php $_smarty_tpl->_assignInScope('ajax_class', !$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml'] || $_smarty_tpl->tpl_vars['force_ajax']->value ? "cm-ajax" : '');?>
                                    <?php $_smarty_tpl->_assignInScope('ajax_full_render_class', $_smarty_tpl->tpl_vars['full_render']->value ? "cm-ajax-full-render" : '');?>
                                    <?php $_smarty_tpl->_assignInScope('extra_id', (($tmp = $_smarty_tpl->tpl_vars['extra_id']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

                                    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
                                    <div class="ty-pagination__bottom">
                                    <?php }?>
                                    <div class="ty-pagination">
                                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_range']) {?>
                                            <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['prev_range']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_range'], ENT_QUOTES, 'UTF-8');?>
" class="cm-history hidden-phone ty-pagination__item ty-pagination__range <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_range_from'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_range_to'], ENT_QUOTES, 'UTF-8');?>
</a>
                                        <?php }?>
                                        <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>ty-pagination__prev cm-history <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_full_render_class']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['prev_page'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['prev_page'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id']->value).($_smarty_tpl->tpl_vars['extra_id']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i class="fa fa-long-arrow-left"></i></a>

                                        <div class="ty-pagination__items">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['navi_pages'], 'pg');
$_smarty_tpl->tpl_vars['pg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
$_smarty_tpl->tpl_vars['pg']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['pg']->value != $_smarty_tpl->tpl_vars['pagination']->value['current_page']) {?>
                                                    <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pg']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-history ty-pagination__item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_full_render_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id']->value).($_smarty_tpl->tpl_vars['extra_id']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                                <?php } else { ?>
                                                    <span class="ty-pagination__selected"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>

                                        <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>ty-pagination__next cm-history <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_full_render_class']->value, ENT_QUOTES, 'UTF-8');
}?> ty-pagination__right-arrow" <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['next_page']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_page'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id']->value).($_smarty_tpl->tpl_vars['extra_id']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i class="fa fa-long-arrow-right"></i></a>

                                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_range']) {?>
                                            <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['next_range']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_range'], ENT_QUOTES, 'UTF-8');?>
" class="cm-history ty-pagination__item hidden-phone ty-pagination__range <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_range_from'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['next_range_to'], ENT_QUOTES, 'UTF-8');?>
</a>
                                        <?php }?>
                                    </div>
                                    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
                                        </div>
                                    <?php }?>
                                    <?php } else { ?>
                                        <div class="hidden"><a data-ca-scroll=".cm-pagination-container" href="" data-ca-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden"></a></div>
                                    <?php }?>
                                <?php }?>

                                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
                                    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pagination_open", null, null);?>N<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php } elseif ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pagination_open", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php }?>                            
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }?>


<?php }?>


<?php }
}
}
