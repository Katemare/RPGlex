<?php /* Smarty version Smarty-3.1.8, created on 2013-02-15 15:28:00
         compiled from "Y:/home/lex.rpground.test/www/frontend/templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11803511e1bc0d276d0-52443143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '639cec56fcf322d9c8ec83e737afb88f9bed3883' => 
    array (
      0 => 'Y:/home/lex.rpground.test/www/frontend/templates\\main.tpl',
      1 => 1360772918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11803511e1bc0d276d0-52443143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'header' => 0,
    'left_bar' => 0,
    'content' => 0,
    'right_bar' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511e1bc113cd36_86095771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e1bc113cd36_86095771')) {function content_511e1bc113cd36_86095771($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['head']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div id="main">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['left_bar']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['right_bar']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

</body>
</html><?php }} ?>