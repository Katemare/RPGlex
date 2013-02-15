<?php

    $id = '';
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    } else if (isset($_REQUEST['ids'])) {
        $id = $_REQUEST['ids'][0];
    }

    $record = $database->select_from_table(array('id', 'name', 'value'), 'settings', array('id' => $id));
    $record = $record[0];
    $TemplateEngine->assign('record', $record);
    $TemplateEngine->setTemplate('content', 'add_settings_content.tpl');

?>