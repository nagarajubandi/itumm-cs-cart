<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:14:18
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/sd_vendor_products_database/hooks/products/update_detailed_images.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5965466065b3378927cedf0-26988056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '210691396a292e968f4fbffb30e25be58fb228a0' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/sd_vendor_products_database/hooks/products/update_detailed_images.pre.tpl',
      1 => 1528290022,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5965466065b3378927cedf0-26988056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3378927da107_66101423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3378927da107_66101423')) {function content_5b3378927da107_66101423($_smarty_tpl) {?><?php if ($_SESSION['auth']['user_type']=='V'&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['allow_vendors_create_products']=='Y'&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=='add') {?>
    <input type="hidden" value="Y" name="product_data[created_by_vendor]">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['allow_vendors_create_products']=='Y') {?>
    
    <input type="hidden" name="product_data[allow_sharing]" value="Y" />
<?php }?>
<?php }} ?>
