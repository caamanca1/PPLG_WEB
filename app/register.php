<?php
session_start();
if (isset($_SESSION["Email"])) {
  echo "<script>window.location.href = 'dashboard.php';</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Register</title>
</head>

<body>

  <div class="container">
    <div class="right">
      <form action="process-register.php" method="post">
        <h1>Silahkan Masukan Data <br>Untuk Register</h1><br><br>

        <label for="username">Email</label>
        <input type="text" id="Email" name="Email" required placeholder="Contoh@gmail.com">

        <label for="password">Password</label>
        <input type="password" id="Password" name="Password" required placeholder="******">

        <label for="password">Username</label>
        <input type="text" id="Username" name="Username" required placeholder="Contoh123">

        <label for="password">Nis</label>
        <input type="number" id="Nis" name="Nis" required placeholder="122xxxxx">

        <label for="password">Rombel</label>
        <input type="text" id="Rombel" name="Rombel" required placeholder="Rombel ">

        <label for="password">Rayon</label>
        <input type="text" id="Rayon" name="Rayon" required placeholder="Rayon">

        <input type="submit" name="submit" value="Register">

        <br><br>
        <p>Sudah Memiliki Akun? <a href="index.php">Login</a></p>
        <br>
        <hr>
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

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,500&display=swap');

    body {
      background-image: url('img/Login-bg.png');
      background-repeat: no-repeat;
      background-size: 1320px 650px;
      /* background: #f2f2f2; */
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      display: flex;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background: white;
      border-radius: 8px;
      overflow: scroll;
      max-width: 600px;
      max-height: 600px;
    }

    .left {
      flex: 1;
      background: #007bff;
      padding: 50px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: white;
    }

    .right {
      flex: 1;
      padding: 50px;
    }


    .judul {
      margin-top: 0;
      margin-bottom: 300px;
      margin-right: 380px;
      color: rgb(255, 255, 255);
      text-shadow: 0px 0px 10px;
    }

    .judul h1 {
      font-size: 80px;
      font-family: 'nunito' sans-serif;
    }

    .judul p {
      font-size: 20px;
      margin-left: 10px;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: inline-block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="password"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
      background-color: #ccc;
      box-shadow: 0px 0px 1px;
    }

    input[type="submit"] {
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .links {
      margin-top: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .links a {
      color: #007bff;
      text-decoration: none;
    }

    .cs {
      color: #d6d6d6;
    }

    .cs a {
      text-decoration: none;
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
  </style>
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