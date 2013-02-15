<?php


    if (isset($_REQUEST['Submit'])) { //handle the form
        if (!$users->login($_REQUEST['login'], $_REQUEST['password']) ) {
            $TemplateEngine->assign('error', 'User name or password is incorrect');
        }
    }
    
    if ($users->isLogged()) {
        change_location('/');
    }

    $TemplateEngine->setUniqueTemplate('login.tpl');

?>