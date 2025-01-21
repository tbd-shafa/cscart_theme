
{if $pie_chart && $pie_chart.content}{strip}

<div class="analytics-card-pie-chart"
    data-ca-analytics-card="pie_chart"
    data-ca-analytics-card-id="{$analytics_card.id}_{$pie_chart.id}"
    data-ca-analytics-card-pie-chart-content="{$pie_chart.content|@json_encode}"
>
    <div class="analytics-card-pie-chart__view" data-ca-analytics-card="pieChartView"></div>
</div>

    {literal}

    {/literal}
{/strip}{/if}
