
{if $page.description && $page.page_type == $smarty.const.PAGE_TYPE_BLOG}
  <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div> 
                        
                        <div class="blog__sidebar__item">
                            <h4>Tags</h4>
                            <ul>
                              {foreach from=$tags item="tag"}
                                <li><a href="{"tags.view?tag=`$tag.tag`"|fn_url}">{$tag.tag}</a></li>                            
                                 {/foreach}
                               
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Recent Blogs</h4>
                            <div class="blog__sidebar__recent">
                               {foreach from=$latest_three_blogs item=related}
                                <a href="http://localhost/cs-cart/blog/{$related.seo_name|escape}/" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img  src="{$related.image_path}" alt="{$related.title}" height="70px;" width="70px;">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>{$related.title|escape}</h6>
                                        <span>{$related.timestamp|date_format:"`$settings.Appearance.date_format`"}</span>
                                    </div>
                                </a>
                                 {/foreach} 
                                
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                 {foreach from=$tags item="tag"}
                                   <a href="{"tags.view?tag=`$tag.tag`"|fn_url}">{$tag.tag}</a>                           
                                 {/foreach}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="{$page.main_pair.icon.image_path}" alt="{$page.page}" style="width: 750px; height: 631px;">
                        <p>{$page.description nofilter}</p>
                       
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="{$config.current_location}/design/themes/custom_theme/img/blog/details/details-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>{$page.author}</h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> NA</li>
                                        <li> 
                                          {if $page.tags}
                                            <div id="content_tags_tab">
                                                <div class="ty-control-group">
                                                    <ul class="clearfix">
                                                        <li>
                                                            <span>Tags:</span>
                                                            {foreach from=$page.tags item="tag" name="tags"}
                                                                {$tag_name = $tag.tag|escape:url}
                                                                <a href="{"tags.view?tag=`$tag_name`"|fn_url}">
                                                                    {$tag.tag}
                                                                </a>
                                                                {if !$smarty.foreach.tags.last}, {/if} 
                                                            {/foreach}
                                                        </li>
                                                    </ul>
                                                </div>  
                                            </div>
                                        {/if}
                                        </li>

                                    </ul>
                                   
                                    <div class="blog__details__social">
                                        <!-- Facebook Share -->
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={$page.url}" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        
                                        <!-- Twitter Share -->
                                        <a href="https://twitter.com/intent/tweet?url={$page.url}&text={$page.page}" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        
                                        <!-- Google Plus Share (Google+ has been shut down) -->
                                        <a href="https://plus.google.com/share?url={$page.url}" target="_blank">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        
                                        <!-- LinkedIn Share -->
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={$page.url}" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                        
                                        <!-- Email Share -->
                                        <a href="mailto:?subject={$page.page}&body=Check out this blog: {$page.url}" target="_blank">
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
{/if}


