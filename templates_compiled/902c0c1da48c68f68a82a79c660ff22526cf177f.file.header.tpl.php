<?php /* Smarty version Smarty-3.1.8, created on 2013-02-13 20:45:14
         compiled from "/home/files/myprojects/gurpsterms/backend/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2144314524511bdf3abf9605-83587776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902c0c1da48c68f68a82a79c660ff22526cf177f' => 
    array (
      0 => '/home/files/myprojects/gurpsterms/backend/templates/header.tpl',
      1 => 1360780118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2144314524511bdf3abf9605-83587776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_data' => 0,
    'menuitem' => 0,
    'menuname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511bdf3ac12b58_36199214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511bdf3ac12b58_36199214')) {function content_511bdf3ac12b58_36199214($_smarty_tpl) {?>        <div id="header">        
            <div class="header-container">
                <ul>
                <?php  $_smarty_tpl->tpl_vars['menuitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuitem']->_loop = false;
 $_smarty_tpl->tpl_vars['menuname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menuitem']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->key => $_smarty_tpl->tpl_vars['menuitem']->value){
$_smarty_tpl->tpl_vars['menuitem']->_loop = true;
 $_smarty_tpl->tpl_vars['menuname']->value = $_smarty_tpl->tpl_vars['menuitem']->key;
 $_smarty_tpl->tpl_vars['menuitem']->index++;
 $_smarty_tpl->tpl_vars['menuitem']->first = $_smarty_tpl->tpl_vars['menuitem']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['menuloop']['first'] = $_smarty_tpl->tpl_vars['menuitem']->first;
?>
                    <?php if (!isset($_smarty_tpl->tpl_vars['menuitem']) || !is_array($_smarty_tpl->tpl_vars['menuitem']->value)) $_smarty_tpl->createLocalArrayVariable('menuitem');
if ($_smarty_tpl->tpl_vars['menuitem']->value['type'] = 'static'){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['menuname']->value;?>
">
                                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['menuloop']['first']){?><span><?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['menuname']->value;?>

                                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['menuloop']['first']){?></span><?php }?>
                            </a>
                        </li>
                    <?php }else{ ?>
                    <?php }?>
                <?php } ?>
                </ul>
                <!--<ul>-->
                   <!-- <li><a href="#" title="Users" class="selected"><span>Users</span></a></li>--> <!-- tag span needed only for the first list item --> 
<!--                    <li><a href="#" title="Static pages">Static pages</a></li>
                    <li><a href="#" title="Catalog">Catalog</a>
                        <ul class="submenu">
                            <li><a href="#" title="Donec in viverra">Donec in viverra</a></li>
                            <li><a href="#" title="Vestibulum nunc eros">Vestibulum nunc eros</a></li>
                            <li><a href="#" title="Vivamus quis libero">Vivamus quis libero</a></li>
                            <li><a href="#" title="Cum sociis natoque">Cum sociis natoque</a></li>
                            <li><a href="#" title="Morbi in sapien">Morbi in sapien</a></li>
                            <li><a href="#" title="Class aptent taciti sociosqu">Class aptent taciti sociosqu</a></li>
                            <li class="last"><a href="#" title="Quisque a est leo">Quisque a est leo</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Orders">Orders</a></li>
                    <li><a href="#" title="Email marketing">Email marketing</a></li>
                    <li><a href="#" title="Settings ">Settings </a></li>
                    <li><a href="#" title="Users">Users</a></li>
                    <li><a href="#" title="Static pages">Static pages</a></li>
                    <li><a href="#" title="Email marketing">Email marketing</a>
                        <ul class="submenu">
                            <li><a href="#" title="Donec in viverra">Donec in viverra</a></li>
                            <li><a href="#" title="Vestibulum nunc eros">Vestibulum nunc eros</a></li>
                            <li><a href="#" title="Vivamus quis libero">Vivamus quis libero</a></li>
                            <li><a href="#" title="Cum sociis natoque">Cum sociis natoque</a></li>
                            <li><a href="#" title="Morbi in sapien">Morbi in sapien</a></li>
                            <li><a href="#" title="Class aptent taciti sociosqu">Class aptent taciti sociosqu</a></li>
                            <li class="last"><a href="#" title="Quisque a est leo">Quisque a est leo</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Settings ">Settings </a></li>
                </ul>-->
                <ul class="logout">
                    <li><a href="/admin/logout.html">Logout</a></li>
                </ul>
            </div>
        </div><?php }} ?>