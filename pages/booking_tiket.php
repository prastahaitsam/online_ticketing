<?php
    if ($_SESSION['level'] == "") {
        $_SESSION['gagal_login'] = "Website Khusus Member";
        header("location:../signin.php");
    }
    
    include "assets/css.php";
    include "assets/js.php";
    include "controller/connection.php";

    $query = mysqli_query($conn, "SELECT max(kode_booking) as kodeTerbesar FROM t_pemesanan");
    $data = mysqli_fetch_array($query);

    $kodeBooking = $data['kodeTerbesar'];

    $urutan = (int) substr($kodeBooking, 3, 3);
    $urutan++;

    $huruf = "BKK";

    $kodeBooking = $huruf . sprintf("%03s", $urutan);

    if (isset($_GET['sukses'])) { ?>
        <script>
            swal("Sukses !", "<?= $_GET['sukses'] ?>", "success")
            .then((value) => {
              location.href='index.php?page=booking_tiket';
            });
        </script>
<?php } elseif (isset($_GET['gagal'])) { ?>
        <script>
            swal("Gagal !", "<?= $_GET['gagal'] ?>", "error")
            .then((value) => {
              location.href='index.php?page=booking_tiket';
            });
        </script>
<?php } elseif (isset($_GET['kosong'])) { ?>
        <script>
            swal("Error !", "<?= $_GET['kosong'] ?>", "warning")
            .then((value) => {
              location.href='index.php?page=booking_tiket';
            });
        </script>
<?php } ?>

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
                <form action="controller/booking_tiket/booking.php" method="post" class="">
                    <div class="form-group">
                        <input type="hidden" readonly name="kode_booking" class="form-control" value="<?= $kodeBooking; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_pesan" class=" form-control-label">Tanggal Booking</label>
                        <input readonly name="tgl_pesan" class="form-control" value="<?= date('d/m/Y'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="rute" class=" form-control-label">Rute</label>
                        <select name="rute" id="idrute" class="form-control">
                            <option value="">Please select</option>
                            <?php 
                                $query = mysqli_query($conn,"SELECT * FROM t_rute");
                              while ($row = mysqli_fetch_array($query)){ ?>
                                <option value="<?= $row['id_rute'] ?>"><?= $row['nama_rute'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_berangkat" class=" form-control-label">Tanggal Keberangkatan</label>
                        <input type="date" name="tgl_berangkat" class="form-control">
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn  btn-primary">Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- [ horizontal-layout ] end -->
</div>
<!-- [ Main Content ] end -->