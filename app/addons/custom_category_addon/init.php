<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

fn_register_hooks(
    'dispatch_before_display'
);

function fn_custom_category_addon_dispatch_before_display()
{
    // Fetch all categories
    $all_categories = fn_get_categories(['simple' => false, 'group_by_level' => false]);
    $top_level_categories = [];

    if (isset($all_categories[0]) && is_array($all_categories[0])) {
        foreach ($all_categories[0] as $key => $category) {
            // Filter for top-level categories
            if (isset($category['parent_id']) && $category['parent_id'] == '0' && !empty($category['category_id']) && !empty($category['category'])) {
                $category_id = $category['category_id'];
                $category_name = $category['seo_name'];
                $category_link = 'http://localhost/cs-cart/' . urlencode($category_name);

                $top_level_categories[$category_id] = [
                    'category_id' => $category_id,
                    'category_name' => $category_name,
                    'category_link' => $category_link
                ];
            }
        }
    }

    // Assign the top-level categories to the template
    Tygh::$app['view']->assign('top_level_categories', $top_level_categories);

    // Fetch all products with their image paths
    $all_products_with_images = fn_get_all_products_with_images();

    // Assign the product data to the template
    Tygh::$app['view']->assign('all_products_with_images', $all_products_with_images);

    $all_blogs_with_descriptions = fn_get_all_blogs_with_descriptions();
    // echo "<pre>";
    // print_r($all_blogs_with_descriptions);
    // die;

    Tygh::$app['view']->assign('all_blogs_with_descriptions', $all_blogs_with_descriptions);

    $latest_three_blogs = fn_get_latest_three_blogs();

    Tygh::$app['view']->assign('latest_three_blogs', $latest_three_blogs);

    $related_blogs = fn_get_related_blogs($page['page_id'], 3);

    Tygh::$app['view']->assign('related_blogs', $related_blogs);

    $tags = fn_get_all_tags_with_counts();

    Tygh::$app['view']->assign('tags', $tags);

    $categories = fn_get_all_categories();

    Tygh::$app['view']->assign('categories', $categories);

    // Assign the page data to the template

}

/**
 * Fetches all products with their main image path.
 *
 * @return array $products_with_images - Array of products with image paths
 */
function fn_get_all_products_with_images()
{
    // Fetch products
    $params = [
        'status' => 'A', // Only active products
        'get_icon' => true, // Get the main image
        'items_per_page' => 0, // Get all products
    ];
    list($products) = fn_get_products($params);

    // Load image paths for each product
    foreach ($products as &$product) {
        // Get main image for the product
        $main_image = fn_get_image_pairs($product['product_id'], 'product', 'M', true, true);

        // $$main_image = fn_get_image_pairs($product['product_id'], 'product', 'M', true, true);
        if (!empty($main_image) && isset($main_image['detailed']['image_path'])) {

            $product['image_path'] = $main_image['detailed']['image_path'];
        } else {
            // Provide a default or placeholder image path if no image is found
            $product['image_path'] = 'path/to/default/image.jpg';
        }
    }

    return $products;
}

function fn_get_all_blogs_with_descriptions()
{
    $params = [
        'status' => 'A',
        'get_descriptions' => true,
        'page_type' => 'B', // Assuming 'B' indicates blog pages, update if different
        'get_image' => true,
        'items_per_page' => 0
    ];

    list($blogs) = fn_get_pages($params);

    $blogs_with_descriptions = [];

    foreach ($blogs as $blog) {
        // Initialize comment count
        $comment_count = 0;

        // Fetch the thread_id from cscart_discussion where object_id matches page_id
        $thread_id = db_get_field("SELECT thread_id FROM ?:discussion WHERE object_id = ?i AND object_type = 'A'", $blog['page_id']);

        if ($thread_id) {
            // Get all post_ids from cscart_discussion_posts where thread_id matches
            $post_ids = db_get_fields("SELECT post_id FROM ?:discussion_posts WHERE thread_id = ?i", $thread_id);

            if (!empty($post_ids)) {
                // Count messages in cscart_discussion_messages where post_id is in the list of post_ids
                $comment_count = db_get_field("SELECT COUNT(*) FROM ?:discussion_messages WHERE post_id IN (?n)", $post_ids);
            }
        }

        $blogs_with_descriptions[$blog['page_id']] = [
            'blog_id' => $blog['page_id'],
            'title' => $blog['page'],
            'description' => $blog['description'],
            'seo_name' => $blog['seo_name'],
            'link' => 'http://localhost/cs-cart/' . urlencode($blog['seo_name']),
            'image_path' => !empty($blog['main_pair']['icon']['image_path']) ? $blog['main_pair']['icon']['image_path'] : 'path/to/default/image.jpg',
            'comment_count' => $comment_count // Add comment count here
        ];
    }

    return $blogs_with_descriptions;
}


