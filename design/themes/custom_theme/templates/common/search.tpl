
<div class="hero__search__form">
    <form action="{""|fn_url}" name="search_form" method="get">
     
       <div class="hero__search__categories hero__categories__alls">
        All Categories
        <span class="arrow_carrot-down"></span>
    </div>

    <!-- Dropdown for categories -->
    <div class="category-dropdown" style="display: none;">>
       <select name="category_id" class="form-control" id="category_select">
        <option value="">Select a category</option>
        {foreach from=$top_level_categories item=category}
            <option value="{$category.category_link}">
                {$category.category_name}
            </option>
        {/foreach}
    </select>
    </div>
    
    <script>
        $(document).ready(function() {
            $('.hero__categories__alls').on('click', function() {
                $('.category-dropdown').slideToggle(400);
                $('#category_select').on('change', function() {
                var selectedValue = $(this).val();
                if (selectedValue) {
                    window.location.href = selectedValue; // Redirect to the selected category link
                }
            });
            });
        });
    </script> 

        <input type="hidden" name="match" value="all" />
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />

        {hook name="search:additional_fields"}{/hook}

        {strip}
            {if $settings.General.search_objects}
                {assign var="search_title" value=__("storefront_search_general")}
            {else}
                {assign var="search_title" value=__("search_products")}
            {/if}
            <input type="text" name="q" value="{$search.q}" id="search_input{$smarty.capture.search_input_id}" title="{$search_title}" class="ty-search-block__input cm-hint" />
            {if $settings.General.search_objects}
                {include file="buttons/magnifier.tpl" but_name="search.results" alt=__("storefront_search_button")}
            {else}
                {include file="buttons/magnifier.tpl" but_name="products.search" alt=__("storefront_search_button")}
            {/if}
        {/strip}

        {capture name="search_input_id"}{$block.snapping_id}{/capture}

    </form>
</div>
