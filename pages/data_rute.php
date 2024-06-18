<?php
    if ($_SESSION['level'] == "") {
        $_SESSION['gagal_login'] = "Website Khusus Member";
        header("location:../signin.php");
    }

    include "assets/css.php";
    include "assets/js.php";
    include "controller/connection.php";

    $query = mysqli_query($conn,"SELECT * FROM t_rute");
    $no = 0;
?>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Data Rute</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="?">Master Data</a></li>
                    <li class="breadcrumb-item"><a href="?page=data_bus">Data Rute</a></li>
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
                        <button type="button" class="btn btn-success mb-2 float-right" data-toggle="modal" data-target="#tambahRute"><i class="feather icon-plus"></i> Tambah Data</button>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Rute</th>
                                    <th>Harga</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_array($query)){ $no++; ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row['nama_rute'] ?></td>
                                        <td><?= $row['harga'] ?></td>
                                        <td>
                                            <button type="button" class="btn  btn-icon btn-primary" data-toggle="modal" data-target="#detailRute"
                                            data-idrute="<?= $row['id_rute'] ?>"
                                            data-namarute="<?= $row['nama_rute'] ?>"
                                            data-harga="<?= $row['harga'] ?>"
                                            ><i class="feather icon-eye"></i></button>
                                            <button type="button" class="btn  btn-icon btn-warning" data-toggle="modal" data-target="#editRute"
                                            data-idrute="<?= $row['id_rute'] ?>"
                                            data-namarute="<?= $row['nama_rute'] ?>"
                                            data-harga="<?= $row['harga'] ?>"
                                            ><i class="feather icon-edit"></i></button>
                                            <button type="button" class="btn  btn-icon btn-danger" data-toggle="modal" data-target="#hapusRute"
                                            data-idrute="<?= $row['id_rute'] ?>"
                                            data-namarute="<?= $row['nama_rute'] ?>"
                                            ><i class="feather icon-trash"></i></button>
                                        </td>
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
    $('#editRute').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var idrute = button.data('idrute');
        var namarute = button.data('namarute');
        var harga = button.data('harga');
        var modal = $(this);
            modal.find('.modal-body #id-rute').val(idrute);
            modal.find('.modal-body #nama-rute').val(namarute);
            modal.find('.modal-body #harga').val(harga);
    });

    $('#hapusRute').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var idrute = button.data('idrute');
        var namarute = button.data('namarute');
        var modal = $(this);
        modal.find('.modal-body #id-hapus').val(idrute);
        modal.find('.modal-body #data-hapus').text(namarute);
    });
});
</script>

<?php
    include "details/detail_rute.php";
    include "forms/form_rute.php";
?>