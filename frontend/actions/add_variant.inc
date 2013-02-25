<?php
    $database->insert_into_table('translate_variants', array('term_id', 'value'), 
                                 array($_REQUEST['term_id'], $_REQUEST['text']));
?>