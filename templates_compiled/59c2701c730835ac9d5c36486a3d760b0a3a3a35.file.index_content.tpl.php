<?php /* Smarty version Smarty-3.1.8, created on 2013-02-14 22:15:26
         compiled from "/home/files/myprojects/gurpsterms/frontend/templates/index_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1771121753511bdea8dc93f7-17224692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59c2701c730835ac9d5c36486a3d760b0a3a3a35' => 
    array (
      0 => '/home/files/myprojects/gurpsterms/frontend/templates/index_content.tpl',
      1 => 1360872923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1771121753511bdea8dc93f7-17224692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511bdea8dc9c57_84686740',
  'variables' => 
  array (
    'terms' => 0,
    'term' => 0,
    'current_category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511bdea8dc9c57_84686740')) {function content_511bdea8dc9c57_84686740($_smarty_tpl) {?><div>
<table border="1">
    <tr><th>English</th><th>Russian</th></tr>
    <?php  $_smarty_tpl->tpl_vars['term'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['term']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['terms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['term']->key => $_smarty_tpl->tpl_vars['term']->value){
$_smarty_tpl->tpl_vars['term']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['term']->value['english'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['term']->value['russian'];?>
</td>
            <td> <input type="button" value="Edit term" onclick="$('#edit_term_<?php echo $_smarty_tpl->tpl_vars['term']->value['id'];?>
').css('display', 'table-row');" />
            <td> <input type="button" value="Show comments" onclick="get_comments( <?php echo $_smarty_tpl->tpl_vars['term']->value['id'];?>
, 'comments_container_<?php echo $_smarty_tpl->tpl_vars['term']->value['id'];?>
')" />
            <td> <input type="button" value="Hide comments" onclick="$('#comments_container_<?php echo $_smarty_tpl->tpl_vars['term']->value['id'];?>
').html('');" />
        </tr>
        <tr style="display:none" id="edit_term_<?php echo $_smarty_tpl->tpl_vars['term']->value['id'];?>
">
            <td colspan=5>
                <form action="/edit_term" method="post">
                    <label> Eglish: <input type="text" name="english" value="<?php echo $_smarty_tpl->tpl_vars['term']->value['english'];?>
"/> </label>
                    <Label> Russian: <input type="text" name="russian" value="<?php echo $_smarty_tpl->tpl_vars['term']->value['russian'];?>
"/> </label>
                    <input type="hidden" name="current_category" value="<?php echo $_smarty_tpl->tpl_vars['current_category']->value;?>
" />                
                    <input type="hidden" name="term_id" value="<?php echo $_smarty_tpl->tpl_vars['term']->value['id'];?>
" />      
                    <input type="submit" value="Save" name="edit_term_submit" />
                </form>
            </td>
        </tr>
        <tr>
            <td colspan=5><div id="comments_container_<?php echo $_smarty_tpl->tpl_vars['term']->value['id'];?>
" /></td>
        </tr>
    <?php } ?>
</table>

<form action="add_term" method="post">
    <label> Eglish: <input type="text" name="english"/> </label>
    <Label> Russian: <input type="text" name="russian"/> </label>
    <input type="hidden" name="current_category" value="<?php echo $_smarty_tpl->tpl_vars['current_category']->value;?>
" />
    <input type="submit" name="add_term_submit" value="Add new term" /> 
</form>
</div><?php }} ?>