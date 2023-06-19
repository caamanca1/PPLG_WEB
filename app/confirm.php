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
  <title>PROSES</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>


  <div class="modal-container">
    <input id="modal-toggle" type="checkbox">
    <label class="modal-backdrop" for="modal-toggle"></label>
    <div class="back">
      <a href="../app/dashboard.php"><i class="fa-solid fa-backward"></i></a>
    </div>
    <div class="modal-content">
      <h2 class="confirm">KONFIRMASI PEMINJAMAN</h2>
      <hr border="2px" />
    </div>


    <form action="succsess.php" method="post" id="formdevice">
      <div class="form-group">
        <div class="modal-content">

          <select class="subsform" name="deviceoption" id="deviceoption" form="formdevice" required placeholder="Pilih Device">
            <option value="Lenovo">Lenovo</option>
            <option value="Acer">Acer</option>
            <option value="Hp">Hp</option>
          </select><span class="bintang"> &nbsp *</span><span class="seldevice">Pilih Device</span>
          <br><br>

          <select class="subsform" name="IDdevice" id="IDdevice" form="formdevice" required placeholder="No. Device">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select><span class="bintang"> &nbsp *</span><span class="seldevice">No. Device</span>
          <p class="subs">
            <br>
            <br> Tanggal : <?php echo date('d-m-Y'); ?>
          </p>
          <div class="icons">
            <i class="fa-solid fa-house-laptop"></i>
          </div>
          <div class="subs2">
            <h3>Keperluan : </h3>
          </div>
          <div class="psubs">
            <p>*Max 50 karakter</p>
          </div>
        </div>
        <textarea name="alasan" class="form-control" name="alasan" id="alasan" rows="7" max-character="50" required placeholder="tulis disini ..."></textarea>
        <button class="modal-content-btn" for="modal-toggle" name="submit">Submit</button>
      </div>
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

    .seldevice {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      opacity: 0.5;
    }

    .bintang {
      color: red;
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
      height: 550px;
      padding: 10px 30px;
      position: fixed;
      left: calc(50% - 300px);
      top: -3%;
      border-radius: 4px;
      z-index: 999;
      pointer-events: auto;
      cursor: auto;
      visibility: visible;
      box-shadow: 0 3px 7px rgba(0, 0, 0, 0.6);
    }

    .modal-container .modal-btn {
      display: block;
      margin: 0 auto;
      color: #fff;
      width: 160px;
      height: 50px;
      line-height: 50px;
      background: #446CB3;
      font-size: 22px;
      border: 0;
      border-radius: 3px;
      cursor: pointer;
      text-align: center;
      box-shadow: 0 5px 5px -5px #333;
      transition: background 0.3s ease-in;
    }

    .modal-container .modal-btn:hover {
      background: #365690;
    }

    .modal-container .modal-close {
      color: #aaa;
      position: absolute;
      right: 5px;
      top: 5px;
      padding-top: 3px;
      background: #fff;
      font-size: 16px;
      width: 25px;
      height: 25px;
      font-weight: bold;
      text-align: center;
      cursor: pointer;
    }

    .modal-container .modal-close:hover {
      color: #333;
    }

    .modal-container .modal-content-btn {
      position: absolute;
      text-align: center;
      cursor: pointer;
      bottom: 20px;
      right: 470px;
      background: #fff;
      color: #446CB3;
      width: 100px;
      border-radius: 2px;
      font-size: 13px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      height: 32px;
      padding-top: 2px;
      font-weight: bold;
      transition: .5s ease-in;
    }

    .modal-container .modal-content-btn:hover {
      color: #fff;
      background: #365690;
    }

    .modal-container #modal-toggle {
      display: none;
    }

    h2 {
      color: #576CBC;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Sans Unicode', Geneva, Verdana;
      margin-top: 20px;
    }

    .subs {
      margin-left: 120px;
      text-decoration: none;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      color: #576CBC;
      line-height: 15px;
    }

    .icons {
      font-size: 70px;
      position: relative;
      left: 5px;
      bottom: 90px;
      color: #576CBC;
    }

    .subs2 {
      margin-top: -110px;
      text-decoration: none;
      font-family: Arial, sans-serif;
      color: #576CBC;
      font-size: 25px;
    }

    .psubs {
      margin-top: -25px;
      text-decoration: none;
      font-family: Arial, sans-serif;
      color: #576CBC;
      font-style: italic;
    }

    .form-control {
      width: 540px;
      margin-bottom: 25px;
      height: 140px;
      border-radius: 5px;
      box-shadow: 0 3px 7px rgba(0, 0, 0, 0.6);
    }

    .back a {
      color: #576CBC;
      margin-left: 2px;
      text-decoration: none;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      transition: 1 ease-in;
    }

    .back {
      font-size: 25px;
      transition: 1 ease-in;
    }

    .back a:hover {
      color: deeppink;
    }

    .subsform {
      margin-left: 120px;
      text-decoration: none;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      color: #576CBC;
      font-size: 20px;

    }
  </style>
</body>

</html>