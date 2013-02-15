<?php /* Smarty version Smarty-3.1.8, created on 2013-02-15 15:30:36
         compiled from "Y:/home/lex.rpground.test/www/frontend/templates\comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15553511e1c5cb8ced5-92780039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08aff1dbacb67a886bfdae4361568adc0287eab1' => 
    array (
      0 => 'Y:/home/lex.rpground.test/www/frontend/templates\\comments.tpl',
      1 => 1360863150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15553511e1c5cb8ced5-92780039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'comment' => 0,
    'term_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511e1c5cdc6012_95444420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e1c5cdc6012_95444420')) {function content_511e1c5cdc6012_95444420($_smarty_tpl) {?><table>
<tr><th>Comments</th></tr>
<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
<tr><td>-- <?php echo $_smarty_tpl->tpl_vars['comment']->value['text'];?>
</td></tr>
<?php } ?>
<tr><td>
    <input type="text" id='<?php echo $_smarty_tpl->tpl_vars['term_id']->value;?>
_newtext' />
    <input type="button" value="Add comment" onclick="add_comment(<?php echo $_smarty_tpl->tpl_vars['term_id']->value;?>
, $('#<?php echo $_smarty_tpl->tpl_vars['term_id']->value;?>
_newtext').val())" />
</td></tr>
</table>
<?php }} ?>