<?php

if ( !defined('BOOTSTRAP') ) { die('Access denied'); }

use Tygh\Registry;
use Tygh\Http;
use Tygh\Storage;
use Tygh\Less;

function fn_hw_modern_backend_delete_rights($id, $type){
	$allow = true;

	$stores = db_get_array('SELECT * FROM ?:hwmb WHERE `type`=?s', 'stores');
	foreach ($stores as $stores) {
		$values = unserialize($stores['value']);
		foreach ($values as $key => $value) {
			if($key==$type && $value==$id){
				$allow = false;
				break;
			}
		}
		if(!$allow) break;
	}

	return $allow;
}

function fn_hw_modern_backend_have_user_access($to){
	$auth = $_SESSION['auth'];
	return fn_check_user_access($auth['user_id'], $to);
}

function fn_hw_modern_backend_activate_store(&$hwmb, $store_id=0){
   $objects = array('layouts', 'colors', 'fonts', 'bgs');
   $store_data = fn_hw_modern_backend_store_data($store_id);

   if(!empty($store_data)){
   	$store_data = unserialize($store_data['value']);
   	//activate settings
   	foreach ($objects as $type) {
	    	foreach ($hwmb[$type] as $key => $value) {
	    		if($value['id'] == $store_data[$type]){ $hwmb[$type][$key]['activated'] = 1; 
	    		}else{ $hwmb[$type][$key]['activated'] = 0; }
	    	}
   	}
   }	
}

function fn_hw_modern_backend_update_styles($hwmb='', $store_id=0){
    if(empty($hwmb)){
	$hwmb = fn_hw_modern_backend_get_data();
   }

   #activate custom settings for store
   fn_hw_modern_backend_activate_store($hwmb, $store_id);

   #enable styles
    foreach ($hwmb['colors'] as $key => $value) {
        if($value['activated']==1){
            unset($value['id']);
            unset($value['name']);
            unset($value['type']);
            unset($value['status']);
            unset($value['activated']);
            $styles = $value;
        }
    }

    foreach ($hwmb['bgs'] as $key => $value) {
        if($value['activated']==1){
            if(!empty($value['color'])){ $styles['body'] = $value['color']; }
            if(!empty($value['main_pair'])){ 
                $styles['body'] .= ' url('.$value['main_pair']['detailed']['http_image_path'].')'; 
                if(!empty($value['position'])){ $styles['body'] .= ' '.$value['position']; }
            }
        }
    }

    $styles['body'] = trim($styles['body']);

    #fonts
    foreach ($hwmb['fonts'] as $key => $value) {
        if($value['activated']==1){
        	if($value['id'] == 133){
	            $google_font = '';
	            $styles['font'] = "'Open Sans', sans-serif";
        	}else{
	            $google_font = $value['name'];
	            $styles['font'] = "'".$google_font."', sans-serif";	
        	}

            break;
        }
    }

    #black by default
    foreach ($styles as $key => $value) {
 	if(empty($value)) $styles[$key] = '#000';
    }

    $less_content = Less::arrayToLessVars($styles);
    
    $css_path = fn_get_theme_path('[relative]/[theme]', 'A') . '/css/addons/hw_modern_backend/';

    $http_path =  defined('HTTPS') ? 'https' : 'http';

    $less_content .= "\n".fn_get_contents( $css_path . 'styles.less');

    if($hwmb['layouts'][1]['activated'] == 1){
        $less_content .= "\n".fn_get_contents( $css_path . 'wide.less');
    }
    
    $less = new Less;
    $less_content = $less->compile( $less_content );

    //save css file
    if(!empty($google_font)){
    	$css_content = '@import url('.$http_path.'://fonts.googleapis.com/css?family='.fn_hw_modern_backend_font_convert($google_font).':200,400,700);';
    	$css_content .= "\n".$less_content;
    }else{
    	#default font
    	$css_content = $less_content;
    }

    fn_put_contents($css_path.'styles-'.$store_id.'.css', $css_content );
    fn_rm(Registry::get('config.dir.cache_misc')); //clear cache

    $display_content = $css_content;

    return $display_content;
}

