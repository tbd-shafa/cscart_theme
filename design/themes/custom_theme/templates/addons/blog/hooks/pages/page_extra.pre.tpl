
{if $page.page_type == $smarty.const.PAGE_TYPE_BLOG}

{if $subpages}

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

                    <script type="text/javascript">
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
                    </script>
                    
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
                               {foreach from=$latest_three_blogs item=latest_three}
                                {foreach from=$subpages item="subpage"}
                                 {if $latest_three.blog_id == $subpage.page_id}
                                <a href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img  src="{$subpage.main_pair.icon.image_path}" alt="{$subpage.seo_name}" height="70px;" width="70px;">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>{$latest_three.title|escape}</h6>
                                        <span>{$latest_three.timestamp|date_format:"`$settings.Appearance.date_format`"}</span>
                                    </div>
                                </a>
                                 {/if}
                                 {/foreach}
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
                <div class="col-lg-8 col-md-7">
                {include file="common/pagination.tpl"}
                    <div class="row">
                      {foreach from=$subpages item="subpage"}
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pics">
                                    <img  src="{$subpage.main_pair.icon.image_path}" alt="{$subpage.seo_name}" height="259px;" width="360px;">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> {$subpage.timestamp|date_format:"`$settings.Appearance.date_format`"}</li>
                                        {foreach from=$all_blogs_with_descriptions item=all_blog}
                                        {if $subpage.page_id == $all_blog.blog_id}
                                        {if $all_blog.comment_count > 0}
                                         <li><i class="fa fa-comment-o"></i> {$all_blog.comment_count} </li>
                                        {/if}
                                        
                                        {/if}
                                        {/foreach}
                                    </ul>
                                    <h5><a href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}"> {$subpage.page}</a></h5>
                                    <p>{$subpage.description|strip_tags|truncate:150:"..."}</p>
                                    <a href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                      {/foreach}
                        <div class="col-lg-12">

                              {$id = $id|default:"pagination_contents"}
                                {$pagination = $search|fn_generate_pagination}

                                {if $smarty.capture.pagination_open != "Y"}
                                    <div class="ty-pagination-container cm-pagination-container" id="{$id}">

                                    {if $save_current_page}
                                        <input type="hidden" name="page" value="{$search.page|default:$smarty.request.page}" />
                                    {/if}

                                    {if $save_current_url}
                                        <input type="hidden" name="redirect_url" value="{$config.current_url}" />
                                    {/if}
                                {/if}

                                {if $pagination.total_pages > 1}
                                    {if $settings.Appearance.top_pagination == "Y" && $smarty.capture.pagination_open != "Y" || $smarty.capture.pagination_open == "Y"}
                                    {$c_url = $config.current_url|fn_query_remove:"page"}
                                    {$ajax_class = (!$config.tweaks.disable_dhtml || $force_ajax) ? "cm-ajax" : ""}
                                    {$ajax_full_render_class = ($full_render) ? "cm-ajax-full-render" : ""}
                                    {$extra_id = $extra_id|default:""}

                                    {if $smarty.capture.pagination_open == "Y"}
                                    <div class="ty-pagination__bottom">
                                    {/if}
                                    <div class="ty-pagination">
                                        {if $pagination.prev_range}
                                            <a data-ca-scroll=".cm-pagination-container" href="{"`$c_url`&page=`$pagination.prev_range``$extra_url`"|fn_url}" data-ca-page="{$pagination.prev_range}" class="cm-history hidden-phone ty-pagination__item ty-pagination__range {$ajax_class}" data-ca-target-id="{$id}">{$pagination.prev_range_from} - {$pagination.prev_range_to}</a>
                                        {/if}
                                        <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn {if $pagination.prev_page}ty-pagination__prev cm-history {$ajax_class} {$ajax_full_render_class}{/if}" {if $pagination.prev_page}href="{"`$c_url`&page=`$pagination.prev_page`"|fn_url}" data-ca-page="{$pagination.prev_page}" data-ca-target-id="{$id|cat:$extra_id}"{/if}><i class="fa fa-long-arrow-left"></i></a>

                                        <div class="ty-pagination__items">
                                            {foreach from=$pagination.navi_pages item="pg"}
                                                {if $pg != $pagination.current_page}
                                                    <a data-ca-scroll=".cm-pagination-container" href="{"`$c_url`&page=`$pg``$extra_url`"|fn_url}" data-ca-page="{$pg}" class="cm-history ty-pagination__item {$ajax_class} {$ajax_full_render_class}" data-ca-target-id="{$id|cat:$extra_id}">{$pg}</a>
                                                {else}
                                                    <span class="ty-pagination__selected">{$pg}</span>
                                                {/if}
                                            {/foreach}
                                        </div>

                                        <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn {if $pagination.next_page}ty-pagination__next cm-history {$ajax_class} {$ajax_full_render_class}{/if} ty-pagination__right-arrow" {if $pagination.next_page}href="{"`$c_url`&page=`$pagination.next_page``$extra_url`"|fn_url}" data-ca-page="{$pagination.next_page}" data-ca-target-id="{$id|cat:$extra_id}"{/if}><i class="fa fa-long-arrow-right"></i></a>

                                        {if $pagination.next_range}
                                            <a data-ca-scroll=".cm-pagination-container" href="{"`$c_url`&page=`$pagination.next_range``$extra_url`"|fn_url}" data-ca-page="{$pagination.next_range}" class="cm-history ty-pagination__item hidden-phone ty-pagination__range {$ajax_class}" data-ca-target-id="{$id}">{$pagination.next_range_from} - {$pagination.next_range_to}</a>
                                        {/if}
                                    </div>
                                    {if $smarty.capture.pagination_open == "Y"}
                                        </div>
                                    {/if}
                                    {else}
                                        <div class="hidden"><a data-ca-scroll=".cm-pagination-container" href="" data-ca-page="{$pg}" data-ca-target-id="{$id}" class="hidden"></a></div>
                                    {/if}
                                {/if}

                                {if $smarty.capture.pagination_open == "Y"}
                                    <!--{$id}--></div>
                                    {capture name="pagination_open"}N{/capture}
                                {elseif $smarty.capture.pagination_open != "Y"}
                                    {capture name="pagination_open"}Y{/capture}
                                {/if}                            
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

{/if}

{* {if $page.description}
    {capture name="mainbox_title"}<span class="ty-blog__post-title" {live_edit name="page:page:{$page.page_id}"}>{$page.page}</span>{/capture}
{/if} *}

{/if}


