<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 18:50:24
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/email_templates/preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3736252355b34e098058910-10776952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e09fb652362df410d7eb398d018b0fb154f8b9a5' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/email_templates/preview.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3736252355b34e098058910-10776952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e09805d357_40234072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e09805d357_40234072')) {function content_5b34e09805d357_40234072($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('preview','subject','body'));
?>
<div title="<?php echo $_smarty_tpl->__("preview");?>
" id="preview_dialog">

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
    <h4><?php echo $_smarty_tpl->__("subject");?>
:</h4>
    <div>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview']->value->getSubject(), ENT_QUOTES, 'ISO-8859-1');?>

    </div>
    <h4><?php echo $_smarty_tpl->__("body");?>
:</h4>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['preview']->value->getBody();?>

    </div>
<?php }?>

<!--preview_dialog--></div>
<?php }} ?>
