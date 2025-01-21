<?php

use Tygh\Tools\DateTimeHelper;
use Tygh\Registry;
use Tygh\Dashboard\DashboardBlocks;
use Tygh\Enum\CustomBlockSections;
use Tygh\Enum\NotificationSeverity;
use Tygh\Enum\ObjectStatuses;
use Tygh\Enum\SiteArea;
use Tygh\Enum\UserTypes;
use Tygh\Enum\ProductTracking;

$runtime_company_id = Registry::get('runtime.company_id');
$storefront_id = empty($_REQUEST['storefront_id'])
    ? 0
    : (int) $_REQUEST['storefront_id'];

// Function to fetch Sales Units vs value graph data dynamically
function getSalesGraphData($timestamp_from, $timestamp_to)
{
    // Fetch sales data from the database
    $sales_data = fetchSalesDataFromDatabase($timestamp_from, $timestamp_to);
    // Prepare the graph content based on the fetched data
    $graph_content = [];
    $current_date = $timestamp_from;
    while ($current_date <= $timestamp_to) {
        $year = date('Y', $current_date);       // Extract the year
        $month = date('n', $current_date);      // Extract the month as a number without leading zeros
        $day = date('j', $current_date);        // Extract the day as a number without leading zeros

        // Format the date in your custom format
        $date_str = sprintf("%d, (%d-1), %d", $year, $month, $day);
        $sales_value = 0;
        $sales_units = 0;


        $date_str1 = date('Y-m-d', $current_date);
        // Check if there's sales data for the current date
        foreach ($sales_data as $data_point) {
            if ($data_point['date'] === $date_str1) {
                $sales_value = $data_point['sales_value'];
                $sales_units = $data_point['sales_units'];
                break;
            }
        }

        $graph_content[] = [
            "date" => $date_str,
            "prev" => $sales_value, // Sales value as previous
            "cur" => $sales_units // Sales units as current
        ];

        // Move to the next day
        $current_date = strtotime('+1 day', $current_date);
    }

    return $graph_content;
}
// Function to fetch Sales Units vs value pie chart data dynamically
function getSalesPieChartData($timestamp_from, $timestamp_to)
{
    // Fetch sales data for the pie chart
    $sales_data = fetchSalesDataFromDatabase($timestamp_from, $timestamp_to);

    // Prepare the pie chart content
    $pie_chart_content = [];

    // For demonstration purposes, we assume categories such as 'value' and 'units'
    $total_value = 0;
    $total_units = 0;

    foreach ($sales_data as $data_point) {
        $total_value += $data_point['sales_value'];
        $total_units += $data_point['sales_units'];
    }

    // Prepare data for the pie chart
    $pie_chart_content[] = [
        "label" => "Value",
        "value" => $total_value,
    ];
    $pie_chart_content[] = [
        "label" => "Units",
        "value" => $total_units,
    ];

    return $pie_chart_content;
}

// Function to fetch Without Empty Date Line Or Bar Chart Data For Sales Units vs value dynamically
// new code which show Sales Units vs value-> value like 23.1
function getSalesWithoutEmptyDateBarOrLineChartDataMonthWise($timestamp_from, $timestamp_to)
{
    // Determine if the range spans multiple months
    $start_month = date('Y-m', $timestamp_from);
    $end_month = date('Y-m', $timestamp_to);
    $is_multi_month = ($start_month !== $end_month);

    // Prepare the line chart content
    $line_chart_content = [
        "labels" => [],
        "datasets" => [
            [
                "label" => "Sales Value",
                "data" => [],
                "borderColor" => "#4CAF50",
                "backgroundColor" => "rgba(76, 175, 80, 0.2)",
                "borderWidth" => 2,
            ],
            [
                "label" => "Units Sold",
                "data" => [],
                "borderColor" => "#2196F3",
                "backgroundColor" => "rgba(33, 150, 243, 0.2)",
                "borderWidth" => 2,
            ]
        ]
    ];

    if ($is_multi_month) {
        // Multi-month: Fetch data grouped by month
        $sql_monthly = "SELECT DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '%Y-%m') AS month, 
                               SUM(o.total) AS sales_value, 
                               COUNT(od.product_id) AS sales_units 
                        FROM ?:orders AS o 
                        JOIN ?:order_details AS od ON o.order_id = od.order_id 
                        WHERE o.status IN ('A', 'P','C') AND 
                              o.timestamp >= $timestamp_from AND o.timestamp <= $timestamp_to
                        GROUP BY month";

        $monthly_data = Tygh::$app['db']->getArray($sql_monthly);

        // Generate all months in the range
        $current = strtotime($start_month . '-01');
        $end = strtotime($end_month . '-01');

        while ($current <= $end) {
            $current_month = date('Y-m', $current);
            $line_chart_content["labels"][] = $current_month;

            // Check if this month has data
            $data_point = array_filter($monthly_data, function ($data) use ($current_month) {
                return $data['month'] === $current_month;
            });

            // if (!empty($data_point)) {
            //     $data_point = array_shift($data_point);
            //     $line_chart_content["datasets"][0]["data"][] = $data_point['sales_value'];
            //     $line_chart_content["datasets"][1]["data"][] = $data_point['sales_units'];
            // } else {
            //     $line_chart_content["datasets"][0]["data"][] = 0;
            //     $line_chart_content["datasets"][1]["data"][] = 0;
            // }

            if (!empty($data_point)) {
                $data_point = array_shift($data_point);
                $line_chart_content["datasets"][0]["data"][] = round($data_point['sales_value'], 1);
                $line_chart_content["datasets"][1]["data"][] = round($data_point['sales_units'], 1);
            } else {
                $line_chart_content["datasets"][0]["data"][] = 0;
                $line_chart_content["datasets"][1]["data"][] = 0;
            }

            $current = strtotime('+1 month', $current);
        }
    } else {
        // Single month: Fetch data grouped by day
        $sql_daily = "SELECT DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '%Y-%m-%d') AS day, 
                             SUM(o.total) AS sales_value, 
                             COUNT(od.product_id) AS sales_units 
                      FROM ?:orders AS o 
                      JOIN ?:order_details AS od ON o.order_id = od.order_id 
                      WHERE o.status IN ('A', 'P','C') AND 
                            o.timestamp >= $timestamp_from AND o.timestamp <= $timestamp_to
                      GROUP BY day";

        $daily_data = Tygh::$app['db']->getArray($sql_daily);

        // Generate all days in the selected month
        $start_date = strtotime(date('Y-m-d', $timestamp_from));
        $end_date = strtotime(date('Y-m-d', $timestamp_to));

        while ($start_date <= $end_date) {
            $current_day = date('Y-m-d', $start_date);
            $line_chart_content["labels"][] = $current_day;

            // Check if this day has data
            $data_point = array_filter($daily_data, function ($data) use ($current_day) {
                return $data['day'] === $current_day;
            });
            
            // if (!empty($data_point)) {
            //     $data_point = array_shift($data_point);
            //     $line_chart_content["datasets"][0]["data"][] = $data_point['sales_value'];
            //     $line_chart_content["datasets"][1]["data"][] = $data_point['sales_units'];
            // } else {
            //     $line_chart_content["datasets"][0]["data"][] = 0;
            //     $line_chart_content["datasets"][1]["data"][] = 0;
            // }
            if (!empty($data_point)) {
                $data_point = array_shift($data_point);
                $line_chart_content["datasets"][0]["data"][] = round($data_point['sales_value'], 1);
                $line_chart_content["datasets"][1]["data"][] = round($data_point['sales_units'], 1);
            } else {
                $line_chart_content["datasets"][0]["data"][] = 0;
                $line_chart_content["datasets"][1]["data"][] = 0;
            }

            $start_date = strtotime('+1 day', $start_date);
        }
    }

    return $line_chart_content;
}

// Function to fetch With Empty Date Line Or Bar Chart Data For Sales Units vs value dynamically
function getSalesWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to)
{
    // Check if the date range spans multiple months
    $start_month = date('Y-m', $timestamp_from);
    $end_month = date('Y-m', $timestamp_to);
    $is_multi_month = ($start_month !== $end_month);

    // Prepare the bar chart content
    $bar_chart_content = [
        "labels" => [],
        "datasets" => [
            [
                "label" => "Sales Value",
                "data" => [],
                "backgroundColor" => "rgba(76, 175, 80, 0.6)",
                "borderColor" => "#4CAF50",
                "borderWidth" => 1,
            ],
            [
                "label" => "Units Sold",
                "data" => [],
                "backgroundColor" => "rgba(33, 150, 243, 0.6)",
                "borderColor" => "#2196F3",
                "borderWidth" => 1,
            ]
        ]
    ];

    if ($is_multi_month) {
        // Multi-month: Group data by months with data
        $sql_monthly = "SELECT DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '%Y-%m') AS month, 
                               SUM(o.total) AS sales_value, 
                               COUNT(od.product_id) AS sales_units 
                        FROM ?:orders AS o 
                        JOIN ?:order_details AS od ON o.order_id = od.order_id 
                        WHERE o.status IN ('A', 'P','C') AND 
                              o.timestamp >= $timestamp_from AND o.timestamp <= $timestamp_to
                        GROUP BY month";

        $monthly_data = Tygh::$app['db']->getArray($sql_monthly);

        foreach ($monthly_data as $data_point) {
            $bar_chart_content["labels"][] = $data_point['month'];
            $bar_chart_content["datasets"][0]["data"][] = $data_point['sales_value'];
            $bar_chart_content["datasets"][1]["data"][] = $data_point['sales_units'];
        }
    } else {
        // Single month: Group data by dates with data
        $sql_daily = "SELECT DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '%Y-%m-%d') AS day, 
                             SUM(o.total) AS sales_value, 
                             COUNT(od.product_id) AS sales_units 
                      FROM ?:orders AS o 
                      JOIN ?:order_details AS od ON o.order_id = od.order_id 
                      WHERE o.status IN ('A', 'P','C') AND 
                            o.timestamp >= $timestamp_from AND o.timestamp <= $timestamp_to
                      GROUP BY day";

        $daily_data = Tygh::$app['db']->getArray($sql_daily);

        foreach ($daily_data as $data_point) {
            $bar_chart_content["labels"][] = $data_point['day'];
            $bar_chart_content["datasets"][0]["data"][] = $data_point['sales_value'];
            $bar_chart_content["datasets"][1]["data"][] = $data_point['sales_units'];
        }
    }

    return $bar_chart_content;
}


