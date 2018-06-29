<?php


if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_product_from_other_sellers_get_products($params, $fields, $sortings, &$condition, &$join, $sorting, $group_by, $lang_code, $having)
{
    if (AREA == 'C' && (!empty($params['mv_pcode']) || !empty($params['mv_pname']))) {
        $_cond = array();
        if (!empty($params['mv_pcode'])) {
            $_cond[] = db_quote(" inventory2.product_code = ?s ", $params['mv_pcode']);
            $_cond[] = db_quote(" products.product_code = ?s ",  $params['mv_pcode']);
        }
        if (!empty($params['mv_pname'])) {
            $_cond[] = db_quote(" descr1.product = ?s ", $params['mv_pname']);
        }
        $condition .= " AND (" . (implode(' OR ', $_cond)) . ") ";
        $join .= " LEFT JOIN ?:product_options_inventory as inventory2 ON inventory2.product_id = products.product_id ";
    }
}