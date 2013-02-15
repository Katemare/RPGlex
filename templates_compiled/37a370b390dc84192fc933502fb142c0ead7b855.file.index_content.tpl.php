<?php /* Smarty version Smarty-3.1.8, created on 2013-02-15 15:28:01
         compiled from "Y:/home/lex.rpground.test/www/frontend/templates\index_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4343511e1bc14ecc32-27211607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37a370b390dc84192fc933502fb142c0ead7b855' => 
    array (
      0 => 'Y:/home/lex.rpground.test/www/frontend/templates\\index_content.tpl',
      1 => 1360865724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4343511e1bc14ecc32-27211607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'terms' => 0,
    'term' => 0,
    'current_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511e1bc1656669_21315781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e1bc1656669_21315781')) {function content_511e1bc1656669_21315781($_smarty_tpl) {?><div>
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