{** block-description:custom **}
<style>
.cat{
    padding-top:5px;
}
</style>
{if $items}

<div class="hero__categories">
    <div class="hero__categories__all" style="height:45px;">
        <div class="cat" style="paddding-top:1px;">
        <i class="fa fa-bars"></i>
            All departments
        </div>
       
    </div>
    <ul style="padding-top:1px;">
        {foreach from=$top_level_categories item=category}
            <li><a href="{$category.category_link}">{$category.category_name}</a></li>
        {/foreach}
    </ul>
</div>

{/if}