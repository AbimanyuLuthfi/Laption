<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<meta property="og:image" content="assets/image/laptop.jpg" />
	<meta name="description" content="Leppi adalah aplikasi Sistem Pendukung Keputusan Laptop berbasis Metode Weight Product">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
	$(document).ready(function(){
	  $(".button-collapse").sideNav();
	  $(".dropdown-button").dropdown();
	});
	</script>
</head>
<body>
<?php
require_once "header.php";
?>
    <!-- Body Start -->
		<!-- Jumbotron Start -->
		
		<!-- Jumbotron End -->
	<!-- Info Start -->
	<div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
            <div class="md-6 mt-5 mt-md-0">
                <div class="home-text fw-bold">
                    <!-- HEADER UTAMA -->
                    <center><div class="hero-text-wrapper">
                        <h2 class="hero-text text-center">LAPTION</h2>
                        <div class="header-icon-wrapper">
                            <h2 class="hero-text">Sistem Pendukung Keputusan</h2>
                            <h2 class="hero-text">Menggunakan Metode Topsis</h2>
                        </div>
                        <h2 class="hero-text text-center">ByLaption</h2>
                    </div></center>
                        </div>
						<div class="row center" \>
								<a href="rekomendasi.php" id="download-button" class="waves-effect waves-light btn-large" style="margin-top: 40px">Pilih Rekomendasi</a>
							</div>
                        <!-- Button -->
                    </div>
                </div>
            </div>
        </div>
	<!-- Info End -->
	<div id="about" class="modal">
    <div class="modal-content">
      <h4>Tentang</h4>
      <p>Sistem Pendukung Keputusan Pemilihan Laptop ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP.
				Sistem ini dibuat sebagai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan Prodi Teknik Informatika Universitas Pembangunan Jaya. <br>
				<br>
				1. Abimanyu Luthfi Rizq Ramadhan<br>
				2. Januar Putra Hidayat<br>
                3. Muhammad Wildan Fadhilah<br>
			</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
    </div>
	</div>
	
    <!-- Body End -->
    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Smartphone 2018.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	 			$(document).ready(function(){
	      $('.parallax').parallax();
				$('.modal').modal();
	    });
	</script>
</body>
</html>