// Function to fetch sales data from the database
function fetchSalesDataFromDatabase($timestamp_from, $timestamp_to)
{

    // Prepare the SQL query with placeholders
    $sql = "SELECT DATE(FROM_UNIXTIME(o.timestamp)) AS date, 
                   SUM(o.total) AS sales_value, 
                   COUNT(od.product_id) AS sales_units 
            FROM ?:orders AS o 
            JOIN ?:order_details AS od ON o.order_id = od.order_id 
            WHERE o.status IN ('A', 'P','C') AND 
                  o.timestamp >= $timestamp_from AND o.timestamp <= $timestamp_to
            GROUP BY DATE(FROM_UNIXTIME(o.timestamp))";

    // Log the raw SQL with bound parameters

    // Execute the SQL query and return the results
    return Tygh::$app['db']->getArray($sql);
}

// Function to fetch online vs offline  graph data dynamically
function getOrderGraphData($timestamp_from, $timestamp_to)
{
    // Fetch sales data from the database
    $sales_data = fetchOrderDataFromDatabase($timestamp_from, $timestamp_to);

    // Prepare the graph content based on the fetched data
    $graph_content = [];
    $current_date = $timestamp_from;

    while ($current_date <= $timestamp_to) {
        $year = date('Y', $current_date);        // Extract the year
        $month = date('n', $current_date);       // Extract the month as a number without leading zeros
        $day = date('j', $current_date);         // Extract the day as a number without leading zeros

        // Format the date in your custom format
        $date_str = sprintf("%d, (%d-1), %d", $year, $month, $day);
        $total_sales = 0;
        $pos_sales = 0;

        $date_str1 = date('Y-m-d', $current_date);

        // Check if there's sales data for the current date
        foreach ($sales_data as $data_point) {
            if ($data_point['date'] === $date_str1) {
                $total_sales = $data_point['total_sales'];
                $pos_sales = $data_point['pos_sales'];
                break;
            }
        }

        // Prepare the graph data with total-pos as prev and pos as cur
        $graph_content[] = [
            "date" => $date_str,
            "prev" => $total_sales - $pos_sales, // Total minus POS as previous
            "cur" => $pos_sales                  // POS as current
        ];

        // Move to the next day
        $current_date = strtotime('+1 day', $current_date);
    }

    return $graph_content;
}
// Function to fetch online vs offline pie chart data dynamically
// new code which show Order online vs offline pie char value like 23.1
function getOrderPieChartData($timestamp_from, $timestamp_to)
{
    // Fetch sales data for online and offline orders
    $sales_data = fetchOrderDataFromDatabase($timestamp_from, $timestamp_to);

    // Prepare the pie chart data
    $online_sales = 0;
    $offline_sales = 0;

    // Calculate total online and offline sales
    foreach ($sales_data as $data_point) {
        $online_sales += $data_point['total_sales']; // assuming total_sales is online sales
        $offline_sales += $data_point['pos_sales']; // assuming pos_sales is offline sales
    }

    // Return the pie chart data in a format suitable for chart rendering
    return [
        [
            "label" => "Online Orders",
            //"value" => $online_sales
            "value" => round($online_sales, 1), // Round to one decimal place
        ],
        [
            "label" => "Offline Orders",
           // "value" => $offline_sales
           "value" => round($offline_sales, 1), // Round to one decimal place
        ]
    ];
}
//With Empry Date Bar Or Line chart data For online vs offline orders dynamically
// new code which show Order online vs offline like 23.1
function getOrderWithEmptyDateBarOrLineChartData($timestamp_from, $timestamp_to)
{
    // Fetch sales data for online and offline orders
    $sales_data = fetchOrderDataFromDatabase($timestamp_from, $timestamp_to);

    // Determine the grouping format: daily for a single month, monthly for multiple months
    $is_multiple_months = date('Y-m', $timestamp_from) !== date('Y-m', $timestamp_to);
    $group_format = $is_multiple_months ? 'Y-m' : 'Y-m-d';

    // Initialize labels and sales arrays
    $labels = [];
    $online_sales = [];
    $offline_sales = [];

    // Group the sales data
    $grouped_sales_data = [];
    foreach ($sales_data as $data_point) {
        $group_key = date($group_format, strtotime($data_point['date']));
        if (!isset($grouped_sales_data[$group_key])) {
            $grouped_sales_data[$group_key] = [
                'total_sales' => 0,
                'pos_sales' => 0,
            ];
        }
        $grouped_sales_data[$group_key]['total_sales'] += ($data_point['total_sales']-$data_point['pos_sales']);
        $grouped_sales_data[$group_key]['pos_sales'] += $data_point['pos_sales'];
    }

    if ($is_multiple_months) {
        // Handle multiple months
        $start_month = new DateTime(date('Y-m-01', $timestamp_from));
        $end_month = new DateTime(date('Y-m-01', $timestamp_to));
        $end_month->modify('first day of next month');

        while ($start_month < $end_month) {
            $month_label = $start_month->format('Y-m');
            $labels[] = $month_label;
            // $online_sales[] = $grouped_sales_data[$month_label]['total_sales'] ?? 0;
            // $offline_sales[] = $grouped_sales_data[$month_label]['pos_sales'] ?? 0;
            $online_sales[] = round($grouped_sales_data[$month_label]['total_sales'] ?? 0, 1);
            $offline_sales[] = round($grouped_sales_data[$month_label]['pos_sales'] ?? 0, 1);

            $start_month->modify('+1 month');
        }
    } else {
        // Handle a single month (daily data)
        $start_date = new DateTime(date('Y-m-d', $timestamp_from));
        $end_date = new DateTime(date('Y-m-d', $timestamp_to));
        $end_date->modify('+1 day');

        while ($start_date < $end_date) {
            $date_label = $start_date->format('Y-m-d');
            $labels[] = $date_label;
            // $online_sales[] = $grouped_sales_data[$date_label]['total_sales'] ?? 0;
            // $offline_sales[] = $grouped_sales_data[$date_label]['pos_sales'] ?? 0;
            $online_sales[] = round($grouped_sales_data[$date_label]['total_sales'] ?? 0, 1);
            $offline_sales[] = round($grouped_sales_data[$date_label]['pos_sales'] ?? 0, 1);
            $start_date->modify('+1 day');
        }
    }



    // Return the line chart data
    return [
        'labels' => $labels,
        'datasets' => [
            [
                'label' => 'Online Orders',
                'data' => $online_sales,
                'borderColor' => '#4CAF50',
                'backgroundColor' => 'rgba(76, 175, 80, 0.2)',
                'borderWidth' => 2,
            ],
            [
                'label' => 'Offline Orders',
                'data' => $offline_sales,
                'borderColor' => '#2196F3',
                'backgroundColor' => 'rgba(33, 150, 243, 0.2)',
                'borderWidth' => 2,
            ],
        ],
    ];
}


// Function to fetch Without Empty Date LIne Or Chart Data For online vs offline orders dynamically

function getOrderWithOutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to)
{
    // Fetch the order data from the database
    $sales_data = fetchOrderDataFromDatabase($timestamp_from, $timestamp_to);

    // Determine the grouping format: daily for a single month, monthly for multiple months
    $is_multiple_months = date('Y-m', $timestamp_from) !== date('Y-m', $timestamp_to);
    $group_format = $is_multiple_months ? 'Y-m' : 'Y-m-d';

    // Initialize arrays for the labels, online orders, and offline orders
    $bar_chart_content = [
        'labels' => [],
        'datasets' => [
            [
                'label' => 'Online Orders',
                'data' => [],
                'backgroundColor' => 'rgba(76, 175, 80, 0.6)', // Green for online
                'borderColor' => '#4CAF50',
                'borderWidth' => 1,
            ],
            [
                'label' => 'Offline Orders',
                'data' => [],
                'backgroundColor' => 'rgba(33, 150, 243, 0.6)', // Blue for offline
                'borderColor' => '#2196F3',
                'borderWidth' => 1,
            ]
        ]
    ];

    // Filter and group the sales data based on the determined format
    $grouped_sales_data = [];
    foreach ($sales_data as $data_point) {
        $group_key = date($group_format, strtotime($data_point['date']));
        if (!isset($grouped_sales_data[$group_key])) {
            $grouped_sales_data[$group_key] = [
                'total_sales' => 0,
                'pos_sales' => 0,
            ];
        }
        $grouped_sales_data[$group_key]['total_sales'] += $data_point['total_sales'];
        $grouped_sales_data[$group_key]['pos_sales'] += $data_point['pos_sales'];
    }

    // Populate the chart content with non-empty grouped data
    foreach ($grouped_sales_data as $group_key => $data) {
        $bar_chart_content['labels'][] = $group_key;
        $bar_chart_content['datasets'][0]['data'][] = $data['total_sales']; // Online orders data
        $bar_chart_content['datasets'][1]['data'][] = $data['pos_sales'];  // Offline orders data
    }

    // Return the formatted data for the bar chart

    return $bar_chart_content;
}


// Function to fetch sales data from the database
function fetchOrderDataFromDatabase($timestamp_from, $timestamp_to)
{

    // SQL query to fetch total sales and POS sales grouped by date
    $sql = "SELECT DATE(FROM_UNIXTIME(o.timestamp)) AS date, 
                   SUM(o.total) AS total_sales,
                   SUM(CASE WHEN p.order_id IS NOT NULL THEN o.total ELSE 0 END) AS pos_sales
            FROM ?:orders AS o 
            LEFT JOIN ?:wkpos_orders AS p ON o.order_id = p.order_id
            WHERE o.status IN ('A', 'P','C') 
              AND o.timestamp >= ?i 
              AND o.timestamp <= ?i
            GROUP BY DATE(FROM_UNIXTIME(o.timestamp))";

    // Execute the SQL query with bound parameters and return the results
    return Tygh::$app['db']->getArray($sql, $timestamp_from, $timestamp_to);
}

// normal resource_list Data For SalesMetrics data
function getSalesMetrics($timestamp_from, $timestamp_to)
{
    // Fetch total transactions, units sold, and total sales within the given date range
    $results = Tygh::$app['db']->getRow(
        "SELECT COUNT(DISTINCT o.order_id) AS transactions,
                SUM(od.amount) AS total_units_sold,
                SUM(o.total) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );



    // Calculate metrics
    $transactions = $results['transactions'];
    $total_units_sold = $results['total_units_sold'];
    $total_sales = $results['total_sales'];

    // Check if transactions exist to avoid division by zero
    $upt = $transactions > 0 ? $total_units_sold / $transactions : 0;
    $arp = $transactions > 0 ? $total_sales / $transactions : 0;

    // Return the calculated metrics
    return [
        'not' => $transactions,
        'upt' => $upt,
        'arp' => $arp
    ];
}

