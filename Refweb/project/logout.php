<?php
session_start();
$lang = $_SESSION['lang'];
$mode = $_SESSION['mode'];
    session_unset();
    session_destroy();

    session_start();
    $_SESSION['lang'] = $lang;
    $_SESSION['mode'] = $mode;
    header("location:account.php" , true);

?>