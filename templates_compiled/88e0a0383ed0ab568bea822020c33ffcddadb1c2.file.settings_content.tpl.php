<?php /* Smarty version Smarty-3.1.8, created on 2013-02-13 20:45:18
         compiled from "/home/files/myprojects/gurpsterms/backend/templates/settings_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2034100214511bdf3e53b5b3-13098103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e0a0383ed0ab568bea822020c33ffcddadb1c2' => 
    array (
      0 => '/home/files/myprojects/gurpsterms/backend/templates/settings_content.tpl',
      1 => 1360780118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2034100214511bdf3e53b5b3-13098103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'records' => 0,
    'record' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511bdf3e57e217_62357636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511bdf3e57e217_62357636')) {function content_511bdf3e57e217_62357636($_smarty_tpl) {?><div id="content-page">
    <div class="title-container">
        <div class="title-content-inner">
            <div class="title-content">
                <ul>
                    <li>Settings</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="area">
        <div class="area-content">
            <div class="actions">
<!--                         <form action="" method="post"> -->
                    <div class="btn-base auto-width">
                        <a href="/admin/settings/add.html" title="New"><span>New</span></a>
                    </div>
                    <div class="btn-base">
                        <a href="javascript:submit_to('ids_form', '/admin/settings/edit.html')" title="Edit"><span>Edit</span></a>
                    </div>
                    <div class="btn-base">
                        <a href="javascript:submit_to('ids_form', '/admin/settings/delete.html')" title="Delete"><span>Delete</span></a>
                    </div>                            
<!--                         </form> -->
            </div>
            
            <table cellpadding="0" cellspacing="0" class="listing">
            
                <tr>
                    <th>&nbsp;</th>
                    <th><a href="#" class="sort up" title="Name">Name</a></th>
                    <th><a href="#" class="sort up" title="Value">Value</a></th>
                    <th>Actions</th>
                </tr>
                
                <form action="" method="post" id="filter_form">
                <tr class="filters">
                    <td>&nbsp;</td>
                    <td><input type="text" value="Login"/></td>
                    <td><input type="text" value="Email"/></td>

                    <td class="actions">
                        <a href="#" title="Apply" class="apply ico">Apply</a>
                        <a href="#" title="Reset" class="clear ico">Reset</a>
                    </td>
                </tr>
                </form>
                
                <form action="" method="post" id="ids_form">
                <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value['records']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
                    <tr>
                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['record']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['field']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->index++;
 $_smarty_tpl->tpl_vars['field']->first = $_smarty_tpl->tpl_vars['field']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["record"]['first'] = $_smarty_tpl->tpl_vars['field']->first;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['record']['first']){?>
                                <td><span class="niceCheck"><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
"/></span></td>
                            <?php }else{ ?>
                                <td><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</td>
                            <?php }?>
                        <?php } ?>
                        <td class="actions">
                            <a href="/admin/settings/edit.html?id=<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
" title="Edit" class="edit ico">Edit</a>
                            <a href="/admin/settings/delete.html?id=<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
" title="Delete" class="delete ico" onclick="showpp(); return false;">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </form>
            </table>
            
            <?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            
        </div>
        
    </div>
</div><?php }} ?>