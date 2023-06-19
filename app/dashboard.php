<?php
session_start();
if (!isset($_SESSION["Email"])) {
  echo "<script>alert('Anda Harus Login Terlebih Dahulu!');</script>";
  echo "<script>window.location.href = 'index.php';</script>";
  echo "<script>alert('Anda Harus Login Terlebih Dahulu!');</script>";
  echo "<script>window.location.href = 'index.php';</script>";
  exit;
}
?>
<?php
$server = mysqli_connect("localhost", "root", "", "pplgapp");

if ($server) {
  echo "";
} else {
  echo "Gagal";
}



$sql    = ("SELECT * FROM user WHERE Email='$_SESSION[Email]'");
$result = mysqli_query($server, $sql);

// $results = mysqli_query($server, "SELECT * FROM device INNER JOIN gadget ON device.ID = gadget.ID");
?>

<?php


if (mysqli_num_rows($result) > 0) {

  while ($tampil = mysqli_fetch_assoc($result)) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <title>Dashboard</title>
      <div id="bannerimage">
        <div class="content">

          <!-- Add your website content here -->
          <h3>SELAMAT DATANG</h3>
          <h1><?php echo $_SESSION['Username']; ?>!</h1>
          <h4><?php echo $_SESSION['Rayon'], " | " . $_SESSION['Rombel'], " | " . $_SESSION['Nis']; ?></h4>
        </div>
      </div>
    <?php
  }
} else {
    ?>
    <h1>No Data Found</h1>
  <?php } ?>

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
          <a href="logout.php" class="logout-button"><i class="fas fa-sign-out-alt"></i> Logout</a>

        </div>
      </div>
      <div class="subs">
        <h1>Pinjam apa hari ini?</h1>
        <hr class="line1">
      </div>

      <div class="card">
        <a href="device/Lenovo.php"><img src="img/lenovo.png" alt="Image" style="width: 150%; height: auto;"></a>
        <span class="texthead">Laptop <br> Lenovo</span>
        <!-- <span class="subtitle2">Available <span class="value-card"> 6 </span></span>
      <span class="subtitle">In - Use <span class="use-card"> 0 </span></span> -->
      </div>

      <div class="card">
        <a href="device/Acer.php"><img src="img/acer.png" alt="Image" style="width: 150%; height: auto;">
          <span class="texthead">Laptop <br> Acer</span>
          <!-- <span class="subtitle2">Available <span class="value-card"> 0 </span></span>
      <span class="subtitle">In - Use <span class="use-card"> 0 </span></span> -->
      </div>

      <div class="card">
        <a href="device/Hp.php"><img src="img/Cardhp.png" alt="Image" style="width: 150%; height: auto;">
          <span class="textheadhp">Handphone</span>
          <!-- <span class="subtitle2">Available <span class="value-card"> 0 </span></span>
      <span class="subtitle">In - Use <span class="use-card"> 0 </span></span> -->
      </div>

      <div class="card">
        <a href="device/Lenovo.php"><img src="img/acer.png" alt="Image" style="width: 150%; height: auto; filter: brightness(50%);">
          <span class="textheadhp">Lainnya</span>
      </div>

      <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
      </div>

      <script>
        $(window).on("load", function() {
          $(".loader-wrapper").fadeOut("slow");
        });
      </script>




      <style>
        body {
          margin: 0;
          padding: 0;
          font-family: Arial, sans-serif;
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
          color: #fff;
          text-decoration: none;
          display: block;
          margin-bottom: 10px;
        }

        .sidebar span:hover {
          color: #516eff;
        }

        .content {
          margin-left: 300px;
          padding: 20px;
          line-height: 10px;
          color: #fff;
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

        .content h3 {
          font-family: Arial, Helvetica, sans-serif;
        }

        .content h1 {
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          font-size: 50px;
        }

        .content h4 {
          font-weight: 400;
        }

        .subs {
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          margin-top: 10px;
          margin-left: 300px;
          opacity: 0.6;
        }

        hr.line1 {
          border: 2px solid #606C5D;
          width: 90%;
          margin-right: 195px;
          border-radius: 5px;
        }

        .card {
          display: inline-block;
          left: 270px;
          margin-top: 40px;
          margin-left: 30px;
          width: 200px;
          height: 280px;
          background-color: #f0f0f0;
          border-radius: 10px;
          padding: 20px;
          box-sizing: border-box;
          position: relative;
          overflow: hidden;
          transition: transform 0.3s;
          box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);

        }

        .card:hover {
          transform: scale(1.05);

        }

        /* .card::after {
      content: "Available";
      position: absolute;
      bottom: 10px;
      right: 10px;
      background-color: green;
      color: white;
      padding: 5px;
      border-radius: 5px;
      opacity: 0;
      transition: opacity 0.3s;
    } */

        .card:hover::after {
          opacity: 1;
        }

        .subtitle {
          position: absolute;
          bottom: 10px;
          left: 10px;
          font-size: 15px;
          color: white;
          font-weight: bold;
        }

        .subtitle2 {
          position: absolute;
          bottom: 30px;
          left: 10px;
          font-size: 20px;
          color: white;
          font-weight: bold;
        }

        .card img {
          position: relative;
          left: -35px;
          bottom: 40px;
        }

        .texthead {
          position: absolute;
          bottom: 215px;
          left: 20px;
          font-size: 25px;
          color: white;
          font-weight: bold;
          text-shadow: 0px 0px 3.3px black;
        }

        .textheadhp {
          position: absolute;
          bottom: 240px;
          left: 20px;
          font-size: 25px;
          color: white;
          font-weight: bold;
          text-shadow: 0px 0px 3.3px black;
        }

        .loader-wrapper {
          width: 100%;
          height: 100%;
          position: absolute;
          top: 0;
          left: 0;
          background-color: #242f3f;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .loader {
          display: inline-block;
          width: 30px;
          height: 30px;
          position: relative;
          border: 4px solid #Fff;
          animation: loader 3s infinite ease;
        }

        .loader-inner {
          vertical-align: top;
          display: inline-block;
          width: 100%;
          background-color: #fff;
          animation: loader-inner 2s infinite ease-in;
        }

        .logout-button {
          margin-left: 10px;
          margin-top: 180px;
          background-color: #4942E4;
          color: black;
          border: none;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          border-radius: 5px;
          transition: 1s ease;
        }

        .logout-button:hover {
          background-color: blue;
          color: white;
        }

        .logout-button i {
          margin-right: 5px;
        }

        @keyframes loader {
          0% {
            transform: rotate(0deg);
          }

          25% {
            transform: rotate(180deg);
          }

          50% {
            transform: rotate(180deg);
          }

          75% {
            transform: rotate(360deg);
          }

          100% {
            transform: rotate(360deg);
          }
        }

        @keyframes loader-inner {
          0% {
            height: 0%;
          }

          25% {
            height: 0%;
          }

          50% {
            height: 100%;
          }

          75% {
            height: 100%;
          }

          100% {
            height: 0%;
          }
        }

        .value-card {
          margin-left: 70px;
        }

        .use-card {
          margin-left: 106px;
        }
      </style>

    </body>

    </html>