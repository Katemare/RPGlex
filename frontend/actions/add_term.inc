<?php

if (isset($_REQUEST['add_term_submit'])) {
    $database->insert_into_table( 'terms',
        array('english', 'russian', 'category_id'),
        array($_REQUEST['english'], $_REQUEST['russian'], $_REQUEST['current_category'])
        );
}
change_location('/?category='.$_REQUEST['current_category']);

?>