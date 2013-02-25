<?php

// var_dump($_REQUEST);

if (isset($_REQUEST['add_term_submit'])) {
    $database->insert_into_table( 'terms',
        array('english', 'russian', 'page', 'category_id'),
        array($_REQUEST['english'], $_REQUEST['russian'], $_REQUEST['page'], $_REQUEST['current_category'])
        );
    if (isset($_REQUEST['fields'])) {
        $id = $database->last_insert_id();
        foreach($_REQUEST['fields'] as $field_id => $value) {
            $database->insert_into_table( 'term_fields',
                array('term_id', 'field_id', 'value'),
                array($id, $field_id, $value)
                );
        }
    }
}
if (isset($_REQUEST['current_category'])) {
    change_location('/?category='.$_REQUEST['current_category']);
} else {
    change_location('/');
}

?>