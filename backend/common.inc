<?php
/**
 * actions common for all backend pages,
 * for example check if the user logged in
 */
    if (!$users->isLogged() && !preg_match("/login$/", $path)) {
        change_location("/login.html");
    }
    
    //read and prepare menu
    $menu = parse_ini_file(PATH_ROOT.'conf/admin_menu.conf', true);
    $TemplateEngine->assign('menu_data', $menu);
?>