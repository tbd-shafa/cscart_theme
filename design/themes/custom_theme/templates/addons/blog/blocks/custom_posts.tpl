{** block-description:blog.custom_post **}

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
            {foreach from=$latest_three_blogs item=blog}
                <div class="col-lg-4 col-md-4 col-sm-6">
                 {foreach from=$items item=all_blog}
                  {if $blog.blog_id == $all_blog.page_id}
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{$all_blog.main_pair.icon.image_path}" alt="{$all_blog.seo_name}" style="width: 360px; height: 259px;">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> {$page.timestamp|date_format:"`$settings.Appearance.date_format`"}</li>
                                 {if $blog.comment_count > 0}
                                <li><i class="fa fa-comment-o"></i> {$blog.comment_count} </li>
                                {/if}
                            </ul>
                            <h5><a href="{"pages.view?page_id=`$all_blog.page_id`"|fn_url}">{$all_blog.page|escape}</a></h5>
                            <p>
                              {$blog.description|strip_tags|truncate:150:"..."} 
                            </p>
                        </div>
                    </div>
                   {/if}
                 {/foreach}
                </div>
            {/foreach}
        </div>
    </div>
</section>




