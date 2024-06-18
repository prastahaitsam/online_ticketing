<?php
	include "../connection.php";

	$id_bus = $_POST['id-bus'];
	$kode_bus = $_POST['kode-bus'];
	$nama_bus = $_POST['nama-bus'];
	$rute = $_POST['id-rute'];

	$update = mysqli_query($conn,"UPDATE t_bus set kode_bus='$kode_bus', nama_bus='$nama_bus', id_rute='$rute' where id_bus='$id_bus'") or die (mysqli_error($connect));
	if ($update) {
		echo "<script>location.href='../../index.php?page=data_bus&sukses=Data berhasil diedit !';</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_bus&gagal=Data gagal diedit !';</script>";
	}
?>