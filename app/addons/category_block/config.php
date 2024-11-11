<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

fn_register_hooks(
    'init',
    'get_block_types'
);

function fn_category_block_get_block_types(&$block_types)
{
    // Add your custom block type here
    $block_types['category_block'] = [
        'name' => __('category_block'), // Use language variable for translation
        'template' => 'addons/category_block/blocks/category_block.tpl',
        'icon' => 'icon-th-large',
    ];
}
