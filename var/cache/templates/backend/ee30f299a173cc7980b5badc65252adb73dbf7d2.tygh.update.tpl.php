<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:57:45
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/payments/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11577060445b3374b1972d99-96818551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee30f299a173cc7980b5badc65252adb73dbf7d2' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/payments/update.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11577060445b3374b1972d99-96818551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment' => 0,
    'id' => 0,
    'allow_save' => 0,
    'payment_processors' => 0,
    'processor' => 0,
    'templates' => 0,
    'full_path' => 0,
    'template' => 0,
    'usergroups' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'taxes' => 0,
    'tax' => 0,
    'hide_for_vendor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3374b19efb25_19101504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3374b19efb25_19101504')) {function content_5b3374b19efb25_19101504($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_in_array')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
fn_preload_lang_vars(array('general','configure','name','processor','offline','checkout','gateways','template','tt_views_payments_update_template','payment_category','payments_tab1','payments_tab2','payments_tab3','payment_category_note','usergroups','description','surcharge','surcharge_title','tt_views_payments_update_surcharge_title','taxes','tt_views_payments_update_taxes','payment_instructions','icon'));
?>
<?php if ($_smarty_tpl->tpl_vars['payment']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['payment']->value['payment_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable("0", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['payment']->value,"payments"), null, 0);?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="payments_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" enctype="multipart/form-data" class=" form-horizontal<?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>">
<input type="hidden" name="payment_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <li id="tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-js cm-ajax <?php if (!$_smarty_tpl->tpl_vars['payment']->value['processor_id']) {?>hidden<?php }?>"><a <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']) {?>href="<?php echo htmlspecialchars(fn_url("payments.processor?payment_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo $_smarty_tpl->__("configure");?>
</a></li>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:tabs_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:tabs_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:tabs_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</div>

<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <div id="content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <fieldset  data-ca-form-group="main">
        <div class="control-group" data-ca-form-group="name">
            <label for="elm_payment_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-required control-label"><?php echo $_smarty_tpl->__("name");?>
:</label>
            <div class="controls">
                <input id="elm_payment_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="text" name="payment_data[payment]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'ISO-8859-1');?>
">
            </div>
        </div>

        <div data-ca-form-group="company">
        <?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"payment_data[company_id]",'id'=>"payment_data_".((string)$_REQUEST['payment_id']),'selected'=>$_smarty_tpl->tpl_vars['payment']->value['company_id']), 0);?>

        <?php }?>
        </div>

        <div class="control-group" data-ca-form-group="processor">
            <label class="control-label" for="elm_payment_processor_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("processor");?>
:</label>
            <div class="controls">
                <select id="elm_payment_processor_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="payment_data[processor_id]" onchange="fn_switch_processor(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
, this.value);">
                    <option value=""><?php echo $_smarty_tpl->__("offline");?>
</option>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:processors_optgroups")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:processors_optgroups"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <optgroup label="<?php echo $_smarty_tpl->__("checkout");?>
">
                        <?php  $_smarty_tpl->tpl_vars["processor"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["processor"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_processors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["processor"]->key => $_smarty_tpl->tpl_vars["processor"]->value) {
$_smarty_tpl->tpl_vars["processor"]->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['processor']->value['type']=="C"||$_smarty_tpl->tpl_vars['processor']->value['type']=="B") {?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']==$_smarty_tpl->tpl_vars['processor']->value['processor_id']) {?>selected="selected"<?php }?> <?php if ($_smarty_tpl->tpl_vars['processor']->value['processor_status']=="D") {?>disabled="disabled"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                            <?php }?>
                        <?php } ?>
                    </optgroup>
                    <optgroup label="<?php echo $_smarty_tpl->__("gateways");?>
">
                        <?php  $_smarty_tpl->tpl_vars["processor"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["processor"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_processors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["processor"]->key => $_smarty_tpl->tpl_vars["processor"]->value) {
$_smarty_tpl->tpl_vars["processor"]->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['processor']->value['type']=="P") {?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']==$_smarty_tpl->tpl_vars['processor']->value['processor_id']) {?>selected="selected"<?php }?> <?php if ($_smarty_tpl->tpl_vars['processor']->value['processor_status']=="D") {?>disabled="disabled"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                            <?php }?>
                        <?php } ?>
                    </optgroup>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:processors_optgroups"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </select>
                
                <p id="elm_processor_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="description <?php if (!$_smarty_tpl->tpl_vars['payment_processors']->value[$_smarty_tpl->tpl_vars['payment']->value['processor_id']]['description']) {?>hidden<?php }?>"><br>
                    <small><?php echo $_smarty_tpl->tpl_vars['payment_processors']->value[$_smarty_tpl->tpl_vars['payment']->value['processor_id']]['description'];?>
</small>
                </p>
            </div>
        </div>

        <div class="control-group" data-ca-form-group="tpl">
            <label class="control-label" for="elm_payment_tpl_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("template");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_payments_update_template")), 0);?>
:</label>
            <div class="controls">
                <select id="elm_payment_tpl_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="payment_data[template]" <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']) {?>disabled="disabled"<?php }?>>
                    <?php  $_smarty_tpl->tpl_vars['full_path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['full_path']->_loop = false;
 $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['full_path']->key => $_smarty_tpl->tpl_vars['full_path']->value) {
$_smarty_tpl->tpl_vars['full_path']->_loop = true;
 $_smarty_tpl->tpl_vars['template']->value = $_smarty_tpl->tpl_vars['full_path']->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['full_path']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['payment']->value['template']==$_smarty_tpl->tpl_vars['full_path']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="control-group" data-ca-form-group="category">
            <label class="control-label" for="elm_payment_category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("payment_category");?>
:</label>
            <div class="controls">
                <select id="elm_payment_category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="payment_data[payment_category]">
                    <option value="tab1" <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_category']=="tab1") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("payments_tab1");?>
</option>
                    <option value="tab2" <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_category']=="tab2") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("payments_tab2");?>
</option>
                    <option value="tab3" <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_category']=="tab3") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("payments_tab3");?>
</option>
                </select>
                <p class="description">
                    <small><?php echo $_smarty_tpl->__("payment_category_note");?>
</small>
                </p>
            </div>
        </div>

        <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
            <div class="control-group" data-ca-form-group="usergroup">
                <label class="control-label"><?php echo $_smarty_tpl->__("usergroups");?>
:</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"elm_payment_usergroup_".((string)$_smarty_tpl->tpl_vars['id']->value),'name'=>"payment_data[usergroup_ids]",'usergroups'=>$_smarty_tpl->tpl_vars['usergroups']->value,'usergroup_ids'=>$_smarty_tpl->tpl_vars['payment']->value['usergroup_ids'],'list_mode'=>false), 0);?>

                </div>
            </div>
        <?php }?>

        <div class="control-group" data-ca-form-group="description">
            <label class="control-label" for="elm_payment_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
                <input id="elm_payment_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="text" name="payment_data[description]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
