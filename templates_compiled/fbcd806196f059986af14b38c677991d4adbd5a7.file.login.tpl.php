<?php /* Smarty version Smarty-3.1.8, created on 2013-02-13 20:43:02
         compiled from "/home/files/myprojects/gurpsterms/backend/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1150371477511bdeb6197b66-31178620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbcd806196f059986af14b38c677991d4adbd5a7' => 
    array (
      0 => '/home/files/myprojects/gurpsterms/backend/templates/login.tpl',
      1 => 1360780118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1150371477511bdeb6197b66-31178620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511bdeb61b7024_16592715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511bdeb61b7024_16592715')) {function content_511bdeb61b7024_16592715($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Administration panel</title>
        <link href="/backend/templates/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link media="screen" type="text/css" rel="stylesheet" href="/backend/templates/css/main-style.css" />
        <link media="screen" type="text/css" rel="stylesheet" href="/backend/templates/css/custom-style.css" />
</head>
<script type="text/javascript">

function submit() {
    document.getElementById("f").submit();
}

</script>

<body>
        <div id="main">
                <div id="content-login">
                        <div class="title-container">
                                <div class="title-content-inner">
                                        <div class="title-content">
                                                <ul>
                                                        <li>Login</li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                        
                        <div class="area">
                                <div class="lform">
                        
                                        <div class="messages">
                        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
                            <div class="message error">
                                <span class="ico error">&nbsp;</span>
                                <div class="messages-text">
                                    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                                </div>
                                <a href="#" title="Close" class="close">Close</a>
                            </div>
                        <?php }?>
                    </div>
                                        <form method="post" id="f">
                                                <label>Login:</label>
                                                <input type="text" name="login" value="" />
                                                <label>Password:</label>
                                                <input type="password" name="password" value=""/>
                                                <input type="hidden" name="Submit" value="submit"/>
                                                <div class="btn-base">
                                                        <a href="javascript:submit();" ><span>Login</span></a>
                                                </div>
                                        </form>
                                </div>
                                
                        </div>
                </div>
        <div class="area-bottom lbottom">
            <div class="area-bottom-inner">
                <div class="area-bottom-main">
                </div>
            </div>
        </div>
        </div>
</body>
</html>
<?php }} ?>