<?php

$schema['aff_statistics'] = array (
    'permissions' => 'manage_affiliate',
);
$schema['banners_manager'] = array (
    'permissions' => 'manage_affiliate',
);
$schema['payouts'] = array (
    'permissions' => 'manage_affiliate',
);
$schema['product_groups'] = array (
    'permissions' => 'manage_affiliate',
);
$schema['partners'] = array (
    'permissions' => 'manage_affiliate',
);
$schema['affiliate_plans'] = array (
    'permissions' => 'manage_affiliate',
);
$schema['tools']['modes']['update_status']['param_permissions']['table']['aff_groups'] = 'manage_affiliate';
$schema['tools']['modes']['update_status']['param_permissions']['table']['affiliate_plans'] = 'manage_affiliate';
$schema['tools']['modes']['update_status']['param_permissions']['table']['aff_banners'] = 'manage_affiliate';
$schema['tools']['modes']['update_status']['param_permissions']['table']['affiliate_payouts'] = 'manage_affiliate';

return $schema;
