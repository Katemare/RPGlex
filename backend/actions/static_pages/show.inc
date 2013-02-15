<?php

    $data = $database->get_records_with_pagination(
        array('id', 'url', 'title'),
        'static_pages',
        array(),
        '',
        @intval($_REQUEST['page'])
        ); 
    $TemplateEngine->assign('records', $data);    
    $TemplateEngine->setTemplate('content', 'static_pages_list.tpl');

?>