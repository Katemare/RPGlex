<?php

    function change_location($uri)
    {   
        if (ENTRANCE_POINT == 'backend/' && strncmp('/admin', $uri, 6)) {
            $uri = "/admin".$uri;
        }
        header('location: '.$uri);
        exit();
    }

?>