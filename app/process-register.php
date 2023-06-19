<?php
include "config.php";
$cek_user = mysqli_num_rows(mysqli_query($server, "SELECT * FROM user WHERE Email='$_POST[Email]' OR Username='$_POST[Username]' OR Nis = '$_POST[Nis]'"));
if ($cek_user > 0) {
  echo '<script language="javascript">
              alert ("Username / Email / Nis Sudah Ada Yang Menggunakan");
              window.location="register.php";
              </script>';
  exit();
} else {
  // $Email    = $_POST['Email'];
  // $Password = $_POST['Password'];
  // $Username = $_POST['Username'];
  // $Nis      = $_POST['Nis'];
  // $Rombel   = $_POST['Rombel'];
  // $Rayon    = $_POST['Rayon'];
  // mysqli_query($server, "INSERT INTO user (Email, Username, Nis, Rombel, Rayon, Password) VALUES ('$Email', '$Username', '$Nis', '$Rombel', '$Rayon', '$Password'");
  $Email = stripslashes($_REQUEST['Email']);
  $Email = mysqli_real_escape_string($server, $Email);
  $Password = stripslashes($_REQUEST['Password']);
  $Password = mysqli_real_escape_string($server, $Password);
  $Username = stripslashes($_REQUEST['Username']);
  $Username = mysqli_real_escape_string($server, $Username);
  $Nis = stripslashes($_REQUEST['Nis']);
  $Nis = mysqli_real_escape_string($server, $Nis);
  $Rombel = stripslashes($_REQUEST['Rombel']);
  $Rombel = mysqli_real_escape_string($server, $Rombel);
  $Rayon = stripslashes($_REQUEST['Rayon']);
  $Rayon = mysqli_real_escape_string($server, $Rayon);

  $sql =  "INSERT INTO user(Email, Password, Username, Nis, Rombel, Rayon )
        VALUES ('$Email', '$Password', '$Username','$Nis','$Rombel','$Rayon')";
  if (mysqli_query($server, $sql)) {
    echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="index.php";
              </script>';
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

//menutup koneksi ke database
mysqli_close($server);
?>