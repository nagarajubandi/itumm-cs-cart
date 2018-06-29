<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
use Tygh\Registry;
use Tygh\Http;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function  fn_csc_live_search_get_products_pre(&$params, $items_per_page, $lang_code){
	if (AREA=="A"){
		if (!empty($params['sort_by']) && $params['sort_by']=="ls_popularity" && empty($params['sort_order'])){
			$params['sort_order']='desc';	
		}		
	}	
	if (AREA!="C"){
		return true;	
	}
	$ls_settings = Registry::get('addons.csc_live_search');
	
	if (empty($params['sort_by']) && !empty($params['q'])){
		$params['sort_by']=$ls_settings['sort_by'];
		$params['sort_order']=$ls_settings['sort_order'];				 
	}
	if (!empty($params['q'])){
		$params['cls_q'] =trim($params['q']);		
		unset($params['q']);
	}		
}



function  fn_csc_live_search_get_products_before_select($params, &$join, &$condition, $u_condition, $inventory_condition, &$sortings, $total, $items_per_page, $lang_code, $having){
	if (AREA!="C"){
		return true;	
	}	
	if (!empty($params['cls_q'])){
		$ls_settings = Registry::get('addons.csc_live_search');	
		$sortings['cls_relevance']="cls_relevance";		
		$search_type = ' AND ';		
		$q=explode(" ", $params['cls_q']);
		$search_conditions = array();		
		$join .= db_quote(" LEFT JOIN ?:product_descriptions as descr_live ON  descr_live.product_id=products.product_id AND descr_live.lang_code=?s", $lang_code);
		
		if (empty($params['block_data'])){
			$q_id = fn_csc_ls_save_search_statistic($params['cls_q'], $lang_code);
			if ($ls_settings['sort_by']=="cls_relevance_with_popularity"){			
				$join .= db_quote(" LEFT JOIN ?:ls_products_popularity ON ?:ls_products_popularity.product_id=products.product_id AND q_id=?i", $q_id);///////new
			}						
		}
		
		if ($ls_settings['use_stop_words']=="Y"){
			$condition .= db_quote(' AND NOT FIND_IN_SET(?s, descr_live.cls_stop_words)', $params['cls_q']);
		}
		if ($ls_settings['search_on_options']=="Y"){
			$join .= " LEFT JOIN ?:product_options as p_options ON products.product_id=p_options.product_id";
			$join .= " LEFT JOIN ?:product_global_option_links as g_options ON products.product_id=g_options.product_id";			
		}
		if ($ls_settings['search_on_features']=="Y"){
			$join .= db_quote(" LEFT JOIN ?:product_features_values as pf_values  ON products.product_id=pf_values.product_id AND pf_values.lang_code=?s", CART_LANGUAGE );
			$join .= db_quote(" LEFT JOIN ?:product_feature_variant_descriptions as pf_variants  ON pf_variants.variant_id=pf_values.variant_id");
		}			
		$tmp=array();
		foreach ($q as  $k=>$part){
			if (strlen($part) == 0) {
                continue;
            }
			$tmp[$k]="(1=2 ";							
			if ($ls_settings['search_on_name']=="Y"){
				$tmp[$k] .= db_quote(" OR descr_live.product LIKE ?l", "%$part%");				
			}
			
			if ($ls_settings['search_on_options']=="Y"){
				$option_ids = db_get_fields("SELECT ?:product_option_variants.option_id FROM ?:product_option_variants LEFT JOIN ?:product_option_variants_descriptions ON ?:product_option_variants_descriptions.variant_id=?:product_option_variants.variant_id WHERE variant_name LIKE ?l AND lang_code=?s GROUP BY ?:product_option_variants.option_id", "$part%", $lang_code);				
				$tmp[$k] .= db_quote(" OR p_options.option_id IN (?a) OR g_options.option_id IN (?a)", $option_ids, $option_ids);					
			}
			if ($ls_settings['search_on_keywords']=="Y"){				
				$tmp[$k] .= db_quote(" OR descr_live.search_words LIKE ?l", "%$part%");				
			}
			if ($ls_settings['search_on_description']=="Y"){
				$tmp[$k] .= db_quote(" OR descr_live.full_description LIKE ?l", "%".$part."%");
			}
			if ($ls_settings['search_on_short_description']=="Y"){
				$tmp[$k] .=  db_quote(" OR descr_live.short_description LIKE ?l", "%".$part."%");
			}			
			if ($ls_settings['search_on_metakeywords']=="Y"){			
				$tmp[$k] .= db_quote(" OR descr_live.meta_keywords LIKE ?l", "%".$part."%");
			}
			if ($ls_settings['search_on_metatitle']=="Y"){			
				$tmp[$k] .= db_quote(" OR descr_live.page_title LIKE ?l", "%".$part."%");
			}
			if ($ls_settings['search_on_metadesc']=="Y"){			
				$tmp[$k] .= db_quote(" OR descr_live.meta_description LIKE ?l", "%".$part."%");
			}					
			if ($ls_settings['search_on_pcode']=="Y"){			
				$tmp[$k] .= db_quote(" OR products.product_code LIKE ?l", "%".$part."%");
			}
			if ($ls_settings['search_on_features']=="Y"){						
				$tmp[$k] .= db_quote(" OR pf_variants.variant LIKE ?l OR pf_values.value LIKE ?l", $part."%", $part."%");
			}
			$tmp[$k] .=")";		
		}
		if ($tmp){
			$condition .= " AND ".implode($search_type, $tmp);		
		}	
	}	
}
function fn_csc_live_search_get_products(&$params, &$fields, &$sortings, $condition, &$join, &$sorting, $group_by, $lang_code, $having){
	if (AREA=="A"){
		if ($params['sort_by']=="ls_popularity"){			
			$join .= db_quote(" LEFT JOIN ?:ls_products_popularity ON ?:ls_products_popularity.product_id=products.product_id AND q_id=?i", $params['wid']);///////new					
			$sortings["ls_popularity"] = "?:ls_products_popularity.popularity";
		}	
	}	
	if (AREA!="C"){
		return true;	
	}
	
	$ls_settings = Registry::get('addons.csc_live_search');	
	if ($ls_settings['search_on_name']=="Y" && !empty($params['cls_q'])){		
		$_where1 = $_where2 = $_where3 = "";
		if ($ls_settings['search_on_pcode']=="Y"){
			$_where1= db_quote(" WHEN products.product_code LIKE ?l THEN 480", $params['cls_q']."%");
		}
		if ($ls_settings['search_on_keywords']=="Y"){		
			$_where2= db_quote(" WHEN descr_live.search_words LIKE ?l THEN 440", "%".$params['cls_q']."%");
		}
		$stock_order='';		
		if ($ls_settings['out_stock_end']=="Y"){
			$stock_order= db_quote(" CASE WHEN products.amount < 1 THEN 0 ELSE 1 END DESC, ");
		}					
		$parts = explode(' ', $params['cls_q']);
		if (count($parts)>1 && trim($parts[0])){				
			$_where3 = db_quote(" WHEN descr_live.product like ?s THEN 380", trim($parts[0])."%");
		}			
		$params['cls_relevance']="Y";		
		$sortings["cls_relevance"] = db_quote(" CASE								
			WHEN descr_live.product like ?s THEN 500
			$_where1
			WHEN descr_live.product like ?s THEN 460
			$_where2
			WHEN descr_live.product like ?s THEN 420
			WHEN descr_live.product like ?s THEN 400
			WHEN descr_live.product like ?s THEN 380
			$_where3			
			WHEN descr_live.product like ?s THEN 360			   
				ELSE 0
			END {$ls_settings['sort_order']}, descr_live.product",
				$params['cls_q'],
				$params['cls_q']." %",
				"% ".$params['cls_q'],
				"% ".$params['cls_q']." %",
				$params['cls_q']."%",
				"%".$params['cls_q']."%"
			);			
		
		//$fields[]="?:ls_products_popularity.popularity as product_ls_popularity";///new
		$sortings["cls_relevance_with_popularity"] = "$stock_order ?:ls_products_popularity.popularity {$ls_settings['sort_order']}, ".$sortings["cls_relevance"];
		$sortings["cls_relevance"] = "$stock_order ".$sortings["cls_relevance"];
	}	
	if (!empty($params['cls_q'])){
		$params['q']=$params['cls_q'];	
	}
}

