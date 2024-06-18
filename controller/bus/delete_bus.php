<?php
	include "../connection.php";
	
	$id = $_POST['id-bus'];

	$delete = mysqli_query($conn,"DELETE FROM t_bus Where id_bus = $id") or die (mysqli_error($connect));
	if ($delete) {
		echo "<script>location.href='../../index.php?page=data_bus&sukses=Data berhasil dihapus !';</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_bus&sukses=Data gagal dihapus !';</script>";
	}
?>