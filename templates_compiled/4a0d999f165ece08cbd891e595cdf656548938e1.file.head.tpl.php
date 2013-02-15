<?php /* Smarty version Smarty-3.1.8, created on 2013-02-15 15:28:01
         compiled from "Y:/home/lex.rpground.test/www/frontend/templates\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3000511e1bc12401b1-69157273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a0d999f165ece08cbd891e595cdf656548938e1' => 
    array (
      0 => 'Y:/home/lex.rpground.test/www/frontend/templates\\head.tpl',
      1 => 1360861220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3000511e1bc12401b1-69157273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511e1bc1367501_91551386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e1bc1367501_91551386')) {function content_511e1bc1367501_91551386($_smarty_tpl) {?><head>
    <?php if (isset($_smarty_tpl->tpl_vars['page']->value)){?>
        <title><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</title>
    <?php }else{ ?>
        <title>Gurps terms tables</title>    
    <?php }?>
    <script type="text/javascript" src="/frontend/templates/js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="/frontend/templates/js/main.js"></script>
</head><?php }} ?>