<?php
    $record = array();
    if (isset($_REQUEST['name']) && isset($_REQUEST['value'])) {
        $record['name'] = $_REQUEST['name'];
        $record['value'] = $_REQUEST['value'];
    }
    $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
    $database->save_record_into_table($record, 'settings', $id);
    change_location("/admin/settings/show.html");
?>