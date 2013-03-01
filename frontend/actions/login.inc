<?php
    
    if (isset($_REQUEST['login_submit'])) {        
        $users->login($_REQUEST['username'], $_REQUEST['password']);
        change_location('/');
    } else {
        $TemplateEngine->setTemplate('content', 'login.tpl');
    }
?>