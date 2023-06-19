<?php
session_start();
if (isset($_SESSION["username"])) {
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <?php
    //koneksi ke database

    require('db.php');

    //memeriksa apakah form sudah disubmit
    if (isset($_REQUEST['username'])) {
        //mengambil nilai dari form
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // $create_datetime = date("Y-m-d H:i:s");

        //memeriksa apakah username sudah terdaftar di database
        $sql = "SELECT * FROM biodata1 WHERE username = '$username'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            //jika username sudah terdaftar, tampilkan pesan error
            echo "<div class='form'>
        <h3>Data Sudah Terdaftar.</h3><br/>
        <p class='link'>Klik Disini Untuk <a href='reg2.php'>Registrasi</a> Kembali.</p>
        </div>";
        } else {
            //jika username belum terdaftar, lakukan pendaftaran
            $sql =  "INSERT INTO biodata1(username, password)
        VALUES ('$username', '" . ($password) . "')";
            if (mysqli_query($con, $sql)) {
                echo "<div class='form'>
            <h3>Registrasi Berhasil.</h3><br/>
            <p class='link'>Klik Disini Untuk <a href='login.php'>Login</a></p>
            </div>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        //menutup koneksi ke database
        mysqli_close($con);
    } else {
    ?>
        <!-- Form pendaftaran -->
        <form class="form" method="post" action="">
            <h1 class="login-title">Registrasi</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" required><br>

            <input type="password" class="login-input" name="password" placeholder="Password"><br>
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link"><a href="index.php?page=login">Login Disini</a></p>
        </form>
    <?php
    }
    ?>
    <style>
        body {
            background: url('img/bg2.jpg');
        }
    </style>
</body>

</html>