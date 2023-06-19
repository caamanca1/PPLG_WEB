<?php
session_start();

$_SESSION["Rayon"];
$_SESSION["Username"];
$_SESSION["Nama"];
$_SESSION["Email"];
$_SESSION["Nis"];
$_SESSION["Rombel"];

unset($_SESSION['Rayon']);
unset($_SESSION['Username']);
unset($_SESSION['Nama']);
unset($_SESSION['Email']);
unset($_SESSION['Nis']);
unset($_SESSION['Rombel']);

session_unset();
session_destroy();
header('Location:index.php');

?>