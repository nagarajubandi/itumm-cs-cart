<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:56:19
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/csc_live_search/components/products_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8785360045b33826bef10e8-05078302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a4c7b3a014dabb97a4e0e9516be6c9738ebffbf' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/csc_live_search/components/products_result.tpl',
      1 => 1525436173,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8785360045b33826bef10e8-05078302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'live_search' => 0,
    'categories' => 0,
    'addons' => 0,
    'category' => 0,
    'storefront_categories' => 0,
    'brands' => 0,
    'brand' => 0,
    'vendors' => 0,
    'vendor' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33826c027606_27387103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33826c027606_27387103')) {function content_5b33826c027606_27387103($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ls-container">
    <div class="csc_snize-dropdown-arrow"><div class="csc_snize-arrow-outer"></div><div class="csc_snize-arrow-inner csc_snize-arrow-inner-label"></div></div>
    
    
    <div class="csc_live_search_total"><?php if ($_smarty_tpl->tpl_vars['products']->value) {?><a href="<?php echo htmlspecialchars(fn_url("products.search&q=".((string)$_smarty_tpl->tpl_vars['live_search']->value['q'])."&search_performed=Y"), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__('cls_found',array($_smarty_tpl->tpl_vars['live_search']->value['total_items']));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['total_items'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__('cls_products',array($_smarty_tpl->tpl_vars['live_search']->value['total_items']));?>
</a> <?php }?><i class="ls_closer" title="<?php echo $_smarty_tpl->__('close');?>
"></i></div>
   
   <div class="cls_search_result"> 
        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
            <div class="csc_root_tree_element">
              <?php echo $_smarty_tpl->__('categories');?>

          </div>
            <ul class="csc_template-small csc_live_search_tree">    			
                <?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
