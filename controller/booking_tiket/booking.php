<?php
	session_start();
	if($_POST){
		$kode_booking = $_POST['kode_booking'];
		$tgl_pesan = $_POST['tgl_pesan'];
		$rute = $_POST['rute'];
		$tgl_berangkat = $_POST['tgl_berangkat'];
		$pengguna = $_SESSION['user_id'];

		if (empty($rute)) {
			echo "<script>location.href='../../index.php?page=booking_tiket&kosong=Rute Tidak boleh kosong !';</script>";
		}elseif (empty($pengguna)) {
			
		}else{
			include "../connection.php";
			$insert = mysqli_query($conn,"iNSERT INTO t_pemesanan (kode_booking, tgl_pemesanan, tgl_keberangkatan)
				value ('".$kode_booking."','".$tgl_pesan."','".$tgl_berangkat."')") or die (mysqli_error($conn));
			$insert2 = mysqli_query($conn,"iNSERT INTO t_det_pemesanan (kode_booking, id_pengguna, id_rute)
				value ('".$kode_booking."','".$pengguna."','".$rute."')") or die (mysqli_error($conn));

			if ($insert && $insert2) {
				echo "<script>location.href='../../index.php?page=booking_tiket&sukses=Booking Tiket Berhasil !';</script>";
			}else{
				echo "<script>location.href='../../index.php?page=booking_tiket&gagal=Booking Tiket Gagal !';</script>";
			}
		}
	}
?>