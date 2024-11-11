{** block-description:custom_design **}
<style>
    .banner__pic img {
        width: 555px;
        height: 296px;
    }
</style>
<div class="banner">
    <div class="container">
        <div class="row">
            {foreach from=$items item=banner}
                {if $banner.type == "G" && $banner.main_pair.icon.image_path}
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <a href="{$banner.url|fn_url}" {if $banner.target == "B"}target="_blank"{/if}>
                                <img src="{$banner.main_pair.icon.image_path}" alt="{$banner.banner|escape}">
                            </a>
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
    </div>
</div>
