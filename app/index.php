  <?php

  session_start();

  if (isset($_SESSION["Email"])) {
    echo "<script>window.location.href = 'dashboard.php';</script>";
    exit;
  }


  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      echo "<script>alert('Login failed. Cek Email / Password Dengan Benar!.');</script>";
    } else if ($_GET['pesan'] == "logout") {
      echo "<script>alert('Logout succsess. ');</script>";
    } else if ($_GET['pesan'] == "belum_login") {
      echo "<script>alert('Login Untuk Mengakses Halaman Admin.');</script>";
    }
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <div class="judul">
      <h1>WeLend</h1>
      <p>Peminjaman Menjadi Lebih Mudah.</p>
    </div>
    <div class="container">
      <div class="right">
        <form action="validation.php" method="post">
          <h1>Silahkan Login <br>Terlebih Dahulu</h1><br><br>
          <label for="username">Email</label>
          <input type="text" id="Email" name="Email" required placeholder="Contoh@gmail.com">

          <label for="password">Password</label>
          <input type="password" id="Password" name="Password" required placeholder="******">

          <input type="submit" name="submit" value="Masuk">

          <br><br>
          <p>Belum Memiliki Akun? <a href="register.php">Register</a></p>
          <br><hr>
          <div class="cs">
            <br>
            <p>Hubungi CS bila bermasalah <a href="https://instagram.com/muhammadriesky5_">CS</a></p>
          </div>
        </form>
      </div>
    </div>

    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script>
      $(window).on("load", function() {
        $(".loader-wrapper").fadeOut("slow");
      });
    </script>

  </body>

  </html>