// With Empty LIne Or Bar chart Data For getSalesMetrics
// new code to show Order summary data like 23.1
function getWithEmptyBarOrLineChartSalesMetricsData($timestamp_from, $timestamp_to)
{
    // Determine the grouping format based on the date range
    $is_multiple_months = date('Y-m', $timestamp_from) !== date('Y-m', $timestamp_to);
    $group_format = $is_multiple_months ? '%Y-%m' : '%Y-%m-%d';

    // Generate labels based on the date range
    $labels = [];

    if ($is_multiple_months) {
        // Generate monthly labels
        $start = new DateTime(date('Y-m-01', $timestamp_from));
        $end = new DateTime(date('Y-m-01', $timestamp_to));
        while ($start <= $end) {
            $labels[] = $start->format('Y-m');
            $start->modify('+1 month');
        }
    } else {
        // Generate daily labels
        $start = new DateTime(date('Y-m-d', $timestamp_from));
        $end = new DateTime(date('Y-m-d', $timestamp_to));
        while ($start <= $end) {
            $labels[] = $start->format('Y-m-d');
            $start->modify('+1 day');
        }
    }

    // Fetch sales data grouped by the selected format
    $sales_data = Tygh::$app['db']->getArray(
        "SELECT DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '$group_format') AS period,
                COUNT(DISTINCT o.order_id) AS transactions,
                SUM(od.amount) AS total_units_sold,
                SUM(o.total) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
         GROUP BY period
         ORDER BY period",
        $timestamp_from,
        $timestamp_to
    );

    // Organize sales data by period for quick access
    $sales_by_period = [];
    foreach ($sales_data as $data_point) {
        $sales_by_period[$data_point['period']] = $data_point;
    }

    // Prepare the line chart data
    $line_chart_data = [
        'labels' => $labels,
        'datasets' => [
            [
                'label' => 'Number of Transactions',
                'data' => [],
                'borderColor' => '#FF5733', // Example color
                'backgroundColor' => 'rgba(255, 87, 51, 0.2)',
                'borderWidth' => 2,
            ],
            [
                'label' => 'Units Sold Per Transaction (UPT)',
                'data' => [],
                'borderColor' => '#33B5FF', // Example color
                'backgroundColor' => 'rgba(51, 181, 255, 0.2)',
                'borderWidth' => 2,
            ],
            [
                'label' => 'Average Retail Price Per Transaction (ARP)',
                'data' => [],
                'borderColor' => '#FFC300', // Example color
                'backgroundColor' => 'rgba(255, 195, 0, 0.2)',
                'borderWidth' => 2,
            ]
        ]
    ];

    // Populate the chart data, filling empty periods with zeros
    foreach ($labels as $label) {
        if (isset($sales_by_period[$label])) {
            $transactions = $sales_by_period[$label]['transactions'];
            $total_units_sold = $sales_by_period[$label]['total_units_sold'];
            $total_sales = $sales_by_period[$label]['total_sales'];

            $line_chart_data['datasets'][0]['data'][] = $transactions;
            // $line_chart_data['datasets'][1]['data'][] = $transactions > 0 ? $total_units_sold / $transactions : 0; // UPT
            // $line_chart_data['datasets'][2]['data'][] = $transactions > 0 ? $total_sales / $transactions : 0; // ARP
            $line_chart_data['datasets'][1]['data'][] = $transactions > 0 ? round($total_units_sold / $transactions, 1) : 0; // UPT rounded to 1 decimal place
            $line_chart_data['datasets'][2]['data'][] = $transactions > 0 ? round($total_sales / $transactions, 1) : 0; // ARP rounded to 1 decimal place
        } else {
            // No data for this period
            $line_chart_data['datasets'][0]['data'][] = 0;
            $line_chart_data['datasets'][1]['data'][] = 0;
            $line_chart_data['datasets'][2]['data'][] = 0;
        }
    }

    return $line_chart_data;
}


// Without Empty Date LIne Or Bar Chart Data For SalesMetrics

function getWithoutEmptyDateLineOrBarChartSalesMetricsData($timestamp_from, $timestamp_to)
{
    // Determine if the range spans more than one month
    $is_monthly = date('Y-m', $timestamp_from) !== date('Y-m', $timestamp_to);

    if ($is_monthly) {
        // Fetch sales data grouped by month
        $sales_data = Tygh::$app['db']->getArray(
            "SELECT DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '%Y-%m') AS period,
                    COUNT(DISTINCT o.order_id) AS transactions,
                    SUM(od.amount) AS total_units_sold,
                    SUM(o.total) AS total_sales
             FROM ?:orders AS o
             JOIN ?:order_details AS od ON o.order_id = od.order_id
             WHERE o.status IN ('A', 'P','C') 
               AND o.timestamp BETWEEN ?i AND ?i
             GROUP BY period
             ORDER BY period",
            $timestamp_from,
            $timestamp_to
        );
    } else {
        // Fetch sales data grouped by day
        $sales_data = Tygh::$app['db']->getArray(
            "SELECT DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '%Y-%m-%d') AS period,
                    COUNT(DISTINCT o.order_id) AS transactions,
                    SUM(od.amount) AS total_units_sold,
                    SUM(o.total) AS total_sales
             FROM ?:orders AS o
             JOIN ?:order_details AS od ON o.order_id = od.order_id
             WHERE o.status IN ('A', 'P','C') 
               AND o.timestamp BETWEEN ?i AND ?i
             GROUP BY period
             ORDER BY period",
            $timestamp_from,
            $timestamp_to
        );
    }

    // Initialize the bar chart content
    $bar_chart_content = [
        'labels' => [], // Dates or months will go here
        'datasets' => [
            [
                'label' => 'Number of Transactions',
                'data' => [],
                'backgroundColor' => 'rgba(255, 99, 132, 0.6)', // Red
                'borderColor' => 'rgba(255, 99, 132, 1)',
                'borderWidth' => 1,
            ],
            [
                'label' => 'Units Sold Per Transaction (UPT)',
                'data' => [],
                'backgroundColor' => 'rgba(54, 162, 235, 0.6)', // Blue
                'borderColor' => 'rgba(54, 162, 235, 1)',
                'borderWidth' => 1,
            ],
            [
                'label' => 'Average Retail Price Per Transaction (ARP)',
                'data' => [],
                'backgroundColor' => 'rgba(75, 192, 192, 0.6)', // Green
                'borderColor' => 'rgba(75, 192, 192, 1)',
                'borderWidth' => 1,
            ],
        ],
    ];

    // Populate the bar chart data
    foreach ($sales_data as $data_point) {
        $period = $data_point['period'];
        $transactions = $data_point['transactions'];
        $total_units_sold = $data_point['total_units_sold'];
        $total_sales = $data_point['total_sales'];

        $bar_chart_content['labels'][] = $period;
        $bar_chart_content['datasets'][0]['data'][] = $transactions;
        $bar_chart_content['datasets'][1]['data'][] = $transactions > 0 ? $total_units_sold / $transactions : 0; // UPT
        $bar_chart_content['datasets'][2]['data'][] = $transactions > 0 ? $total_sales / $transactions : 0; // ARP
    }

    return $bar_chart_content;
}

// normal resource_list  info Top vendors
// new code to show Top vendors list like 23.1 or 23.1%
function getTopVendors($timestamp_from, $timestamp_to)
{
    // Fetch the total sales amount for calculating percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P', 'C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Get the top 5 vendors with total sales and units sold
    $top_vendors = Tygh::$app['db']->getArray(
        "SELECT o.company_id, v.company AS vendor_name, 
                SUM(o.total) AS total_sales, 
                SUM(od.units_sold) AS units_sold 
         FROM ?:orders AS o
         JOIN (
             SELECT order_id, SUM(amount) AS units_sold 
             FROM ?:order_details 
             GROUP BY order_id
         ) AS od ON o.order_id = od.order_id
         JOIN ?:companies AS v ON o.company_id = v.company_id
         WHERE o.status IN ('A', 'P', 'C') 
           AND o.timestamp BETWEEN ?i AND ?i
         GROUP BY o.company_id
         ORDER BY total_sales DESC
         LIMIT 5",
        $timestamp_from,
        $timestamp_to
    );

    $total_sales1 = 0;

    // Calculate the percentage mix for each vendor and format the result
    // foreach ($top_vendors as &$vendor) {
    //     $total_sales1 += $vendor['total_sales'];
    //     $vendor['percentage_mix'] = $total_sales > 0 ? ($vendor['total_sales'] / $total_sales) * 100 : 0;
    //     $vendor['percentage_mix'] = number_format($vendor['percentage_mix'], 2);
    // }
    foreach ($top_vendors as &$vendor) {
        $total_sales1 += $vendor['total_sales'];
        $vendor['percentage_mix'] = $total_sales > 0 ? ($vendor['total_sales'] / $total_sales) * 100 : 0;
        
        // Round total_sales to 1 decimal place
        $vendor['total_sales'] = round($vendor['total_sales'], 1);
        
        // Round percentage_mix to 1 decimal place
        $vendor['percentage_mix'] = round($vendor['percentage_mix'], 1);
    }
    
    return [
        'top_vendors' => $top_vendors,
        'total_sales' => $total_sales
    ];
}

// top 5 best seller


function getTopBestsellers($timestamp_from, $timestamp_to)
{
    // Get the total sales value (already correct)
$total_sales = Tygh::$app['db']->getField(
    "SELECT SUM(od.amount * od.price) 
     FROM ?:order_details AS od
     JOIN ?:orders AS o ON od.order_id = o.order_id
     WHERE o.status = 'C' 
       AND o.timestamp BETWEEN ?i AND ?i",
    $timestamp_from,
    $timestamp_to
);


// Get the total quantity of products sold in completed orders

$total_units_sold_all = Tygh::$app['db']->getField(
    "SELECT SUM(od.amount) AS total_units_sold
     FROM ?:order_details AS od
     JOIN ?:orders AS o ON od.order_id = o.order_id
     WHERE o.status = 'C'
       AND o.timestamp BETWEEN ?i AND ?i",
    $timestamp_from,
    $timestamp_to
);

// $top_products = Tygh::$app['db']->getArray(
//     "SELECT SUM(od.amount) AS total_units_sold, od.product_id
//      FROM ?:order_details AS od
//      JOIN ?:orders AS o ON od.order_id = o.order_id
//      WHERE o.status = 'C'
//        AND o.timestamp BETWEEN ?i AND ?i
//        GROUP BY od.product_id
//        ORDER BY total_units_sold DESC
//        LIMIT 5
//        ",
//     $timestamp_from,
//     $timestamp_to
// );
// echo "<pre>";
// var_dump($top_products);


$top_products = Tygh::$app['db']->getArray(
    "SELECT product_id, 
       product_name, 
       image_id, 
       SUM(total_units_sold) AS total_units_sold, 
       SUM(total_sales) AS total_sales
FROM (
    SELECT p.product_id, 
           pd.product AS product_name, 
           il.image_id, 
           od.amount AS total_units_sold, 
           (od.amount * od.price) AS total_sales
    FROM ?:order_details AS od
    JOIN ?:orders AS o ON od.order_id = o.order_id
    JOIN ?:products AS p ON od.product_id = p.product_id
    JOIN ?:product_descriptions AS pd ON p.product_id = pd.product_id AND pd.lang_code = ?s
    LEFT JOIN ?:images_links AS il ON p.product_id = il.object_id AND il.object_type = 'product'
    WHERE o.status = 'C' 
      AND o.timestamp BETWEEN ?i AND ?i
    GROUP BY od.order_id, od.product_id
) AS subquery
GROUP BY product_id
ORDER BY total_units_sold DESC
LIMIT 5
",
    CART_LANGUAGE,
    $timestamp_from,
    $timestamp_to
);





// Add the percentage mix and image URL
foreach ($top_products as &$product) {
    // Calculate percentage mix based on total units sold
    $product['percentage_mix'] = $total_units_sold_all > 0
        ? round(($product['total_units_sold'] / $total_units_sold_all) * 100, 1)
        : 0;

    // Format total sales
    $product['total_sales'] = round($product['total_sales'], 1);

    // Fetch the product image
    $image_pairs = fn_get_image_pairs($product['product_id'], 'product', 'M');
    if (!empty($image_pairs)) {
        $image_data = fn_image_to_display($image_pairs, 'product', 'M');
        $product['image_url'] = $image_data['image_path']; // Use HTTP/HTTPS image URL as needed
    } else {
        $product['image_url'] = 'path_to_default_image.png'; // Default image path
    }
}

// Debug output for verification


return [
    'top_products' => $top_products,
    'total_sales' => $total_sales,
];

}







