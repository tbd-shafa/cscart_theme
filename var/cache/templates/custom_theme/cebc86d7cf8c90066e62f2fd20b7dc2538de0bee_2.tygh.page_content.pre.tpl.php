<?php
/* Smarty version 4.3.0, created on 2024-11-27 02:25:40
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/blog/hooks/pages/page_content.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6746f3a4a99dd7_91523206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cebc86d7cf8c90066e62f2fd20b7dc2538de0bee' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/blog/hooks/pages/page_content.pre.tpl',
      1 => 1732703128,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6746f3a4a99dd7_91523206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['page']->value['description'] && $_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 order-md-1 order-2">
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
                   <?php if ($_smarty_tpl->tpl_vars['page']->value['tags']) {?>
                    <div class="blog__sidebar__item">
                        <h4>Tags</h4>
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['tags'], 'tags');
$_smarty_tpl->tpl_vars['tags']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tags']->value) {
$_smarty_tpl->tpl_vars['tags']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['tags']->value['tag_id'] == $_smarty_tpl->tpl_vars['tag']->value['tag_id']) {?>
                                       <li><a href="<?php echo htmlspecialchars((string) fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                               
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                    <?php }?>

                    <div class="blog__sidebar__item">
                        <h4>Recent Blogs</h4>
                        <div class="blog__sidebar__recent">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_three_blogs']->value, 'related');
$_smarty_tpl->tpl_vars['related']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['related']->value) {
$_smarty_tpl->tpl_vars['related']->do_else = false;
?>
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/blog/<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['related']->value['seo_name'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
/" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['related']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['related']->value['title'], ENT_QUOTES, 'UTF-8');?>
" height="70px" width="70px">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['related']->value['title'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</h6>
                                        <span><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['related']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </div>
                                </a>
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

            <div class="col-lg-8 col-md-7 order-md-1 order-1">
                <div class="blog__details__text">
                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
" style="width: 750px; height: 631px;">
                    <p><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</p>
                </div>

                <div class="blog__details__content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog__details__author">
                                <div class="blog__details__author__pic">
                                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/img/blog/details/details-author.jpg" alt="Author">
                                </div>
                                <div class="blog__details__author__text">
                                    <h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['author'], ENT_QUOTES, 'UTF-8');?>
</h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog__details__widget">
                                <ul>
                                    <li><span>Categories:</span> <?php if ($_smarty_tpl->tpl_vars['page']->value['categories']) {
echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['categories'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');
} else { ?>NA<?php }?></li>
                                    <li>
                                        <?php if ($_smarty_tpl->tpl_vars['page']->value['tags']) {?>
                                            <span>Tags:</span>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                                <a href="<?php echo htmlspecialchars((string) fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tags']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tags']->value['last'] : null)) {?>, <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </li>
                                </ul>

                                <div class="blog__details__social">
                                    <!-- Facebook Share -->
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <!-- Twitter Share -->
                                    <a href="https://twitter.com/intent/tweet?url=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
&text=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>

                                    <!-- LinkedIn Share -->
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>

                                    <!-- Email Share -->
                                    <a href="mailto:?subject=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
&body=Check out this blog: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/hooks/pages/page_content.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/hooks/pages/page_content.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['page']->value['description'] && $_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 order-md-1 order-2">
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
                   <?php if ($_smarty_tpl->tpl_vars['page']->value['tags']) {?>
                    <div class="blog__sidebar__item">
                        <h4>Tags</h4>
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['tags'], 'tags');
$_smarty_tpl->tpl_vars['tags']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tags']->value) {
$_smarty_tpl->tpl_vars['tags']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['tags']->value['tag_id'] == $_smarty_tpl->tpl_vars['tag']->value['tag_id']) {?>
                                       <li><a href="<?php echo htmlspecialchars((string) fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                               
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                    <?php }?>

                    <div class="blog__sidebar__item">
                        <h4>Recent Blogs</h4>
                        <div class="blog__sidebar__recent">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_three_blogs']->value, 'related');
$_smarty_tpl->tpl_vars['related']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['related']->value) {
$_smarty_tpl->tpl_vars['related']->do_else = false;
?>
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/blog/<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['related']->value['seo_name'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
/" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['related']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['related']->value['title'], ENT_QUOTES, 'UTF-8');?>
" height="70px" width="70px">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['related']->value['title'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</h6>
                                        <span><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['related']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </div>
                                </a>
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

            <div class="col-lg-8 col-md-7 order-md-1 order-1">
                <div class="blog__details__text">
                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
" style="width: 750px; height: 631px;">
                    <p><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</p>
                </div>

                <div class="blog__details__content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog__details__author">
                                <div class="blog__details__author__pic">
                                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/img/blog/details/details-author.jpg" alt="Author">
                                </div>
                                <div class="blog__details__author__text">
                                    <h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['author'], ENT_QUOTES, 'UTF-8');?>
</h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog__details__widget">
                                <ul>
                                    <li><span>Categories:</span> <?php if ($_smarty_tpl->tpl_vars['page']->value['categories']) {
echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['categories'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');
} else { ?>NA<?php }?></li>
                                    <li>
                                        <?php if ($_smarty_tpl->tpl_vars['page']->value['tags']) {?>
                                            <span>Tags:</span>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                                <a href="<?php echo htmlspecialchars((string) fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tags']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tags']->value['last'] : null)) {?>, <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </li>
                                </ul>

                                <div class="blog__details__social">
                                    <!-- Facebook Share -->
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <!-- Twitter Share -->
                                    <a href="https://twitter.com/intent/tweet?url=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
&text=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>

                                    <!-- LinkedIn Share -->
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>

                                    <!-- Email Share -->
                                    <a href="mailto:?subject=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
&body=Check out this blog: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
}
}
}