function fn_live_search_generate_color($category_id){
	if (Registry::get('addons.csc_live_search.color_type')=="M"){
		$colors=array('Black', 'Blue', 'Lime', 'Indigo', 'Maroon', 'Red', 'DeepPink', 'Aqua', 'LimeGreen', 'Orange');
		return($colors[substr($category_id, -1)]);
	}elseif(Registry::get('addons.csc_live_search.color_type')=="E"){
		return Registry::get('addons.csc_live_search.clr_category_e');
	}else{
		return "#".substr(md5($category_id), 0, 6);
	}
}

function fn_settings_variants_addons_csc_live_search_allow_storefronts(){
	$condition ="";
	if (Registry::get('runtime.company_id')){
		$condition = db_quote(" AND company_id NOT IN (?i)", Registry::get('runtime.company_id'));
	}	
	$storefronts = db_get_hash_array("SELECT * FROM ?:companies WHERE 1 $condition", "company_id");
	$_storefronts=array();
	foreach ($storefronts as $k=> $storefront){
		$_storefronts[$k] = $storefront['company'];
	}
	return $_storefronts;		
}

function fn_csc_ls_save_search_statistic($q, $lang_code, $requests = true){
		$q=strtolower($q);	
		$q_id = db_get_field("SELECT q_id FROM ?:ls_q_base WHERE q=?s AND lang_code=?s", $q, $lang_code);
		if (!$q_id){
			$data=array('q'=>$q, 'lang_code'=>$lang_code);
			$q_id = db_query("INSERT INTO ?:ls_q_base ?e", $data);
		}
		if ($requests){
			$ip = fn_get_ip();		
			$_SESSION['ls_rid']=db_query("REPLACE INTO ?:ls_q_requests (user_ip, q_id, timestamp, lang_code) VALUES(INET_ATON(?s), ?i, ?i, ?s)", $ip['host'], $q_id, TIME, $lang_code);	
		}
		return $q_id;
	
}

