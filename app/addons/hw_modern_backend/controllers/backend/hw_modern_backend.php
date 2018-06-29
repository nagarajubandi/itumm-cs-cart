<?php

if ( !defined('BOOTSTRAP') ) { die('Access denied'); }

use Tygh\Registry;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $suffix = '';
    fn_trusted_vars ( 'color_data' );

    if ($mode == 'upload') {
            $theme_pack = fn_filter_uploaded_data('theme_pack', array('xml'));
            if (empty($theme_pack[0])) {
                fn_set_notification('E', __('error'), __('text_allowed_to_upload_file_extension', array('[ext]' => implode(',', array('xml')))));
            } else {
                $theme_pack = $theme_pack[0];

                // Extract the add-on pack and check the permissions
                $extract_path = Registry::get('config.dir.cache_misc') . 'tmp/modern_theme_xml/';

                // Re-create source folder
                fn_rm($extract_path);
                fn_mkdir($extract_path);

                fn_copy($theme_pack['path'], $extract_path . $theme_pack['name']);

                $data = (array)simplexml_load_file($extract_path . $theme_pack['name']);
                if($data['type']=='colors'){
                    $color = array();
                    $color['activated'] = 0;
                    $color['status'] = 'A';
                    $color['position'] = (int)db_get_field('SELECT MAX(`position`)  FROM ?:hwmb WHERE type=?s', 'colors');
                    $color['position'] +=1;

                    $color['type'] = $data['type'];
                    $color['name'] = $data['name'];
                    $color['value'] = array();

                    foreach ($data as $key => $value) {
                        if(!in_array($key, array('type','name'))){
                            $color['value'][$key] = $value;
                        }
                    }
                    $color['value'] = serialize($color['value']);                  
                    db_query("INSERT INTO ?:hwmb ?e", $color);
                    fn_set_notification('N', __('notice'), __('hwmb_theme_install_done', array('[name]' => $color['name'] )));
                }
            }

            $suffix = '.manage';
    }

    if($mode=='update_colors'){
        $id = (int)$_REQUEST['color_data']['id'];
        unset($_REQUEST['color_data']['id']);

        $data = array();
        $data['type'] = $_REQUEST['color_data']['type']; unset($_REQUEST['color_data']['type']);
        $data['name'] = $_REQUEST['color_data']['name']; unset($_REQUEST['color_data']['name']);
        $data['value'] = serialize($_REQUEST['color_data']);

        if($id>0){
            db_query('UPDATE ?:hwmb SET ?u WHERE id = ?i', $data, $id);
        }else{
            $id = db_query("INSERT INTO ?:hwmb ?e", $data);
        }

        #update curent theme is color saved is active
        if( (int)$_REQUEST['activated'] == 1){ $suffix = '.update_colors?id='.$id.'&hw_modern_backend_update=1'; 
        }else{ $suffix = '.update_colors?id='.$id; }
    }

    if($mode=='update_fonts'){
        $id = (int)$_REQUEST['font_data']['id'];
        unset($_REQUEST['font_data']['id']);

        $data = array();
        $data['type'] = $_REQUEST['font_data']['type']; unset($_REQUEST['font_data']['type']);
        $data['name'] = $_REQUEST['font_data']['name']; unset($_REQUEST['font_data']['name']);
        $data['value'] = '';

        if($id>0){ db_query('UPDATE ?:hwmb SET ?u WHERE id = ?i', $data, $id);
        }else{ $id = db_query("INSERT INTO ?:hwmb ?e", $data); }

        #update curent theme is color saved is active
        if( (int)$_REQUEST['activated'] == 1){ $suffix = '.update_fonts?id='.$id.'&hw_modern_backend_update=1'; 
        }else{ $suffix = '.update_fonts?id='.$id; }
    }

    if($mode=='update_bgs'){
        $id = (int)$_REQUEST['bg_data']['id'];
        unset($_REQUEST['bg_data']['id']);

        $data = array();
        $data['type'] = $_REQUEST['bg_data']['type']; unset($_REQUEST['bg_data']['type']);
        $data['name'] = $_REQUEST['bg_data']['name']; unset($_REQUEST['bg_data']['name']);
        $data['value'] = serialize($_REQUEST['bg_data']);

        if($id>0){ db_query('UPDATE ?:hwmb SET ?u WHERE id = ?i', $data, $id);
        }else{ $id = db_query("INSERT INTO ?:hwmb ?e", $data); }

        //save image
        fn_attach_image_pairs('page_main', 'hwmb', $id, CART_LANGUAGE);
        $_REQUEST['bg_data']['main_pair'] = fn_get_image_pairs($id, 'hwmb', 'M', true, true, CART_LANGUAGE);
        if(!empty($_REQUEST['bg_data']['main_pair'])){
            $data['value'] = serialize($_REQUEST['bg_data']);
            db_query('UPDATE ?:hwmb SET ?u WHERE id = ?i', $data, $id);
        }

        #update curent theme is color saved is active
        if( (int)$_REQUEST['activated'] == 1){ $suffix = '.update_bgs?id='.$id.'&hw_modern_backend_update=1'; 
        }else{ $suffix = '.update_bgs?id='.$id; }
    }    

    return array(CONTROLLER_STATUS_OK, "hw_modern_backend$suffix");    
}


