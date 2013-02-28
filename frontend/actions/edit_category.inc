<?php
    
    if (isset($_REQUEST['edit_category_submit'])) {
        $database->save_record_into_table(array('name' => $_REQUEST['name'], 'description' => $_REQUEST['description']), 'term_categories', $_REQUEST['id']);
    }
   change_location('/edit_categories');
?>