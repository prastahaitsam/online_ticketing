<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<nav class="pcoded-navbar theme-horizontal menu-light brand-blue">
    <div class="navbar-wrapper container">
        <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
            <ul class="nav pcoded-inner-navbar sidenav-inner">
                <li class="nav-item">
                    <a href="?" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Home</span></a>
                </li>
                <?php if ($_SESSION['level'] == "admin") { ?>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Master Data</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="?page=data_bus">Data Bus</a></li>
                            <li><a href="?page=data_rute">Data Rute</a></li>
                        </ul>
                        <li class="nav-item">
                            <a href="?page=booking_tiket" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Booking Tiket</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=pembayaran" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Pembayaran</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=history_booking" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">History Booking</span></a>
                        </li>
                    </li>
                <?php }elseif ($_SESSION['level'] == "owner") { ?>
                    <li class="nav-item">
                        <a href="?page=laporan" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Laporan</span></a>
                    </li>
                <?php }else{ ?>
                    <li class="nav-item">
                        <a href="?page=booking_tiket" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Booking Tiket</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=pembayaran" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Mengunggu Pembayaran</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=transaksi_selesai" class="nav-link "><span class="pcoded-micon"><i class="feather icon-check"></i></span><span class="pcoded-mtext">Transaksi Selesai</span></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li>
                    <h6 style="color: #fff; margin-top: 16px;">Selamat Datang, <?= $_SESSION['nama'] ?></h6>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="controller/proses_logout.php" class="dropdown-toggle">
                            <i class="feather icon-log-out"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- [ Header ] end -->