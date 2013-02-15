<?php

    $record = array('url' => '', 'title' => '', 'content' => '');
    $TemplateEngine->assign('record', $record);
    $TemplateEngine->setTemplate('content', 'static_page_edit.tpl');
?>