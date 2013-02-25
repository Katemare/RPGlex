<?php

    if (isset($_REQUEST['add_category_submit'])) {
        $value = array();
        $value[] = $_REQUEST['text'];
        $database->insert_into_table('term_categories', array('name'), $value);
    }
    change_location('/edit_categories');
?>