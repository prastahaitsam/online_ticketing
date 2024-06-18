<?php
	include "../connection.php";
	
	$id = $_POST['id-rute'];

	$delete = mysqli_query($conn,"DELETE FROM t_rute Where id_rute = $id") or die (mysqli_error($connect));
	if ($delete) {
		echo "<script>location.href='../../index.php?page=data_bus';alert('Data berhasil dihapus !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_bus';alert('Data gagal dihapus !')</script>";
	}
?>