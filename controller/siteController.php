<?php
    $isLoggedin = false;
    ini_set('session.cookie_httponly',true);

    session_start();
    $stdId = null;

    if(isset($_SESSION['ID']) && !empty($_SESSION['ID'])) {
        $isLoggedin = true;
        $stdId = $_SESSION['ID'];
    }

?>