<?php
session_start();
if (!isset($_SESSION["Email"])) {
  echo "<script>alert('Anda Harus Login Terlebih Dahulu!');</script>";
  echo "<script>window.location.href = 'index.php';</script>";
  exit;
}
?>


<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "pplgapp";

$device = $_POST["deviceoption"];
$alasan = $_POST["alasan"];
$tanggal = date('Y-m-d H:i:s');
$ID    = $_POST['IDdevice'];

$connection = mysqli_connect($server, $username, $password, $database); //start connection 

if ($connection == TRUE) // test connection
{
  echo "";
}



$ceknik    = mysqli_num_rows(mysqli_query($connection, "SELECT ID FROM pengembalian WHERE ID='$_POST[IDdevice]' AND device ='$_POST[deviceoption]'"));

if ($ceknik > 0) {
  // $_SESSION['pesan'] = "Oops! Duplikat input data ...";
  echo "<script>alert('Laptop Sudah Terpakai, Pilih Laptop Lain!');</script>";
  echo "<script>window.location.href = 'device/Lenovo.php';</script>";
  // header("location: dashboard.php");
} else {
  if (isset($_POST['submit']))  //test submit name in form
  {
    // declare parameter to initialized in text fild in form 
    // and those fild should appear in serve (apache mysql)
    $device = $_POST['deviceoption'];
    $alasan = $_POST['alasan'];
    $tanggal = date('Y-m-d H:i:s');
    $ID     = $_POST['IDdevice'];

    $query = "INSERT INTO pengembalian (ID, device, tanggal, alasan) VALUES ('$ID', '$device', '$tanggal', '$alasan')";
    $result = mysqli_query($connection, $query);

    if ($result == TRUE) {

      echo "";
    } else {
      echo "";
    }
  }
  mysqli_error($connection);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>succsess</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>



  <div class="modal-container">
    <div class="subs">
      <h2>PEMINJAMAN BERHASIL!</h2>
    </div>
    <div class="subs2">
      <p>Silahkan tunggu untuk diverifikasi oleh <br>admin. Lalu, ambil barang yang <br> diinginkan!</p>
    </div>
    <form action="return.php" method="post">
      <!-- <input type="hidden" name="kode" required="required" value="<?php echo $kodeBarang ?>" readonly> -->
      <button class="back" name="submit">
        <div class="icons">
          <i class="fa-solid fa-arrow-left"></i>
        </div>
      </button>
    </form>
  </div>

  <style>
    *,
    *:before,
    *:after {
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      background: #ccc;
      overflow: hidden;
    }

    .modal-container {
      margin: 60px auto;
      padding-top: 0px;
      position: relative;
      width: 160px;
      opacity: 1;
      background-color: #fff;
      max-width: 600px;
      width: 600px;
      height: 500px;
      padding: 10px 30px;
      position: fixed;
      left: calc(50% - 300px);
      top: 2%;
      border-radius: 4px;
      z-index: 999;
      pointer-events: auto;
      cursor: auto;
      visibility: visible;
      box-shadow: 0 3px 7px rgba(0, 0, 0, 0.6);
    }

    .subs {
      margin-top: 90px;
      text-align: center;
    }

    .subs h2 {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #576CBC;
      font-size: 30px;
    }

    .subs2 {
      text-align: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #576CBC;
      font-size: 20px;
    }

    .subs2 p {
      margin-top: 40px;
    }

    .back {
      margin-top: 100px;
      margin-left: 240px;
      height: 60px;
      width: 60px;
      background-color: transparent;
      border-radius: 50%;
      display: inline-block;
    }

    .icons {
      margin-left: 0px;
      margin-top: 6px;
      font-size: 40px;
    }
  </style>
</body>

</html>