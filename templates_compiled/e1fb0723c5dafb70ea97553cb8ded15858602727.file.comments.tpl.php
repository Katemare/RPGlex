<?php /* Smarty version Smarty-3.1.8, created on 2013-02-14 21:32:38
         compiled from "/home/files/myprojects/gurpsterms/frontend/templates/comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179398500511d38b640d538-03408789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1fb0723c5dafb70ea97553cb8ded15858602727' => 
    array (
      0 => '/home/files/myprojects/gurpsterms/frontend/templates/comments.tpl',
      1 => 1360870350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179398500511d38b640d538-03408789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511d38b6435a84_73603814',
  'variables' => 
  array (
    'comments' => 0,
    'comment' => 0,
    'term_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511d38b6435a84_73603814')) {function content_511d38b6435a84_73603814($_smarty_tpl) {?><table>
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