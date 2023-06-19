<?php
session_start();
if (!isset($_SESSION["Email"])) {
  echo "<script>alert('Anda Harus Login Terlebih Dahulu!');</script>";
  echo "<script>window.location.href = 'index.php';</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Pengembalian Barang</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class="sidebar">
    <div class="profile">
      <img src="img/rpl.png">
    </div>
    <!-- Add more sidebar items here -->
    <div class="navigation">
      <a href="dashboard.php">
        <span class="navigation">
          <i class="fa-solid fa-house"></i>
          <span> &nbsp &nbsp UTAMA</span>
        </span>
      </a>
      <a href="device/Lenovo.php">
        <span class="navigation">
          <i class="fa-solid fa-laptop"></i>
          <span> &nbsp &nbspPEMINJAMAN</span>
        </span>
      </a>
      <a href="contact.php">
        <span class="navigation">
          <i class="fa-solid fa-phone-volume"></i>
          <span> &nbsp &nbsp CONTACT</span>
        </span>
      </a>
      <a href="return.php">
        <span class="navigation">
          <i class="fa-solid fa-person-walking-arrow-loop-left"></i>
          <span> &nbsp &nbspPENGEMBALIAN</span>
        </span>
      </a>
    </div>
  </div>

  <?php
  include('config.php');
  $no = 1;
  $sql = 'SELECT * FROM pengembalian ORDER BY ID';
  $query = mysqli_query($server, $sql);

  if (mysqli_num_rows($query) == 0) {
    $dispNone = "display:none";
    echo "";
    echo '<div class="h1php"><h1>Data Akan Tampil Disini<br>Jika Kamu Meminjam Sesuatu! </h1>
    <a class="button2" href="device/Lenovo.php">
      <span class="text">Pinjam Device</span></a>
    </div>';
  } else {
    echo "";
  }
  ?>


  <table class="styled-table" border=0 style="<?= $dispNone ?>">
    <thead>
      <tr>
        <th>No. Device</th>
        <th>Device</th>
        <th>Tanggal</th>
        <th>Alasan</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <?php
    include('config.php');
    $no = 1;
    $sql = 'SELECT * FROM pengembalian ORDER BY ID';
    $query = mysqli_query($server, $sql);

    if (mysqli_num_rows($query) > 0) {
      while ($row = mysqli_fetch_array($query)) {
        $device    = stripslashes($row['device']);
        $alasan   = stripslashes($row['alasan']);
        $tanggal  = stripslashes($row['tanggal']);
        $ID       = stripslashes($row['ID'])
    ?>
        <tbody>
          <tr>
            <td><?php echo $ID; ?></td>
            <td><?php echo $device; ?></td>
            <td><?php echo $tanggal; ?></td>
            <td><?php echo $alasan; ?></td>

            <td><a class="button" onclick="return confirm('Kembalikan Barang?')" href="hapus.php?id=<?php echo $row['alasan']; ?>">
                <span class="text">Kembalikan</span></a>
            </td>
          </tr>

          <!-- and so on... -->
        </tbody>
      <?php
      }
    } else {
      ?>
      <h1>No Data Found</h1>
    <?php } ?>
  </table>

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: #516eff;
    }

    .button {
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      color: white;
      background-color: #E21818;
      padding: 1em 2em;
      border: none;
      border-radius: .6rem;
      position: relative;
      cursor: pointer;
      overflow: hidden;
      transition: 0.6s ease-in;
    }

    .button2 {
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      font-size: 15px;
      left: 280px;
      top: 180px;
      color: white;
      background-color: #3E54AC;
      padding: 1em 2em;
      border: none;
      border-radius: .6rem;
      position: relative;
      cursor: pointer;
      overflow: hidden;
      transition: 0.6s ease-in;
    }

    .button2:hover {
      color: #fff;
      background-color: #539165;
      transition: 0.6s ease-in;
    }

    a {
      text-decoration: none;
    }

    .tabletext {
      color: #fff
    }

    .tabletext:hover {
      transform: 1s ease-in;
      color: #032535;
    }

    .h1php {
      margin-left: 380px;
      margin-top: 120px;
      font-size: 30px;
      max-width: 750px;
      max-height: 600px;
      height: 400px;
      background: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.35);
    }

    .h1php h1 {
      position: relative;
      text-align: center;
      top: 140px;
      font-size: 30px;
    }

    .styled-table {
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      font-family: sans-serif;
      width: 700px;
      max-width: 740px;
      min-height: 420px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.35);
      position: relative;
      left: 400px;
      bottom: -80px;
      text-align: center;
      border-radius: 5px;
      border-color: #032535;
    }

    .styled-table thead tr {
      background-color: #4942E4;
      color: #4942E4;
      text-align: left;
    }

    .styled-table th,
    .styled-table td {
      padding: 12px 15px;
      text-align: center;

    }

    .styled-table td {
      background: #537FE7;
      color: #fff;
      font-weight: bold;
    }

    styled-table tbody tr {
      border-bottom: 1px solid #4942E4;

    }

    .styled-table tbody tr.active-row {
      font-weight: bold;
      color: #032535;
    }

    #bannerimage {
      width: 100%;
      background-image: url('img/Login-bg.png');
      height: 205px;
      background-position: center;
    }


    .sidebar {
      background-color: white;
      color: #fff;
      width: 190px;
      height: 100vh;
      padding: 20px;
      position: fixed;
      top: 0;
      left: 0;
      box-shadow: 0px 0px 5px black;
    }

    .sidebar a {
      color: #516eff;
      text-decoration: none;
      display: block;
      margin-bottom: 10px;
    }

    .sidebar span:hover {
      color: #516eff;
    }

    .profile {
      margin-left: 15px;
      margin-top: 30px;
      height: 125px;
      width: 50px;
    }

    .profile img {
      height: 150px;
      width: 150px;
    }

    .navigation {
      line-height: 5px;
      margin-top: 30px;
      display: inline-block;
      color: grey;
    }

    table {
      justify-content: center;
    }

    th {
      color: white;
    }
  </style>

</body>

</html>