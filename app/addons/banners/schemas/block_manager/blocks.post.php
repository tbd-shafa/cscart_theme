<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

$schema['banners'] = array (
    'content' => array (
        'width' => [
            'type' => 'input',
            'default_value' => ''
        ],
        'height' => [
            'type' => 'input',
            'default_value' => ''
        ],
        'items' => array (
            'remove_indent' => true,
            'hide_label' => true,
            'type' => 'enum',
            'object' => 'banners',
            'items_function' => 'fn_get_banners',
            'fillings' => array (
                'manually' => array (
                    'picker' => 'addons/banners/pickers/banners/picker.tpl',
                    'picker_params' => array (
                        'type' => 'links',
                        'positions' => true,
                    )
                ),
                'newest' => array (
                    'params' => array (
                        'sort_by' => 'timestamp',
                        'sort_order' => 'desc',
                        'ignore_settings' => array('cid')
                    )
                ),
            ),
        ),
    ),
    'templates' => array (
        'addons/banners/blocks/custom_design.tpl' => array(),
        'addons/banners/blocks/original.tpl' => array(),
        'addons/banners/blocks/carousel.tpl' => array(
            'settings' => array (
                'navigation' => array (
                    'type' => 'selectbox',
                    'values' => array (
                        'N' => 'none',
                        'D' => 'dots',
                        'P' => 'pages',
                        'A' => 'arrows'
                    ),
                    'default_value' => 'D'
                ),
                'delay' => array (
                    'type' => 'input',
                    'default_value' => '3'
                ),
            ),
        )
    ),
    'wrappers' => 'blocks/wrappers',
    'cache' => array(
        'update_handlers' => array(
            'banners', 'banner_descriptions', 'banner_images'
        )
    ),
    'brief_info_function' => 'fn_block_get_block_with_items_info'
);

return $schema;
