<?php

    if ($users->isLogged()) {
        $sql = "DELETE FROM category_fields WHERE id=".escape($_REQUEST['id']);
        $database->exec_query($sql);
        change_location('/edit_categories');
    } else {
        chanhe_location('/');
    }

?>