<?php
    if ($_SESSION['level'] == "") {
        $_SESSION['gagal_login'] = "Website Khusus Member";
        header("location:../signin.php");
    }

    include "assets/css.php";
    include "assets/js.php";
    include "controller/connection.php";
?>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Transaksi Selesai</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="?page=data_bus">Transaksi Selesai</a></li>
                </ul>
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
                                    <th>Tanggal Berangkat</th>
                                    <th>Rute</th>
                                    <th>Total Bayar</th>
                                    <th>Status Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $idpeng = $_SESSION['user_id'];
                                $query = mysqli_query($conn,"SELECT * FROM t_det_pemesanan JOIN t_pemesanan ON t_det_pemesanan.kode_booking = t_pemesanan.kode_booking JOIN t_rute ON t_det_pemesanan.id_rute = t_rute.id_rute WHERE id_pengguna = $idpeng and status_pembayaran = 'SUDAH'");
                                $no = 0;
                                while ($row = mysqli_fetch_array($query)){ $no++; ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row['kode_booking'] ?></td>
                                        <td><?= $row['tgl_pemesanan'] ?></td>
                                        <td><?= $row['nama_rute'] ?></td>
                                        <td><?= $row['harga'] ?></td>
                                        <td><?= $row['status_pembayaran'] ?></td>
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
        var modal = $(this);
            modal.find('.modal-body #kode').val(kode);
    });
</script>

<?php
    include "forms/form_pembayaran.php";
?>