<?php

use Tygh\Registry;
use Tygh\VideoUrlParser;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_cc_youtube_get_product_video_id($product_id)
{
    $product_video_id = 0;

    if (!empty($product_id)) {
        $product_video_id = db_get_field(
            'SELECT youtube_link'
            .' FROM ?:products'
            .' WHERE product_id = ?i'
            , $product_id
        );
    }

    return $product_video_id;

}

function fn_cc_youtube_update_product_pre(&$product_data, $product_id, $lang_code, $can_update)
{
    if (!empty($product_data['youtube_link'])) {
        $parser = new VideoUrlParser();
        $product_data['youtube_link'] = $parser->get_url_id($product_data['youtube_link']);
    }
    $product_data['is_has_youtube_link'] = empty($product_data['youtube_link']) ? 'N' : 'Y';
}

function fn_cc_youtube_update_product_post($product_data, $product_id, $lang_code, $create)
{
    if (!empty($product_data['youtube_videos'])) {
        $parser = new VideoUrlParser();

        db_query(
            'DELETE FROM ?:product_videos'
            .' WHERE product_id = ?i'
            , $product_id
        );

        foreach ($product_data['youtube_videos'] as $video_data) {
            if (!empty($video_data['comment']) && !empty($video_data['youtube_link'])) {
                $video_data['product_id'] = $product_id;

                $video_data['youtube_link'] = $parser->get_url_id($video_data['youtube_link']);

                db_query('INSERT INTO ?:product_videos ?e', $video_data);
            }
        }
    }
}

function fn_cc_youtube_get_product_data_post(&$product_data, $auth, $preview, $lang_code)
{
    $fields = array(
        'video_id',
        'product_id',
        'comment',
        'youtube_link'
    );

    $product_data['youtube_videos'] = db_get_array(
        'SELECT ' . implode(', ', $fields)
        .' FROM ?:product_videos'
        .' WHERE product_id = ?i'
        , $product_data['product_id']
    );
}

function fn_cc_youtube_gather_additional_products_data_post($product_ids, $params, &$products, $auth)
{
    $controller = Registry::get('runtime.controller');
    $mode = Registry::get('runtime.mode');


    $_products = ($controller == 'products' && ($mode == 'view' || $mode == 'options'));
    $_youtube_gallery = ($controller == 'youtube_gallery' && $mode == 'view');
    foreach ($products as &$product) {
        if (($_products && !empty($product['show_youtube_video']) && $product['show_youtube_video'] == 'Y') || $_youtube_gallery) {
            $youtube_video_id = fn_cc_youtube_get_product_video_id($product['product_id']);

            $url = CC_YOUTUBE_HTTP_LINK . "$youtube_video_id" . '/0.jpg';

            if (!empty($product['main_pair'])) {
                $product['image_pairs'][$product['main_pair']['pair_id']] = $product['main_pair'];

                $product['main_pair']['pair_id'] = $youtube_video_id;
                $product['main_pair']['detailed_id'] = $youtube_video_id;
                $youtube_link_with_protocol = defined('HTTPS') ? CC_YOUTUBE_HTTPS_LINK : CC_YOUTUBE_HTTP_LINK;
                $product['main_pair']['detailed'] = array(
                    'image_path' => $youtube_link_with_protocol . "$youtube_video_id" . '/0.jpg',
                    'image_x' => IMAGE_X,
                    'image_y' => IMAGE_Y,
                    'http_image_path' => $url,
                    'https_image_path' => CC_YOUTUBE_HTTPS_LINK . "$youtube_video_id" . '/0.jpg',
                    'absolute_path' => '',
                    'relative_path' => '',
                );

                ksort($product['image_pairs']);
            }
        }
    }
}

