<?php

    $sql = 'UPDATE terms SET `russian`=\''.$_REQUEST['text'].'\' WHERE id='.$_REQUEST['id'];
    $database->exec_query($sql);

?>