function fn_get_latest_three_blogs()
{
    $params = [
        'status' => 'A',
        'get_descriptions' => true,
        'page_type' => 'B', // Assuming 'B' indicates blog pages
        'items_per_page' => 3, // Limit to 3 latest blogs
        'sort_by' => 'timestamp',
        'get_image' => true,
        'sort_order' => 'desc', // Get latest blogs
    ];

    list($blogs) = fn_get_pages($params);

    $latest_three_blogs = [];

    foreach ($blogs as $blog) {
        // Initialize comment count
        $comment_count = 0;

        // Fetch the thread_id from cscart_discussion where object_id matches page_id
        $thread_id = db_get_field("SELECT thread_id FROM ?:discussion WHERE object_id = ?i AND object_type = 'A'", $blog['page_id']);

        if ($thread_id) {
            // Get all post_ids from cscart_discussion_posts where thread_id matches
            $post_ids = db_get_fields("SELECT post_id FROM ?:discussion_posts WHERE thread_id = ?i", $thread_id);

            if (!empty($post_ids)) {
                // Count messages in cscart_discussion_messages where post_id is in the list of post_ids
                $comment_count = db_get_field("SELECT COUNT(*) FROM ?:discussion_messages WHERE post_id IN (?n)", $post_ids);
            }
        }

        $latest_three_blogs[$blog['page_id']] = [
            'blog_id' => $blog['page_id'],
            'title' => $blog['page'],
            'description' => $blog['description'],
            'seo_name' => $blog['seo_name'],
            'timestamp' => $blog['timestamp'],
            'image_path' => !empty($blog['main_pair']['icon']['image_path']) ? $blog['main_pair']['icon']['image_path'] : 'path/to/default/image.jpg',
            'comment_count' => $comment_count, // Add comment count here
        ];
    }

    return $latest_three_blogs;
}



function fn_get_related_blogs($current_blog_id, $limit = 3)
{
    $params = [
        'status' => 'A',
        'page_type' => 'B', // Assuming 'B' indicates blog pages
        'items_per_page' => $limit,
        'get_descriptions' => true,
        'get_image' => true,
        'get_main_pair' => true
    ];

    list($all_blogs) = fn_get_pages($params);

    $related_blogs = [];
    foreach ($all_blogs as $blog) {
        if ($blog['page_id'] != $current_blog_id) {
            // Initialize comment count
            $comment_count = 0;

            // Fetch the thread_id from cscart_discussion where object_id matches page_id
            $thread_id = db_get_field("SELECT thread_id FROM ?:discussion WHERE object_id = ?i AND object_type = 'A'", $blog['page_id']);

            if ($thread_id) {
                // Get all post_ids from cscart_discussion_posts where thread_id matches
                $post_ids = db_get_fields("SELECT post_id FROM ?:discussion_posts WHERE thread_id = ?i", $thread_id);

                if (!empty($post_ids)) {
                    // Count messages in cscart_discussion_messages where post_id is in the list of post_ids
                    $comment_count = db_get_field("SELECT COUNT(*) FROM ?:discussion_messages WHERE post_id IN (?n)", $post_ids);
                }
            }

            $related_blogs[] = [
                'blog_id' => $blog['page_id'],
                'title' => $blog['page'],
                'description' => $blog['description'],
                'timestamp' => $blog['timestamp'],
                'seo_name' => $blog['seo_name'],
                'image_path' => !empty($blog['main_pair']['icon']['image_path']) ? $blog['main_pair']['icon']['image_path'] : 'path/to/default/image.jpg',
                'comment_count' => $comment_count, // Add comment count here
            ];

            // Stop when we've reached the limit
            if (count($related_blogs) >= $limit) {
                break;
            }
        }
    }

    return $related_blogs;
}

function fn_get_all_tags_with_counts()
{
    // This query fetches each tag with the count of blogs associated with it
    $tags = db_get_array("
        SELECT t.tag_id, t.tag
        FROM ?:tags AS t
        LEFT JOIN ?:tag_links AS tl ON t.tag_id = tl.tag_id
        WHERE t.status = 'A' AND tl.object_type = 'A'
        GROUP BY t.tag_id
    ");

    return $tags;
}

function fn_get_all_categories()
{
    $categories = db_get_array("SELECT DISTINCT category_id, category FROM ?:category_descriptions");
    return $categories;
}
