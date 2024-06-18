<?php
    if ($_SESSION['level'] == "") {
        $_SESSION['gagal_login'] = "Website Khusus Member";
        header("location:../signin.php");
    }
?>
<!-- modal add -->
<div id="detailBus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h5 class="card-title">Kode Bus : <b id="kode-bus"></b> </h5>
				<h5 class="card-title">Nama Bus : <b id="nama-bus"></b> </h5>
				<h5 class="card-title">Rute Bus : <b id="rute-bus"></b> </h5>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-primary" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
<!-- end modal add -->