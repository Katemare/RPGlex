<?php

    $record['username'] = '';
    $record['password'] = '';
    $record['password_confirm'] = '';
    $record['role'] = '';

    $TemplateEngine->assign('record', $record);
    $TemplateEngine->setTemplate('content', 'edit_user_content.tpl');

?>