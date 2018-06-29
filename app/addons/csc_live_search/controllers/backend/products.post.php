<?php
use Tygh\Registry;
use Tygh\Http;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
	if ($mode == 'update') {
		//fn_print_die($_REQUEST);
		$product_id=$_REQUEST['product_id'];
		
		if (!empty($_REQUEST['ls_popularity'])){
			db_query("REPLACE INTO ?:ls_products_popularity ?m", $_REQUEST['ls_popularity']);
			$updated_products = array_keys($_REQUEST['ls_popularity']);
		}else{
			$updated_products = array();	
		}
		$items = explode(',', $_REQUEST['ls_q_items']);		
		$to_delete = array_diff($items, $updated_products);				
		if ($to_delete){			
			db_query("DELETE ?:ls_q_products FROM ?:ls_q_products LEFT JOIN ?:ls_q_requests ON ?:ls_q_requests.request_id=?:ls_q_products.request_id WHERE product_id =?i AND q_id IN (?a)", $product_id, $to_delete);
			db_query("DELETE FROM ?:ls_products_popularity WHERE product_id =?i AND q_id IN (?a)", $product_id, $to_delete);				
		}
		if (!empty($_REQUEST['new_q'])){
			foreach($_REQUEST['new_q'] as $new_q){
				if (!empty($new_q['q']) && trim($new_q['q'])){
					$q_id = fn_csc_ls_save_search_statistic($new_q['q'], DESCR_SL, false);
					$data = array(
						'product_id'=>$product_id,
						'popularity'=>$new_q['popularity'],
						'q_id'=>$q_id
						
					);				
					db_query("REPLACE INTO ?:ls_products_popularity ?e", $data);				
				}					
			}	
		}		
	}
}

if ($mode == 'update') {
	$params = $_REQUEST;
	if (empty($params['page'])){
		$params['page']=1;
	}
	if (empty($params['items_per_page'])){
		$params['items_per_page'] = 50;		
	}
	
	$condition = db_quote(" AND ?:ls_products_popularity.product_id =?i AND ?:ls_q_base.lang_code=?s", $_REQUEST['product_id'], DESCR_SL);
	$params['total_items'] = db_get_field("SELECT COUNT(?:ls_q_base.q_id) FROM ?:ls_q_base
	INNER JOIN ?:ls_products_popularity ON ?:ls_products_popularity.q_id=?:ls_q_base.q_id
	 WHERE 1 $condition");	
	$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);	
		
	$search_words = db_get_hash_array("SELECT ?:ls_q_base.*, ?:ls_products_popularity.* FROM ?:ls_q_base 
		INNER JOIN ?:ls_products_popularity ON ?:ls_products_popularity.q_id=?:ls_q_base.q_id		
		WHERE 1 $condition GROUP BY ?:ls_q_base.q_id ORDER BY popularity DESC  $limit ", 'q_id');
		
	foreach ($search_words as $k=>$w){
		$search_words[$k]['count_requests'] = db_get_field("SELECT COUNT(request_id) FROM ?:ls_q_requests WHERE q_id=?i", $w['q_id']);
		$search_words[$k]['count_products'] = db_get_field("SELECT COUNT(?:ls_q_products.request_id) 
			FROM ?:ls_q_products 
			LEFT JOIN ?:ls_q_requests ON ?:ls_q_requests.request_id=?:ls_q_products.request_id 
			WHERE q_id=?i AND product_id=?i", $w['q_id'], $_REQUEST['product_id']);		
	}
		
	Tygh::$app['view']->assign('search_words', $search_words);	
	Tygh::$app['view']->assign('w_search', $params);	
	//fn_print_r($search_words);		
	Registry::set('navigation.tabs.cs_live_search', array (
        'title' => __('cs_live_history'),
        'js' => true
    ));
	Registry::set('navigation.tabs.cs_live_search_settings', array (
        'title' => __('cs_live_search_settings'),
        'js' => true
    ));
}
