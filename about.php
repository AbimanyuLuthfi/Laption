<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/about_style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<?php
    require_once "header.php";
    ?>
    <!-- PR : Bikin tampilan Home-->
    <section class="section mt-4">

        <!-- Awal -->

        <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">About Us</h1>
            </div>
        </div>
    </div>

    <!-- Akhir -->

    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Welcome To <span class="text-primary">LAPTION</span></h1>
                <h4 class="text-primary mb-4">Laptop Option (LAPTION) Merupakan aplikasi rekomendasi laptop terbaik berbasis website</h4>
                <p class="mb-4 desc_lap">Dalam menentukan laptop terbaik untuk penggunanya, website ini menggunakan algoritma Sistem Penunjang Keputusan (SPK) dengan metode TOPSIS. Algoritma tersebut bekerja dengan cara membandingkan suatu data dengan data lainnya. Model kinerja algoritma ini akan menentukan keputusan melalui hasil rating yang telah dihitung menggunakan metode TOPSIS.</p>
                <a href="" class="btn btn-primary py-md-3 fw-bold text-white rounded-pill">get started</a>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                <h2 class="text-center mb-3 mt-1">3G Point Of Integrity</h2>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Good Decision</h3>
                            <p class="mb-0">Menentukan keputusan terbaik berdasarkan data yang diperoleh dari pengguna dengan penilaian melalui rating dan spesifikasi.</p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-chart-line fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Good Accuracy</h3>
                            <p class="mb-0">Memiliki akurasi yang baik berdasarkan rating spesifikasi yang telah diuji melalui algoritma Sistem Penunjang Keputusan (SPK) Metode TOPSIS.</p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-balance-scale fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Good Performance</h3>
                            <p class="mb-0">Tingkat performa website yang sangat baik karena menggunakan bantuan framework pada sisi back-end programming dan front-end programming.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Team Members</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="assets/image/team-1.jpeg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Abimanyu Luthfi Rizq Ramadhan</h3>
                        <p><a href="https://www.instagram.com/abimanyuluthfi25/"class="btn-primary text-dark mb-0">@Abimanyuluthfi25</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="assets/image/team-2.jpeg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Januar Putra Hidayat</h3>
                        <p><a href="https://www.instagram.com/19jan_lumiere/"class="btn-primary text-dark mb-0">@19jan_lumiere</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="assets/image/team-3.jpeg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Muhammad Wildan Fadhilah</h3>
                        <p><a href="https://www.instagram.com/wildanfhd/"class="btn-primary text-dark mb-0">@wildanfhd</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    
        <div class="section-body">
        </div>
    </section>
</body>