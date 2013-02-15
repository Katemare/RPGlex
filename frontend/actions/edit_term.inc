<?php

if (isset($_REQUEST['edit_term_submit'])) {
    $database->save_record_into_table(
                array (
                    'english' => $_REQUEST['english'],
                    'russian' => $_REQUEST['russian'],
                    'category_id' => $_REQUEST['current_category']
                    ),
                'terms',
                $_REQUEST['term_id']
                );
}
change_location('/?category='.$_REQUEST['current_category']);

?>