<?php
    if ($users->isLogged()) {
        $sql = 'UPDATE terms SET `russian`=\''.escape($_REQUEST['text']).'\' WHERE id='.escape($_REQUEST['id']);
        $database->exec_query($sql);
    }

?>