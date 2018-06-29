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

if (!defined('BOOTSTRAP')) { die('Access denied'); }
if ($_SERVER['REQUEST_METHOD']=="POST"){
	if ($mode == 'update_products') {
		//fn_print_die($_REQUEST);
		db_query("REPLACE INTO ?:ls_products_popularity ?m", $_REQUEST['products']);
		$items = explode(',', $_REQUEST['items']);
		$updated_products = array_keys($_REQUEST['products']);
		$to_delete = array_diff($items, $updated_products);
		if ($to_delete){
			db_query("DELETE ?:ls_q_products FROM ?:ls_q_products LEFT JOIN ?:ls_q_requests ON ?:ls_q_requests.request_id=?:ls_q_products.request_id WHERE product_id IN (?a) AND q_id=?i", $to_delete, $_REQUEST['wid']);
			db_query("DELETE FROM ?:ls_products_popularity WHERE product_id IN (?a) AND q_id=?i", $to_delete, $_REQUEST['wid']);				
		}
		if (!empty($_REQUEST['new_products'])){
			foreach($_REQUEST['new_products'] as $new_product){
				if (!empty($new_product['product_id'])){
					$is_exist = db_get_field("SELECT product_id FROM ?:ls_products_popularity WHERE product_id=?i AND q_id=?i", $new_product['product_id'], $_REQUEST['wid']);
					if (!$is_exist){
						db_query("REPLACE INTO ?:ls_products_popularity ?e", $new_product);						
					}
				}					
			}	
		}	
				
		return array(CONTROLLER_STATUS_REDIRECT, "search_history.products?wid=".$_REQUEST['wid']);		
	}
	if ($mode == 'm_delete') {	
		if (!empty($_REQUEST['q_ids'])){
			foreach ($_REQUEST['q_ids'] as $qid){
				db_query("DELETE FROM ?:ls_products_popularity WHERE q_id=?i", $qid);	
				db_query("DELETE FROM ?:ls_q_base WHERE q_id=?i", $qid);
				$request_ids = db_get_fields("SELECT request_id FROM ?:ls_q_requests WHERE q_id=?i", $qid);				
				db_query("DELETE FROM ?:ls_q_requests WHERE request_id IN (?a)", $request_ids);
				db_query("DELETE FROM ?:ls_q_products WHERE request_id IN (?a)", $request_ids);								
			}	
		}
		if (!empty($_REQUEST['rids'])){								
			db_query("DELETE FROM ?:ls_q_requests WHERE request_id IN (?a)", $_REQUEST['rids']);
			db_query("DELETE FROM ?:ls_q_products WHERE request_id IN (?a)", $_REQUEST['rids']);		
		}		
		fn_set_notification("N", __('notice'), __('search_words_deleted_success'));	
		return array(CONTROLLER_STATUS_REDIRECT, $_REQUEST['redirect_url']);
	}
	
	if ($mode == 'delete_all') {
		db_query("TRUNCATE `?:ls_products_popularity`");
		db_query("TRUNCATE `?:ls_q_base`");
		db_query("TRUNCATE `?:ls_q_requests`");
		db_query("TRUNCATE `?:ls_q_products`");
		fn_set_notification("N", __('notice'), __('search_histore_deleted_success'));	
		return array(CONTROLLER_STATUS_REDIRECT, "search_history.view");
	}
}

if ($mode == 'view') {
    	$params = $_REQUEST;
		$data = array();
		if (!empty($params['period']) && $params['period'] != 'A') {
            list($data['time_from'], $data['time_to']) = fn_create_periods($params);
        } else {
           $data['time_from'] =$data['time_to'] = 0;
        }		
		$condition="";
		if (!empty($data['time_from'])){
			$condition .=db_quote(" AND timestamp>?i", $data['time_from']);
		}
		if (!empty($data['time_to'])){
			$condition .=db_quote(" AND timestamp < ?i", $data['time_to']);
		}
		if (!empty($params['wid'])){
			$condition .=db_quote(" AND ?:ls_q_requests.q_id =?i", $params['wid']);
		}
		if (!empty($params['q'])){
			$condition .=db_quote(" AND (q LIKE ?l OR q LIKE ?l)", $params['q']."%", "% ".$params['q']."%");
		}
		if (!empty($params['ip'])){
			$condition .=db_quote(" AND inet_ntoa(user_ip) LIKE ?l", $params['ip']."%");
		}
		if (!empty($params['lang_code'])){
			$condition .=db_quote(" AND ?:ls_q_requests.lang_code = ?s", $params['lang_code']);
		}	
		if (empty($params['page'])){
			$params['page']=1;
		}
		if (empty($params['items_per_page'])){
			$params['items_per_page'] = 50;		
		}
		
		$join = " LEFT JOIN ?:ls_q_base ON ?:ls_q_base.q_id=?:ls_q_requests.q_id 
	LEFT JOIN ?:ls_q_products ON ?:ls_q_products.request_id=?:ls_q_requests.request_id	";	
	
	$params['total_items'] = db_get_field("SELECT COUNT(DISTINCT ?:ls_q_requests.request_id) FROM ?:ls_q_requests $join WHERE 1 $condition");
	$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);	
	
	$search_history = db_get_array("SELECT ?:ls_q_requests.*, ?:ls_q_base.*, inet_ntoa(?:ls_q_requests.user_ip) as user_ip,  COUNT(?:ls_q_products.product_id) as count, GROUP_CONCAT(DISTINCT(?:ls_q_products.product_id) SEPARATOR ',') as pids FROM ?:ls_q_requests
	$join
	WHERE 1 $condition GROUP BY ?:ls_q_requests.request_id ORDER BY ?:ls_q_requests.request_id DESC $limit");
		 
    Registry::get('view')->assign('search_history', $search_history);
    Registry::get('view')->assign('search', $params);
} 

