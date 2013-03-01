<?php

    $data = $database->get_records_with_pagination(
        array('id', 'username', 'role'),
        'users',
        array(),
        '',
        @intval($_REQUEST['page'])
        ); 
    $TemplateEngine->assign('records', $data);    
    $TemplateEngine->setTemplate('content', 'users_content.tpl');
    
?>