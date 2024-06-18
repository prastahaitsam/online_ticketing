<?php
    if ($_SESSION['level'] == "") {
        $_SESSION['gagal_login'] = "Website Khusus Member";
        header("location:../signin.php");
    }
?>
<!-- modal hapus -->
<div id="editPembayaran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Pembayaran</h5>
			</div>
			<div class="modal-body">
				<form action="controller/pembayaran/bayar.php" method="POST">
		          <input type="hidden" name="kode" class="form-control" id="kode">
		          <label class=" form-control-label">Harga Bayar</label>
		          <input readonly name="harga" class="form-control" id="harga-bayar">
		          <label class=" form-control-label">Masukan Nominal</label>
		          <input type="number" name="nominal" class="form-control">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Bayar</button>
			</div>
		</form>
		</div>
	</div>
</div>
<!-- end modal hapus -->