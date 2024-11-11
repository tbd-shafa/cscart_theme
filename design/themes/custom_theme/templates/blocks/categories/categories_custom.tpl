{** block-description:custom **}

{if $items}

<div class="hero__categories">
    <div class="hero__categories__all">
        <i class="fa fa-bars"></i>
        All departments
    </div>
    <ul>
        {foreach from=$top_level_categories item=category}
            <li><a href="{$category.category_link}">{$category.category_name}</a></li>
        {/foreach}
    </ul>
</div>

{/if}