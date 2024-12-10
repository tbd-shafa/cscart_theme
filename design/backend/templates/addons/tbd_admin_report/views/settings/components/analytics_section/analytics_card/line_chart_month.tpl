{if $line_chart_month && $line_chart_month.content}{strip}

<div class="analytics-card-line-chart"
    data-ca-analytics-card="line_chart_month"
    data-ca-analytics-card-id="{$analytics_card.id}_{$line_chart_month.id}"
    data-ca-analytics-card-line-chart-content="{$line_chart_month.content|@json_encode}"
>
    <div class="analytics-card-line-chart__view spinner" data-ca-analytics-card="lineChartMonthView"></div>
</div>

    {literal}

    <script>
  (function ($) {
    // Function to render the line chart
    $.fn.renderLineChart = function (data) {
        const ctx = this[0].getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: data.labels, // Month labels (e.g., 2024-11, 2024-12)
                datasets: data.datasets // Dataset (online sales, offline sales)
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
                                return tooltipItem.dataset.label + ': ' + tooltipItem.raw; // Tooltip format
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
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

    // Function to render the line chart after data is loaded
    function renderLineCharts() {
        $('[data-ca-analytics-card="line_chart_month"]').each(function () {
            const content = $(this).data('ca-analytics-card-line-chart-content');
            console.log(content); // Debugging: Check the content in the browser console
            
            const $view = $(this).find('[data-ca-analytics-card="lineChartMonthView"]');
            let lineChartData;

            try {
                // If content is a string, parse it; otherwise, use it directly
                if (typeof content === 'string') {
                    lineChartData = JSON.parse(content);
                } else {
                    lineChartData = content;
                }
            } catch (e) {
                console.error('Error parsing JSON:', e);
                return;
            }

            // If the line chart data is empty or invalid, exit early
            if (!lineChartData || !lineChartData.labels || !lineChartData.datasets) {
                console.warn('No valid line chart data available.');
                return;
            }

            // Clear any previous content and create a new canvas element for the chart
            $view.html('<canvas></canvas>');
            const $canvas = $('canvas', $view);
            $canvas.renderLineChart(lineChartData);

            // Hide or remove the spinner
            $view.removeClass('spinner'); // If the spinner class adds a visual effect
            $view.find('.spinner').remove();
            
        });
    }

    // Handle the initial page load
    $(document).ready(function () {
        renderLineCharts();
    });

    // Handle the AJAX response and dynamically render the line chart
    $(document).ajaxSuccess(function (event, xhr, settings) {
        if (settings.url.includes('is_ajax=1')) {
            const response = xhr.responseJSON;
            if (response && response.html && response.html.report_content) {
                // Insert the HTML content returned by AJAX into the page
                $('#report-container').html(response.html.report_content);

                // Now render the line charts
                renderLineCharts();
            }
        }
    });
})(jQuery);


    </script>
    {/literal}
{/strip}{/if}
