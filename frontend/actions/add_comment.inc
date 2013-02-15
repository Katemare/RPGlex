<?php

    $database->insert_into_table('comments', array('term_id', 'text'), 
                                 array($_REQUEST['term_id'], $_REQUEST['text']));

?>