// for pie chart Top vendors
function getTopVendorsPieChart($timestamp_from, $timestamp_to)
{
    // Fetch the total sales amount for calculating percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Get the top vendors with total sales and units sold
    $top_vendors = Tygh::$app['db']->getArray(
        "SELECT o.company_id, v.company AS vendor_name, 
                SUM(o.total) AS total_sales, 
                SUM(od.amount) AS units_sold 
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:companies AS v ON o.company_id = v.company_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
         GROUP BY o.company_id
         ORDER BY total_sales DESC
         LIMIT 5",
        $timestamp_from,
        $timestamp_to
    );

    // Calculate the percentage mix for each vendor and prepare pie chart data
    $pie_chart_data = [];
    foreach ($top_vendors as &$vendor) {
        $vendor['percentage_mix'] = $total_sales > 0 ? ($vendor['total_sales'] / $total_sales) * 100 : 0;
        $vendor['percentage_mix'] = number_format($vendor['percentage_mix'], 2);

        // Add vendor data to pie chart
        $pie_chart_data[] = [
            'label' => $vendor['vendor_name'],
            'value' => $vendor['total_sales']
        ];
    }

    return [
        'top_vendors' => $top_vendors,
        'total_sales' => $total_sales,
        'pie_chart_data' => $pie_chart_data // Return the pie chart data
    ];
}

// with empty date bar or line chart data for Top vendors

function getTopVendorsWithEmptyDateBarOrLineChartData($timestamp_from, $timestamp_to, $limit = 5)
{
    // Force grouping by day if the range is within the same month, else group by month
    $group_format = (date('Y-m', $timestamp_from) === date('Y-m', $timestamp_to)) ? '%Y-%m-%d' : '%Y-%m';

    // Generate labels (dates or months) for the selected range
    $labels = [];
    $is_multiple_months = date('Y-m', $timestamp_from) !== date('Y-m', $timestamp_to);

    if ($is_multiple_months) {
        // Generate all months in the range
        $start = new DateTime(date('Y-m-01', $timestamp_from));
        $end = new DateTime(date('Y-m-01', $timestamp_to));
        while ($start <= $end) {
            $labels[] = $start->format('Y-m');
            $start->modify('+1 month');
        }
    } else {
        // Generate all dates in the single month
        $start = new DateTime(date('Y-m-d', $timestamp_from));
        $end = new DateTime(date('Y-m-d', $timestamp_to));
        while ($start <= $end) {
            $labels[] = $start->format('Y-m-d');
            $start->modify('+1 day');
        }
    }

    // Fetch the total sales for calculating percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Get the top vendors with total sales and units sold
    $top_vendors = Tygh::$app['db']->getArray(
        "SELECT o.company_id, v.company AS vendor_name, 
                DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '$group_format') AS period,
                SUM(o.total) AS total_sales, 
                SUM(od.amount) AS units_sold 
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:companies AS v ON o.company_id = v.company_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
         GROUP BY o.company_id, period
         ORDER BY total_sales DESC
         LIMIT ?i",
        $timestamp_from,
        $timestamp_to,
        $limit
    );

    // Prepare data for the chart
    $chart_data = [
        'labels' => $labels, // Use labels (dates or months) as x-axis labels
        'datasets' => []
    ];

    // Set random colors for each vendor's data line
    $colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#FF9F33'];

    // Track sales data by vendor and period
    $vendor_sales = [];

    foreach ($top_vendors as $vendor) {
        $period = $vendor['period'];
        $vendor_name = $vendor['vendor_name'];
        $total_sales = $vendor['total_sales'];

        // Organize sales by vendor and period
        if (!isset($vendor_sales[$vendor_name])) {
            $vendor_sales[$vendor_name] = [];
        }
        $vendor_sales[$vendor_name][$period] = $total_sales;
    }

    // Prepare datasets for each vendor
    foreach ($vendor_sales as $vendor_name => $sales_data) {
        $sales = [];
        foreach ($labels as $label) {
            // Use 0 if no sales data for this period
            $sales[] = $sales_data[$label] ?? 0;
        }

        $chart_data['datasets'][] = [
            'label' => $vendor_name,
            'data' => $sales,
            'backgroundColor' => $colors[count($chart_data['datasets']) % count($colors)],
            'borderColor' => $colors[count($chart_data['datasets']) % count($colors)],
            'borderWidth' => 1
        ];
    }

    return $chart_data;
}


// for Without Empty Date Line Or Bar Chart Top vendors
// new code for show Top vendors by sels value like 23.1
function getTopVendorsWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to, $limit = 5, $order_by = 'total_sales')
{
    // Force grouping by day if the range is within the same month, else group by month
    $group_format = (date('Y-m', $timestamp_from) === date('Y-m', $timestamp_to)) ? '%Y-%m-%d' : '%Y-%m';

    // Fetch the total sales amount for calculating percentage mix (optional, for reference)
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Get all vendors with total sales and units sold aggregated
    $vendors = Tygh::$app['db']->getArray(
        "SELECT o.company_id, v.company AS vendor_name,
                SUM(o.total) AS total_sales
         FROM ?:orders AS o
         JOIN ?:companies AS v ON o.company_id = v.company_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
         GROUP BY o.company_id
         ORDER BY total_sales DESC",
        $timestamp_from,
        $timestamp_to
    );

    // Limit to top $limit vendors based on total_sales
    $top_vendors = array_slice($vendors, 0, $limit);

    // Get detailed sales data for the top vendors by period
    $top_vendor_ids = array_column($top_vendors, 'company_id');
    $detailed_sales = Tygh::$app['db']->getArray(
        "SELECT o.company_id, v.company AS vendor_name, 
                DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '$group_format') AS period,
                SUM(o.total) AS total_sales, 
                SUM(od.amount) AS units_sold 
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:companies AS v ON o.company_id = v.company_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
           AND o.company_id IN (?n)
         GROUP BY o.company_id, period
         ORDER BY $order_by DESC",
        $timestamp_from,
        $timestamp_to,
        $top_vendor_ids
    );

    // Prepare data for the bar chart
    $bar_chart_data = [
        'labels' => [],  // Array of date/month labels for the x-axis
        'datasets' => []
    ];

    // Set random colors for each vendor's bar
    $colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#FF9F33'];

    // Track sales data by vendor and period
    $vendor_sales = [];

    foreach ($detailed_sales as $vendor) {
        $period = $vendor['period'];
        $vendor_name = $vendor['vendor_name'];
        //$total_sales = $vendor[$order_by];
        $total_sales = round($vendor[$order_by], 1); // Round the total_sales to 1 decimal place
        $units_sold = round($vendor['units_sold'], 1); // Round the units_sold to 1 decimal place if needed

        // Add period (date/month) to labels if it's not already added
        if (!in_array($period, $bar_chart_data['labels'])) {
            $bar_chart_data['labels'][] = $period;
        }

        // Organize sales by vendor and period
        if (!isset($vendor_sales[$vendor_name])) {
            $vendor_sales[$vendor_name] = [];
        }
        $vendor_sales[$vendor_name][$period] = $total_sales;
    }

    // Sort the labels (dates/months) from earliest to latest
    usort($bar_chart_data['labels'], function ($a, $b) {
        return strtotime($a) - strtotime($b);
    });

    // Prepare datasets for each vendor
    foreach ($vendor_sales as $vendor_name => $sales_data) {
        $sales = [];
        foreach ($bar_chart_data['labels'] as $period) {
            $sales[] = isset($sales_data[$period]) ? $sales_data[$period] : 0;
        }

        $bar_chart_data['datasets'][] = [
            'label' => $vendor_name,
            'data' => $sales,
            'backgroundColor' => $colors[count($bar_chart_data['datasets']) % count($colors)],
            'borderColor' => $colors[count($bar_chart_data['datasets']) % count($colors)],
            'borderWidth' => 1
        ];
    }

    return $bar_chart_data;
}


// normal resource_list  info Top categories
function getTopCategories($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Fetch top categories by total sales, units sold, and percentage mix
    $top_categories = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name,
                SUM(od.price * od.amount) AS total_sales, 
                SUM(od.amount) AS units_sold
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C')
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id = 0
         GROUP BY c.category_id
         ORDER BY total_sales DESC
         LIMIT ?i",
        $timestamp_from,
        $timestamp_to,
        $limit
    );

    // Calculate the percentage mix for each category
    foreach ($top_categories as &$category) {
        $category['percentage_mix'] = $total_sales > 0 ? ($category['total_sales'] / $total_sales) * 100 : 0;
        $category['percentage_mix'] = number_format($category['percentage_mix'], 2);
    }

    return [
        'top_categories' => $top_categories,
        'total_sales' => $total_sales
    ];
}

// for pie chart Top categories

function getTopCategoriesPieChart($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Fetch top categories by total sales, units sold, and percentage mix
    $top_categories = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name,
                SUM(od.price * od.amount) AS total_sales, 
                SUM(od.amount) AS units_sold
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C')
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id = 0
         GROUP BY c.category_id
         ORDER BY total_sales DESC
         LIMIT ?i",
        $timestamp_from,
        $timestamp_to,
        $limit
    );

    $pie_chart_data = [];
    foreach ($top_categories as &$category) {
        $category['percentage_mix'] = $total_sales > 0 ? ($category['total_sales'] / $total_sales) * 100 : 0;
        $category['percentage_mix'] = number_format($category['percentage_mix'], 2);

        // Prepare pie chart data
        $pie_chart_data[] = [
            'label' => $category['category_name'],
            'value' => $category['total_sales']
        ];
    }

    return [
        'top_categories' => $top_categories,
        'total_sales' => $total_sales,
        'pie_chart_data' => $pie_chart_data // Return the pie chart data
    ];
}

