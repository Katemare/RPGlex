<?php

    if (isset($_REQUEST['add_field_submit']) && $users->isLogged()) {
        $database->save_record_into_table(array('name' => $_REQUEST['name'],
                                                'category_id' => $_REQUEST['category_id']),
                                          'category_fields');
    }
    change_location('/edit_categories');

?>