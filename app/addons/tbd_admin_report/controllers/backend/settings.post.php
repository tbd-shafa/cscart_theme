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



// Function to fetch sales graph data dynamically
// Function to fetch sales graph data dynamically
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
// Function to fetch sales pie data dynamically
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

// Function to fetch sales data from the database
function fetchSalesDataFromDatabase($timestamp_from, $timestamp_to)
{

    // Prepare the SQL query with placeholders
    $sql = "SELECT DATE(FROM_UNIXTIME(o.timestamp)) AS date, 
                   SUM(o.total) AS sales_value, 
                   COUNT(od.product_id) AS sales_units 
            FROM ?:orders AS o 
            JOIN ?:order_details AS od ON o.order_id = od.order_id 
            WHERE o.status IN ('A', 'P') AND 
                  o.timestamp >= $timestamp_from AND o.timestamp <= $timestamp_to
            GROUP BY DATE(FROM_UNIXTIME(o.timestamp))";

    // Log the raw SQL with bound parameters

    // Execute the SQL query and return the results
    return Tygh::$app['db']->getArray($sql);
}

// Function to fetch sales graph data dynamically
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
// Function to fetch sales pie chart data dynamically
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
            "value" => $online_sales
        ],
        [
            "label" => "Offline Orders",
            "value" => $offline_sales
        ]
    ];
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
            WHERE o.status IN ('A', 'P') 
              AND o.timestamp >= ?i 
              AND o.timestamp <= ?i
            GROUP BY DATE(FROM_UNIXTIME(o.timestamp))";

    // Execute the SQL query with bound parameters and return the results
    return Tygh::$app['db']->getArray($sql, $timestamp_from, $timestamp_to);
}

function getSalesMetrics($timestamp_from, $timestamp_to)
{
    // Fetch total transactions, units sold, and total sales within the given date range
    $results = Tygh::$app['db']->getRow(
        "SELECT COUNT(DISTINCT o.order_id) AS transactions,
                SUM(od.amount) AS total_units_sold,
                SUM(o.total) AS total_sales
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         WHERE o.status IN ('A', 'P') 
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
function getTopVendors($timestamp_from, $timestamp_to)
{
    // Fetch the total sales amount for calculating percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P') 
           AND o.timestamp BETWEEN ?i AND ?i",
        $timestamp_from,
        $timestamp_to
    );

    // Get the top 5 vendors with total sales and units sold
    $top_vendors = Tygh::$app['db']->getArray(
        "SELECT o.company_id, v.company AS vendor_name, 
                SUM(o.total) AS total_sales, 
                SUM(od.amount) AS units_sold 
         FROM ?:orders AS o
         JOIN ?:order_details AS od ON o.order_id = od.order_id
         JOIN ?:companies AS v ON o.company_id = v.company_id
         WHERE o.status IN ('A', 'P') 
           AND o.timestamp BETWEEN ?i AND ?i
         GROUP BY o.company_id
         ORDER BY total_sales DESC
         LIMIT 5",
        $timestamp_from,
        $timestamp_to
    );

    // Calculate the percentage mix for each vendor and format the result
    foreach ($top_vendors as &$vendor) {
        $vendor['percentage_mix'] = $total_sales > 0 ? ($vendor['total_sales'] / $total_sales) * 100 : 0;
        $vendor['percentage_mix'] = number_format($vendor['percentage_mix'], 2);
    }

    return [
        'top_vendors' => $top_vendors,
        'total_sales' => $total_sales
    ];
}

// for pie chart
function getTopVendorsPieChart($timestamp_from, $timestamp_to)
{
    // Fetch the total sales amount for calculating percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P') 
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
         WHERE o.status IN ('A', 'P') 
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


function getTopCategories($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P') 
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
         WHERE o.status IN ('A', 'P')
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

// for pie chart

function getTopCategoriesPieChart($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P') 
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
         WHERE o.status IN ('A', 'P')
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

function getTopSubCategories($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P') 
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
         WHERE o.status IN ('A', 'P')
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
// for pie chart
function getTopSubCategoriesPieChart($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P') 
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
         WHERE o.status IN ('A', 'P')
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

function getGenderCategories($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P') 
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
         WHERE o.status IN ('A', 'P')
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
// for pie chart
function getGenderCategoriespiechart($timestamp_from, $timestamp_to, $limit = 5)
{
    // Fetch the total sales amount for calculating the percentage mix
    $total_sales = Tygh::$app['db']->getField(
        "SELECT SUM(o.total) 
         FROM ?:orders AS o
         WHERE o.status IN ('A', 'P') 
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
         WHERE o.status IN ('A', 'P')
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

    // Calculate the percentage mix for each category and prepare pie chart data
    $pie_chart_data = [];
    foreach ($top_categories as &$category) {
        $category['percentage_mix'] = $total_sales > 0 ? ($category['total_sales'] / $total_sales) * 100 : 0;
        $category['percentage_mix'] = number_format($category['percentage_mix'], 2);

        // Add the pie chart data
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

        $top_brands_result = getTopVendors($timestamp_from, $timestamp_to);
        $top_brands = $top_brands_result['top_vendors'];
        $top_brand_content = [];
        $total_sales = $top_brands_result['total_sales'];

        foreach ($top_brands as $brand) {
            $top_brand_content[] = [
                "id" => "analytics_card_products_out_of_stock",
                "name" => $brand['vendor_name'],
                "href" => fn_url('companies.update?company_id=' . $brand['company_id']),
                "value" => $brand['total_sales'] . "(" . $brand['units_sold'] . ")/" . $brand['percentage_mix'] . "%",
            ];
        }

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
                "value" => $brand['total_sales'] . "(" . $brand['units_sold'] . ")/" . $brand['percentage_mix'] . "%",
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

        $gender_category_pie_chart_data = $gender_categories_result1['pie_chart_data'];

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
                    "pie_chart" => [
                        "content" => getSalesPieChartData($timestamp_from, $timestamp_to),
                    ]
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
                    ]
                ]
            ),
            "secondary" => array(
                'order_summery' => [
                    "id" => "analytics_card_products",
                    "title" => "Order summary",
                    "position" => 20,
                    "number" => $total_sales,
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
                    'pie_chart' => [
                        'content' => [
                            [
                                'label' => 'Number of Transactions',
                                'value' => isset($sales_matrics['not']) ? $sales_matrics['not'] : 0
                            ],
                            [
                                'label' => 'Units Sold per Transaction (UPT)',
                                'value' => isset($sales_matrics['upt']) ? $sales_matrics['upt'] : 0
                            ],
                            [
                                'label' => 'Average Retail Price per Transaction (ARP)',
                                'value' => isset($sales_matrics['arp']) ? $sales_matrics['arp'] : 0
                            ]
                        ]
                    ]
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
                    ]
                ],
            ),
            "tertiary" => array(

                'vendors' => [
                    "id" => "analytics_card_vendors",
                    "title" => "Top vendors",
                    "position" => 20,
                    "dispatch" => "products.manage",
                    "content_data_function" => "getProductsBlockData",
                    // "resource_list" => [
                    //     "id" => "analytics_card_products_resource_list",
                    //     "content" => $top_brand_content
                    // ],
                    "pie_chart" => [
                        "content" => $pie_chart_data // Pass pie chart data here
                    ]
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
                    "pie_chart" => [
                        "content" => $category_pie_chart_data // Pass pie chart data here
                    ]
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
                    "pie_chart" => [
                        "content" => $sub_category_pie_chart_data // Pass pie chart data here
                    ]
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
