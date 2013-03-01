<?php

    if ($users->isLogged()) {
        $database->exec_query('DELETE FROM terms WHERE id='.escape($_REQUEST['id']));
        $database->exec_query('DELETE FROM term_fields WHERE term_id='.escape($_REQUEST['id']));
    }
    if (isset($_REQUEST['current_category'])) {
        change_location('/?category='.$_REQUEST['current_category']);
    } else {
        change_location('/');
    }

?>