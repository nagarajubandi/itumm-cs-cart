<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:34:57
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/discussion/hooks/orders/detailed_after_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12304587175b337d69391115-83937583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbfb2611f4f553269a740dbbbc2879951c9ffc2f' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/discussion/hooks/orders/detailed_after_content.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12304587175b337d69391115-83937583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337d69393739_94569894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337d69393739_94569894')) {function content_5b337d69393739_94569894($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>

<?php }} ?>
