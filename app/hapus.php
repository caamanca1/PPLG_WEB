<?php
include 'config.php';
$alasan = $_GET['id'];
$alert = mysqli_query($server, "DELETE FROM pengembalian WHERE alasan='$alasan'");
if ($alert) {
  echo "<script>
		alert('Barang Berhasil Di Kembalikan');
		window.location.href='return.php';
	</script>";
  // header("location:index.php?pesan=hapus");
}