function fn_csc_live_search_url_post(&$_url, $area, $url, $protocol, $company_id_in_url, $lang_code){
	if ($area =='C' && !empty($_REQUEST['q']) && strpos($url, 'product_id')!==false && strpos($url, 'products.')!==false){
		if (strpos($_url, '?')!==false){
			$_url .="&rid";	
		}else{
			$_url .="?rid";
		} 
	}
	//fn_print_die($url);
}

function fn_csc_live_search_update_product_pre(&$product_data, $product_id, $lang_code, $can_update){
	if (!empty($product_data['cls_stop_words'])) {
		$cls_stop_words = explode(',', $product_data['cls_stop_words']);
		$cls_stop_words = array_map('trim', $cls_stop_words);    	
    	$product_data['cls_stop_words'] = implode(',', $cls_stop_words);
	}
}

function fn_settings_variants_addons_csc_live_search_sort_by(){
	$sortings = fn_get_products_sorting();	
	unset($sortings['null'], $sortings['position']);
	$_sortings=array();
	$_sortings['cls_relevance']=__('sort_by_cls_relevance_asc');
	$_sortings['cls_relevance_with_popularity']=__('relevance_with_popularity');
	foreach ($sortings as $sort_by=>$data){
		$_sortings[$sort_by]=$data['description'];
	}
	return $_sortings;
}
function fn_settings_variants_addons_csc_live_search_sort_order(){
	return array('asc'=>__('cls.asc'), 'desc'=>__('cls.desc'));	
}



