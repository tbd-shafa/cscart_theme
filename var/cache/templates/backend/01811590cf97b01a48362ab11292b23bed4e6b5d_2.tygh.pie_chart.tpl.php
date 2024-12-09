<?php
/* Smarty version 4.3.0, created on 2024-12-09 03:42:17
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/tbd_admin_report/views/settings/components/analytics_section/analytics_card/pie_chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6756d799652b19_77118451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01811590cf97b01a48362ab11292b23bed4e6b5d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/tbd_admin_report/views/settings/components/analytics_section/analytics_card/pie_chart.tpl',
      1 => 1733740185,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6756d799652b19_77118451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
?>

<?php if ($_smarty_tpl->tpl_vars['pie_chart']->value && $_smarty_tpl->tpl_vars['pie_chart']->value['content']) {?><div class="analytics-card-pie-chart" data-ca-analytics-card="pie_chart" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pie_chart']->value['id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-pie-chart-content="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['pie_chart']->value['content']), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-pie-chart__view spinner" data-ca-analytics-card="pieChartView"></div></div>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
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

    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
