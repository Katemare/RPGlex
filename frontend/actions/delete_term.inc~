<?php

    $database->exec_query('DELETE FROM terms WHERE id='.$_REQUEST['id']);
    $database->exec_query('DELETE FROM term_fields WHERE term_id='.$_REQUEST['id']);
    if (isset($_REQUEST['current_category'])) {
        change_location('/?category='.$_REQUEST['current_category']);
    } else {
        change_location('/');
    }

?>