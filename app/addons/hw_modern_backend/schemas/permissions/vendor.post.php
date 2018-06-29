<?php
/*
 * © 2015 Hungryweb.net
 * 
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  
 * IN  THE "HW-LICENSE.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE. 
 * 
 * @website: www.hungryweb.net
 * @support: support@hungryweb.net
 *  
 */

$schema['controllers']['hw_modern_backend'] = array (
    'permissions' => array ('GET' => 'view_modern_backend', 'POST' => 'manage_modern_backend')
);
$schema['controllers']['tools']['modes']['update_status']['param_permissions']['table']['hwmb'] = 'manage_modern_backend';
$schema['controllers']['tools']['modes']['update_position']['param_permissions']['table']['hwmb'] = 'manage_modern_backend';

return $schema;
