<?php
/******************************************************************
# Order Cancelation    ---  Order Cancelation                     *
# ----------------------------------------------------------------*
# author    webkul                                                *
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.   *
# @license - http://www.gnu.org/licenses/gpl.html GNU/GPL         *
# Websites: http://webkul.com                                     *
*******************************************************************
*/

use Tygh\Registry;
use Tygh\Settings;


function fn_get_order_cancelation_data($company_id = null)
{
  static $cache;

  if (empty($cache['settings_' . $company_id])) {
    $settings = Settings::instance()->getValue('order_cancelation_tpl_data', '', $company_id);
    $settings = unserialize($settings);

    if (empty($settings)) {
      $settings = array();
    }

    $cache['settings_' . $company_id] = $settings;
  }
  return $cache['settings_' . $company_id];
}


function fn_wk_check_cancel_order($order_info)
{    
  $get_conditions=fn_get_order_cancelation_data();
   if($order_info['status']==STATUS_INCOMPLETED_ORDER || $order_info['status']=='F' || $order_info['status']=='D' ||$order_info['status']==STATUS_CANCELED_ORDER)
      {
        return false;
      } 
 
   $flag = true;
  // ------------------------------------------------------------------------------------------------
  // --------------------------------- Order Status Condition Cancel --------------------------------
  // ------------------------------------------------------------------------------------------------

    if(isset($get_conditions['order_status']) &&isset($get_conditions['status_c']))  
    {  
      if(in_array($order_info['status'], $get_conditions['order_status']))
      {
        return false;
      }
      $flag = false;
    }
  // -----------------------------------------------------------------------------------------------------
  // --------------------------------- Order Create Time Condition Cancel --------------------------------
  // ----------------------------------------------------------------------------------------------------- 

	 if(isset($get_conditions['time_c']))  
    { 
      $get_conditions['time']=($get_conditions['days']*24*60*60)+($get_conditions['hours']*60*60)+($get_conditions['minute']*60);
      if(TIME > $order_info['timestamp']+$get_conditions['time'])
    	{
    	     return false;	
    	}
      $flag = false;
    }
    
  // -----------------------------------------------------------------------------------------------------
  // ----------------------- Product Condition Varification For Cancelation ------------------------------
  // ----------------------------------------------------------------------------------------------------- 
   $get_product=db_get_array('SELECT product_id FROM ?:order_details WHERE order_id = ?i',$order_info['order_id']);
   if(isset($get_conditions['product'])) 
    {  
      $get_conditions['product_ids']=explode(",", $get_conditions['product_ids']);
      $make_product_index_array=array();
      
      foreach ($get_conditions['product_ids'] as $key => $product_id)
      {
      	$make_product_index_array[]=$product_id;
      }
    
      $show_cancel_by_product=true;
 
      foreach ($get_product as $key => $value)
      {
        	if(in_array($value['product_id'], $make_product_index_array))
        	{
        		$show_cancel_by_product=false;
        	}
    	    
          $wk_get_edp_product=db_get_field('SELECT is_edp FROM ?:products WHERE product_id=?i',$value['product_id']);
    	
          if($wk_get_edp_product == 'Y')
        	{
        		$show_cancel_by_product=false;
        	}
      }

      if($show_cancel_by_product == false)
      {
      	return false;	
      }
      $flag = false;
    }
  // -----------------------------------------------------------------------------------------------------
  // ----------------------- Order Price Condition Varification For Cancelation ------------------------------
  // -----------------------------------------------------------------------------------------------------     
   
    if(isset($get_conditions['price']))  
    {
       if(is_numeric($get_conditions['minimum_price']))
         $min_price_order = $get_conditions['minimum_price'];
       else
          $min_price_order = 0.00;

       if($order_info['total'] <= $min_price_order)
       {
         return false;
       }
       $flag = false;
    }

    if($flag)
    {
      return false;
    }
    
    return true;
}