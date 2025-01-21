{if $line_chart && $line_chart.content}{strip}

<div class="analytics-card-line-chart"
    data-ca-analytics-card="line_chart"
    data-ca-analytics-card-id="{$analytics_card.id}_{$line_chart.id}"
    data-ca-analytics-card-line-chart-content="{$line_chart.content|@json_encode}"
>
    <div class="analytics-card-line-chart__view spinner" data-ca-analytics-card="lineChartMonthView"></div>
</div>

    {literal}
    {/literal}
{/strip}{/if}