">
            </div>
        </div>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:update")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:update"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <div data-ca-form-group="update_divider"></div>

        <div class="control-group" data-ca-form-group="surcharge">
            <label class="control-label" for="elm_payment_surcharge_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("surcharge");?>
:</label>
                <div class="controls">
                    <input id="elm_payment_surcharge_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="text" name="payment_data[p_surcharge]" class="input-mini" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['p_surcharge'], ENT_QUOTES, 'ISO-8859-1');?>
" size="4"> % + <input type="text" name="payment_data[a_surcharge]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['a_surcharge'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-mini" size="4"> <?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</div>
        </div>

        <div class="control-group" data-ca-form-group="surcharge_title">
            <label class="control-label" for="elm_payment_surcharge_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("surcharge_title");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_payments_update_surcharge_title")), 0);?>
:</label>
            <div class="controls">
                <input id="elm_payment_surcharge_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="text" name="payment_data[surcharge_title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['surcharge_title'], ENT_QUOTES, 'ISO-8859-1');?>
">
            </div>
        </div>

        <div class="control-group" data-ca-form-group="taxes">
        <label class="control-label"><?php echo $_smarty_tpl->__("taxes");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_payments_update_taxes")), 0);?>
:</label>
            <div class="controls">
                    <?php  $_smarty_tpl->tpl_vars["tax"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tax"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tax"]->key => $_smarty_tpl->tpl_vars["tax"]->value) {
$_smarty_tpl->tpl_vars["tax"]->_loop = true;
?>
                        <label for="elm_payment_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="checkbox">
                            <input type="checkbox" name="payment_data[tax_ids][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" id="elm_payment_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['tax']->value['tax_id'],$_smarty_tpl->tpl_vars['payment']->value['tax_ids'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'ISO-8859-1');?>

                        </label>
                    <?php }
if (!$_smarty_tpl->tpl_vars["tax"]->_loop) {
?>
                        <div class="text-type-value">&mdash;</div>
                    <?php } ?>
            </div>
        </div>

        <div class="control-group" data-ca-form-group="instructions">
            <label class="control-label" for="elm_payment_instructions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("payment_instructions");?>
:</label>
            <div class="controls">
                <textarea id="elm_payment_instructions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="payment_data[instructions]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['instructions'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
            </div>
            
        </div>

        <div data-ca-form-group="status">
        <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"payment_data[status]",'id'=>"elm_payment_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['payment']->value), 0);?>

        <?php }?>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_name'=>"payment_data[localization]",'id'=>"elm_payment_localization_".((string)$_smarty_tpl->tpl_vars['id']->value),'data_from'=>$_smarty_tpl->tpl_vars['payment']->value['localization']), 0);?>


        <div class="control-group" data-ca-form-group="icon">
            <label class="control-label"><?php echo $_smarty_tpl->__("icon");?>
:</label>
            <div class="controls"><?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"payment_image",'image_key'=>$_smarty_tpl->tpl_vars['id']->value,'image_object_type'=>"payment",'image_pair'=>$_smarty_tpl->tpl_vars['payment']->value['icon'],'no_detailed'=>"Y",'hide_titles'=>"Y",'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>
</div>
        </div>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:properties")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </fieldset>
    <!--content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[payments.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    </div>
<?php }?>

</form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php }} ?>
