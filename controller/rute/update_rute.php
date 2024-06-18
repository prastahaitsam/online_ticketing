<?php
	include "../connection.php";

	$id_rute = $_POST['id-rute'];
	$nama_rute = $_POST['nama-rute'];
	$harga = $_POST['harga'];

	$update = mysqli_query($conn,"UPDATE t_rute set nama_rute='$nama_rute', harga='$harga' where id_rute='$id_rute'") or die (mysqli_error($connect));
	if ($update) {
		echo "<script>location.href='../../index.php?page=data_rute';alert('Data berhasil diedit !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_rute';alert('Data berhasil diedit !')</script>";
	}
?>