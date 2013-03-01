<?php
    
    if ($users->isLogged()) {
        if (isset($_REQUEST['save_submit']) && $_REQUEST['password'] == $_REQUEST['password_confirm']) {
            $users->saveUser($users->id(), $users->username(), $_REQUEST['password'], 'frontend/');
            change_location('/');
        } else {
            $TemplateEngine->setTemplate('content', 'profile.tpl');
        }         
    }    

?>