if ($mode == 'view_words') {
    $params = $_REQUEST;
	$data = array();
	if (!empty($params['period']) && $params['period'] != 'A') {
		list($data['time_from'], $data['time_to']) = fn_create_periods($params);
	} else {
	   $data['time_from'] =$data['time_to'] = 0;
	}		
	$condition="";	
	if (!empty($data['time_from'])){
		$condition .=db_quote(" AND timestamp>?i", $data['time_from']);
	}
	if (!empty($data['time_to'])){
		$condition .=db_quote(" AND timestamp < ?i", $data['time_to']);
	}
	if (!empty($params['q'])){
		$condition .=db_quote(" AND (q LIKE ?l OR q LIKE ?l)", $params['q']."%", "% ".$params['q']."%");
	}
	if (empty($params['page'])){
		$params['page']=1;
	}
	if (empty($params['items_per_page'])){
		$params['items_per_page'] = 50;		
	}
	
	$params['total_items'] = db_get_field("SELECT COUNT(q_id) FROM ?:ls_q_base WHERE 1 $condition");
	$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);	
	
	$search_history = db_get_array("SELECT ?:ls_q_base.*, COUNT(?:ls_q_products.product_id) as count_products,
		COUNT(DISTINCT ?:ls_q_requests.request_id) as count_requests
		FROM ?:ls_q_base
		LEFT JOIN ?:ls_q_requests ON ?:ls_q_base.q_id=?:ls_q_requests.q_id 
		LEFT JOIN ?:ls_q_products ON ?:ls_q_products.request_id=?:ls_q_requests.request_id	
		WHERE 1 $condition GROUP BY ?:ls_q_base.q_id ORDER BY ?:ls_q_base.q_id DESC $limit");
	//fn_print_r($search_history);
		 
    Registry::get('view')->assign('search_history', $search_history);
    Registry::get('view')->assign('search', $params);
	//Registry::get('view')->assign('period', $params['period']);
	

// ajax autocomplete mode
}
if ($mode == 'products') {
	$params=$_REQUEST;	
	if (!empty($_REQUEST['wid'])){
		$pids = db_get_fields("SELECT product_id FROM ?:ls_products_popularity WHERE q_id=?i", $_REQUEST['wid']);
		if (!$pids){
			$pids = db_get_fields("SELECT product_id FROM ?:ls_q_requests LEFT JOIN ?:ls_q_products ON ?:ls_q_products.request_id=?:ls_q_requests.request_id WHERE q_id=?i", $_REQUEST['wid']);
		}		
		$params['pid'] = implode(',', $pids);			
		$params['sort_by'] = 'ls_popularity';
			
	}	
	list($products, $search) = fn_get_products($params, Registry::get('settings.Appearance.admin_elements_per_page'));
	foreach($products as $k=>$product){
		if (!empty($_REQUEST['wid'])){
			$products[$k]['popularity']=db_get_field("SELECT popularity FROM ?:ls_products_popularity WHERE product_id=?i AND q_id=?i", $product['product_id'], $_REQUEST['wid']);
			$products[$k]['clicks']=db_get_field("SELECT COUNT(product_id) FROM ?:ls_q_products LEFT JOIN ?:ls_q_requests ON ?:ls_q_requests.request_id=?:ls_q_products.request_id WHERE q_id=?i AND product_id=?i", $_REQUEST['wid'], $product['product_id']);
		}
	}	
	Registry::get('view')->assign('products', $products);
    Registry::get('view')->assign('search', $search);
}

