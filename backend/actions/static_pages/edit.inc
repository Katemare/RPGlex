<?php

    $id = '';
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    } else if (isset($_REQUEST['ids'])) {
        $id = $_REQUEST['ids'][0];
    }
    if (!empty($id)) {
        $record = $database->select_from_table(array('id', 'url', 'title', 'content'), 'static_pages', array('id' => $id));
        $record = $record[0];
        $TemplateEngine->assign('record', $record);
        $TemplateEngine->setTemplate('content', 'static_page_edit.tpl');
    } else {
        change_location('/admin/static_pages/show.html');
    }

?>