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
                    <h5 class="m-b-10">Booking Tiket</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="?page=data_bus">Booking Tiket</a></li>
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
                                    <th>Tanggal Pesan</th>
                                    <th>Nama Pemesan</th>
                                    <th>Rute</th>
                                    <th>Status Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $query = mysqli_query($conn,"SELECT * FROM t_det_pemesanan JOIN t_pengguna ON t_det_pemesanan.id_pengguna = t_pengguna.id_pengguna JOIN t_rute ON t_det_pemesanan.id_rute = t_rute.id_rute JOIN t_pemesanan ON t_det_pemesanan.kode_booking = t_pemesanan.kode_booking WHERE status_pembayaran = 'SUDAH'");
                                while ($row = mysqli_fetch_array($query)){ $no++; ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row['kode_booking'] ?></td>
                                        <td><?= $row['tgl_pemesanan'] ?></td>
                                        <td><?= $row['nama_pengguna'] ?></td>
                                        <td><?= $row['nama_rute'] ?></td>
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