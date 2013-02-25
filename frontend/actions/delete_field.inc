<?php

    $sql = "DELETE FROM category_fields WHERE id=".$_REQUEST['id'];
    $database->exec_query($sql);
    change_location('/edit_categories');

?>