// for Bar or line chart Top categories with empty date data

function getTopCategoriesWithEmptyDateBarOrLineChartData($timestamp_from, $timestamp_to, $limit = 5)
{
    // Adjust the end timestamp to include the entire day
    $timestamp_to = strtotime('23:59:59', $timestamp_to);

    // Determine if the range spans more than one month
    $is_multiple_months = date('Y-m', $timestamp_from) !== date('Y-m', $timestamp_to);

    // Generate labels (dates or months) for the selected range
    $labels = [];
    if ($is_multiple_months) {
        // Generate all months in the range
        $start = new DateTime(date('Y-m-01', $timestamp_from));
        $end = new DateTime(date('Y-m-01', $timestamp_to));
        while ($start <= $end) {
            $labels[] = $start->format('Y-m');
            $start->modify('+1 month');
        }
    } else {
        // Generate all dates in the single month
        $start = new DateTime(date('Y-m-d', $timestamp_from));
        $end = new DateTime(date('Y-m-d', $timestamp_to));
        while ($start <= $end) {
            $labels[] = $start->format('Y-m-d');
            $start->modify('+1 day');
        }
    }

    // Fetch top categories by total sales for the entire range
    $top_category_names = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name, 
                SUM(od.price * od.amount) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id = 0  -- Only top-level categories
         GROUP BY c.category_id
         ORDER BY total_sales DESC
         LIMIT ?i",
        $timestamp_from,
        $timestamp_to,
        $limit
    );

    // Extract category IDs for filtering
    $category_ids = array_column($top_category_names, 'category_id');

    // Fetch sales data for the selected top categories, grouped by the selected interval (either date or month)
    $group_by = $is_multiple_months
        ? "DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '%Y-%m')"
        : "DATE(FROM_UNIXTIME(o.timestamp))";

    $sales_data = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name, 
                $group_by AS period,
                SUM(od.price * od.amount) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.category_id IN (?a)
         GROUP BY c.category_id, period
         ORDER BY period ASC",
        $timestamp_from,
        $timestamp_to,
        $category_ids
    );

    // Prepare data for the chart
    $chart_data = [
        'labels' => $labels, // Use labels (dates or months) as x-axis labels
        'datasets' => []
    ];

    // Set random colors for each category's data line
    $colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#FF9F33'];

    // Organize sales by category and period
    $category_sales = [];
    foreach ($sales_data as $data_point) {
        $category_name = $data_point['category_name'];
        $period = $data_point['period'];
        $total_sales = $data_point['total_sales'];

        // Organize sales by category and period
        if (!isset($category_sales[$category_name])) {
            $category_sales[$category_name] = [];
        }
        $category_sales[$category_name][$period] = $total_sales;
    }

    // Prepare datasets for each top category
    foreach ($category_sales as $category_name => $sales_data) {
        $sales = [];
        foreach ($labels as $label) {
            $sales[] = $sales_data[$label] ?? 0; // Set to 0 if no sales data
        }

        $chart_data['datasets'][] = [
            'label' => $category_name,
            'data' => $sales,
            'backgroundColor' => $colors[count($chart_data['datasets']) % count($colors)],
            'borderColor' => $colors[count($chart_data['datasets']) % count($colors)],
            'borderWidth' => 1
        ];
    }

    return $chart_data;
}

// for Without Empty Date Line Or bar chart Top categories
function getTopCategoriesWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to, $limit = 7)
{
    // Force grouping by day if the range is within the same month, else group by month
    $group_format = (date('Y-m', $timestamp_from) === date('Y-m', $timestamp_to)) ? '%Y-%m-%d' : '%Y-%m';

    // Fetch the total sales amount for calculating percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Get the top categories with total sales and units sold
    // First, limit the top categories based on total sales, then group by period
    $top_categories = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name, 
                DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '$group_format') AS period,
                SUM(od.price * od.amount) AS total_sales, 
                SUM(od.amount) AS units_sold 
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id = 0
         GROUP BY c.category_id, period
         ORDER BY total_sales DESC",
        $timestamp_from,
        $timestamp_to
    );

    // Limit to top $limit categories
    $top_categories = array_slice($top_categories, 0, $limit);

    // Prepare data for the bar chart
    $bar_chart_data = [
        'labels' => [],  // Array of date/month labels for the x-axis
        'datasets' => []
    ];

    // Set random colors for each category's bar
    $colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#FF9F33'];

    // Track sales data by category and period
    $category_sales = [];

    foreach ($top_categories as $category) {
        $period = $category['period'];
        $category_name = $category['category_name'];
        //$total_sales = $category['total_sales'];
        $total_sales = round($category['total_sales'], 1); // Round to one decimal place

        // Add period (date/month) to labels if it's not already added
        if (!in_array($period, $bar_chart_data['labels'])) {
            $bar_chart_data['labels'][] = $period;
        }

        // Organize sales by category and period
        if (!isset($category_sales[$category_name])) {
            $category_sales[$category_name] = [];
        }
        $category_sales[$category_name][$period] = $total_sales;
    }

    // Sort the labels (dates/months) from earliest to latest
    usort($bar_chart_data['labels'], function ($a, $b) {
        return strtotime($a) - strtotime($b);
    });

    // Prepare datasets for each category
    foreach ($category_sales as $category_name => $sales_data) {
        $sales = [];
        foreach ($bar_chart_data['labels'] as $period) {
            $sales[] = isset($sales_data[$period]) ? $sales_data[$period] : 0;
        }

        $bar_chart_data['datasets'][] = [
            'label' => $category_name,
            'data' => $sales,
            'backgroundColor' => $colors[count($bar_chart_data['datasets']) % count($colors)],
            'borderColor' => $colors[count($bar_chart_data['datasets']) % count($colors)],
            'borderWidth' => 1
        ];
    }

    return $bar_chart_data;
}


// normal resource_list  info Top Sub categories
function getTopSubCategories($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Fetch top categories by total sales, units sold, and percentage mix
    $top_categories = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name,
                SUM(od.price * od.amount) AS total_sales, 
                SUM(od.amount) AS units_sold
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C')
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id != 0
         GROUP BY c.category_id
         ORDER BY total_sales DESC
         LIMIT ?i",
        $timestamp_from,
        $timestamp_to,
        $limit
    );

    // Calculate the percentage mix for each category
    foreach ($top_categories as &$category) {
        $category['percentage_mix'] = $total_sales > 0 ? ($category['total_sales'] / $total_sales) * 100 : 0;
        $category['percentage_mix'] = number_format($category['percentage_mix'], 2);
    }

    return [
        'top_categories' => $top_categories,
        'total_sales' => $total_sales
    ];
}
// for pie chart Top Sub categories
function getTopSubCategoriesPieChart($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Fetch top subcategories by total sales, units sold, and percentage mix
    $top_subcategories = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name,
                SUM(od.price * od.amount) AS total_sales, 
                SUM(od.amount) AS units_sold
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C')
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id != 0
         GROUP BY c.category_id
         ORDER BY total_sales DESC
         LIMIT ?i",
        $timestamp_from,
        $timestamp_to,
        $limit
    );

    // Calculate the percentage mix for each subcategory and prepare data for pie chart
    $pie_chart_data = [];
    foreach ($top_subcategories as &$subcategory) {
        // Calculate the percentage mix for each subcategory
        $subcategory['percentage_mix'] = $total_sales > 0 ? ($subcategory['total_sales'] / $total_sales) * 100 : 0;
        $subcategory['percentage_mix'] = number_format($subcategory['percentage_mix'], 2);

        // Prepare the data for the pie chart
        $pie_chart_data[] = [
            'label' => $subcategory['category_name'],
            'value' => $subcategory['total_sales']
        ];
    }

    return [
        'top_subcategories' => $top_subcategories,
        'total_sales' => $total_sales,
        'pie_chart_data' => $pie_chart_data // Return the pie chart data
    ];
}

//line chart and bar chart with empty date for Top Sub categories

function getTopSubCategoriesWithEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to, $limit = 5)
{
    // Adjust the end timestamp to include the entire day
    $timestamp_to = strtotime('23:59:59', $timestamp_to);

    // Determine if the range spans more than one month
    $is_multiple_months = date('Y-m', $timestamp_from) !== date('Y-m', $timestamp_to);

    // Generate labels (dates or months) for the selected range
    $labels = [];
    if ($is_multiple_months) {
        // Generate all months in the range
        $start = new DateTime(date('Y-m-01', $timestamp_from));
        $end = new DateTime(date('Y-m-01', $timestamp_to));
        while ($start <= $end) {
            $labels[] = $start->format('Y-m');
            $start->modify('+1 month');
        }
    } else {
        // Generate all dates in the single month
        $start = new DateTime(date('Y-m-d', $timestamp_from));
        $end = new DateTime(date('Y-m-d', $timestamp_to));
        while ($start <= $end) {
            $labels[] = $start->format('Y-m-d');
            $start->modify('+1 day');
        }
    }

    // Fetch top unique subcategories by total sales for the entire range
    $top_subcategory_ids = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name, 
                SUM(od.price * od.amount) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id != 0  -- Only subcategories
         GROUP BY c.category_id
         ORDER BY total_sales DESC
         LIMIT ?i",
        $timestamp_from,
        $timestamp_to,
        $limit
    );

    // Extract category IDs for filtering
    $subcategory_ids = array_column($top_subcategory_ids, 'category_id');

    // Fetch sales data for the selected top subcategories, grouped by the selected interval
    $group_by = $is_multiple_months
        ? "DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '%Y-%m')"
        : "DATE(FROM_UNIXTIME(o.timestamp))";

    $sales_data = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name, 
                $group_by AS period,
                SUM(od.price * od.amount) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.category_id IN (?a)
         GROUP BY c.category_id, period
         ORDER BY period ASC",
        $timestamp_from,
        $timestamp_to,
        $subcategory_ids
    );

    // Prepare data for the chart
    $chart_data = [
        'labels' => $labels, // Use labels (dates or months) as x-axis labels
        'datasets' => []
    ];

    // Set random colors for each subcategory's data line
    $colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#FF9F33'];

    // Organize sales by subcategory and period
    $subcategory_sales = [];
    foreach ($sales_data as $data_point) {
        $subcategory_name = $data_point['category_name'];
        $period = $data_point['period'];
        $total_sales = $data_point['total_sales'];

        // Organize sales by subcategory and period
        if (!isset($subcategory_sales[$subcategory_name])) {
            $subcategory_sales[$subcategory_name] = [];
        }
        $subcategory_sales[$subcategory_name][$period] = $total_sales;
    }

    // Prepare datasets for each subcategory
    foreach ($subcategory_sales as $subcategory_name => $sales_data) {
        $sales = [];
        foreach ($labels as $label) {
            $sales[] = $sales_data[$label] ?? 0; // Set to 0 if no sales data
        }

        $chart_data['datasets'][] = [
            'label' => $subcategory_name,
            'data' => $sales,
            'backgroundColor' => $colors[count($chart_data['datasets']) % count($colors)],
            'borderColor' => $colors[count($chart_data['datasets']) % count($colors)],
            'borderWidth' => 1
        ];
    }

    return $chart_data;
}

