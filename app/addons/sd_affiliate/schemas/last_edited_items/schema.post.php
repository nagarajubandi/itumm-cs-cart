<?php

$schema['affiliate_plans.update'] = array (
    'func' => array('fn_get_affiliate_plan_name', '@plan_id'),
    'text' => 'plan'
);
$schema['product_groups.update'] = array (
    'func' => array('fn_get_group_name', '@group_id'),
    'text' => 'product_group'
);
$schema['banners_manager.update'] = array (
    'func' => array('fn_get_aff_banner_name', '@banner_id'),
    'text' => 'banner'
);

return $schema;
