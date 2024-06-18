<?php
	if($_POST){
		$kode_bus = $_POST['kode-bus'];
		$nama_bus = $_POST['nama-bus'];
		$rute = $_POST['id-rute'];

		if (empty($kode_bus)) {
			echo "<script>location.href='../../index.php?page=data_bus&kosong=Kode Bus tidak boleh kosong !';</script>";
		}elseif (empty($nama_bus)) {
			echo "<script>location.href='../../index.php?page=data_bus&kosong=Nama Bus tidak boleh kosong !';</script>";
		}elseif (empty($rute)) {
			echo "<script>location.href='../../index.php?page=data_bus&kosong=Rute tidak boleh kosong !';</script>";
		}else{
			include "../connection.php";
			$insert = mysqli_query($conn,"iNSERT INTO t_bus (kode_bus, nama_bus, id_rute)
				value ('".$kode_bus."','".$nama_bus."','".$rute."')") or die (mysqli_error($conn));

			if ($insert) {
				echo "<script>location.href='../../index.php?page=data_bus&sukses=Data berhasil ditambahkan !';</script>";
			}else{
				echo "<script>location.href='../../index.php?page=data_bus&gagal=Data gagal ditambahkan !';</script>";
			}
		}
	}
?>