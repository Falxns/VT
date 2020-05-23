<?php
    date_default_timezone_set('Europe/Minsk');
    session_start();
    $buff = array();
    $buff[] = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $buff[] = date('H:i:s');
    if (empty($_SESSION['data'])) {
        $arr = array();
        $arr[] = $buff;
    } else {
        $arr = $_SESSION['data'];
        $arr[] = $buff;
    }
    $_SESSION['data'] = $arr; 
    session_write_close();
?>