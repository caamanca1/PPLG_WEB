<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include "config.php";
 
// menangkap data yang dikirim dari form
$email = $_POST['Email'];
$password = $_POST['Password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($server,"SELECT * FROM user where Email='$email' and Password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$row = mysqli_fetch_assoc($data);
	$_SESSION['Username'] = $row['Username'];
	$_SESSION['Rayon'] = $row['Rayon'];
	$_SESSION['Rombel'] = $row['Rombel'];
	$_SESSION['Nis'] = $row['Nis'];
	$_SESSION['Email'] = $email;
	$_SESSION['status'] = "login";
	echo "<script>alert('Login successful! Redirecting to the dashboard...'); window.location.href = 'dashboard.php';</script>";
  echo "<script>window.location.href = 'dashboard.php';</script>";
}else{
	echo "<script>alert('Login gagal!, Perhatikan Email & Password');</script>";
	echo "<script>window.location.href = 'index.php';</script>";
}
?>

<!-- <?php
session_start();

include "config.php";

$email = $_POST["Email"];
$password = md5($_POST["password"]);

$sql = "SELECT * FROM user WHERE Email='".$email."' and Password='".$password."' limit 1";
$hasil = mysqli_query ($server,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		// $row = mysqli_fetch_assoc($hasil);
		$row = mysqli_fetch_array($hasil);
		$_SESSION["Rayon"]=$row["Rayon"];
		$_SESSION["Username"]=$row["Username"];
		$_SESSION["Nama"]=$row["Nama"];
		$_SESSION["Email"]=$row["Email"];
		$_SESSION["Rombel"]=$row["Rombel"];
		$_SESSION["Nis"]=$row["Nis"];
		echo "<script>alert('Login successful! Redirecting to the dashboard...'); window.location.href = 'dashboard.php';</script>";
    echo "<script>window.location.href = 'dashboard.php';</script>";
		
	}else {
		echo "<script>alert('Login gagal!, Perhatikan Email & Password');</script>";
		echo "<script>window.location.href = 'dashboard.php';</script>";
	}
?> -->