<?php
    if ($_SESSION['level'] == "") {
        $_SESSION['gagal_login'] = "Website Khusus Member";
        header("location:../signin.php");
    }
?>
<!-- modal add -->
<div id="tambahRute" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Bus</h5>
			</div>
			<div class="modal-body">
				<form action="controller/rute/tambah_rute.php" method="post" class="">
                    <div class="form-group">
                        <label for="nama-rute" class=" form-control-label">Nama Rute</label>
                        <input type="text" name="nama-rute" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga" class=" form-control-label">Harga</label>
                        <input type="text" name="harga" class="form-control">
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
<!-- end modal add -->

<!-- modal edit -->
<div id="editRute" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Edit Data Bus</h5>
			</div>
			<div class="modal-body">
				<form action="controller/rute/update_rute.php" method="post" class="">
					<input type="hidden" id="id-rute" name="id-rute" class="form-control">
                    <div class="form-group">
                        <label for="nama-bus" class=" form-control-label">Nama Rute</label>
                        <input type="text" id="nama-rute" name="nama-rute" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga" class=" form-control-label">Harga</label>
                        <input type="number" id="harga" name="harga" class="form-control">
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
<div id="hapusRute" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Peringatan !</h5>
			</div>
			<div class="modal-body">
				<form action="controller/rute/delete_rute.php" method="POST">
		          <input type="hidden" name="id-rute" id="id-hapus">
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

<div class="modal fade" id="hapusRute" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="smallmodalLabel">Warning !</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="controller/rute/delete_rute.php" method="POST">
		          <input type="hidden" name="id-rute" id="id-hapus">
		          Apakah anda ingin menghapus data <b id="data-hapus"></b> ?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary">Confirm</button>
			</div>
		</form>
		</div>
	</div>
</div>
<!-- end modal hapus -->