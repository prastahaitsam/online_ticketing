<?php
if ($_SESSION['level'] == "") {
    $_SESSION['gagal_login'] = "Website Khusus Member";
    header("location:../signin.php");
} elseif ($_SESSION['level'] == "admin") {
    include "assets/css.php";
    include "assets/js.php";
    include "controller/connection.php";

    $query = mysqli_query($conn, "SELECT * FROM t_bus join t_rute ON t_bus.id_rute = t_rute.id_rute");
    $no = 0;

    if (isset($_GET['sukses'])) { ?>
        <script>
            swal("Sukses !", "<?= $_GET['sukses'] ?>", "success")
                .then((value) => {
                    location.href = 'index.php?page=data_bus';
                });
        </script>
    <?php } elseif (isset($_GET['gagal'])) { ?>
        <script>
            swal("Gagal !", "<?= $_GET['gagal'] ?>", "error")
                .then((value) => {
                    location.href = 'index.php?page=data_bus';
                });
        </script>
    <?php } elseif (isset($_GET['kosong'])) { ?>
        <script>
            swal("Error !", "<?= $_GET['kosong'] ?>", "warning")
                .then((value) => {
                    location.href = 'index.php?page=data_bus';
                });
        </script>
    <?php } ?>

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Data Bus</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="?">Master Data</a></li>
                        <li class="breadcrumb-item"><a href="?page=data_bus">Data Bus</a></li>
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
                            <button type="button" class="btn btn-success mb-2 float-right" data-toggle="modal" data-target="#tambahBus"><i class="feather icon-plus"></i> Tambah Data</button>
                            <table class="table table-hover" id="dt-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama Bus</th>
                                        <th>Rute</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) {
                                        $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['kode_bus'] ?></td>
                                            <td><?= $row['nama_bus'] ?></td>
                                            <td><?= $row['nama_rute'] ?></td>
                                            <td>
                                                <button type="button" class="btn  btn-icon btn-primary" data-toggle="modal" data-target="#detailBus" data-idbus="<?= $row['id_bus'] ?>" data-kodebus="<?= $row['kode_bus'] ?>" data-namabus="<?= $row['nama_bus'] ?>" data-rute="<?= $row['nama_rute'] ?>"><i class="feather icon-eye"></i></button>
                                                <button type="button" class="btn  btn-icon btn-warning" data-toggle="modal" data-target="#editBus" data-idbus="<?= $row['id_bus'] ?>" data-kodebus="<?= $row['kode_bus'] ?>" data-namabus="<?= $row['nama_bus'] ?>" data-idrute="<?= $row['id_rute'] ?>"><i class="feather icon-edit"></i></button>
                                                <button type="button" class="btn  btn-icon btn-danger" data-toggle="modal" data-target="#hapusBus" data-idbus="<?= $row['id_bus'] ?>" data-namabus="<?= $row['nama_bus'] ?>"><i class="feather icon-trash"></i></button>
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
        $(function() {
            $('#detailBus').on('show.bs.modal', function(event) {

                var button = $(event.relatedTarget);
                var kodebus = button.data('kodebus');
                var namabus = button.data('namabus');
                var rute = button.data('rute');
                var modal = $(this);
                modal.find('.modal-body #kode-bus').text(kodebus);
                modal.find('.modal-body #nama-bus').text(namabus);
                modal.find('.modal-body #rute-bus').text(rute);
            });

            $('#editBus').on('show.bs.modal', function(event) {

                var button = $(event.relatedTarget);
                var idbus = button.data('idbus');
                var kodebus = button.data('kodebus');
                var namabus = button.data('namabus');
                var idrute = button.data('idrute');
                var modal = $(this);
                modal.find('.modal-body #id-bus').val(idbus);
                modal.find('.modal-body #kode-bus').val(kodebus);
                modal.find('.modal-body #nama-bus').val(namabus);
                modal.find('.modal-body #id-rute').val(idrute);
            });

            $('#hapusBus').on('show.bs.modal', function(event) {

                var button = $(event.relatedTarget);
                var idbus = button.data('idbus');
                var namabus = button.data('namabus');
                var modal = $(this);
                modal.find('.modal-body #id-hapus').val(idbus);
                modal.find('.modal-body #data-hapus').text(namabus);
            });
        });
    </script>

<?php
    include "details/detail_bus.php";
    include "forms/form_bus.php";
} else {
    echo "<script>location.href='index.php?&ditolak=Anda tidak memiliki hak untuk mengakses halaman ini !';</script>";
} ?>