<?php
    session_start();
    if ($_SESSION['level'] == "") {
        $_SESSION['gagal_login'] = "Website Khusus Member";
        header("location:signin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blue Bird Group</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    
    <?php include "assets/css.php"; ?>

</head>

<body>
    <?php include "templates/navbar.php"; ?>

    <?php if (isset($_GET['ditolak'])) { ?>
            <script>
                swal("Error !", "<?= $_GET['ditolak'] ?>", "success")
                .then((value) => {
                  location.href='?';
                });
            </script>
    <?php } ?>
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper container">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <?php
                                if (isset($_GET['page']))
                                    include('pages/'.$_GET['page'].'.php');
                                else{
                            ?>
                                <div class="page-header">
                                    <div class="page-block">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card support-bar overflow-hidden m-l-30">
                                        <div class="card-body pb-0">
                                            <h2 class="m-0">350</h2>
                                            <span class="text-c-blue">Support Requests</span>
                                            <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                                        </div>
                                        <div id="support-chart"></div>
                                        <div class="card-footer bg-primary text-white">
                                            <div class="row text-center">
                                                <div class="col">
                                                    <h4 class="m-0 text-white">10</h4>
                                                    <span>Open</span>
                                                </div>
                                                <div class="col">
                                                    <h4 class="m-0 text-white">5</h4>
                                                    <span>Running</span>
                                                </div>
                                                <div class="col">
                                                    <h4 class="m-0 text-white">3</h4>
                                                    <span>Solved</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card support-bar overflow-hidden m-l-20">
                                        <div class="card-body pb-0">
                                            <h2 class="m-0">350</h2>
                                            <span class="text-c-blue">Support Requests</span>
                                            <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                                        </div>
                                        <div id="support-chart"></div>
                                        <div class="card-footer bg-primary text-white">
                                            <div class="row text-center">
                                                <div class="col">
                                                    <h4 class="m-0 text-white">10</h4>
                                                    <span>Open</span>
                                                </div>
                                                <div class="col">
                                                    <h4 class="m-0 text-white">5</h4>
                                                    <span>Running</span>
                                                </div>
                                                <div class="col">
                                                    <h4 class="m-0 text-white">3</h4>
                                                    <span>Solved</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card support-bar overflow-hidden m-l-20">
                                        <div class="card-body pb-0">
                                            <h2 class="m-0">350</h2>
                                            <span class="text-c-blue">Support Requests</span>
                                            <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                                        </div>
                                        <div id="support-chart"></div>
                                        <div class="card-footer bg-primary text-white">
                                            <div class="row text-center">
                                                <div class="col">
                                                    <h4 class="m-0 text-white">10</h4>
                                                    <span>Open</span>
                                                </div>
                                                <div class="col">
                                                    <h4 class="m-0 text-white">5</h4>
                                                    <span>Running</span>
                                                </div>
                                                <div class="col">
                                                    <h4 class="m-0 text-white">3</h4>
                                                    <span>Solved</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- [ horizontal-layout ] start -->
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-body table-border-style">
                                                    <div class="table-responsive">
                                                        <h3 class="mb-5">A Glimpse of Blue Bird Group Holding</h3>
                                                        <p class="mb-3">From taxi, containers and heavy equipments, to logistics, Blue Bird Group is a holding group that is ready to cater to all your needs. To many citizens of Jakarta and many other big cities in Indonesia, Blue Bird Group isn’t just a taxi company, but a part of their lifestyle. If New York is known with the yellow taxi and London with the black cab, then Jakarta has Blue Bird: the armada of blue taxis adorning the busy streets of Jakarta all the time.</p>
                                                        <p class="mb-3">By serving millions of passengers every month, Blue Bird Group has extended its services, from regular taxis (Blue Bird & Pusaka) to executive taxis (Silver Bird), limousines and car rentals (Golden Bird), bus charters (Big Bird), logistics (Iron Bird Logistic), Industry (Restu Ibu Pusaka – Bus Body Manufacturing and Pusaka Niaga Indonesia), property (Holiday Resort Lombok and Pusaka Bumi Mutiara), IT and supporting services (Hermis Consulting – IT SAP, Pusaka Integrasi Mandiri – EDC, Pusaka GPS, Pusaka Buana Utama – Petrol Station, Pusaka Bersatu – Lubricant, Pusaka Sukucadang Indonesia – Spare Part) and heavy equipments (Pusaka Andalan Perkasa and Pusaka Bumi Transportasi).</p>
                                                        <p class="mb-3">We are committed to always keeping our service quality in every business that we do. For example, with our armada placement strategy and availability has made our subsidiary, PT Blue Bird Tbk has gained the status of a reliable and trustworthy transportation partner.</p>
                                                        <p class="mb-3">Now Blue Bird Group’s services can be enjoyed not only in Jakarta but also in other cities in Indonesia like Surabaya, Bandung, Bali, Lombok, Semarang, Medan, Pekanbaru, Palembang, Bangka Belitung, Batam, Banten, Manado, Makassar, Yogyakarta as well as hearts of business and tourism spots across the nation.</p>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- [ horizontal-layout ] end -->
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "assets/js.php"; ?>
    
</body>

</html>
