
{if $content|trim}
    <div class="latest-product__text ty-sidebox-important{if isset($hide_wrapper)} cm-hidden-wrapper{/if}{if $hide_wrapper} hidden{/if}{if $block.user_class} {$block.user_class}{/if}{if $content_alignment == "RIGHT"} ty-float-right{elseif $content_alignment == "LEFT"} ty-float-left{/if}">
        <h4 class="{if $header_class} {$header_class}{/if}">
            {hook name="wrapper:sidebox_important_title"}
            {if $smarty.capture.title && $smarty.capture.title|trim}
                {$smarty.capture.title nofilter}
            {else}
                        <span>{$title nofilter}</span>
            {/if}
            {/hook}
        </h4>
        <div class="">{$content|default:"&nbsp;" nofilter}</div>
    </div>
{/if}
