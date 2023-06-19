    <?php
    session_start();
    if (isset($_SESSION["username"])) {
        header("Location: admin.php");
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>LoginPage</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body>

        <?php
        require('db.php');
        session_start();
        include("auth_session.php");
        // When form submitted, check and create user session.
        if (isset($_POST['username'])) {
            $username = stripslashes($_REQUEST['username']);    // removes backslashes
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            // Check user is exist in the database
            $query    = "SELECT * FROM `biodata1` WHERE username='$username'
        AND password='" . ($password) . "'";
            $result = mysqli_query($con, $query);
            // or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['username'] = $username;
                // Redirect to user dashboard page
                header("Location: admin.php");
            } else {
                echo "<div class='form'>
            <h3>Username Tidak Valid.</h3><br/>
            <p class='link'>Klik Disini Untuk <a href='index.php?page=login'>Login</a> Kembali.</p>
            </div>";
            }

            if ($rows == 1) {
                $_SESSION['password'] = $password;
                // Redirect to user dashboard page
                header("Location: admin.php");
            } else {
                echo "<div class='form'>
            <h3>Password Tidak Valid.</h3><br/>
            <p class='link'>Klik Disini Untuk <a href='index.php?page=login'>Login</a> Kembali.</p>
            </div>";
            }
        } else {
        ?>
            <form class="form" method="post" name="login">
                <h1 class="login-title">Hallo! Silahkan Login</h1>
                <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" />
                <input type="password" class="login-input" name="password" placeholder="Password" />
                <input type="submit" value="Login" name="submit" class="login-button" />
                <p class="link">Belum Memiliki Akun?<a href="index.php?page=registration">Registrasi</a></p>
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