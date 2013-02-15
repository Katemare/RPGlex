<?php /* Smarty version Smarty-3.1.8, created on 2013-02-14 21:17:30
         compiled from "/home/files/myprojects/gurpsterms/frontend/templates/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1097605065511bdea8dbd6f4-41612364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bff30c36026d33accfe547d419248933731059fd' => 
    array (
      0 => '/home/files/myprojects/gurpsterms/frontend/templates/head.tpl',
      1 => 1360868419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1097605065511bdea8dbd6f4-41612364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511bdea8dc6273_52375103',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511bdea8dc6273_52375103')) {function content_511bdea8dc6273_52375103($_smarty_tpl) {?><head>
    <?php if (isset($_smarty_tpl->tpl_vars['page']->value)){?>
        <title><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</title>
    <?php }else{ ?>
        <title>Gurps terms tables</title>    
    <?php }?>
    <script type="text/javascript" src="/frontend/templates/js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="/frontend/templates/js/main.js"></script>
</head><?php }} ?>