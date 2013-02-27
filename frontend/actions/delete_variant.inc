<?php
    var_dump($_REQUEST);
    $sql = "DELETE FROM translate_variants WHERE id=".escape($_REQUEST['id']);
    $database->exec_query($sql);
?>