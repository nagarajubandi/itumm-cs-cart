<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

if (($mode=="view" || $mode=="quick_view") && isset($_REQUEST['rid']) && !empty($_SESSION['ls_rid'])){
	$product_id = $_REQUEST['product_id'];
	$data=array('request_id'=>$_SESSION['ls_rid'], 'product_id'=>$product_id);
	db_query("REPLACE INTO ?:ls_q_products ?e", $data);
	
	$q_id = db_get_field("SELECT q_id FROM ?:ls_q_requests WHERE request_id=?i", $_SESSION['ls_rid']);		
	$popularity = db_get_field("SELECT popularity FROM ?:ls_products_popularity WHERE product_id=?i AND q_id=?i", $product_id, $q_id);
	if (is_numeric($popularity)){
		if (Registry::get('addons.csc_live_search.increase_popularity')=="Y"){
			db_query("UPDATE ?:ls_products_popularity SET popularity=?i WHERE product_id=?i AND q_id=?i", $popularity+1, $product_id, $q_id);
		}
	}else{
		$popularity = array('product_id'=>$product_id, 'q_id'=>$q_id, 'popularity'=>1);
		if (Registry::get('addons.csc_live_search.increase_popularity')!="Y"){
			$popularity = array('product_id'=>$product_id, 'q_id'=>$q_id, 'popularity'=>0);
		}
		db_query("INSERT INTO ?:ls_products_popularity ?e", $popularity);
	}
	
	if ($mode=="view"){
		return array(CONTROLLER_STATUS_REDIRECT, 'products.view?product_id='.$product_id);	
	}	
}