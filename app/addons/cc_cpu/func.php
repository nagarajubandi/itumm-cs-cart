<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function cpu_get_category_path($category_id) {
    $path = db_get_field('select id_path from ?:categories where category_id=?i', $category_id);
    $path = explode('/', $path);
    $childs = db_get_field('select count(*) from ?:categories where parent_id=?i', $category_id);
    if(!$childs) {
        array_pop($path);
    }
    return $path;
}

function cpu_get_all_categories() {
    list($all_categories,) = fn_get_categories(array('plain' => true));
    return $all_categories;
}
/*
    foreach($path as $category_id) {
        list($get_categories,) = fn_get_categories(array('parent_category_id' => $category_id) ); 
        $categories[] = $get_categories;
    }
    list($get_categories,) = fn_get_categories(array('parent_category_id' => 0) );
    $categories[] = $get_categories;
    return $categories;
*/
