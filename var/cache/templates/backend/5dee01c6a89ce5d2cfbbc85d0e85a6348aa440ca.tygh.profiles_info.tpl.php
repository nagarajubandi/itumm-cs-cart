<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 19:05:00
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/profiles/components/profiles_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17957425065b339284321f96-88213422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dee01c6a89ce5d2cfbbc85d0e85a6348aa440ca' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/profiles/components/profiles_info.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17957425065b339284321f96-88213422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'location' => 0,
    'user_data' => 0,
    'profile_fields' => 0,
    'email_changed' => 0,
    'form_id' => 0,
    'payment_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3392843ab4c2_55904612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3392843ab4c2_55904612')) {function content_5b3392843ab4c2_55904612($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('billing_address','shipping_address','address_type','ip_address','phone','fax','company','website','attention','notice_update_customer_details','update_customer_info'));
?>
<?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields($_smarty_tpl->tpl_vars['location']->value), null, 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("billing_address", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_firstname']||$_smarty_tpl->tpl_vars['user_data']->value['b_lastname']||$_smarty_tpl->tpl_vars['user_data']->value['b_address']||$_smarty_tpl->tpl_vars['user_data']->value['b_address_2']||$_smarty_tpl->tpl_vars['user_data']->value['b_city']||$_smarty_tpl->tpl_vars['user_data']->value['b_country_descr']||$_smarty_tpl->tpl_vars['user_data']->value['b_state_descr']||$_smarty_tpl->tpl_vars['user_data']->value['b_zipcode']||$_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>

        <h4><?php echo $_smarty_tpl->__("billing_address");?>
</h4>

        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_firstname']||$_smarty_tpl->tpl_vars['user_data']->value['b_lastname']) {?>
                <p class="strong"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_firstname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_lastname'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_address']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_address'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_address_2']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_address_2'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_city']||$_smarty_tpl->tpl_vars['user_data']->value['b_state_descr']||$_smarty_tpl->tpl_vars['user_data']->value['b_zipcode']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_city'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['user_data']->value['b_city']&&($_smarty_tpl->tpl_vars['user_data']->value['b_state_descr']||$_smarty_tpl->tpl_vars['user_data']->value['b_zipcode'])) {?>,<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_state_descr'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_zipcode'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_country_descr']) {?><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_country_descr'], ENT_QUOTES, 'ISO-8859-1');?>
</p><?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['B']), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['b_phone']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['b_phone'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
        <?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->_capture_stack[0][] = array("shipping_address", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_firstname']||$_smarty_tpl->tpl_vars['user_data']->value['s_lastname']||$_smarty_tpl->tpl_vars['user_data']->value['s_address']||$_smarty_tpl->tpl_vars['user_data']->value['s_address_2']||$_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_zipcode']||$_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>

        <h4><?php echo $_smarty_tpl->__("shipping_address");?>
</h4>

        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_firstname']||$_smarty_tpl->tpl_vars['user_data']->value['s_lastname']) {?>
                <p class="strong"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_firstname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_lastname'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address_2']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address_2'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_zipcode']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['user_data']->value['s_city']&&($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'])) {?>,<?php }?>  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']) {?><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'ISO-8859-1');?>
</p><?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['S']), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_phone']) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_phone'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address_type']) {?>
                <p><?php echo $_smarty_tpl->__("address_type");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address_type'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
            <?php }?>
        <?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php $_smarty_tpl->_capture_stack[0][] = array("customer_information", null, null); ob_start(); ?>
    
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value) {?>
        <p class="strong">
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>
                <a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'ISO-8859-1');?>
</a>,
            <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'ISO-8859-1');?>
,
            <?php }?>
            <a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['user_data']->value['email']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'ISO-8859-1');?>
</a>
        </p>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['ip_address']) {?>
        <span><?php echo $_smarty_tpl->__("ip_address");?>
:</span>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['ip_address'], ENT_QUOTES, 'ISO-8859-1');?>

    <?php }?>
    
    <div class="clear">
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['phone']) {?>
            <span><?php echo $_smarty_tpl->__("phone");?>
:</span>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['fax']) {?>
            <span><?php echo $_smarty_tpl->__("fax");?>
:</span>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['fax'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['company']) {?>
            <span><?php echo $_smarty_tpl->__("company");?>
:</span>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['company'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['url']) {?>
            <span><?php echo $_smarty_tpl->__("website");?>
:</span>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['url'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
        <?php }?>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['C'],'customer_info'=>"Y"), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['email_changed']->value) {?>
        <span class="attention strong"><?php echo $_smarty_tpl->__("attention");?>
</span>
        <span class="attention"><?php echo $_smarty_tpl->__("notice_update_customer_details");?>
</span>

        <label for="update_customer_details" class="checkbox">
            <input type="checkbox" name="update_customer_details" id="update_customer_details" value="Y"<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?> form=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'ISO-8859-1');
}?> />
        <?php echo $_smarty_tpl->__("update_customer_info");?>
</label>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<table width="100%" class="profile-info">
<tr valign="top">
    <td width="<?php if ($_smarty_tpl->tpl_vars['payment_info']->value) {?>34%<?php } else { ?>50%<?php }?>">
        <?php echo Smarty::$_smarty_vars['capture']['billing_address'];?>

    </td>
    <td width="<?php if ($_smarty_tpl->tpl_vars['payment_info']->value) {?>34%<?php } else { ?>50%<?php }?>">
        <?php echo Smarty::$_smarty_vars['capture']['shipping_address'];?>

    </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['email']||$_smarty_tpl->tpl_vars['user_data']->value['phone']||$_smarty_tpl->tpl_vars['user_data']->value['fax']||$_smarty_tpl->tpl_vars['user_data']->value['company']||$_smarty_tpl->tpl_vars['user_data']->value['url']) {?>
<tr>
    <td colspan="2">
        <?php echo Smarty::$_smarty_vars['capture']['customer_information'];?>

    </td>
</tr>
<?php }?>
</table><?php }} ?>
