<?php
	include "../connection.php";

	$kode_booking = $_POST['kode'];
	$nominal = $_POST['nominal'];
	$harga = $_POST['harga'];

	if ($nominal > $harga) {
		echo "<script>location.href='../../index.php?page=pembayaran&hambat=Nominal terlalu besar, Tidak ada kembalian !';</script>";
	}elseif ($nominal < $harga) {
		echo "<script>location.href='../../index.php?page=pembayaran&hambat=Tolong masukan nominal sesuai harga !';</script>";
	}else{
		$update = mysqli_query($conn,"UPDATE t_pemesanan SET total_bayar='$nominal', status_pembayaran='SUDAH' WHERE kode_booking='$kode_booking'") or die (mysqli_error($conn));
		if ($update) {
			echo "<script>location.href='../../index.php?page=pembayaran&sukses=Pembayaran Berhasil !';</script>";
		}else{
			echo "<script>location.href='../../index.php?page=pembayaran&gagal=Pembayaran Gagal !';</script>";
		}
	}
?>