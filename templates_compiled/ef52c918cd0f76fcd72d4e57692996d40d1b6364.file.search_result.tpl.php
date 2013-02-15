<?php /* Smarty version Smarty-3.1.8, created on 2013-02-14 22:03:19
         compiled from "/home/files/myprojects/gurpsterms/frontend/templates/search_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:968609437511d2dd5329fb7-18960155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef52c918cd0f76fcd72d4e57692996d40d1b6364' => 
    array (
      0 => '/home/files/myprojects/gurpsterms/frontend/templates/search_result.tpl',
      1 => 1360872196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '968609437511d2dd5329fb7-18960155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511d2dd5365d95_59598139',
  'variables' => 
  array (
    'search_result' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511d2dd5365d95_59598139')) {function content_511d2dd5365d95_59598139($_smarty_tpl) {?><div>
    <div>Search result:</div>
    <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
        <div>
            <span> <b>Term:</b> <?php echo $_smarty_tpl->tpl_vars['result']->value['english'];?>
 </span>
            <span> <b>Translation:</b> <?php echo $_smarty_tpl->tpl_vars['result']->value['russian'];?>
 </span>
            <span> <b>Category:</b> <?php echo $_smarty_tpl->tpl_vars['result']->value['category'];?>
 </span>
        </div>
    <?php } ?>
</div><?php }} ?>