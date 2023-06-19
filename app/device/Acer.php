<?php
session_start();
if (!isset($_SESSION["Email"])) {
    echo "<script>alert('Anda Harus Login Terlebih Dahulu!');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit;
}
?>

<?php
// https://www.malasngoding.com

// menghubungkan dengan koneksi database
include '../config.php';
// mengambil data barang
$data_barang = mysqli_query($server, "SELECT * FROM pengembalian");
// menghitung data barang
$jumlah_barang = mysqli_num_rows($data_barang);

//jumlah

$jumlah = 6;
$avail = $jumlah - $jumlah_barang;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Peminjaman / Pengembalian</title>
</head>

<body>

    <!-- <div class="side-menu">
        <div class="brand-name">
            <img src="img/User-icon.png" alt="">
        </div>
        <ul>
            <li><i class="fa-solid fa-house"><a href="dashboard.php">UTAMA</a></i></li>
            <li><i class="fa-solid fa-tablet"></i> PENGEMBALIAN</li>
            <li><i class="fa-solid fa-phone"></i> CONTACT</li>
        </ul>
    </div> -->
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="brand">
                    <h1>ACER</h1>
                </div>
                <div class="sidebar">
                    <div class="profile">
                        <img src="../img/rpl.png">
                    </div>
                    <!-- Add more sidebar items here -->
                    <div class="navigation">
                        <a href="../dashboard.php">
                            <span class="navigation">
                                <i class="fa-solid fa-house"></i>
                                <span> &nbsp &nbsp UTAMA</span>
                            </span>
                        </a>
                        <a href="#">
                            <span class="navigation">
                                <i class="fa-solid fa-laptop"></i>
                                <span> &nbsp &nbspPEMINJAMAN</span>
                            </span>
                        </a>
                        <a href="../contact.php">
                            <span class="navigation">
                                <i class="fa-solid fa-phone-volume"></i>
                                <span> &nbsp &nbsp CONTACT</span>
                            </span>
                        </a>
                        <a href="../return.php">
                            <span class="navigation">
                                <i class="fa-solid fa-person-walking-arrow-loop-left"></i>
                                <span> &nbsp &nbspPENGEMBALIAN</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="user">
                    <p class="btn"><span><?php echo $jumlah_barang;  ?></span><br>In - Use</p>
                    <p class="btn2"><span><?php echo $avail; ?></span><br>Available</p>
                    <p class="btn3"><span>6</span><br>Total</p>

                    <!-- <a href="" class="btn">11</a>
                    <a href="" class="btn2">add New</a>
                    <a href="" class="btn3">add New</a> -->
                    <!-- <div class="img-case">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <form action="../confirm.php" method="post">
                    <input type="hidden" name="input">
                    <a href="../confirm.php" onclick="document.getElementById('input').submit();">
                        <div class="card">
                            <div class="box">
                                <i class="fa-solid fa-laptop"></i>
                                <p>
                                <p>No Laptop: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 1</span></p>
                                <p>Status: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Baik</span></p>
                                </p>
                            </div>
                        </div>
                    </a>
                </form>
                <form action="../confirm.php" method="post">
                    <input type="hidden" name="input">
                    <a href="../confirm.php" onclick="document.getElementById('input').submit();">
                        <div class="card">
                            <div class="box">
                                <i class="fa-solid fa-laptop"></i>
                                <p>
                                <p>No Laptop: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 2</span></p>
                                <p>Status: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Baik</span></p>
                                </p>
                            </div>
                        </div>
                    </a>
                </form>
                <form action="../confirm.php" method="post">
                    <input type="hidden" name="input">
                    <a href="../confirm.php" onclick="document.getElementById('input').submit();">
                        <div class="card">
                            <div class="box">
                                <i class="fa-solid fa-laptop"></i>
                                <p>
                                <p>No Laptop: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 3</span></p>
                                <p>Status: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Baik</span></p>
                                </p>
                            </div>
                        </div>
                    </a>
                </form>
                <form action="../confirm.php" method="post">
                    <input type="hidden" name="input">
                    <a href="../confirm.php" onclick="document.getElementById('input').submit();">
                        <div class="card">
                            <div class="box">
                                <i class="fa-solid fa-laptop"></i>
                                <p>
                                <p>No Laptop: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 4</span></p>
                                <p>Status: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Baik</span></p>
                                </p>
                            </div>
                        </div>
                    </a>
                </form>
                <form action="../confirm.php" method="post">
                    <input type="hidden" name="input">
                    <a href="../confirm.php" onclick="document.getElementById('input').submit();">
                        <div class="card">
                            <div class="box">
                                <i class="fa-solid fa-laptop"></i>
                                <p>
                                <p>No Laptop: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 5</span></p>
                                <p>Status: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Baik</span></p>
                                </p>
                            </div>
                        </div>
                    </a>
                </form>
                <form action="../confirm.php" method="post">
                    <input type="hidden" name="input">
                    <a href="../confirm.php" onclick="document.getElementById('input').submit();">
                        <div class="card">
                            <div class="box">
                                <i class="fa-solid fa-laptop"></i>
                                <p>
                                <p>No Laptop: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 6</span></p>
                                <p>Status: <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Baik</span></p>
                                </p>
                            </div>
                        </div>
                    </a>
                </form>
            </div>
            <a href="Lenovo.php"><button class="submit-button" type="submit">Lenovo</button></a>
            <a href="#!"><button class="submit-button" type="submit">Acer</button></a>
            <a href="Hp.php"><button class="submit-button" type="submit">HP</button></a>
            <!-- <div class="content-2">
                <div class="recent-payments"></div>
                <div class="new-student"></div>
            </div> -->

        </div>

    </div>

    <style>
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
    </style>

</body>

</html>