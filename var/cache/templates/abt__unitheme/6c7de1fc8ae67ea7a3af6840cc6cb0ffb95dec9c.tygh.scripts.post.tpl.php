<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:22
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/ecl_tabbed_blocks/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11636370975b3372425ff411-26380400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7de1fc8ae67ea7a3af6840cc6cb0ffb95dec9c' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/ecl_tabbed_blocks/hooks/index/scripts.post.tpl',
      1 => 1502761960,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11636370975b3372425ff411-26380400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337242611787_83695914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337242611787_83695914')) {function content_5b337242611787_83695914($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[
(function(_, $) {
    <?php if (!$_REQUEST['init_context']) {?>
        $(document).ready(function(){
            var tabsBlocks = {
                container: null,
                navi: null,
                lis: [],
                blocks: [],
                init: function (obj) {
                    var self = this;

                    this.container = obj;
                    this.navi = $('ul:first', this.container);
                    var lis = $('li', this.navi).toArray();
                    var is_first = true;

                    for (i in lis) {
                        var block_id = lis[i].className.match(/cm-block-index-([\w]+)?/gi);

                        if ($('.cm-tab-block.' + block_id).length) {
                            this.lis[block_id] = $(lis[i]);
                            this.blocks[block_id] = $('.cm-tab-block.' + block_id, this.container);
                            if (is_first) {
                                this.lis[block_id].addClass('active');
                                is_first = false;
                            } else {
                                this.blocks[block_id].addClass('hidden');
                            }
                            $(this.lis[block_id]).on('click', function () {
                                var block_id = this.className.match(/cm-block-index-([\w]+)?/gi);
                                self.switchBlock(block_id);
                            });
                        } else {
                            $(lis[i]).remove();
                        }
                    }
                },
                switchBlock: function (indexBlock) {
                    $(this.blocks[indexBlock]).removeClass('hidden');

                    for (i in this.lis) {
                        if (indexBlock == i) {
                            $(this.blocks[i]).removeClass('hidden');
                            $(this.lis[i]).addClass('active');
                        } else {
                            $(this.blocks[i]).addClass('hidden');
                            $(this.lis[i]).removeClass('active');
                        }
                    }
                }
            };
            $('.cm-tabs-blocks').each(function () {
                var newObject = jQuery.extend(true, {}, tabsBlocks);
                newObject.init($(this));
            });
        });
    <?php }?>
}(Tygh, Tygh.$));
//]]>
<?php echo '</script'; ?>
><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ecl_tabbed_blocks/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ecl_tabbed_blocks/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[
(function(_, $) {
    <?php if (!$_REQUEST['init_context']) {?>
        $(document).ready(function(){
            var tabsBlocks = {
                container: null,
                navi: null,
                lis: [],
                blocks: [],
                init: function (obj) {
                    var self = this;

                    this.container = obj;
                    this.navi = $('ul:first', this.container);
                    var lis = $('li', this.navi).toArray();
                    var is_first = true;

                    for (i in lis) {
                        var block_id = lis[i].className.match(/cm-block-index-([\w]+)?/gi);

                        if ($('.cm-tab-block.' + block_id).length) {
                            this.lis[block_id] = $(lis[i]);
                            this.blocks[block_id] = $('.cm-tab-block.' + block_id, this.container);
                            if (is_first) {
                                this.lis[block_id].addClass('active');
                                is_first = false;
                            } else {
                                this.blocks[block_id].addClass('hidden');
                            }
                            $(this.lis[block_id]).on('click', function () {
                                var block_id = this.className.match(/cm-block-index-([\w]+)?/gi);
                                self.switchBlock(block_id);
                            });
                        } else {
                            $(lis[i]).remove();
                        }
                    }
                },
                switchBlock: function (indexBlock) {
                    $(this.blocks[indexBlock]).removeClass('hidden');

                    for (i in this.lis) {
                        if (indexBlock == i) {
                            $(this.blocks[i]).removeClass('hidden');
                            $(this.lis[i]).addClass('active');
                        } else {
                            $(this.blocks[i]).addClass('hidden');
                            $(this.lis[i]).removeClass('active');
                        }
                    }
                }
            };
            $('.cm-tabs-blocks').each(function () {
                var newObject = jQuery.extend(true, {}, tabsBlocks);
                newObject.init($(this));
            });
        });
    <?php }?>
}(Tygh, Tygh.$));
//]]>
<?php echo '</script'; ?>
><?php }?><?php }} ?>