function fn_hw_modern_backend_install_bgs(){

	$patters = array();
	$patters[] = array( 'Back', 'back_pattern.png', 28, 28, '#fff' );
	$patters[] = array( 'Black lozenge', 'black_lozenge.png', 38,38, '#1a1a1a' );
	$patters[] = array( 'Brickwall', 'brickwall.png', 110,69, '#ececec' );
	$patters[] = array( 'Congruent outline', 'congruent_outline.png', 300,300, '#333333' );
	$patters[] = array( 'Cream pixels', 'cream_pixels.png', 160, 160, '#fff' );
	//$patters[] = array( 'Dark exa', 'dark_exa.png', 18,30, '#000' );
	$patters[] = array( 'Diagonal striped brick', 'diagonal_striped_brick.png', 150, 150, '#fff' );
	$patters[] = array( 'Diamond upholstery', 'diamond_upholstery.png', 200, 200, '#ececec' );
	$patters[] = array( 'Dimension', 'dimension.png', 43, 50, '#fff' );
	$patters[] = array( 'Eight horns', 'eight_horns.png', 150, 150, '#f7f8f8' );
	$patters[] = array( 'Escheresque', 'escheresque_ste.png', 46, 29, '#313131' );
	$patters[] = array( 'Food', 'food.png', 300, 300, '#fac564' );
	$patters[] = array( 'Geometry', 'geometry2.png', 400, 400, '#fff' );
	$patters[] = array( 'Geometry play', 'gplaypattern.png', 188, 178, '#fbfbfb' );
	$patters[] = array( 'Green cup', 'green_cup.png', 400, 400, '#a6ad96' );
	$patters[] = array( 'Grey', 'grey.png', 397, 322, '#fff' );
	$patters[] = array( 'Low contrast linen', 'low_contrast_linen.png', 256, 256, '#3a3a3a' );
	$patters[] = array( 'Perforated white leather', 'perforated_white_leather.png', 300, 300, '#e7e7e7' );
	$patters[] = array( 'Purty wood', 'purty_wood.png', 400, 400, '#e7b775' );
	$patters[] = array( 'Retina wood', 'retina_wood.png', 512, 512, '#e9d2b0' );
	$patters[] = array( 'Sandpaper', 'pusandpaperrty_wood.png', 348, 500, '#d8d6d1' );
	$patters[] = array( 'School', 'school.png', 300, 300, '#e9ddc6' );
	$patters[] = array( 'Seamless paper texture', 'seamless_paper_texture.png', 200, 200, '#e2e0d7' );
	$patters[] = array( 'Shattered', 'shattered.png', 500, 500, '#dadbdb' );
	$patters[] = array( 'Skulls', 'skulls.png', 400, 400, '#f7f7df' );
	$patters[] = array( 'Small steps', 'small_steps.png', 40, 20, '#f2f2f2' );
	$patters[] = array( 'Squared metal', 'squared_metal.png', 132, 132, '#d7d7d7' );
	$patters[] = array( 'Stardust', 'stardust.png', 798, 798, '#444349' );
	$patters[] = array( 'Straws', 'straws.png', 16, 16, '#f3f3f3' );
	$patters[] = array( 'Subtle white feathers', 'subtle_white_feathers.png', 500, 333, '#f3f3f3' );
	$patters[] = array( 'Subtle white mini waves', 'subtle_white_mini_waves.png', 65, 65, '#e4e2dc' );
	$patters[] = array( 'Swirl pattern', 'swirl_pattern.png', 300, 300, '#f0f0f0' );
	$patters[] = array( 'Symphony', 'symphony.png', 198, 198, '#fafafa' );
	$patters[] = array( 'Tileable wood texture', 'tileable_wood_texture.png', 400, 317, '#f7e3cd' );
	$patters[] = array( 'Tweed', 'tweed.png', 200, 200, '#515151' );

	$pattern_url = 'http://api.hungryweb.net/cs-cart/addons/modern-backend-theme/';
	$i=0;
	foreach ($patters as $p) {
		$i++;
		fn_hw_modern_backend_add_external_bg( $p[0], $pattern_url.$p[1], 'bgs', $i, $p[2], $p[3], $p[4]);
	}
}

