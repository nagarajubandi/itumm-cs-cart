<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:18:32
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/wk_order_cancelation/hooks/orders/details_bullets.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14600242065b33799084e392-99272979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dd4ed259c51637539d8d78395b63a522eb705d8' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/wk_order_cancelation/hooks/orders/details_bullets.post.tpl',
      1 => 1525695901,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14600242065b33799084e392-99272979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'wk_show_cancel_order' => 0,
    'order_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33799085c763_16795514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33799085c763_16795514')) {function content_5b33799085c763_16795514($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (isset($_smarty_tpl->tpl_vars['wk_show_cancel_order']->value)) {?>
	

	<a class="ty-btn ty-btn__text cm-dialog-opener cm-dialog-auto-size text-button " data-ca-target-id="wk_cancel_order_btn" href="javascript:void(0);" rel="nofollow"><i class="ty-orders__actions-icon ty-icon-cancel"></i>Cancel Order</a>


	<div  id="wk_cancel_order_btn"
		  class="hidden ng-remove-product-popup" title="Confirmation">
		<div class="ty-remove-product-popup">
			<div class="ty-product-notification__item clearfix">
				<div class="ty-product-notification__content clearfix">
					Are you sure you want to cancel the order?
				</div>
			</div>
		</div>

		<div style="margin-bottom: 10px;">
			<div class="ty-float-right">
				<button type="button"class="ty-btn ty-btn__secondary cm-dialog-closer" role="button" title="Close" data-dismiss="modal">
					No
				</button>
			</div>
			<div class="ty-float-right" style="margin-right: 10px;">
				<a class="ty-btn ty-btn__secondary"
				   href="javascript:void(0);"
				   onclick="fn_nags_cancel_order();"
				>Yes</a>

			</div>
		</div>
	</div>

<?php echo '<script'; ?>
 type="text/javascript">
	var order_id = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	/*Tygh.$('#wk_cancel_order_btn').on('click',function(){
        if (confirm("Are you sure you want to cancel the order?")) {
			$.ceAjax('request', fn_url('orders.wk_cancel_order?order_id=`$order_info.order_id`'), {
				cache: false,
				data: {'order_id': order_id},
				callback: function(data) {
					window.location.reload(true);
				}
			});
		}
	});*/
    function fn_nags_cancel_order()
    {
        $.ceAjax('request', fn_url('orders.wk_cancel_order?order_id=`$order_info.order_id`'), {
            cache: false,
            data: {'order_id': order_id},
            callback: function(data) {
                window.location.reload(true);
            }
        });
    }
<?php echo '</script'; ?>
>



<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wk_order_cancelation/hooks/orders/details_bullets.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wk_order_cancelation/hooks/orders/details_bullets.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (isset($_smarty_tpl->tpl_vars['wk_show_cancel_order']->value)) {?>
	

	<a class="ty-btn ty-btn__text cm-dialog-opener cm-dialog-auto-size text-button " data-ca-target-id="wk_cancel_order_btn" href="javascript:void(0);" rel="nofollow"><i class="ty-orders__actions-icon ty-icon-cancel"></i>Cancel Order</a>


	<div  id="wk_cancel_order_btn"
		  class="hidden ng-remove-product-popup" title="Confirmation">
		<div class="ty-remove-product-popup">
			<div class="ty-product-notification__item clearfix">
				<div class="ty-product-notification__content clearfix">
					Are you sure you want to cancel the order?
				</div>
			</div>
		</div>

		<div style="margin-bottom: 10px;">
			<div class="ty-float-right">
				<button type="button"class="ty-btn ty-btn__secondary cm-dialog-closer" role="button" title="Close" data-dismiss="modal">
					No
				</button>
			</div>
			<div class="ty-float-right" style="margin-right: 10px;">
				<a class="ty-btn ty-btn__secondary"
				   href="javascript:void(0);"
				   onclick="fn_nags_cancel_order();"
				>Yes</a>

			</div>
		</div>
	</div>

<?php echo '<script'; ?>
 type="text/javascript">
	var order_id = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	/*Tygh.$('#wk_cancel_order_btn').on('click',function(){
        if (confirm("Are you sure you want to cancel the order?")) {
			$.ceAjax('request', fn_url('orders.wk_cancel_order?order_id=`$order_info.order_id`'), {
				cache: false,
				data: {'order_id': order_id},
				callback: function(data) {
					window.location.reload(true);
				}
			});
		}
	});*/
    function fn_nags_cancel_order()
    {
        $.ceAjax('request', fn_url('orders.wk_cancel_order?order_id=`$order_info.order_id`'), {
            cache: false,
            data: {'order_id': order_id},
            callback: function(data) {
                window.location.reload(true);
            }
        });
    }
<?php echo '</script'; ?>
>



<?php }
}?><?php }} ?>
