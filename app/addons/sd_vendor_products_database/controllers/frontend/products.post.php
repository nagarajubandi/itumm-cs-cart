<?php
use Tygh\ Registry;
if ( !defined( 'BOOTSTRAP' ) ) {
	die( 'Access denied' );
}
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
	return array( CONTROLLER_STATUS_OK );
}
if ( $mode == 'view' ) {
	
	$product = Tygh::$app[ 'view' ]->getTemplateVars( 'product' );
	
    if(!empty($product[ 'vendors' ]))
	{
		foreach($product[ 'vendors' ] as $key=>$vendor){			 
			if($vendor['amount']==="0" || $vendor['status']!=="A" || $vendor['price'] <= 0)
				unset($product['vendors'][$key]);
		}
	}
	
	if ( !empty( $product[ 'vendors' ] ) && count($product[ 'vendors' ])>1) {
		$method = !empty( $_REQUEST[ 'sort_vendor_offers' ] ) ? $_REQUEST[ 'sort_vendor_offers' ] : Registry::get( 'addons.sd_vendor_products_database.sort_vendor_offers' );
		if ( !empty( $method ) && $method != 'none' ) {
			if ( $method == 'asc' ) {
				$product[ 'vendors' ] = fn_sort_array_by_key( $product[ 'vendors' ], 'price', SORT_ASC );
			} else {
				$product[ 'vendors' ] = fn_sort_array_by_key( $product[ 'vendors' ], 'price', SORT_DESC );
			}
		} else {
            $method = 'asc';
            $product[ 'vendors' ] = fn_sort_array_by_key( $product[ 'vendors' ], 'price', SORT_ASC );
        }
	}
	else
	{
		 unset($product['vendors']);
	}

    Tygh::$app[ 'view' ]->assign( array( 'product' => $product, 'sort_vendor_offers' => $method, 'sort_vendor_offers_rev' => ( $method == 'desc' ) ? 'asc' : 'desc', ) );
}