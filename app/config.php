<?php
$host="localhost";
$user="root";
$password="";
$db="pplgapp";

$server = mysqli_connect($host,$user,$password,$db);
if (!$server){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>