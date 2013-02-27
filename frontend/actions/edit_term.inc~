<?php

if (isset($_REQUEST['edit_term_submit'])) {
    $database->save_record_into_table(
                array (
                    'english' => $_REQUEST['english'],
                    'russian' => $_REQUEST['russian'],
                    'page'    => $_REQUEST['page'],
                    'category_id' => $_REQUEST['current_category']
                    ),
                'terms',
                $_REQUEST['term_id']
                );
        $id = $_REQUEST['term_id'];
        $database->exec_query('DELETE FROM term_fields WHERE term_id='.$_REQUEST['term_id']);
        foreach($_REQUEST['fields'] as $field_id => $value) {
            $database->insert_into_table( 'term_fields',
                array('term_id', 'field_id', 'value'),
                array($id, $field_id, $value)
                );
        }
}
if (isset($_REQUEST['current_category'])) {
    change_location('/?category='.$_REQUEST['current_category']);
} else {
    change_location('/');
}
?>