//line chart and bar chart without empty date for Top Sub categories
// new code to  show Top Sub categories like 23.1
function getTopSubCategoriesWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to, $limit = 5)
{
    // Force grouping by month for the given range
    $group_format = (date('Y-m', $timestamp_from) === date('Y-m', $timestamp_to)) ? '%Y-%m-%d' : '%Y-%m';

    // Fetch top unique subcategories by total sales for the entire range
    $top_subcategory_ids = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name, 
                SUM(od.price * od.amount) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id != 0  -- Only subcategories
         GROUP BY c.category_id
         ORDER BY total_sales DESC
         LIMIT ?i",
        $timestamp_from,
        $timestamp_to,
        $limit
    );

    // Extract category IDs for filtering
    $subcategory_ids = array_column($top_subcategory_ids, 'category_id');

    // Fetch sales data for the selected top subcategories, grouped by period
    $sales_data = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name, 
                DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '$group_format') AS period,
                SUM(od.price * od.amount) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.category_id IN (?a)
         GROUP BY c.category_id, period
         ORDER BY period ASC",
        $timestamp_from,
        $timestamp_to,
        $subcategory_ids
    );

    // Prepare data for the bar chart
    $bar_chart_data = [
        'labels' => [],  // Array of date/month labels for the x-axis
        'datasets' => []
    ];

    // Set random colors for each subcategory's bar
    $colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#FF9F33'];

    // Organize sales by subcategory and period
    $subcategory_sales = [];
    foreach ($sales_data as $data_point) {
        $period = $data_point['period'];
        $subcategory_name = $data_point['category_name'];
      //  $total_sales = $data_point['total_sales'];
        $total_sales = round($data_point['total_sales'], 1); // Round to one decimal place

        // Add period (date/month) to labels if it's not already added
        if (!in_array($period, $bar_chart_data['labels'])) {
            $bar_chart_data['labels'][] = $period;
        }

        // Organize sales by subcategory and period
        if (!isset($subcategory_sales[$subcategory_name])) {
            $subcategory_sales[$subcategory_name] = [];
        }
        $subcategory_sales[$subcategory_name][$period] = $total_sales;
    }

    // Sort the labels (dates/months) from earliest to latest
    usort($bar_chart_data['labels'], function ($a, $b) {
        return strtotime($a) - strtotime($b);
    });

    // Prepare datasets for each subcategory
    foreach ($subcategory_sales as $subcategory_name => $sales_data) {
        $sales = [];
        foreach ($bar_chart_data['labels'] as $period) {
            $sales[] = $sales_data[$period] ?? 0; // Set to 0 if no sales data
        }

        $bar_chart_data['datasets'][] = [
            'label' => $subcategory_name,
            'data' => $sales,
            'backgroundColor' => $colors[count($bar_chart_data['datasets']) % count($colors)],
            'borderColor' => $colors[count($bar_chart_data['datasets']) % count($colors)],
            'borderWidth' => 1
        ];
    }

    return $bar_chart_data;
}

// normal resource_list  info Order by gender
function getGenderCategories($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Fetch top categories by total sales, units sold, and percentage mix
    $top_categories = Tygh::$app['db']->getArray(
        "SELECT c.category_id, cd.category AS category_name,
                SUM(od.price * od.amount) AS total_sales, 
                SUM(od.amount) AS units_sold
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C')
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id = 0
           and cd.category in ('Women', 'Men','Kids')
         GROUP BY c.category_id
         ORDER BY total_sales DESC
         LIMIT ?i",
        $timestamp_from,
        $timestamp_to,
        $limit
    );

    // Calculate the percentage mix for each category
    foreach ($top_categories as &$category) {
        $category['percentage_mix'] = $total_sales > 0 ? ($category['total_sales'] / $total_sales) * 100 : 0;
        $category['percentage_mix'] = number_format($category['percentage_mix'], 2);
    }

    return [
        'top_categories' => $top_categories,
        'total_sales' => $total_sales
    ];
}
// for pie chart Order by gender
function getGenderCategoriespiechart($timestamp_from, $timestamp_to, $limit = 5)
{
  
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P','C') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Fetch top categories by total sales, units sold, and percentage mix
    $top_categories = Tygh::$app['db']->getArray(
        "WITH RECURSIVE category_tree AS (
            SELECT 
                c.category_id, 
                c.parent_id,
                c.category_id AS top_category_id,
                cd.category AS category_name
            FROM ?:categories AS c
            JOIN ?:category_descriptions AS cd ON c.category_id = cd.category_id
            -- WHERE cd.category_id IN (281, 282, 283) -- Start with main categories
            WHERE cd.category_id IN (265, 266, 267) -- Start with main categories
    
            UNION ALL
    
            SELECT 
                c.category_id,
                c.parent_id,
                ct.top_category_id, -- Retain the top-level category for aggregation
                cd.category AS category_name
            FROM ?:categories AS c
            JOIN ?:category_descriptions AS cd ON c.category_id = cd.category_id
            JOIN category_tree AS ct ON c.parent_id = ct.category_id -- Fetch subcategories
        )
        SELECT 
            ct.top_category_id AS category_id, 
            MAX(tc.category) AS parent_category_name, -- Use the name of the parent category
            SUM(od.price * od.amount) AS total_sales,
            SUM(od.amount) AS units_sold
        FROM ?:orders AS o
        JOIN ?:order_details AS od ON o.order_id = od.order_id
        JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
        JOIN category_tree AS ct ON pc.category_id = ct.category_id -- Match all categories
        JOIN ?:category_descriptions AS tc ON ct.top_category_id = tc.category_id -- Fetch top-level category names
        WHERE o.status IN ('A', 'P','C')
          AND o.timestamp BETWEEN ?i AND ?i
        GROUP BY ct.top_category_id
        ORDER BY total_sales DESC
        LIMIT ?i",
        $timestamp_from,
        $timestamp_to,
        $limit
    );
    
    // Calculate the percentage mix for each category and prepare pie chart data
    $pie_chart_data = [];
    foreach ($top_categories as &$category) {
        $category['percentage_mix'] = $total_sales > 0 ? ($category['total_sales'] / $total_sales) * 100 : 0;
        $category['percentage_mix'] = round($category['percentage_mix'], 1);

        // Add the pie chart data
        $pie_chart_data[] = [
            'label' => $category['parent_category_name'],
            'total_sales' => round($category['total_sales'] ,1),
            'units_sold' => $category['units_sold'],
        ];
    }

    return [
        'top_categories' => $top_categories,
        'total_sales' => $total_sales,
        'pie_chart_data' => $pie_chart_data // Return the pie chart data
    ];
}

//With Empty Date Bar Or line chart Data For Order by gender
function getGenderCategoriesWithEmptyDateBarOrLineChartData($timestamp_from, $timestamp_to, $limit = 5)
{

    $sales_data = Tygh::$app['db']->getArray(
        "SELECT DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '%Y-%m') AS month,
                DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '%Y-%m-%d') AS day,
                cd.category AS category_name,
                SUM(od.price * od.amount) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C')
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id = 0
           AND cd.category IN ('Women', 'Men', 'Kids')
         GROUP BY cd.category, month
         ORDER BY month, cd.category",
        $timestamp_from,
        $timestamp_to
    );


    // Organize data for the line chart
    $line_chart_data = [
        'labels' => [],
        'datasets' => []
    ];

    $categories = ['Women', 'Men', 'Kids'];
    $sales_by_month = [];
    $sales_by_day = [];

    // Determine if the selected range is within one month or spans multiple months
    $is_single_month_range = date('Y-m', $timestamp_from) === date('Y-m', $timestamp_to);

    // Populate sales data by category, month, and day
    foreach ($sales_data as $data_point) {
        $month = $data_point['month'];
        $day = $data_point['day'];
        $category = $data_point['category_name'];
        $total_sales = $data_point['total_sales'];

        // Track unique months or days
        if ($is_single_month_range) {
            if (!in_array($day, $line_chart_data['labels'])) {
                $line_chart_data['labels'][] = $day;
            }
            $sales_by_day[$category][$day] = $total_sales;
        } else {
            if (!in_array($month, $line_chart_data['labels'])) {
                $line_chart_data['labels'][] = $month;
            }
            $sales_by_month[$category][$month] = $total_sales;
        }
    }

    // Ensure the full range of months or days is included in the chart
    if ($is_single_month_range) {
        $start_day = date('Y-m-d', $timestamp_from);
        $end_day = date('Y-m-d', $timestamp_to);

        // Generate all days between the start and end date
        $start = new DateTime($start_day);
        $end = new DateTime($end_day);
        $end->modify('+1 day'); // Include the end date in the range

        $period = new DatePeriod($start, new DateInterval('P1D'), $end);

        // Add missing days as labels
        foreach ($period as $dt) {
            $day = $dt->format('Y-m-d');
            if (!in_array($day, $line_chart_data['labels'])) {
                $line_chart_data['labels'][] = $day;
            }
        }
    } else {
        $start_month = date('Y-m', $timestamp_from);
        $end_month = date('Y-m', $timestamp_to);

        // Generate all months between the start and end date
        $period = new DatePeriod(
            new DateTime($start_month . '-01'),
            new DateInterval('P1M'),
            new DateTime($end_month . '-01')
        );

        // Add missing months as labels
        foreach ($period as $dt) {
            $month = $dt->format('Y-m');
            if (!in_array($month, $line_chart_data['labels'])) {
                $line_chart_data['labels'][] = $month;
            }
        }
    }

    // Sort the labels to ensure proper chronological order
    sort($line_chart_data['labels']);

    // Prepare datasets for each category
    foreach ($categories as $category) {
        $sales = [];
        if ($is_single_month_range) {
            foreach ($line_chart_data['labels'] as $day) {
                // If data exists for this day, add the sales value; otherwise, add 0
                $sales[] = $sales_by_day[$category][$day] ?? 0;
            }
        } else {
            foreach ($line_chart_data['labels'] as $month) {
                // If data exists for this month, add the sales value; otherwise, add 0
                $sales[] = $sales_by_month[$category][$month] ?? 0;
            }
        }

        $line_chart_data['datasets'][] = [
            'label' => $category,
            'data' => $sales,
            'borderColor' => ($category === 'Women') ? '#E91E63' : (($category === 'Men') ? '#2196F3' : '#FFC107'),
            'backgroundColor' => 'rgba(0, 0, 0, 0.0)', // Transparent background for line chart
            'borderWidth' => 2
        ];
    }

    return $line_chart_data;
}


