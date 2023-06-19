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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Dashboard</title>

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-image: url('img/Login-bg.png');
      background-size: 1600px 1000px;
      background-position: 200px -210px;

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

    .logout {
      line-height: 5px;
      margin-top: 100px;
      display: inline-block;
      color: grey;
    }

    .container-card {
      margin-left: 300px;
      margin-top: 100px;
      width: 900px;
      height: 450px;
      border-radius: 5px;
      background: white;
      box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
      backdrop-filter: blur(10px);
      background-color: rgba(255, 255, 255, 0.5);
      padding: 10px;
    }

    .container-card h1 {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      position: relative;
      left: 50px;
      bottom: -10px;
      font-size: 40px;
      color: #4D6D8A;
    }

    .container-card h3 {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      position: relative;
      left: 52px;
      bottom: -15px;
      color: #4D6D8A;
    }

    hr.bold-line {
      border: 1.5px solid #4D6D8A;
      width: 58%;
      margin-right: 325px;
      border-radius: 5px;
      margin-top: 20px;
    }

    .telephone-card {
      margin-left: 50px;
      margin-top: 50px;
      background: white;
      border-radius: 5px;
      width: 450px;
      height: 100px;
    }

    .telephone-card h2 {
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 20px;
      position: relative;
      left: 30px;
      bottom: -15px;
    }

    .number-card {
      position: relative;
      background: white;
      margin-left: 30px;
      box-shadow: 0px 2px 2px rgba(129, 124, 124, 1);
      bottom: -10px;
      width: 150px;
      height: 30px;
    }

    .number-card p {
      font-family: 'Times New Roman', Times, serif;
      position: relative;
      bottom: -5px;
      text-align: center;
      font-weight: lighter;
      opacity: 0.4;
    }

    .hubungi {
      position: relative;
      background: #373B61;
      margin-left: 180px;
      box-shadow: 0px 2px 2px rgba(129, 124, 124, 1);
      bottom: 19px;
      width: 150px;
      height: 30px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-weight: bold;
      color: white;
      font-size: 15px;
      transition: 1s ease;

    }

    .hubungi:hover {
      box-shadow: 0px 0px 10px black;
      /* transform: scale(1.05); */

    }

    .hubungi a {
      text-decoration: none;
      position: relative;
      left: 35px;
      bottom: -5px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-weight: bold;
      color: white;
      font-size: 15px;
    }

    .imgorang {
      position: relative;
      left: 600px;
      bottom: 400px;
      width: 20px;
      height: 20px;

    }

    .cs {
      color: #373B61;
    }

    .sidebar span:active {
      color: #516eff;
    }
  </style>

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

  <div class="container-card">
    <h1>Kontak <span class="cs">CS</span> Untuk Informasi <br> Lebih Lanjut <br></h1>
    <hr class="bold-line">
    <h3>Bila Memiliki Masalah, Keluhan, <br> Pertanyaan, Silahkan Hubungi <br> Nomer Berikut. </h3>
    <div class="telephone-card">
      <h2>Hubungi CS</h2>
      <div class="number-card">
        <p>@muhammadriesky5_</p>
      </div>
      <div class="hubungi">
        <a href="https://instagram.com/muhammadriesky5_?igshid=MzNlNGNkZWQ4Mg==">HUBUNGI</a>
      </div>
    </div>
    <div class="imgorang">
      <img src="img/Logo-orang.png">
    </div>
  </div>

</body>

</html>