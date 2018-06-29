<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode=="csc_live_search"){
	$params = $_REQUEST;
	if (Registry::get('addons.csc_live_search.search_products')=="Y"){		
		list($products, $search) = fn_get_products($params, Registry::get('addons.csc_live_search.limit'));				
		fn_gather_additional_products_data($products, array(
			   'get_icon' => false,
			   'get_detailed' => true,
			   'get_additional' => false,
			   'get_options' => false,
			   'get_discounts' => false,
			   'get_features' => false
			));
		if (Registry::get('addons.csc_live_search.show_category')=="Y"){
			foreach ($products as $k=>$product){
				$cname = fn_get_category_name($product['main_category']);						
				$products[$k]['category']=$cname;
				$products[$k]['label_color']=fn_live_search_generate_color($product['main_category']);							
			}	
		}
			
		Registry::get('view')->assign('products', $products);
		Registry::get('view')->assign('live_search', $search);
	}
	if (empty($params['page']) || $params['page']==1){     
        $_where="";
		$fields="";
		$join="";
        if (fn_allowed_for('ULTIMATE') && Registry::get('runtime.company_id')) {
        	$_where=db_quote(" AND company_id=?i", Registry::get('runtime.company_id'));
        }
		$lim = Registry::get('addons.csc_live_search.limit');	
		$limit = db_paginate($params['page'], $lim);
		
		
		///search categories		
		if (Registry::get('addons.csc_live_search.search_categories')=="Y"){			
			if (Registry::get('addons.csc_live_search.show_parent_category')=="Y"){
				$fields .=", cd2.category as parent_category, cd2.category_id as parent_category_id";
				$join .=db_quote(" LEFT JOIN ?:category_descriptions as cd2 ON cd2.category_id=?:categories.parent_id AND cd2.lang_code=?s", CART_LANGUAGE);	
			}			
			$categories=db_get_array("SELECT ?:category_descriptions.category_id, ?:category_descriptions.category $fields FROM ?:category_descriptions LEFT JOIN ?:categories ON ?:categories.category_id=?:category_descriptions.category_id $join WHERE ?:category_descriptions.lang_code=?s $_where AND (?:category_descriptions.category LIKE ?l OR ?:category_descriptions.category LIKE ?l) AND status=?s $limit", CART_LANGUAGE, $params['q']."%", "% ".$params['q']."%", 'A');
		
			Registry::get('view')->assign('categories', $categories);
		}
		////search storefront categories
		if (fn_allowed_for('ULTIMATE') && Registry::get('addons.csc_live_search.search_storefront_categories')=="Y"){
			if (Registry::get('runtime.company_id')) {
				$search_storefronts = Registry::get('addons.csc_live_search.allow_storefronts');
				unset($search_storefronts[Registry::get('runtime.company_id')]);
				$search_storefronts = array_keys($search_storefronts);
				$_cwhere=db_quote(" AND company_id IN (?a)", $search_storefronts);
			}			
			$storefront_categories=db_get_array("SELECT ?:category_descriptions.category_id, ?:category_descriptions.category, ?:categories.company_id $fields FROM ?:category_descriptions LEFT JOIN ?:categories ON ?:categories.category_id=?:category_descriptions.category_id $join WHERE ?:category_descriptions.lang_code=?s $_cwhere AND (?:category_descriptions.category LIKE ?l OR ?:category_descriptions.category LIKE ?l) AND status=?s $limit", CART_LANGUAGE, $params['q']."%", "% ".$params['q']."%", 'A');									
			Registry::get('view')->assign('storefront_categories', $storefront_categories);
		}
		
		///search brands		
		if (Registry::get('addons.csc_live_search.search_brands')=="Y"){
			$b_join = $b_where='';
			if (fn_allowed_for('ULTIMATE')){
				$b_join =db_quote(' LEFT JOIN ?:ult_objects_sharing ON ?:ult_objects_sharing.share_object_id=f.feature_id AND ?:ult_objects_sharing.share_object_type=?s', 'product_features');
				$b_where=db_quote(" AND (f.company_id=?i OR ?:ult_objects_sharing.share_company_id=?i)", Registry::get('runtime.company_id'), Registry::get('runtime.company_id'));
			}		
			$brands=db_get_array("SELECT v_desc.variant, v_desc.variant_id, f.feature_id FROM ?:product_feature_variant_descriptions as v_desc LEFT JOIN ?:product_feature_variants as variants ON variants.variant_id=v_desc.variant_id LEFT JOIN ?:product_features as f ON f.feature_id=variants.feature_id $b_join WHERE f.feature_type=?s AND v_desc.lang_code=?s $b_where AND v_desc.variant LIKE ?l GROUP BY v_desc.variant_id  $limit", "E", CART_LANGUAGE, $params['q']."%");
			Registry::get('view')->assign('brands', $brands);
			
		}
		///search vendors	
		if (Registry::get('addons.csc_live_search.search_vendors')=="Y" && fn_allowed_for('MULTIVENDOR')){			
			$vendors=db_get_array("SELECT company_id, company FROM ?:companies WHERE company LIKE ?l $limit", $params['q']."%");
			Registry::get('view')->assign('vendors', $vendors);			
		}
	}
	Registry::get('view')->display('addons/csc_live_search/components/products_result.tpl');			
	exit;
}