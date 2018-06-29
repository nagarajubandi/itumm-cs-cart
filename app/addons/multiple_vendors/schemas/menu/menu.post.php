<?php

use Tygh\Registry;

if (Registry::get('runtime.company_id')) {
    /*$schema['central']['products']['items']['all_store_products'] = array(
        'attrs' => array(
            'class'=>'is-addon'
        ),
        'href' => 'vendors_products.manage',
        'position' => 600
    );

    $schema['central']['products']['items']['my_shared_products'] = array(
        'attrs' => array(
            'class'=>'is-addon'
        ),
        'href' => 'my_vendors_products.manage',
        'position' => 500
    );*/

}
if (Registry::get('runtime.company_id')) {
	unset($schema['central']['website']);
	unset($schema['central']['website']['items']['blog']);
	unset($schema['central']['web_site']);
	unset($schema['central']['web_site']['items']['blog']);
}
return $schema;
