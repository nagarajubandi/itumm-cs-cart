<?php
/*
 * © 2014 Hungryweb.net
 * 
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  
 * IN  THE "HW-LICENSE.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE. 
 * 
 * @website: www.hungryweb.net
 * @support: support@hungryweb.net
 *  
 */
use \Tygh\Registry;

$schema['top']['design']['items']['hw_modern_backend_divider'] = array(
    'type' => 'divider',
    'position' => 800,
);

if(fn_hw_modern_backend_have_user_access('manage_modern_backend')){
	
	if (!Registry::get('runtime.company_id')) {
		$schema['top']['design']['items']['hw_modern_backend'] = array(
			'href' => 'hw_modern_backend.manage',
			'position' => 810
		);
	}


}elseif (fn_hw_modern_backend_have_user_access('view_modern_backend')){
	$schema['top']['design']['items']['hw_modern_backend'] = array(
	    'href' => 'hw_modern_backend.enable',
	    'position' => 810
	);
}

return $schema;