// Without Empty Date Line Or bar chart Data for Order by gender
function getGenderCategoriesWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to, $limit = 5)
{
    // Force grouping by day if the range is within the same month
    $group_format = (date('Y-m', $timestamp_from) === date('Y-m', $timestamp_to)) ? '%Y-%m-%d' : '%Y-%m';

    $sales_data = Tygh::$app['db']->getArray(
        "SELECT DATE_FORMAT(FROM_UNIXTIME(o.timestamp), '$group_format') AS period,
                cd.category AS category_name,
                SUM(od.price * od.amount) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:products_categories AS pc ON od.product_id = pc.product_id
         JOIN ?:category_descriptions AS cd ON pc.category_id = cd.category_id
         JOIN ?:categories AS c ON c.category_id = pc.category_id
         WHERE o.status IN ('A', 'P','C')
           AND o.timestamp BETWEEN ?i AND ?i
           AND c.parent_id = 0
           AND cd.category IN ('Women', 'Men', 'Kids')
         GROUP BY period, category_name
         ORDER BY period, category_name",
        $timestamp_from,
        $timestamp_to
    );

    // Organize data for the bar chart
    $bar_chart_data = [
        'labels' => [],
        'datasets' => []
    ];

    $categories = ['Women', 'Men', 'Kids'];
    $period_sales = [];

    foreach ($sales_data as $data_point) {
        $period = $data_point['period'];
        $category = $data_point['category_name'];
        $total_sales = $data_point['total_sales'];

        // Track unique periods (dates or months)
        if (!in_array($period, $bar_chart_data['labels'])) {
            $bar_chart_data['labels'][] = $period;
        }

        // Organize sales by category and period
        $period_sales[$category][$period] = $total_sales;
    }

    // Prepare datasets for each category
    foreach ($categories as $category) {
        $sales = [];
        foreach ($bar_chart_data['labels'] as $period) {
            $sales[] = $period_sales[$category][$period] ?? 0;
        }

        $bar_chart_data['datasets'][] = [
            'label' => $category,
            'data' => $sales,
            'backgroundColor' => ($category === 'Women') ? '#E91E63' : (($category === 'Men') ? '#2196F3' : '#FFC107'),
            'borderColor' => ($category === 'Women') ? '#E91E63' : (($category === 'Men') ? '#2196F3' : '#FFC107'),
            'borderWidth' => 1
        ];
    }


    return $bar_chart_data;
}


