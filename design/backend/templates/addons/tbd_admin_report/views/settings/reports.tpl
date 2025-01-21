


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{literal}
<script>
    // Handle the AJAX response and dynamically render the line chart
    (function (_, $) {


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
            if($(this).hasClass('loaded')){
                return;
            }
            $(this).addClass('loaded');
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
    const chartInstances = {}; // Object to store chart instances

                // Generate a random chart ID
                function generateRandomId() {
                    return 'chart_' + Math.floor(Math.random() * 100000);
                }
                // Function to extract dynamic keys
                function getValueKeys(data) {
                    const firstItem = data[0]; // Assuming all objects have the same structure
                    return Object.keys(firstItem).filter(key => key !== 'label'); // Exclude 'label'
                }

                
                // Pie chart rendering function
                $.fn.renderPieChart = function (data, valueKey,dynamicId) {
                    const ctx = this[0].getContext('2d');

    

                    // Destroy the existing chart instance if it exists
                    if (chartInstances[dynamicId]) {
                        chartInstances[dynamicId].destroy();
                    }
                    chartInstances[dynamicId] = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: data.map(item => item.label),
                            datasets: [{
                                data: data.map(item => item[valueKey]),
                                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#FF9F40'],
                            }],
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                tooltip: {
                                    enabled: true, // Enable tooltips
                                    mode: 'index',
                                    intersect: false,
                                    callbacks: {
                                        label: function (tooltipItem) {
                                            const item = data[tooltipItem.dataIndex];
                                            const value = parseFloat(item[valueKey]);
                                            const total = data.reduce((sum, currentItem) => sum + parseFloat(currentItem[valueKey]), 0);

                                            const percent = ((value / total) * 100).toFixed(2); // Calculate percentage

                                            return [
                                                `${item.label}: ${valueKey.includes('sales') ? 'Dhs' : ''}${value}`, // Value label
                                                `${percent}%` // Percentage label
                                            ];
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
                    if($(this).hasClass('loaded')){
                        return;
                    }
                    $(this).addClass('loaded');
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
                    $view.html('');
                    Object.keys(pieChartData[0]).forEach(key => {
                        if(key != 'label'){
                        const dynamicId = 'myPieChart' + Math.floor(Math.random() * 100000);
                        $view.append(`<h5 style="text-transform: capitalize; margin-to:20px;">${key.replace('_', ' ')}</h3>`);

                        $view.append('<canvas id="'+dynamicId+'"></canvas>');
                        
                        $('#'+dynamicId+'', $view).renderPieChart(pieChartData, key,dynamicId);
                        }
                        
                    });
                    
                    // Clear any previous content and create a new canvas element for the chart
                    
                    
                });
            }

    $.fn.renderLineChart2 = function (data) {
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
    function renderLineCharts2() {
        $('[data-ca-analytics-card="line_chart2"]').each(function () {
            if($(this).hasClass('loaded')){
                return;
            }
            $(this).addClass('loaded');
            const content = $(this).data('ca-analytics-card-line-chart2-content');
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
            console.log(lineChartData['datasets']);
            $view.html('');
            Object.keys(lineChartData['datasets']).forEach(key => {
                const dynamicId = 'myPieChart' + Math.floor(Math.random() * 100000);
                $view.append(`<h5 style="text-transform: capitalize; margin-to:20px;">${lineChartData['datasets'][key].label.replace('_', ' ')}</h3>`);

                $view.append('<canvas id="'+dynamicId+'"></canvas>');
                let data = {
                    labels: lineChartData.labels,
                    datasets: [lineChartData['datasets'][key]]
                }
                $('#'+dynamicId+'', $view).renderLineChart2(data);
                
                
            });
            $view.removeClass('spinner'); // If the spinner class adds a visual effect
            $view.find('.spinner').remove();
            
        });
    }

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
        $('[data-ca-analytics-card="line_chart"]').each(function () {
            if($(this).hasClass('loaded')){
                return;
            }
            $(this).addClass('loaded');
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
    $(document).ajaxSuccess(function (event, xhr, settings) {
        if (settings.url.includes('is_ajax=1')) {
            const response = xhr.responseJSON;
            if (response && response.html && response.html.report_content) {
                // Insert the HTML content returned by AJAX into the page
                $('#report-container').html(response.html.report_content);

                renderLineCharts();
                renderLineCharts2();
                renderBarCharts();
                renderPieCharts();
            }
        }
    });
    })(Tygh, Tygh.$);
</script>
{/literal}
<script>
    (function (_, $) {
    $(_.doc).ready(function () {
        var dashboardUrl = 'settings.reports',
        $storefrontPicker = $('#storefront_id');
        if ($storefrontPicker.length) {
        dashboardUrl += '?' + $storefrontPicker.prop('name') + '=' + $storefrontPicker.val();
        }
        $.ceAjax('request', fn_url(dashboardUrl), {
        result_ids: 'report_content',
        hidden: true
        });
    });
    })(Tygh, Tygh.$);
</script>

{capture name="buttons"}
    {include file="common/daterange_picker.tpl"
        id="dashboard_date_picker"
        extra_class="nav__actions-dashboard-date-picker pull-right"
        data_url="settings.reports?storefront_id={$storefront_id}"|fn_url
        result_ids="report_content"
        start_date=$time_from
        end_date=$time_to
    }
{/capture}

{capture name="mainbox"}
     <section class="analytics-section">
        <h2 class="analytics-section__title">
            Reports
        </h2>
        <div class="analytics-section__content">
            {if $dashboard_blocks}
                {foreach $dashboard_blocks as $section_id => $blocks}
                    <div class="analytics-section__column analytics-section__column--{$section_id}">
                        {foreach $blocks as $block}
                            {include file="addons/tbd_admin_report/views/settings/components/analytics_section/analytics_card/analytics_card.tpl" analytics_card=$block}
                        {/foreach}
                    </div>
                {/foreach}
            {else}
                <div class="analytics-section__no-items no-items">
                    {__("no_data")}
                </div>
            {/if}
        </div>
    </section>


{/capture}

{include
    file="common/mainbox.tpl"
    buttons=$smarty.capture.buttons
    no_sidebar=true
    title=__("dashboard")
    content=$smarty.capture.mainbox
    tools=$smarty.capture.tools
    box_id="report_content"
    select_storefront=true
    show_all_storefront=true
    storefront_switcher_param_name="storefront_id"
    selected_storefront_id=$storefront_id
}