if($mode=='save' && defined('AJAX_REQUEST')){

    if($_REQUEST['store_id'] != Registry::get('runtime.company_id')){
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    $objects = array('layouts', 'colors', 'fonts', 'bgs');
    foreach ($objects as $type) {
        if(isset($_REQUEST[$type])){
            $id = (int)db_get_field('SELECT id FROM ?:hwmb  WHERE type=?s AND id=?i AND status = ?s', $type, $_REQUEST[$type], 'A');
            if($id>0){
                    db_query('UPDATE ?:hwmb SET activated=?i WHERE type=?s', 0, $type);
                    db_query('UPDATE ?:hwmb SET activated=?i WHERE type=?s AND id=?i', 1, $type, $_REQUEST[$type]);
            }
        }
    }

    #select store
    $id = db_get_field('SELECT id FROM ?:hwmb WHERE type=?s AND name=?i', 'stores', $_REQUEST['store_id']);
    $data = array();
    $data['type'] = 'stores';
    $data['name'] = $_REQUEST['store_id'];
    $data['value'] = serialize($_REQUEST);
    if($id>0){ db_query('UPDATE ?:hwmb SET ?u WHERE id = ?i', $data, $id);
    }else{ $id = db_query("INSERT INTO ?:hwmb ?e", $data); }
    echo $_REQUEST['store_id'];
    exit;
} 

if($mode=='manage'){

    $tabs = array (
        'colors' => array (
            'title' => __('hwmb_colorss'),
            'js' => true
        ),
        'fonts' => array (
            'title' => __('hwmb_fontss'),
            'js' => true
        ),
        'bgs' => array (
            'title' => __('hwmb_bgss'),
            'js' => true
        )
    );

    Registry::set('navigation.tabs', $tabs);

    $hwmb = fn_hw_modern_backend_get_data();
    $company_id = (int)Registry::get('runtime.company_id');
    fn_hw_modern_backend_activate_store($hwmb, $company_id);

    Registry::get('view')->assign('hwmb', $hwmb);
}

if($mode=='update_colors'){
    $color = fn_hw_modern_backend_get_one_data('colors', $_REQUEST['id']);
    Registry::get('view')->assign('color', $color);
}

if($mode=='update_fonts'){
    if($_REQUEST['id'] == 133){
        #default
        fn_set_notification('E', fn_get_lang_var('error'), fn_get_lang_var('hwmd_you_cannot_edit_none'));
        return array(CONTROLLER_STATUS_OK, "hw_modern_backend.manage&selected_section=bgs");
    }    
    $font = fn_hw_modern_backend_get_one_data('fonts', $_REQUEST['id']);
    Registry::get('view')->assign('font', $font);
}

if($mode=='update_bgs'){
    if(!empty($_REQUEST['id']) && $_REQUEST['id'] == 33){
        #none
        fn_set_notification('E', fn_get_lang_var('error'), fn_get_lang_var('hwmd_you_cannot_edit_none'));
        return array(CONTROLLER_STATUS_OK, "hw_modern_backend.manage&selected_section=bgs");
    }
    $bg = fn_hw_modern_backend_get_one_data('bgs', (!empty($_REQUEST['id']))?$_REQUEST['id']:0);
    Registry::get('view')->assign('bg', $bg);
}

if($mode=='delete'){
        //delete images 
        //#TODO: verifica daca este activa pe vrun store
        if(!fn_hw_modern_backend_delete_rights($_REQUEST['id'], $_REQUEST['type'])){
            #default
            fn_set_notification('E', fn_get_lang_var('error'), fn_get_lang_var('hwmd_you_cannot_edit_none'));
            return array(CONTROLLER_STATUS_OK, "hw_modern_backend.manage&selected_section=".$_REQUEST['type']);
        }    
        

        if($_REQUEST['type'] == 'bgs'){ fn_delete_image_pairs($_REQUEST['id'],  'hwmb', 'M'); }
        db_query('DELETE FROM ?:hwmb WHERE id=?i AND type=?s AND activated=?i', $_REQUEST['id'], $_REQUEST['type'], 0);
        $suffix = '.manage&selected_section='.$_REQUEST['type']; 
}

if($mode=='clone'){
        $data = db_get_row('SELECT * FROM ?:hwmb WHERE id=?i AND type=?s', $_REQUEST['id'], $_REQUEST['type']);
        if(!empty($data)){
            unset($data['id']);
            $data['activated'] = 0;
            $data['name'] = $data['name'].' [CLONE]';
            $id = db_query("INSERT INTO ?:hwmb ?e", $data);
            $suffix = '.update_'.$_REQUEST['type'].'&id='.$id;   
        }else{
            $suffix = '.manage&selected_section='.$_REQUEST['type'];     
        }
        
}

if(($mode=='delete' || $mode=='clone') && !empty($suffix)){
    return array(CONTROLLER_STATUS_OK, "hw_modern_backend$suffix");
}

if($mode=='css'){
    header("Content-type: text/css", true);
    $display_content = fn_hw_modern_backend_update_styles('', $_REQUEST['store_id']);
    echo  $display_content;
    exit;
}

if($mode=='enable'){
    $_SESSION['hwmd'] = 2;
    if(empty($_REQUEST['return_url'])) $_REQUEST['return_url'] = 'index.index';
    return array(CONTROLLER_STATUS_OK, urldecode($_REQUEST['return_url']));
}

if($mode=='disable'){
    $_SESSION['hwmd'] = 0;
    return array(CONTROLLER_STATUS_OK, urldecode($_REQUEST['return_url']));
}

if($mode=='export'){
    $data = fn_hw_modern_backend_get_one_data($_REQUEST['type'], $_REQUEST['id']);
    if(!empty($data)){
        header('Content-Type: text/xml; charset=UTF-8');
        header('Content-Disposition: attachment; filename="modern_backend_export_'.$_REQUEST['type'].'_'.fn_hw_modern_backend_clean_string($data['name']).'.xml"');

        $xml    = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml    .= '<hwmb>'."\n";
        foreach ($data as $key => $value) {
            if(in_array($key, array('id','activated', 'status', 'position'))) continue;
            $xml    .= '   <'.$key.'>'.$value.'</'.$key.'>'."\n";
        }
        $xml    .= '</hwmb>';

        echo $xml;
        exit();
    } else{ 
        return array(CONTROLLER_STATUS_NO_PAGE);
    }
}