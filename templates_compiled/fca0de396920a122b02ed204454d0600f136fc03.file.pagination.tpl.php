<?php /* Smarty version Smarty-3.1.8, created on 2013-02-13 20:45:17
         compiled from "/home/files/myprojects/gurpsterms/backend/templates/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296506353511bdf3d270ff1-27418385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca0de396920a122b02ed204454d0600f136fc03' => 
    array (
      0 => '/home/files/myprojects/gurpsterms/backend/templates/pagination.tpl',
      1 => 1360780118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296506353511bdf3d270ff1-27418385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'records' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511bdf3d2a1451_32023543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511bdf3d2a1451_32023543')) {function content_511bdf3d2a1451_32023543($_smarty_tpl) {?><div class="pagination">
                <div class="select-items">
                    <form method="post" action="">
                        <label>Visible row count:</label>
                        <select onchange="this.form.submit();" name="ipp">
                            <option value="2">2</option>
                            <option value="10">10</option>
                            <option selected="selected" value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="500">500</option>
                            <option value="all">Show All</option>
                        </select>
                    </form>
                </div>
                <ul>
                    <?php if ($_smarty_tpl->tpl_vars['records']->value['pagination']['current_page']==0){?>
                        <li><span class="disabled">First</span></li>
                        <li><span class="disabled">Prev</span></li>
                    <?php }else{ ?>
                        <li><a href="?page=0">First</a></li>
                        <li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['records']->value['pagination']['current_page']-1;?>
">Prev</a></li>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['page'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['page']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['name'] = 'page';
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['records']->value['pagination']['page_count']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total']);
?>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['page']['index']==$_smarty_tpl->tpl_vars['records']->value['pagination']['current_page']){?>
                            <li><span><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['page']['index']+1;?>
</span></li>
                        <?php }else{ ?>
                            <li><a href="?page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['page']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['page']['index']+1;?>
</a></li>
                        <?php }?>
                    <?php endfor; endif; ?>
<!--                    <li><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>-->
                    <?php if ($_smarty_tpl->tpl_vars['records']->value['pagination']['current_page']==$_smarty_tpl->tpl_vars['records']->value['pagination']['page_count']-1){?>
                        <li><span class="disabled">Next</span></li>
                        <li><span class="disabled">Last</span></li>
                    <?php }else{ ?>
                        <li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['records']->value['pagination']['page_count']+1;?>
">Next</a></li>
                        <li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['records']->value['pagination']['page_count']-1;?>
">Last</a></li>
                    <?php }?>
                </ul>
                <p>Page: <?php echo $_smarty_tpl->tpl_vars['records']->value['pagination']['current_page']+1;?>
 of <?php echo $_smarty_tpl->tpl_vars['records']->value['pagination']['page_count'];?>
 Total: <?php echo $_smarty_tpl->tpl_vars['records']->value['pagination']['item_count'];?>
 records</p>
            </div><?php }} ?>