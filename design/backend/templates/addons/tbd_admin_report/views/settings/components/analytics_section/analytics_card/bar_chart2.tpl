

{if $bar_chart2 && $bar_chart2.content}{strip}
<div class="analytics-card-bar-chart"
    data-ca-analytics-card="bar_chart"
    data-ca-analytics-card-id="{$analytics_card.id}_{$bar_chart2.id}"
    data-ca-analytics-card-bar-chart-content="{$bar_chart2.content|@json_encode}">
    <div class="analytics-card-bar-chart__view spinner" data-ca-analytics-card="barChartView"></div>
</div>

{literal}
<script>
(function ($) {
    
    // Function to render the bar chart
    

    $(document).ready(function () {
        //renderBarCharts();
    });

})(jQuery);
</script>
{/literal}
{/strip}{/if}