?>		   
                    <li class="clearfix csc_subelement">	           
                            <div class="csc_template-small__item-description csc_live_search_brand">
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['csc_live_search']['show_parent_category']=="Y"&&$_smarty_tpl->tpl_vars['category']->value['parent_category']) {?>
                            <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['parent_category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['parent_category'];?>
</a>&nbsp;/&nbsp;<?php }?><a class="csc_no_line" href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>
</a> 
                            </div>      
                    </li>		   
                <?php } ?>        
            </ul>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['storefront_categories']->value) {?>
            <div class="csc_root_tree_element">
              <?php echo $_smarty_tpl->__('storefronts_categories');?>

          </div>
            <ul class="csc_template-small csc_live_search_tree">    			
                <?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storefront_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
?>		   
                    <li class="clearfix csc_subelement">	           
                            <div class="csc_template-small__item-description csc_live_search_brand">
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['csc_live_search']['show_parent_category']=="Y"&&$_smarty_tpl->tpl_vars['category']->value['parent_category']) {?>
                            <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['parent_category_id'])."&company_id=".((string)$_smarty_tpl->tpl_vars['category']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['parent_category'];?>
</a>&nbsp;/&nbsp;<?php }?><a class="csc_no_line" href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])."&company_id=".((string)$_smarty_tpl->tpl_vars['category']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>
</a> 
                            </div>      
                    </li>		   
                <?php } ?>        
            </ul>
        <?php }?>
		
		
		
        
        <?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
            <div class="csc_root_tree_element">
                <?php echo $_smarty_tpl->__('our_brands');?>

            </div>	
            <ul class="csc_template-small csc_live_search_tree">
                
                <?php  $_smarty_tpl->tpl_vars["brand"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["brand"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["brand"]->key => $_smarty_tpl->tpl_vars["brand"]->value) {
$_smarty_tpl->tpl_vars["brand"]->_loop = true;
?>	    
                    <li class="csc_subelement clearfix">	           
                            <div class="csc_template-small__item-description csc_live_search_tree" >
                           <a class="csc_no_line" href="<?php echo htmlspecialchars(fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['brand']->value['variant_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">  <?php echo $_smarty_tpl->tpl_vars['brand']->value['variant'];?>
</a>   
                            </div>      
                    </li>		    
                <?php } ?>
                
            </ul>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['vendors']->value) {?>
            <div class="csc_root_tree_element">
                <?php echo $_smarty_tpl->__('companies');?>

            </div>	
            <ul class="csc_template-small csc_live_search_tree">
            
                <?php  $_smarty_tpl->tpl_vars["vendor"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["vendor"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["vendor"]->key => $_smarty_tpl->tpl_vars["vendor"]->value) {
$_smarty_tpl->tpl_vars["vendor"]->_loop = true;
?>
                    <li class="csc_subelement clearfix">	           
                            <div class="csc_template-small__item-description csc_live_search_tree" >
                           <a class="csc_no_line" href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['vendor']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">  <?php echo $_smarty_tpl->tpl_vars['vendor']->value['company'];?>
</a>   
                            </div>      
                    </li>		    
                <?php } ?>
                
            </ul>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <ul class="csc-template-small ls_products" id="ls_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
">   
            <?php echo $_smarty_tpl->getSubTemplate ("addons/csc_live_search/components/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

        <!--ls_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></ul>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['products']->value&&!$_smarty_tpl->tpl_vars['brands']->value&&!$_smarty_tpl->tpl_vars['categories']->value&&!$_smarty_tpl->tpl_vars['vendors']->value) {?>
        <ul>
            <li class="css_live_no_found">
            
            <?php echo $_smarty_tpl->__('cls_not_found');?>
 (<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['q'], ENT_QUOTES, 'ISO-8859-1');?>
</b>)
            
            </li>
        </ul>
        <?php }?>
    </div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/csc_live_search/components/products_result.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/csc_live_search/components/products_result.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ls-container">
    <div class="csc_snize-dropdown-arrow"><div class="csc_snize-arrow-outer"></div><div class="csc_snize-arrow-inner csc_snize-arrow-inner-label"></div></div>
    
    
    <div class="csc_live_search_total"><?php if ($_smarty_tpl->tpl_vars['products']->value) {?><a href="<?php echo htmlspecialchars(fn_url("products.search&q=".((string)$_smarty_tpl->tpl_vars['live_search']->value['q'])."&search_performed=Y"), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__('cls_found',array($_smarty_tpl->tpl_vars['live_search']->value['total_items']));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['total_items'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__('cls_products',array($_smarty_tpl->tpl_vars['live_search']->value['total_items']));?>
</a> <?php }?><i class="ls_closer" title="<?php echo $_smarty_tpl->__('close');?>
"></i></div>
   
   <div class="cls_search_result"> 
        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
            <div class="csc_root_tree_element">
              <?php echo $_smarty_tpl->__('categories');?>

          </div>
            <ul class="csc_template-small csc_live_search_tree">    			
                <?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
?>		   
                    <li class="clearfix csc_subelement">	           
                            <div class="csc_template-small__item-description csc_live_search_brand">
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['csc_live_search']['show_parent_category']=="Y"&&$_smarty_tpl->tpl_vars['category']->value['parent_category']) {?>
                            <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['parent_category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['parent_category'];?>
</a>&nbsp;/&nbsp;<?php }?><a class="csc_no_line" href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>
</a> 
                            </div>      
                    </li>		   
                <?php } ?>        
            </ul>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['storefront_categories']->value) {?>
            <div class="csc_root_tree_element">
              <?php echo $_smarty_tpl->__('storefronts_categories');?>

          </div>
            <ul class="csc_template-small csc_live_search_tree">    			
                <?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storefront_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
?>		   
                    <li class="clearfix csc_subelement">	           
                            <div class="csc_template-small__item-description csc_live_search_brand">
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['csc_live_search']['show_parent_category']=="Y"&&$_smarty_tpl->tpl_vars['category']->value['parent_category']) {?>
                            <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['parent_category_id'])."&company_id=".((string)$_smarty_tpl->tpl_vars['category']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['parent_category'];?>
</a>&nbsp;/&nbsp;<?php }?><a class="csc_no_line" href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])."&company_id=".((string)$_smarty_tpl->tpl_vars['category']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>
</a> 
                            </div>      
                    </li>		   
                <?php } ?>        
            </ul>
        <?php }?>
		
		
		
        
        <?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
            <div class="csc_root_tree_element">
                <?php echo $_smarty_tpl->__('our_brands');?>

            </div>	
            <ul class="csc_template-small csc_live_search_tree">
                
                <?php  $_smarty_tpl->tpl_vars["brand"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["brand"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["brand"]->key => $_smarty_tpl->tpl_vars["brand"]->value) {
$_smarty_tpl->tpl_vars["brand"]->_loop = true;
?>	    
                    <li class="csc_subelement clearfix">	           
                            <div class="csc_template-small__item-description csc_live_search_tree" >
                           <a class="csc_no_line" href="<?php echo htmlspecialchars(fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['brand']->value['variant_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">  <?php echo $_smarty_tpl->tpl_vars['brand']->value['variant'];?>
</a>   
                            </div>      
                    </li>		    
                <?php } ?>
                
            </ul>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['vendors']->value) {?>
            <div class="csc_root_tree_element">
                <?php echo $_smarty_tpl->__('companies');?>

            </div>	
            <ul class="csc_template-small csc_live_search_tree">
            
                <?php  $_smarty_tpl->tpl_vars["vendor"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["vendor"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["vendor"]->key => $_smarty_tpl->tpl_vars["vendor"]->value) {
$_smarty_tpl->tpl_vars["vendor"]->_loop = true;
?>
                    <li class="csc_subelement clearfix">	           
                            <div class="csc_template-small__item-description csc_live_search_tree" >
                           <a class="csc_no_line" href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['vendor']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">  <?php echo $_smarty_tpl->tpl_vars['vendor']->value['company'];?>
</a>   
                            </div>      
                    </li>		    
                <?php } ?>
                
            </ul>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <ul class="csc-template-small ls_products" id="ls_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
">   
            <?php echo $_smarty_tpl->getSubTemplate ("addons/csc_live_search/components/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

        <!--ls_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></ul>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['products']->value&&!$_smarty_tpl->tpl_vars['brands']->value&&!$_smarty_tpl->tpl_vars['categories']->value&&!$_smarty_tpl->tpl_vars['vendors']->value) {?>
        <ul>
            <li class="css_live_no_found">
            
            <?php echo $_smarty_tpl->__('cls_not_found');?>
 (<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['q'], ENT_QUOTES, 'ISO-8859-1');?>
</b>)
            
            </li>
        </ul>
        <?php }?>
    </div>
</div><?php }?><?php }} ?>
