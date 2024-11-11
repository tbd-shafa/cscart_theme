<script src="{$config.current_location}/design/themes/custom_theme/js/main.js"></script>
 <style>

.custom_breadcome {
    width: calc(100vw - 8px);
    margin-left: calc((1170px - 100vw) / 2);
}
 </style>

 {if $page.page_type == "B" && $page.seo_name != "blog"}

    <div class="custom_breadcome">
    <section class="blog-details-hero set-bg" data-setbg="{$page.main_pair.icon.image_path}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog__details__hero__text">
                            <h2 style="color:black;">{$page.page}</h2>
                            <ul>
                                <li style="color:black;">{$page.author}</li>
                            <li style="color:black;">{$page.timestamp|date_format:"%B %e, %Y"}</li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>
        {hook name="pages:page_content"}
    
        {/hook}

        {capture name="mainbox_title"}<span {live_edit name="page:page:{$page.page_id}"}>{$page.page}</span>{/capture}
        {hook name="pages:page_extra"}
        {/hook}
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
                    {foreach from=$related_blogs item=related}
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                        
                                        <div class="blog__item__pic">
                                                <img src="{$page.main_pair.icon.image_path}" alt="{$related.seo_name}" >
                                        </div>
                        
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i>{$related.timestamp|date_format:"`$settings.Appearance.date_format`"}</li>
                                    
                                    {if $related.comment_count > 0}
                                    <li><i class="fa fa-comment-o"></i> {$related.comment_count} </li>
                                    {/if}
                                    
                                </ul>
                                <h5> <a href="http://localhost/cs-cart2/blog/{$related.seo_name|escape}/">{$related.title|escape}</a></h5>
                                <p>{$related.description|strip_tags|truncate:150:"..."}  </p>
                            </div>
                        </div>
                    </div>
                    {/foreach} 
                </div>
            </div>
        </section>

    {elseif $page.page_type == "B" && $page.seo_name == "blog"}
     <div class="custom_breadcome">
        <section class="breadcrumb-section set-bg" data-setbg="{$config.current_location}/design/themes/custom_theme/img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>{$page.page}</h2>
                            <div class="breadcrumb__option">
                                <a href="{$config.current_location}">Home</a>
                                {$page.page}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  

        {hook name="pages:page_content"}
        <div {live_edit name="page:description:{$page.page_id}"}>{$page.description nofilter}</div>
        {/hook}
   

    {capture name="mainbox_title"}<span {live_edit name="page:page:{$page.page_id}"}>{$page.page}</span>{/capture}
        
    {hook name="pages:page_extra"}
    {/hook}

    {else}
    <div class="custom_breadcome">
    <section class="breadcrumb-section set-bg" data-setbg="{$config.current_location}/design/themes/custom_theme/img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>{$page.page}</h2>
                            <div class="breadcrumb__option">
                                <a href="{$config.current_location}">Home</a>
                                {$page.page}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="ty-wysiwyg-content">

        {hook name="pages:page_content"}
        <div {live_edit name="page:description:{$page.page_id}"}>{$page.description nofilter}</div>
        {/hook}
    </div>

    {capture name="mainbox_title"}<span {live_edit name="page:page:{$page.page_id}"}>{$page.page}</span>{/capture}
        
    {hook name="pages:page_extra"}
    {/hook}
{/if}

