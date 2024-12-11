

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
    $.fn.renderBarChart = function (data) {
        const ctx = this[0].getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.labels, // X-axis labels (dates)
                datasets: data.datasets // Datasets (Sales Value and Units Sold)
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Sales Data'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    };

    // Function to render bar charts after data is loaded
    function renderBarCharts() {
        $('[data-ca-analytics-card="bar_chart"]').each(function () {
            const content = $(this).data('ca-analytics-card-bar-chart-content');
            const $view = $(this).find('[data-ca-analytics-card="barChartView"]');
            let barChartData;

            try {
                if (typeof content === 'string') {
                    barChartData = JSON.parse(content);
                } else {
                    barChartData = content;
                }
            } catch (e) {
                console.error('Error parsing JSON:', e);
                return;
            }

            if (!barChartData || !barChartData.labels || !barChartData.datasets) {
                console.warn('No valid bar chart data available.');
                return;
            }

            $view.html('<canvas></canvas>');
            const $canvas = $('canvas', $view);
            $canvas.renderBarChart(barChartData);
            $view.removeClass('spinner');
        });
    }

    $(document).ready(function () {
        renderBarCharts();
    });

    $(document).ajaxSuccess(function (event, xhr, settings) {
        if (settings.url.includes('is_ajax=1')) {
            renderBarCharts();
        }
    });
})(jQuery);
</script>
{/literal}
{/strip}{/if}
