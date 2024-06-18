<?php
    if ($_SESSION['level'] == "") {
        $_SESSION['gagal_login'] = "Website Khusus Member";
        header("location:../signin.php");
    }

    include "assets/css.php";
    include "assets/js.php";
    include "controller/connection.php";

    if (isset($_GET['sukses'])) { ?>
        <script>
            swal("Sukses !", "<?= $_GET['sukses'] ?>", "success")
            .then((value) => {
              location.href='index.php?page=pembayaran';
            });
        </script>
<?php } elseif (isset($_GET['gagal'])) { ?>
        <script>
            swal("Gagal !", "<?= $_GET['gagal'] ?>", "error")
            .then((value) => {
              location.href='index.php?page=pembayaran';
            });
        </script>
<?php } elseif (isset($_GET['hambat'])) { ?>
        <script>
            swal("Error !", "<?= $_GET['hambat'] ?>", "warning")
            .then((value) => {
              location.href='index.php?page=pembayaran';
            });
        </script>
<?php } ?>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <?php if ($_SESSION['level'] == "admin" ) { ?>
                    <div class="page-header-title">
                        <h5 class="m-b-10">Pembayaran</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="?page=data_bus">Pembayaran</a></li>
                    </ul>
                <?php }else{ ?>
                    <div class="page-header-title">
                        <h5 class="m-b-10">Menunggu Pembayaran</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="?">Menunggu Pembayaran</a></li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] start -->
<div class="row">
    <!-- [ horizontal-layout ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <?php if ($_SESSION['level'] == "admin") { ?>
                                        <th>Nama Pemesan</th>
                                    <?php } ?>
                                    <th>Tanggal Berangkat</th>
                                    <th>Rute</th>
                                    <th>Total Bayar</th>
                                    <th>Status Pembayaran</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if ($_SESSION['level'] == "pengguna") {
                                        $idpeng = $_SESSION['user_id'];
                                        $query = mysqli_query($conn,"SELECT * FROM t_det_pemesanan JOIN t_pemesanan ON t_det_pemesanan.kode_booking = t_pemesanan.kode_booking JOIN t_rute ON t_det_pemesanan.id_rute = t_rute.id_rute WHERE id_pengguna = $idpeng and status_pembayaran = 'BELUM'");
                                    }else{
                                        $query = mysqli_query($conn,"SELECT * FROM t_det_pemesanan JOIN t_pemesanan ON t_det_pemesanan.kode_booking = t_pemesanan.kode_booking JOIN t_rute ON t_det_pemesanan.id_rute = t_rute.id_rute JOIN t_pengguna ON t_det_pemesanan.id_pengguna = t_pengguna.id_pengguna WHERE status_pembayaran = 'BELUM'");
                                    }
                                $no = 0;
                                while ($row = mysqli_fetch_array($query)){ $no++; ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row['kode_booking'] ?></td>
                                        <?php if ($_SESSION['level'] == "admin") { ?>
                                            <td><?= $row['nama_pengguna'] ?></td>
                                        <?php } ?>
                                        <td><?= $row['tgl_keberangkatan'] ?></td>
                                        <td><?= $row['nama_rute'] ?></td>
                                        <td><?= $row['harga'] ?></td>
                                        <td><?= $row['status_pembayaran'] ?></td>
                                        <?php if ($row['status_pembayaran'] == "BELUM") { ?>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPembayaran"
                                                data-kode="<?= $row['kode_booking'] ?>"
                                                data-harga="<?= $row['harga'] ?>"
                                                >Bayar</button>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- [ horizontal-layout ] end -->
</div>
<!-- [ Main Content ] end -->

<script>
$(function(){
    $('#editPembayaran').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var kode = button.data('kode');
        var harga = button.data('harga');
        var modal = $(this);
            modal.find('.modal-body #kode').val(kode);
            modal.find('.modal-body #harga-bayar').val(harga);
    });
});
</script>

<?php
    include "forms/form_pembayaran.php";
?>