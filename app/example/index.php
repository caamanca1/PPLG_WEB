<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location: admin.php");
	exit();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Web Dinamis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

	<div class="content">
		<header>
			<h1 class="judul">SMK Wikrama Bogor</h1>
			<h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
		</header>
		<div class="menu">
			<ul>
				<li><a href="#">Beranda</a></li>
				<li><a href="#">Tentang</a></li>
				<li><a href="#">Kontak</a></li>
				<div class="navcuy">
					<li><a href="index.php?page=login">Login</a></li>
					<li><a href="index.php?page=reg2">Registrasi</a></li>
				</div>
			</ul>
		</div>
		<div class="badan">
			<?php
			if (isset($_GET['page'])) {
				$page = $_GET['page'];

				switch ($page) {
					case 'home':
						include "halaman/home.php";
						break;
					case 'tentang':
						include "halaman/tentang.php";
						break;
					case 'kontak':
						include "halaman/kontak.php";
						break;
					case 'login':
						include "login.php";
						break;
					case 'registration':
						include "registration.php";
						break;
					case 'reg2':
						include "reg2.php";
						break;
					case 'logout':
						include "logout.php";
						break;
					case 'admin':
						include "admin.php";
						break;
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			} else {
				include "login.php";
			}

			?>
		</div>
	</div>
</body>

</html>