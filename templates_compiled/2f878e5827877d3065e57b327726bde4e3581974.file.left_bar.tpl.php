<?php /* Smarty version Smarty-3.1.8, created on 2013-02-15 15:28:01
         compiled from "Y:/home/lex.rpground.test/www/frontend/templates\left_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5366511e1bc13b37d0-89343608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f878e5827877d3065e57b327726bde4e3581974' => 
    array (
      0 => 'Y:/home/lex.rpground.test/www/frontend/templates\\left_bar.tpl',
      1 => 1360865094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5366511e1bc13b37d0-89343608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'current_category' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511e1bc14c90e0_76956528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e1bc14c90e0_76956528')) {function content_511e1bc14c90e0_76956528($_smarty_tpl) {?><div id="category_links">
    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
        <span class="category_link"> 
        <?php if (isset($_smarty_tpl->tpl_vars['current_category']->value)&&$_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['current_category']->value){?> <b> <?php }?>
            <a href="/?category=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
        <?php if (isset($_smarty_tpl->tpl_vars['current_category']->value)&&$_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['current_category']->value){?> </b> <?php }?>
        </span>
    <?php } ?>
    <form action="add_category" method="post">
        <input type="text" name="text" />
        <input type="submit" name="add_category_submit" value="Add category" />
    </form>
</div><?php }} ?>