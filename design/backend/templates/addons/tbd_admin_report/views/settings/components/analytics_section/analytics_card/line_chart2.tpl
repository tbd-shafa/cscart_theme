{if $line_chart2 && $line_chart2.content}{strip}

<div class="analytics-card-line-chart2"
    data-ca-analytics-card="line_chart2"
    data-ca-analytics-card-id="{$analytics_card.id}_{$line_chart2.id}"
    data-ca-analytics-card-line-chart2-content="{$line_chart2.content|@json_encode}"
>
    <div class="analytics-card-line-chart2__view spinner" data-ca-analytics-card="lineChartMonthView"></div>
</div>

    {literal}

    {/literal}
{/strip}{/if}
