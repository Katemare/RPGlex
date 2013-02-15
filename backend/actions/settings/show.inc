<?php

    $data = $database->get_records_with_pagination(
        array('id', 'name', 'value'),
        'settings',
        array(),
        '',
        @intval($_REQUEST['page'])
        ); 
    $TemplateEngine->assign('records', $data);    
    $TemplateEngine->setTemplate('content', 'settings_content.tpl');
    
?>