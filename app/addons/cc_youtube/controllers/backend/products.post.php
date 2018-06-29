<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return array(CONTROLLER_STATUS_OK);
}

if ($mode == 'manage') {

    $selected_fields = Registry::get('view')->getTemplateVars('selected_fields');

    $selected_fields[] = array('name' => '[data][youtube_link]', 'text' => __('youtube_link'));

    Registry::get('view')->assign('selected_fields', $selected_fields);

} elseif ($mode == 'm_update') {

    $selected_fields = $_SESSION['selected_fields'];

    $field_groups = Registry::get('view')->getTemplateVars('field_groups');
    $filled_groups = Registry::get('view')->getTemplateVars('filled_groups');
    $field_names = Registry::get('view')->getTemplateVars('field_names');

    if (!empty($selected_fields['data']['youtube_link'])) {
        $field_groups['A']['youtube_link'] = 'products_data';
        $filled_groups['A']['youtube_link'] = __('youtube_link');
        unset($field_names['youtube_link']);
    }

    Registry::get('view')->assign('field_groups', $field_groups);
    Registry::get('view')->assign('filled_groups', $filled_groups);
    Registry::get('view')->assign('field_names', $field_names);
}
