<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:14:18
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/csc_live_search/views/components/by_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20584236165b337892b8c713-56301137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c4cfa6fb58423beb6cb58dfed5817e18e71270a' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/csc_live_search/views/components/by_product.tpl',
      1 => 1525435425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20584236165b337892b8c713-56301137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_words' => 0,
    'w_search' => 0,
    'i' => 0,
    'product_data' => 0,
    'product' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337892bab6e8_44594466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337892bab6e8_44594466')) {function content_5b337892bab6e8_44594466($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('ls.product_popularity','language','no_data'));
?>
    <input type="hidden" name="ls_q_items" value="<?php echo htmlspecialchars(implode(',',(array_keys($_smarty_tpl->tpl_vars['search_words']->value))), ENT_QUOTES, 'ISO-8859-1');?>
" />
    
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"by_product",'search'=>$_smarty_tpl->tpl_vars['w_search']->value), 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['search_words']->value) {?>      
      <table width="100%" class="table table-sort table-middle">
        <thead>
        <tr>           
            <th class="left" ><?php echo $_smarty_tpl->__('id');?>
</th>  
            <th ><?php echo $_smarty_tpl->__('ls.search_word');?>
</th>
            <th class="center"><?php echo $_smarty_tpl->__('ls.requests_count');?>
</th>
            <th class="center"><?php echo $_smarty_tpl->__('ls.products_clicks');?>
</th>
            <th class="center"><?php echo $_smarty_tpl->__("ls.product_popularity");?>
</th>
            <th class="center"><?php echo $_smarty_tpl->__("language");?>
</th>
            <th class="center"></th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["i"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_words']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["i"]->key => $_smarty_tpl->tpl_vars["i"]->value) {
$_smarty_tpl->tpl_vars["i"]->_loop = true;
?>
        
            <tr>                
                <td class="left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['q_id'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['q'], ENT_QUOTES, 'ISO-8859-1');?>
</td>  
                 <td class="center">
                 	<?php if ($_smarty_tpl->tpl_vars['i']->value['count_requests']>0) {?>
                    	<a title="<?php echo $_smarty_tpl->__('ls.requests');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['q'], ENT_QUOTES, 'ISO-8859-1');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['count_requests'], ENT_QUOTES, 'ISO-8859-1');?>
)" class="cm-ajax cm-dialog-opener" href="<?php echo htmlspecialchars(fn_url("search_history.view?wid=".((string)$_smarty_tpl->tpl_vars['i']->value['q_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="search_history" data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['q_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['count_requests'], ENT_QUOTES, 'ISO-8859-1');?>
</a>
                	 	
                    <?php } else { ?>
                    	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['count_requests'], ENT_QUOTES, 'ISO-8859-1');?>

                    <?php }?>
                 </td>                         
                <td class="center">
                    <?php if ($_smarty_tpl->tpl_vars['i']->value['count_products']>0) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['count_products'], ENT_QUOTES, 'ISO-8859-1');?>

                    <?php } else { ?>
                        0
                    <?php }?>
                </td>
                <td class="center">
                <input type="hidden" name="ls_popularity[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['q_id'], ENT_QUOTES, 'ISO-8859-1');?>
][q_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['q_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                <input type="hidden" name="ls_popularity[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['q_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                <input class="input-mini" type="text" name="ls_popularity[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['q_id'], ENT_QUOTES, 'ISO-8859-1');?>
][popularity]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['i']->value['popularity'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" /></td>
                <td class="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['lang_code'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
                <td class="right">
                        <div class="hidden-tools">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"product_popularity_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'tag_level'=>"2",'only_delete'=>"Y"), 0);?>

                        </div>
                    </td>         
            </tr>
        <?php } ?>
        </tbody>
        
        <?php echo smarty_function_math(array('equation'=>"x + 1",'assign'=>"num",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['num']->value)===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_variable(array(), null, 0);?>
          <tbody>
              <tr><td colspan="7"><b><?php echo $_smarty_tpl->__('ls.add_phrases_for_popularity');?>
</b></td></tr>
          </tbody>
          <tbody class="hover" >
          <tr id="box_add_product_popularity_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
              <td></td>            
              <td>                 
                  <input type="text" name="new_q[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][q]" value="" class="input-medium" placeholder="<?php echo $_smarty_tpl->__('enter_search_phrase');?>
" />
               </td>               
             <td class="center">-</td>
             <td class="center">-</td>               
             <td class="center"><input type="text" name="new_q[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][popularity]" value="0" class="input-mini" /></td>
             <td class="center"><?php echo htmlspecialchars(@constant('DESCR_SL'), ENT_QUOTES, 'ISO-8859-1');?>
</td>
              <td class="right">
                  <div class="">
                      <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_product_popularity_".((string)$_smarty_tpl->tpl_vars['num']->value),'tag_level'=>1,'hide_clone'=>true), 0);?>

                  </div>
              </td>
          </tr>
         
          </tbody>
        
        </table>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>    
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"by_product",'search'=>$_smarty_tpl->tpl_vars['w_search']->value), 0);?>
    
<?php }} ?>
