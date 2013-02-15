<?php
    
    $fields = array('url', 'title', 'content');
    $values = array();
    foreach($fields as $field) {
        if (!isset($_REQUEST[$field])) {
            change_location('/admin/static_pages/show.html');
        } else {      
            $values[$field] = $_REQUEST[$field];
        }
    }
    $database->save_record_into_table($values, 'static_pages', isset($_REQUEST['id']) ? $_REQUEST['id'] : '');
    change_location('/admin/static_pages/show.html');
?>