if ($mode == 'reports') {
    $time_periods = [
        DateTimeHelper::PERIOD_TODAY,
        DateTimeHelper::PERIOD_YESTERDAY,
        DateTimeHelper::PERIOD_THIS_MONTH,
        DateTimeHelper::PERIOD_LAST_MONTH,
        DateTimeHelper::PERIOD_THIS_YEAR,
        DateTimeHelper::PERIOD_LAST_YEAR,
    ];

    $time_period = DateTimeHelper::getPeriod(DateTimeHelper::PERIOD_MONTH_AGO_TILL_NOW);

    // Predefined period selected
    if (isset($_REQUEST['time_period']) && in_array($_REQUEST['time_period'], $time_periods)) {
        $time_period = DateTimeHelper::getPeriod($_REQUEST['time_period']);

        fn_set_session_data('dashboard_selected_period', serialize([
            'period' => $_REQUEST['time_period']
        ]));
    }
    // Custom period selected
    elseif (isset($_REQUEST['time_from'], $_REQUEST['time_to'])) {
        $time_period = DateTimeHelper::createCustomPeriod('@' . $_REQUEST['time_from'], '@' . $_REQUEST['time_to']);

        fn_set_session_data('dashboard_selected_period', serialize([
            'from' => $time_period['from']->format(DateTime::ISO8601),
            'to' => $time_period['to']->format(DateTime::ISO8601),
        ]));
    }
    // Fallback to previously saved period
    elseif ($timeframe = fn_get_session_data('dashboard_selected_period')) {
        $timeframe = unserialize($timeframe);

        if (isset($timeframe['period']) && in_array($timeframe['period'], $time_periods)) {
            $time_period = DateTimeHelper::getPeriod($timeframe['period']);
        } elseif (isset($timeframe['from'], $timeframe['to'])) {
            $time_period = DateTimeHelper::createCustomPeriod($timeframe['from'], $timeframe['to']);
        }
    }

    $timestamp_from = $time_period['from']->getTimestamp();
    $timestamp_to = $time_period['to']->getTimestamp();

    $time_difference = $timestamp_to - $timestamp_from;

    if (true) {
        /** @var \Tygh\Storefront\Repository $storefront_repository */
        $storefront_repository = Tygh::$app['storefront.repository'];
        /** @var \Tygh\Storefront\Storefront $storefront */
        $storefront = $storefront_repository->findById($storefront_id);

        $auth = Tygh::$app['session']['auth'];
        if ($auth['user_type'] === UserTypes::ADMIN) {
            $company_ids = $storefront ? $storefront->getCompanyIds() : [];
        } else {
            $company_ids = [$auth['company_id']];
        }

        $show_dashboard_preloader = false;
        $is_day = ($timestamp_to - $timestamp_from) <= SECONDS_IN_DAY ? true : false;;



        $date_format = Registry::get('settings.Appearance.calendar_date_format') === 'month_first' ? 'M d, Y' : 'd M Y';

        $sales_matrics = getSalesMetrics($timestamp_from, $timestamp_to);
        // line chart sales matrix


        $top_brands_result = getTopVendors($timestamp_from, $timestamp_to);
        $top_brands = $top_brands_result['top_vendors'];
        $top_brand_content = [];
        $total_sales = $top_brands_result['total_sales'];

        foreach ($top_brands as $brand) {
            $top_brand_content[] = [
                "id" => "analytics_card_products_out_of_stock",
                "name" => $brand['vendor_name'],
                "href" => fn_url('companies.update?company_id=' . $brand['company_id']),
                "value" => 'Dhs' . $brand['total_sales'] . "(" . $brand['units_sold'] . ")/" . $brand['percentage_mix'] . "%",
            ];
        }

        //top 5 best seller
            $top_bestsellers_result = getTopBestsellers($timestamp_from, $timestamp_to);
            
            $top_bestsellers = $top_bestsellers_result['top_products'];
            $total_units_sold = $top_bestsellers_result['total_units_sold'];

            // Prepare the output
            $top_bestsellers_content = [];
            foreach ($top_bestsellers as $product) {
                $product_edit_url = fn_url("admin.php?dispatch=products.update&product_id=" . $product['product_id']);
               
                $top_bestsellers_content[] = [
                    'name' => '<div style="display: flex; align-items: center;"><a href="' . $product_edit_url . '" target="_blank"><span style="margin-right: 10px;">' . $product['product_name'] . '</span></a><img src="' . $product['image_url'] . '" style="max-width: 50px; max-height: 50px;"></div>',
                    'image_url' => $product['image_url'],
                    'value' => 'Dhs' . $product['total_sales'] . " (" . $product['total_units_sold'] . ")/" . $product['percentage_mix'] . '%',
                   // 'value' => 'Price:' . $product['total_sales'] . " (" . $product['total_units_sold'] . ")/" . $product['percentage_mix'] . "%"
                ];
            }
       Tygh::$app['view']->assign('top_bestsellers_content', $top_bestsellers_content);

        // for pie chart
        $top_brands_result1 = getTopVendorsPieChart($timestamp_from, $timestamp_to);
        $top_brands1 = $top_brands_result1['top_vendors'];
        $top_brand_content1 = [];
        $total_sales1 = $top_brands_result1['total_sales'];

        foreach ($top_brands1 as $brand) {
            $top_brand_content1[] = [
                "id" => "analytics_card_products_out_of_stock",
                "name" => $brand['vendor_name'],
                "href" => fn_url('companies.update?company_id=' . $brand['company_id']),
                "value" => 'Dhs'.$brand['total_sales'] . "(" . $brand['units_sold'] . ")/" . $brand['percentage_mix'] . "%",
            ];
        }
        $pie_chart_data = $top_brands_result1['pie_chart_data'];

        $top_categories_result = getTopCategories($timestamp_from, $timestamp_to);
        $top_categories = $top_categories_result['top_categories'];
        $top_category_content = [];


        foreach ($top_categories as $category) {
            $top_category_content[] = [
                "id" => "analytics_card_products_out_of_stock",
                "name" => $category['category_name'],
                "href" => fn_url('categories.update?category_id=' . $category['category_id']),
                "value" => $category['total_sales'] . "(" . $category['units_sold'] . ")/" . $category['percentage_mix'] . "%",
            ];
        }

        //for pie chart
        $top_categories_result1 = getTopCategoriesPieChart($timestamp_from, $timestamp_to);
        $top_categories1 = $top_categories_result1['top_categories'];
        $top_category_content1 = [];


        foreach ($top_categories1 as $category) {
            $top_category_content1[] = [
                "id" => "analytics_card_products_out_of_stock",
                "name" => $category['category_name'],
                "href" => fn_url('categories.update?category_id=' . $category['category_id']),
                "value" => $category['total_sales'] . "(" . $category['units_sold'] . ")/" . $category['percentage_mix'] . "%",
            ];
        }
        $category_pie_chart_data = $top_categories_result1['pie_chart_data'];

        $top_sub_categories_result = getTopSubCategories($timestamp_from, $timestamp_to);
        $top_sub_categories = $top_sub_categories_result['top_categories'];
        $top_sub_category_content = [];

        foreach ($top_sub_categories as $category) {
            $top_sub_category_content[] = [
                "id" => "analytics_card_products_out_of_stock",
                "name" => $category['category_name'],
                "href" => fn_url('categories.update?category_id=' . $category['category_id']),
                "value" => $category['total_sales'] . "(" . $category['units_sold'] . ")/" . $category['percentage_mix'] . "%",
            ];
        }

        // for pie chart
        $top_sub_categories_result1 = getTopSubCategoriesPieChart($timestamp_from, $timestamp_to);
        $top_sub_categories1 = $top_sub_categories_result1['top_categories'];
        $top_sub_category_content1 = [];

        foreach ($top_sub_categories1 as $category) {
            $top_sub_category_content1[] = [
                "id" => "analytics_card_products_out_of_stock",
                "name" => $category['category_name'],
                "href" => fn_url('categories.update?category_id=' . $category['category_id']),
                "value" => $category['total_sales'] . "(" . $category['units_sold'] . ")/" . $category['percentage_mix'] . "%",
            ];
        }
        $sub_category_pie_chart_data = $top_sub_categories_result1['pie_chart_data'];

        $gender_categories_result = getGenderCategories($timestamp_from, $timestamp_to);
        $gender_categories = $gender_categories_result['top_categories'];
        $gender_category_content = [];

        foreach ($gender_categories as $category) {
            $gender_category_content[] = [
                "id" => "analytics_card_products_out_of_stock",
                "name" => $category['category_name'],
                "href" => fn_url('categories.update?category_id=' . $category['category_id']),
                "value" => $category['total_sales'] . "(" . $category['units_sold'] . ")/" . $category['percentage_mix'] . "%",
            ];
        }

        // for pie chart
        $gender_categories_result1 = getGenderCategoriespiechart($timestamp_from, $timestamp_to);
        $gender_categories1 = $gender_categories_result1['top_categories'];
        $gender_category_content1 = [];

        foreach ($gender_categories1 as $category) {
            $gender_category_content1[] = [
                "id" => "analytics_card_products_out_of_stock",
                "name" => $category['category_name'],
                "href" => fn_url('categories.update?category_id=' . $category['category_id']),
                "value" => $category['total_sales'] . "(" . $category['units_sold'] . ")/" . $category['percentage_mix'] . "%",
                
            ];
        }
        $gender_category_pie_chart_data =  $gender_categories_result1['pie_chart_data'];


        $block_report = array(
            "primary" => array(
                "salse" => [
                    "id" => "analytics_card_sales",
                    "is_selected_date" => true,
                    "use_price_for_number" => true,
                    "position" => 10,
                    "dispatch" => "",
                    "title" => "Sales Units vs value",
                    "content_data_function" => "getSalesBlockData",
                    "preheader" => date($date_format, $timestamp_from) . ' - ' . date($date_format, $timestamp_to),
                    "number" => 0,
                    "number_dynamics" => "0.00",
                    "data_1" => "Value",
                    "data_2" => "Units",
                    // "graph" => [
                    //     "content" => getSalesGraphData($timestamp_from, $timestamp_to)
                    // ],
                    // "pie_chart" => [
                    //     "content" => getSalesPieChartData($timestamp_from, $timestamp_to),
                    // ],
                    "line_chart2" => [
                        "content" => getSalesWithoutEmptyDateBarOrLineChartDataMonthWise($timestamp_from, $timestamp_to),
                    ],
                    // "bar_chart2" => [
                    //     "content" => getSalesWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to),
                    // ]
                ],
                "order" => [
                    "id" => "analytics_card_orders",
                    "is_selected_date" => true,
                    "use_price_for_number" => true,
                    "position" => 10,
                    "dispatch" => "",
                    "title" => "Order online vs offline",
                    "content_data_function" => "getSalesBlockData",
                    "preheader" => date($date_format, $timestamp_from) . ' - ' . date($date_format, $timestamp_to),
                    "number" => 0,
                    "number_dynamics" => "0.00",
                    "data_1" => "Online",
                    "data_2" => "Offline",
                    // "graph" => [
                    //     "content" => getOrderGraphData($timestamp_from, $timestamp_to)
                    // ],
                    "pie_chart" => [
                        "content" => getOrderPieChartData($timestamp_from, $timestamp_to),
                    ],
                    "line_chart" => [
                        "content" => getOrderWithEmptyDateBarOrLineChartData($timestamp_from, $timestamp_to),
                    ],
                    // "bar_chart2" => [
                    //     "content" => getOrderWithOutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to),
                    // ]
                ]
            ),
            "secondary" => array(
                'order_summery' => [
                    "id" => "analytics_card_products",
                    "title" => "Order summary",
                    "position" => 20,
                    "number" => 'Dhs'.$total_sales,
                    "dispatch" => "products.manage",
                    "content_data_function" => "getProductsBlockData",
                    // "resource_list" => [
                    //     "id" => "analytics_card_products_resource_list",
                    //     "content" => [
                    //         [
                    //             "id" => "analytics_card_products_out_of_stock",
                    //             "name" => "Number of transactions",
                    //             "value" => $sales_matrics['not'],
                    //         ],
                    //         [
                    //             "id" => "vendor_data_premoderation_analytics_card_products_out_of_stock",
                    //             "name" => "UPT = No of units sold per transaction",
                    //             "value" => $sales_matrics['upt'],
                    //         ],
                    //         [
                    //             "id" => "vendor_data_premoderation_analytics_card_products_disapproved",
                    //             "name" => "ARP = Average Basket or Average Retail Price Per Transaction",
                    //             "value" => $sales_matrics['arp'],
                    //         ]
                    //     ]
                    // ],
                    // 'pie_chart' => [
                    //     'content' => [
                    //         [
                    //             'label' => 'Number of Transactions',
                    //             'value' => isset($sales_matrics['not']) ? $sales_matrics['not'] : 0
                    //         ],
                    //         [
                    //             'label' => 'Units Sold per Transaction (UPT)',
                    //             'value' => isset($sales_matrics['upt']) ? $sales_matrics['upt'] : 0
                    //         ],
                    //         [
                    //             'label' => 'Average Retail Price per Transaction (ARP)',
                    //             'value' => isset($sales_matrics['arp']) ? $sales_matrics['arp'] : 0
                    //         ]
                    //     ]
                    // ],
                    'line_chart2' => [
                        "content" => getWithEmptyBarOrLineChartSalesMetricsData($timestamp_from, $timestamp_to),
                    ],
                    // 'bar_chart2' => [
                    //     "content" => getWithoutEmptyDateLineOrBarChartSalesMetricsData($timestamp_from, $timestamp_to),
                    // ],

                ],

                'gender' => [
                    "id" => "analytics_card_vendors",
                    "title" => "Order by gender",
                    "position" => 20,
                    "dispatch" => "products.manage",
                    "content_data_function" => "getProductsBlockData",
                    // "resource_list" => [
                    //     "id" => "analytics_card_products_resource_list",
                    //     "content" => $gender_category_content
                    // ],
                    "pie_chart" => [
                        "content" => $gender_category_pie_chart_data // Pass pie chart data here
                    ],
                    // "line_chart" => [
                    //     "content" => getGenderCategoriesWithEmptyDateBarOrLineChartData($timestamp_from, $timestamp_to), // Use the new function
                    // ],
                    // 'bar_chart2' => [
                    //     "content" => getGenderCategoriesWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to),
                    // ],

                ],
            ),
            "tertiary" => array(
                'vendors3'=> [
                    "id" => "analytics_card_vendors",
                    "title" => 'Top vendors list <span style="font-size: 12px;font-weight: normal;">(Format: Value(Unit)/Percentage)</span>',
                    "position" => 20,
                    "dispatch" => "products.manage",
                    "content_data_function" => "getProductsBlockData",
                    "resource_list" => [
                        "id" => "analytics_card_products_resource_list",
                        "content" => $top_brand_content
                    ]
                ],

                'best_sellers' => [
                    "id" => "analytics_card_best_sellers",
                    "title" => 'Top 5 Bestsellers <span style="font-size: 12px;font-weight: normal;">(Format: Price(quantity)/Percentage)</span>',
                    "position" => 30, // Adjust the position to place it correctly relative to other menus
                    "dispatch" => "products.manage",
                    "content_data_function" => "getTopBestsellersBlockData",
                    "resource_list" => [
                        "id" => "analytics_card_best_sellers_resource_list",
                        "content" => $top_bestsellers_content, // This will contain the bestseller data
                    ]
                ],


                'vendors' => [
                    "id" => "analytics_card_vendors",
                    "title" => "Top vendors by sels value",
                    "position" => 20,
                    "dispatch" => "products.manage",
                    "content_data_function" => "getProductsBlockData",
                    // "resource_list" => [
                    //     "id" => "analytics_card_products_resource_list",
                    //     "content" => $top_brand_content
                    // ],
                    // "pie_chart" => [
                    //     "content" => $pie_chart_data // Pass pie chart data here
                    // ],
                    // "line_chart" => [
                    //     "content" => getTopVendorsWithEmptyDateBarOrLineChartData($timestamp_from, $timestamp_to), // Use the new function for line chart data
                    // ],
                    'bar_chart2' => [
                        "content" => getTopVendorsWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to),
                    ],

                ],
                'vendors2' => [
                    "id" => "analytics_card_vendors2",
                    "title" => "Top vendors by sels unit",
                    "position" => 20,
                    "dispatch" => "products.manage",
                    "content_data_function" => "getProductsBlockData",
                    // "resource_list" => [
                    //     "id" => "analytics_card_products_resource_list",
                    //     "content" => $top_brand_content
                    // ],
                    // "pie_chart" => [
                    //     "content" => $pie_chart_data // Pass pie chart data here
                    // ],
                    // "line_chart" => [
                    //     "content" => getTopVendorsWithEmptyDateBarOrLineChartData($timestamp_from, $timestamp_to), // Use the new function for line chart data
                    // ],
                    'bar_chart2' => [
                        "content" => getTopVendorsWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to,5,'units_sold'),
                    ],

                ],
                'categories' => [
                    "id" => "analytics_card_categories",
                    "title" => "Top categories",
                    "position" => 20,
                    "content_data_function" => "getCategoriesBlockData",
                    // "resource_list" => [
                    //     "id" => "analytics_card_categories_resource_list",
                    //     "content" => $top_category_content
                    // ],
                    // "pie_chart" => [
                    //     "content" => $category_pie_chart_data // Pass pie chart data here
                    // ],
                    // "line_chart" => [
                    //     "content" => getTopCategoriesWithEmptyDateBarOrLineChartData($timestamp_from, $timestamp_to), // Use the new function for line chart data
                    // ],
                    'bar_chart2' => [
                        "content" => getTopCategoriesWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to),
                    ],
                ],
                'sub_categories' => [
                    "id" => "analytics_card_categories",
                    "title" => "Top Sub categories",
                    "position" => 20,
                    "content_data_function" => "getCategoriesBlockData",
                    // "resource_list" => [
                    //     "id" => "analytics_card_categories_resource_list",
                    //     "content" => $top_sub_category_content
                    // ],
                    // "pie_chart" => [
                    //     "content" => $sub_category_pie_chart_data // Pass pie chart data here
                    // ],
                    // "line_chart" => [
                    //     "content" => getTopSubCategoriesWithEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to), // Line chart for subcategories
                    // ],
                    'bar_chart2' => [
                        "content" => getTopSubCategoriesWithoutEmptyDateLineOrBarChartData($timestamp_from, $timestamp_to),
                    ],

                ],
            )
        );
        Tygh::$app['view']->assign('dashboard_blocks', $block_report);
    }




    Tygh::$app['view']->assign([
        'time_from'                => $timestamp_from,
        'time_to'                  => $timestamp_to,
        'storefront_id'            => $storefront_id,
    ]);
}