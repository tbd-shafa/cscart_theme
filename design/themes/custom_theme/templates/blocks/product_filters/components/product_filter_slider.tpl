<style>
.inpt1{
    min-width:120px;
}
</style>
{script src="js/lib/jqueryuitouch/jquery.ui.touch-punch.min.js"}
{$min = $filter.min}
{$max = $filter.max}
{$left = $filter.left|default:$min}
{$right = $filter.right|default:$max}
{$disable_slider = $filter.disable}

{if $filter.selected_range}
    {$value = "{$filter.current_left}{$smarty.const.FILTERS_HASH_FEATURE_SEPARATOR}{$filter.current_right}"}

    {if $filter.extra}
        {$value = "{$value}{$smarty.const.FILTERS_HASH_FEATURE_SEPARATOR}{$filter.extra}"}
    {/if}
{/if}


     <div class="sidebar__item">
                          
                            <div class="price-range-wrap">
                               <div id="content_{$filter_uid}" class="cm-product-filters-checkbox-container ty-price-slider {if $collapse}hidden{/if} {$extra_class}">
                                        <div id="slider_{$filter_uid}" class="ty-range-slider cm-range-slider price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                            <ul class="ty-range-slider__wrapper">
                                                <li class="ty-range-slider__item" style="left: 0%;">
                                                    <span class="ty-range-slider__num">
                                                    
                                                    </span>
                                                </li>
                                                <li class="ty-range-slider__item" style="left: 100%;">
                                                    <span class="ty-range-slider__num">
                                                    
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>

                                        <input id="elm_checkbox_slider_{$filter_uid}" data-ca-filter-id="{$filter.filter_id}" class="cm-product-filters-checkbox hidden" type="checkbox" name="product_filters[{$filter.filter_id}]" value="{$value}" {if $filter.selected_range}checked="checked"{/if} />

                                        {* Slider params *}
                                        <input type="hidden" id="slider_{$filter_uid}_json" value='{ldelim}
                                            "disabled": {$disable_slider|to_json},
                                            "min": {$min},
                                            "max": {$max},
                                            "left": {$left},
                                            "right": {$right},
                                            "step": {$filter.round_to},
                                            "extra": "{$filter.extra}"
                                        {rdelim}' />
                                        {* /Slider params *}
                                </div>
                                <div class="range-slider">
                                    <div class="price-input"  style="width: 100%; margin-left: 8px;">

                                                <input type="text"
                                                   class="inpt"
                                                    id="slider_{$filter_uid}_left"
                                                    name="left_{$filter_uid}"
                                                    value="{$filter.prefix nofilter}{$left}"
                                                    {if $disable_slider}
                                                        disabled="disabled"
                                                    {/if}
                                                    data-ca-previous-value="{$left}"/>
                                               
                                           
                                               
                                                <input type="text"
                                                    class="inpt1"
                                                    id="slider_{$filter_uid}_right"
                                                    name="right_{$filter_uid}"
                                                    value="{$filter.prefix nofilter}{$right}"
                                                    {if $disable_slider}
                                                        disabled="disabled"
                                                    {/if}
                                                    data-ca-previous-value="{$right}"/>
                                                {$filter.suffix nofilter}
                                    </div>
                                </div>
                            </div>
                        </div>