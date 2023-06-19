<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: index.php?page=login");
        exit();
    }
    if (isset($_SESSION["username"])) {
        header("Location: admin.php");
        exit();
    }
    session_destroy();
?>