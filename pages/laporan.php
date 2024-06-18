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
                    <h5 class="m-b-10">Laporan</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="?page=data_bus">Laporan</a></li>
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
                <h5 style="margin-left: 450px;">Fitur Belum Tersedia !</h5>
            </div>
        </div>
    </div>
    <!-- [ horizontal-layout ] end -->
</div>
<!-- [ Main Content ] end -->