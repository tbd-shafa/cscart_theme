
{if $pie_chart && $pie_chart.content}{strip}

<div class="analytics-card-pie-chart"
    data-ca-analytics-card="pie_chart"
    data-ca-analytics-card-id="{$analytics_card.id}_{$pie_chart.id}"
    data-ca-analytics-card-pie-chart-content="{$pie_chart.content|@json_encode}"
>
    <div class="analytics-card-pie-chart__view spinner" data-ca-analytics-card="pieChartView"></div>
</div>

    {literal}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
       (function ($) {
            // Function to render the pie chart
            $.fn.renderPieChart = function (data) {
                const ctx = this[0].getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: data.map(item => item.label), // Labels for the pie chart
                        datasets: [{
                            data: data.map(item => item.value), // Values for the pie chart
                            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#FF9F40'], // Color scheme
                        }],
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top', // Position of legend
                            },
                            tooltip: {
                                callbacks: {
                                    label: function (tooltipItem) {
                                        return tooltipItem.label + ': ' + tooltipItem.raw; // Tooltip label format
                                    }
                                }
                            }
                        }
                    }
                });
            };

            // Function to render pie chart after data is loaded
            function renderPieCharts() {
                $('[data-ca-analytics-card="pie_chart"]').each(function () {
                    const content = $(this).data('ca-analytics-card-pie-chart-content');
                    console.log(content);  // Debugging: Check the content in the browser console
                    
                    const $view = $(this).find('[data-ca-analytics-card="pieChartView"]');
                    let pieChartData;

                    try {
                        // If content is a string, parse it; otherwise, use it directly
                        if (typeof content === 'string') {
                            pieChartData = JSON.parse(content);
                        } else {
                            pieChartData = content;
                        }
                    } catch (e) {
                        console.error('Error parsing JSON:', e); // Catch errors in parsing
                        return; // Exit early if JSON parsing fails
                    }

                    // If the pie chart data is empty or invalid, exit early
                    if (!pieChartData || !Array.isArray(pieChartData) || pieChartData.length === 0) {
                        console.warn('No valid pie chart data available.');
                        return;
                    }

                    // Clear any previous content and create a new canvas element for the chart
                    $view.html('<canvas></canvas>');

                    // Use a delay to ensure content is fully loaded before rendering the chart
                    setTimeout(function() {
                        // Render the pie chart
                        $('canvas', $view).renderPieChart(pieChartData);
                    }, 100);  // Delay to allow the page to fully render
                });
            }

            // Handle the initial page load
            $(document).ready(function () {
                renderPieCharts();
            });

                    // Handle the AJAX response and dynamically render the pie chart
                    $(document).ajaxSuccess(function (event, xhr, settings) {
                        if (settings.url.includes('is_ajax=1')) {
                            const response = xhr.responseJSON;  // Get the JSON response
                            if (response && response.html && response.html.report_content) {
                                // Insert the HTML content returned by AJAX into the page
                                $('#report-container').html(response.html.report_content);  // Assuming this is the container for the report content

                                // Now render the pie charts
                                renderPieCharts();
                            }
                        }
                    });
        })(jQuery);

    </script>
    {/literal}
{/strip}{/if}