function fn_hw_modern_backend_add_external_bg($name, $url, $type='bgs', $position=0, $width, $height, $bg_color='#fff', $activated=0 ) {
	$content = fn_get_contents($url);
	if(!empty($content)){
		$ext = end(explode('.', $url));
		$image_path = basename($url);

		//check if $image_path+object_type  exist

		$data = array();
		$data['name'] = $name;
		$data['type'] = $type;
		$data['value'] = '';
		$data['position'] = $position;
		$object_id = db_query("INSERT INTO ?:hwmb ?e", $data);

		#images
		$data = array();
		$data['image_path'] = $image_path;
		$data['image_x'] = $width;
		$data['image_y'] = $height;
		$detailed_id = db_query("INSERT INTO ?:images ?e", $data);

		#images_links
		$data = array();
		$data['object_id'] = $object_id;
		$data['object_type'] = 'hwmb';
		$data['image_id'] = 0;
		$data['detailed_id'] = $detailed_id;
		$data['type'] = 'M';
		$pair_id = db_query("INSERT INTO ?:images_links ?e", $data);

		$main_pair = fn_get_image_pairs($object_id, 'hwmb', 'M', true, true, CART_LANGUAGE);
		if(!empty($main_pair)){
		    $data = array();			
		    $data['value'] = serialize(
		    	array(
		    		'color' =>$bg_color,
		    		'position' => 'repeat',
		    		'main_pair' => $main_pair
		    	)
		    );
		    db_query('UPDATE ?:hwmb SET ?u WHERE id = ?i', $data, $object_id);
		}

		#copy image
		$image_path = 'detailed/'.floor($detailed_id / MAX_FILES_IN_DIR).'/'.basename($url);
		Storage::instance('images')->put($image_path, array('contents' => $content));

	}
}

function fn_hw_modern_backend_font_convert($font) {
    return trim(str_replace(array(' '), array('+'), $font));
}

function fn_hw_modern_backend_clean_string($string){
    $url = str_replace("'", '', $string);
    $url = str_replace('%20', ' ', $url);
    $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url); // substitutes anything but letters, numbers and '_' with separator
    $url = trim($url, "-");
    $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);  // you may opt for your own custom character map for encoding.
    $url = strtolower($url);
    $url = preg_replace('~[^-a-z0-9_]+~', '', $url); // keep only letters, numbers, '_' and separator
    return $url;
}

function fn_hw_modern_backend_get_one_data($type, $id=0){
	$data = array();

	if(!empty($id)){
		$data = db_get_row('SELECT * FROM ?:hwmb WHERE type=?s AND id=?i', $type, $id);
		if(!empty($data['value'])){
			$value = unserialize($data['value']);
			foreach ($value as $key => $value) {
				$data[$key] = $value;
			}
			unset($data['value']);
		}

	   	$store_data = fn_hw_modern_backend_store_data();
	   	if(!empty($store_data)){
	   		$store_data = unserialize($store_data['value']);
	   		if($data['id'] == $store_data[$type]){
	   			$data['activated']  = 1;
	   		}else{
	   			$data['activated']  = 0;
	   		}
	   	}
   	}

	return $data;
}

function fn_hw_modern_backend_store_data(&$store_id=''){
	if(empty($store_id)){
		$store_id = Registry::get('runtime.company_id');
	}
	
   	$store_data = db_get_row('SELECT * FROM ?:hwmb WHERE type=?s AND name=?i', 'stores', $store_id);
   	if(empty($store_data) && $store_id !=0){
   		#get default store
   		$store_data = db_get_row('SELECT * FROM ?:hwmb WHERE type=?s AND name=?i', 'stores', 0);
   	}

   	$store_id = $store_data['name'];   	

   	return $store_data;
}

function fn_hw_modern_backend_get_data($store_id=0){
	$hwmb = array();

	$hwmb['layouts'] =  db_get_array('SELECT * FROM ?:hwmb WHERE type=?s ORDER BY position ASC', 'layouts');
	$hwmb['colors'] =  db_get_array('SELECT * FROM ?:hwmb WHERE type=?s ORDER BY position ASC', 'colors');
	$hwmb['bgs'] =  db_get_array('SELECT * FROM ?:hwmb WHERE type=?s ORDER BY position ASC', 'bgs');
	$hwmb['fonts'] =  db_get_array('SELECT * FROM ?:hwmb WHERE type=?s ORDER BY position ASC', 'fonts');

	foreach ($hwmb as $key => $values) {
		foreach ($values as $k => $data) {
			if(!empty($data['value'])){
				$value = unserialize($data['value']);
				foreach ($value as $name => $value) {
					$hwmb[$key][$k][$name] = $value;
				}
				unset($hwmb[$key][$k]['value']);
			}
		}
	}
	return $hwmb;
}