function fn_cc_youtube_get_video_ico($youtube_video_id, $product_id = 0)
{
    $video_ico = array();

    if (!empty($youtube_video_id)) {
        $video_ico = array();
        $video_ico['pair_id'] = "$youtube_video_id" . "$product_id";
        $video_ico['image_id'] = $youtube_video_id;
        $video_ico['detailed_id'] = 0;
        $video_ico['position'] = 0;
        $youtube_link_with_protocol = defined('HTTPS') ? CC_YOUTUBE_HTTPS_LINK : CC_YOUTUBE_HTTP_LINK;
        $video_ico['icon'] = array(
            'image_path' => $youtube_link_with_protocol . "$youtube_video_id" . '/0.jpg',
            'http_image_path' => CC_YOUTUBE_HTTP_LINK . "$youtube_video_id" . '/0.jpg',
            'https_image_path' => CC_YOUTUBE_HTTPS_LINK . "$youtube_video_id" . '/0.jpg',
            'absolute_path' => '',
            'relative_path' => '',
        );
    }

    return $video_ico;
}

function fn_cc_youtube_get_products_videos($limit = 0)
{
    $product_videos = db_get_hash_single_array(
        'SELECT product_id, youtube_link'
        .' FROM ?:products'
        .' WHERE youtube_link != ?s'
        .' ORDER BY RAND() LIMIT ?i'
        , array('product_id', 'youtube_link'), '', $limit
    );

    return $product_videos;
}

function fn_cc_youtube_get_product_videos($product_id)
{
    $product_videos = db_get_hash_single_array(
        'SELECT video_id, product_id, youtube_link'
        .' FROM ?:product_videos'
        .' WHERE product_id = ?i'
        , array('video_id', 'youtube_link'), $product_id
    );
    return $product_videos;
}

function fn_cc_youtube_get_products($params, &$fields, &$sortings, &$condition, $join, $sorting, $group_by, $lang_code, $having)
{
    $fields['youtube_link'] = 'products.youtube_link';
    $sortings['youtube_link'] = 'products.youtube_link';
    if ((!empty($params['with_video']) && $params['with_video'] == true)
        || (!empty($params['youtube_link']) && $params['youtube_link'] == 'Y')
    ) {
        $condition .= db_quote(' AND products.youtube_link != ?s', '');
    }
}

function fn_cc_youtube_get_product_filter_fields(&$filters)
{
    $additional_filters = fn_cc_youtube_get_youtube_video_fields();
    $filters = array_merge($filters, $additional_filters);
}

function fn_cc_youtube_get_youtube_video_fields()
{
    $additional_fields = array();

    $additional_fields['Y'] = array(
        'db_field' => 'is_has_youtube_link',
        'table' => 'products',
        'description' => 'product_with_video',
        'condition_type' => 'C',
            'variant_descriptions' => array(
            'Y'=>__('product_with_video'),
            'N'=>__('product_without_video')
        ),
    );

    return $additional_fields;
}

function fn_cc_youtube_get_products_before_select(&$params, $join, &$condition, $u_condition, $inventory_join_cond, &$sortings, $total, $items_per_page, $lang_code, $having)
{
    if (!empty($params['filter_params']['youtube_link'])) {
        $condition .= db_quote(' AND products.youtube_link != ?s', '');
        unset($params['filter_params']['youtube_link']);
    }
    $sortings['youtube_link'] = 'products.youtube_link';
}


function fn_cc_youtube_get_filters_products_count_before_select(&$filters, $view_all, $params)
{
    foreach ($filters as $key => $val) {
        if (!empty($val['ranges']['N']['range_name']) && $val['ranges']['N']['range_name'] == __('product_without_video')) {
            unset($filters[$key]['ranges']['N']);
        }
    }
}

if (!function_exists('fn_change_session_param')) {
    function fn_change_session_param(&$session, $request, $param_name)
    {
        $ret_val = null;

        if (isset($request[$param_name])) {
            $session[$param_name] = $ret_val = $request[$param_name];

        } elseif (isset($session[$param_name])) {
            $ret_val = $session[$param_name];
        }

        return $ret_val;
    }
}
