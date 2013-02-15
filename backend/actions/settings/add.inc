<?php

    $record['name'] = '';
    $record['value'] = '';

    $TemplateEngine->assign('record', $record);
    $TemplateEngine->setTemplate('content', 'add_settings_content.tpl');

?>