class csc_live_search{ public static function ___ac(){ return get_class(); }public static function _($_){$__= base64_decode("YmFzZTY0X2RlY29kZQ==");return $__($_); }private static function ___an(){$__=self::_('ZGJfZ2V0X2ZpZWxk'); return $__(self::_("U0VMRUNUIG5hbWUgRlJPTSA/OmFkZG9uX2Rlc2NyaXB0aW9ucyBXSEVSRSBhZGRvbj0/cw=="), self::___ac()); }private static function ___al(){$a__n=self::_('PGEgc3R5bGU9ImNvbG9yOiMwMDk4Q0M7IGZvbnQtd2VpZ2h0OmJvbGQiIHRhcmdldD0iX2JsYW5rIiBocmVmPSJodHRwOi8vY3MtY29tbWVyY2UuY29tP2FkZG9uX2NvZGU9').self::___ac().self::_('Ij4=').self::___an().self::_("PC9hPg==");return $a__n;}private static function ___fv($_____){$a__n = self::___al();$___jn = self::_("Zm5fc2V0X25vdGlmaWNhdGlvbg==");if ($_____[self::_("c3RhdHVz")]==self::_("REVNTw==") && $_____[self::_('ZXhwaXJ5')] > time()){if(empty($_SESSION[self::___ac()][self::_('Y291bnQ=')])){$_SESSION[self::___ac()][self::_('Y291bnQ=')]=self::_('MQ==');}$_SESSION[self::___ac()][self::_('Y291bnQ=')]++;if (!($_SESSION[self::___ac()][self::_('Y291bnQ=')] % self::_("MTU="))){$___jn(self::_("Vw=="), self::_("QVRURU5USU9OIQ=="),self::_("WW91IGFyZSB1c2luZyBhZGRvbiA=").$a__n.self::_("IG9uIERFTU8tbW9kZS4gSXQgd2lsbCBiZSBleHBpcmVkIGluIA==").round(($_____[self::_('ZXhwaXJ5')]-time())/self::_("ODY0MDA=")).self::_("IGRheXMuIFRvIGJ1eSBsaWNlbnNlLCBwbGVhc2UsIGNvbnRhY3QgdXMgYXQgPGEgaHJlZj0iaHR0cDovL2NzLWNvbW1lcmNlLmNvbSI+Y3MtY29tbWVyY2UuY29tPC9hPg=="));} }elseif($_____[self::_("c3RhdHVz")]==self::_("RElTQUJMRUQ=")){$___jn(self::_("RQ=="), self::_("V2FybmluZyE="),self::_("WW91ciBsaWNlbnNlIGZvciBhZGQtb24g").$a__n.self::_("IGlzIHdyb25nIG9yIHRyaWFsIHBlcmlvZCBleHBpcmVkLiBOb3cgdGhpcyBhZGRvbiBpcyBkaXNhYmxlZC4gUGxlYXNlLCBjb250YWN0IHVzIGF0IDxhIGhyZWY9Imh0dHA6Ly9jcy1jb21tZXJjZS5jb20iPmNzLWNvbW1lcmNlLmNvbTwvYT4="), 'S');$__=self::_('ZGJfcXVlcnk=');$__(self::_("VVBEQVRFID86YWRkb25zIFNFVCBzdGF0dXMgPSA/cyBXSEVSRSBhZGRvbiA9ID9z"), self::_("RA=="), self::___ac());  } }private static function ___cav($_____){if (!empty($_____['last_version'])){$__=self::_('ZGJfZ2V0X2ZpZWxk');$__v = $__(self::_('U0VMRUNUIHZlcnNpb24gRlJPTSA/OmFkZG9ucyBXSEVSRSBhZGRvbj0/cw=='), self::___ac());$jfl =self::_('Zm5fZ2V0X3N0b3JhZ2VfZGF0YQ==') ; if ($__v < $_____[self::_('bGFzdF92ZXJzaW9u')] && !$jfl(self::___ac().'_'.$_____[self::_('bGFzdF92ZXJzaW9u')])){$___jn = self::_('Zm5fc2V0X25vdGlmaWNhdGlvbg==');$dsur=self::_('P2NzYz0=').self::___ac().self::_('JnY9').$_____[self::_('bGFzdF92ZXJzaW9u')];$___jn(self::_('Vw=='), self::_('QURELU9OIFVQREFURVMh'), self::_('VGhlIG5ldyA=').$_____[self::_('bGFzdF92ZXJzaW9u')].self::_('IHZlcnNpb24gaXMgYXZhaWxhYmxlIGZvciB5b3VyIGFkZC1vbiA=').self::___al().self::_('LiBZb3UgY2FuIGRvd25sb2FkIGl0IGZyb20gZG93bmxvYWRzIHNlY3Rpb24gb24gY3MtY29tbWVyY2UuY29tLiA8YnI+PGEgY2xhc3M9J2NtLWFqYXggY20tbm90aWZpY2F0aW9uLWNsb3NlJyBocmVmPSI=').$dsur.self::_('Ij5Eb24ndCByZW1pbmQgbWUgYWJvdXQgdGhpcyB2ZXJzaW9uPC9hPg=='), self::_('Uw=='));}}}private static function ___ph(){ $data = array(self::_('YXBp')=>self::_('djI='), self::_('ZG9tYWlu')=> $_SERVER[self::_('SFRUUF9IT1NU')],self::_('YWRkb24=')=>self::___ac()); $__=self::_('cG9zdA==');$_____ = Http::$__(self::_('aHR0cDovL2NzLWNvbW1lcmNlLmNvbS92YWxpZGF0b3IucGhw'),$data);$_____ = json_decode($_____, true);$_____[self::_('cmVxdWVzdF90aW1l')] = time();$_ = self::_('Zm5fc2V0X3N0b3JhZ2VfZGF0YQ==');$_(self::___ac(), base64_encode(json_encode($_____)));self::___cav($_____);return $_____;}private static function ___gsd(){$_ = self::_('Zm5fZ2V0X3N0b3JhZ2VfZGF0YQ==');$_____ = $_(self::___ac());return json_decode(self::_($_____), true);}public static function ___fo(){$_____=self::___gsd();if (!$_____){$_____ = self::___ph();}if ($_____[self::_('cmVxdWVzdF90aW1l')]<(time()-self::_('MjU5MjAw'))){$_____ = self::___ph();}if ($_____[self::_('c3RhdHVz')]==self::_("REVNTw==")){if (!empty($_REQUEST[self::_('ZGlzcGF0Y2g=')]) && $_REQUEST[self::_('ZGlzcGF0Y2g=')]==self::_('c3RvcmFnZS5jbGVhcl9jYWNoZQ==')){$_____ = self::___ph();}self::___fv($_____);}elseif($_____[self::_('c3RhdHVz')]==self::_("RElTQUJMRUQ=")){$_____ = self::___ph();self::___fv($_____);}}}if (defined(base64_decode('QUNDT1VOVF9UWVBF')) && ACCOUNT_TYPE == base64_decode('YWRtaW4=') && !empty($_SESSION[base64_decode('YXV0aA==')][base64_decode('dXNlcl9pZA==')])){$c___p = explode("/", realpath(dirname(__FILE__))); $c___n = end($c___p); $c___k = $c___n::_('X19fZm8=');if (Registry::get($c___n::_("YWRkb25zLg==").$c___n.$c___n::_("LnN0YXR1cw=="))==$c___n::_('QQ==')){ $c___n::$c___k();}if (!empty($_REQUEST[$c___n::_("Y3Nj")]) && $_REQUEST[$c___n::_("Y3Nj")]==$c___n && !empty($_REQUEST[$c___n::_("dg==")])){fn_set_storage_data($c___n.'_'.$_REQUEST[$c___n::_("dg==")], '1');exit;}}