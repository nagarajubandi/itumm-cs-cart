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

use Tygh\Registry;

$customers_items = array(
    'vendor_administrators' => array(
        'href' => 'profiles.manage?user_type=V',
        'alt' => 'profiles.update?user_type=V',
        'position' => 250,
    )
);

$schema['central']['customers']['items'] = $customers_items + $schema['central']['customers']['items'];
//$schema['central']['customers_vendors']['items'] = $customers_items + $schema['central']['customers']['items'];

/*$schema['central']['accounting'] = array(
    'items' => array(
        'vendors' => array(
            'href' => 'companies.manage',
            'alt' => 'companies.add,companies.update',
            'position' => 100,
        ),
        'vendor_accounting' => array(
            'href' => 'companies.balance',
            'position' => 200,
        ),
    ),
    'position' => 600,
);*/
$schema['top']['administration']['items']['shippings_taxes']= array(
    'href' => 'taxes.manage',
    'position' => 600,
);

$schema['top']['administration']['items']['import_data']['subitems']['vendors'] = array(
    'href' => 'exim.import?section=vendors',
    'position' => 600,
);

$schema['top']['administration']['items']['export_data']['subitems']['vendors'] = array(
    'href' => 'exim.export?section=vendors',
    'position' => 600,
);

$schema['top']['settings']['items']['Vendors'] = array(
    'href' => 'settings.manage?section_id=vendors',
    'position' => 950,
    'type' => 'setting',
);
$schema['central']['orders']['items']['return_requests'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),
    'href' => 'rma.returns',
    'position' => 900,
    'subitems' => array(
        /*'return_requests' => array(
            'href' => 'rma.returns',
            'position' => 910,
        ),*/
        // 'rma_reasons' => array(
        //     'href' => 'rma.properties?property_type=R',
        //     'position' => 920,
        // ),
        // 'rma_actions' => array(
        //     'href' => 'rma.properties?property_type=A',
        //     'position' => 930,
        // ),
        // 'rma_request_statuses' => array(
        //     'href' => 'statuses.manage?type=R',
        //     'position' => 940,
        // ),
    )
);
if (Registry::get('runtime.company_id')) {
	 $schema['top']['administration']['items']['shippings_taxes'] = array(
        'href' => 'taxes.manage',
        'position' => 1100,
        
    );
    $schema['top']['administration']['items']['import_data'] = array(
        'href' => 'exim.import',
        'position' => 1200,
        'subitems' => array(
            'products' => array(
                'href' => 'exim.import?section=products',
                'position' => 200,
            ),
        ),
    );

    $schema['top']['administration']['items']['export_data'] = array(
        'href' => 'exim.export',
        'position' => 1300,
        'subitems' => array(
            'orders' => array(
                'href' => 'exim.export?section=orders',
                'position' => 100,
            ),
            'products' => array(
                'href' => 'exim.export?section=products',
                'position' => 200,
            ),
        ),
    );
	
}



$schema['central']['finance'] = array(
    'items' => array(
        'vendor_accounting' => array(
            'href' => 'companies.balance',
            'position' => 100,
        ),
        'sales_reports' => array(
            'href' => 'sales_reports.view',
            'position' => 200,
        ),
        'vendor_commissions' => array(
            'href' => 'companies.commissions',
            'position' => 300,
        ),
        'vendor_returns_refunds' => array(
            'href' => 'companies.returns_refunds',
            'position' => 400,
        ),
    ),
    'position' => 600,
);



if (Registry::get('runtime.company_id')) {
	unset($schema['top']['administration']['items']['shippings_taxes']['subitems']['taxes']);
	unset($schema['top']['administration']['items']['shippings_taxes']['subitems']['shipping_methods']);
    unset($schema['top']['administration']['items']['shippings_taxes']['subitems']['states']);
	unset($schema['top']['administration']['items']['shippings_taxes']['subitems']['countries']);
	unset($schema['top']['administration']['items']['shippings_taxes']['subitems']['locations']);
	unset($schema['top']['administration']['items']['currencies']);
	unset($schema['top']['administration']['items']['logs']);
	unset($schema['central']['website']);
	unset($schema['central']['website']['items']['blog']);
	unset($schema['central']['web_site']);
	unset($schema['central']['web_site']['items']['blog']);
	unset($schema['central']['products']['items']['features']);
	unset($schema['central']['customers']['items']['customers']);
	unset($schema['central']['accounting']['items']['vendors']);
	unset($schema['central']['vendors']['items']['vendor_accounting']);
	//unset($schema['central']['customers']);
}
if (!Registry::get('runtime.company_id')) {
    
	unset($schema['central']['accounting']);
	//unset($schema['central']['customers_vendors']);
}

return $schema;
