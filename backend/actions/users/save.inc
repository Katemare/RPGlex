<?php
//     $record = array();
//     if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
//         $record['username'] = $_REQUEST['name'];
//         if ($_REQUEST['password'] == $_REQUEST['password_confirm']) {
//             $record['password'] = $_REQUEST['password'];
//         } else {
//             change_location("/admin/users/show.html");
//         }
//         $record['role'] = $_REQUEST['role'];
//     }
//     $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
//     $database->save_record_into_table($record, 'settings', $id);

//     var_dump($_REQUEST);

    if (isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['password_confirm']) 
        && isset($_REQUEST['role']) && $_REQUEST['password'] == $_REQUEST['password_confirm']) {
            $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
            $users->saveUser($id, $_REQUEST['username'], $_REQUEST['password'], $_REQUEST['role']);
    }
    change_location("/admin/users/show.html");
?>