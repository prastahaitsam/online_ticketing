<?php
    if ($_SESSION['level'] == "") {
        $_SESSION['gagal_login'] = "Website Khusus Member";
        header("location:../signin.php");
    }
?>
<!-- modal add -->
<div id="tambahBus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Bus</h5>
			</div>
			<div class="modal-body">
				<form action="controller/bus/tambah_bus.php" method="post" class="">
                    <div class="form-group">
                        <label for="kode-bus" class=" form-control-label">Kode</label>
                        <input type="text" name="kode-bus" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama-bus" class=" form-control-label">Nama Bus</label>
                        <input type="text" name="nama-bus" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="id-bus" class=" form-control-label">Rute</label>
                        <select name="id-rute" class="form-control">
                        	<option value="">Please select</option>
                        	<?php
                        		include "controller/connection.php"; 
				              	$query = mysqli_query($conn,"SELECT * FROM t_rute");
				              while ($row = mysqli_fetch_array($query)){ ?>
				                <option value="<?= $row['id_rute'] ?>"><?= $row['nama_rute'] ?></option>
				            <?php } ?>
                        </select>
                    </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn  btn-primary">Simpan</button>
			</div>
		</form>
		</div>
	</div>
</div>
<!-- end modal add -->

<!-- modal edit -->
<div id="editBus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Edit Data Bus</h5>
			</div>
			<div class="modal-body">
				<form action="controller/bus/update_bus.php" method="post" class="">
					<input type="hidden" id="id-bus" name="id-bus" class="form-control">
                    <div class="form-group">
                        <label for="kode-bus" class=" form-control-label">Kode</label>
                        <input type="text" id="kode-bus" name="kode-bus" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama-bus" class=" form-control-label">Nama Bus</label>
                        <input type="text" id="nama-bus" name="nama-bus" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="id-bus" class=" form-control-label">Rute</label>
                        <select name="id-rute" id="id-rute" class="form-control">
                        	<option value="">Please select</option>
                        	<?php
                        		include "controller/connection.php"; 
				              	$query = mysqli_query($conn,"SELECT * FROM t_rute");
				              while ($row = mysqli_fetch_array($query)){ ?>
				                <option value="<?= $row['id_rute'] ?>"><?= $row['nama_rute'] ?></option>
				            <?php } ?>
                        </select>
                    </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
		</div>
	</div>
</div>
<!-- end modal edit -->

<!-- modal hapus -->
<div id="hapusBus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Peringatan !</h5>
			</div>
			<div class="modal-body">
				<form action="controller/bus/delete_bus.php" method="POST">
		          <input type="hidden" name="id-bus" id="id-hapus">
		          Apakah anda ingin menghapus data <b id="data-hapus"></b> ?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-danger">Ya</button>
			</div>
		</form>
		</div>
	</div>
</div>
<!-- end modal hapus -->