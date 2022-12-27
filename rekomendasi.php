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
		<!-- Body Start -->

		<!-- Daftar Laptop Start -->
        <div style="background-color: #efefef">
            <div class="container">
                <div class="section-card" style="padding: 32px 0px 20px 0px">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col s3">
                                </div>
                                <div class="col s6">      
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <center><h4>Masukan Bobot</h4></center>
                                                <br>
                                                <form class = "col s12" method="POST" action="hasil.php">
                                                    <div class = "row">
                                                        <div class="col s12">

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kriteria Harga</b>
                                                            </div>
                                                            <div class="col s6">
                                                            <select required name = "harga" class="browser-default">
                                                                <option value="w" disabled selected>Kriteria Harga</option>
                                                                <option value="5">< Rp 6.000.000</option>
                                                                <option value="4">Rp 6.000.000 - 7.000.000</option>
                                                                <option value="3">Rp 7.000.000 - 8.000.000</option>
                                                                <option value="2">Rp 8.000.000 - 9.500.000</option>
                                                                <option value="1">> Rp 9.500.000</option>
                                                            </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>RAM</b>
                                                            </div>
                                                            <div class="col s6">
                                                            <select required name="ram" class="browser-default">
                                                                <option value = "" disabled selected>Kriteria RAM</option> 
                                                                <option value = "1">< 2 GB</option>
                                                                <option value = "2">2 GB</option>
                                                                <option value = "3">4 GB</option>
                                                                <option value = "4">8 GB</option>
                                                                <option value = "5">> 8 GB</option>
                                                            </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Memori</b>
                                                            </div>
                                                            <div class="col s6">
                                                            <select required name="memori" class="browser-default">
                                                                <option value = "" disabled selected>Kriteria Storage</option>
                                                                <option value = "1">HDD 1000 Gb</option>
                                                                <option value = "2">SSD 128 GB</option>
                                                                <option value = "3">SSD 256 GB</option>
                                                                <option value = "4">SSD 512 GB</option>
                                                                <option value = "5">> SSD 512 GB</option>
                                                            </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Processor</b>
                                                            </div>
                                                            <div class="col s6">
                                                            <select required name="processor" class="browser-default">
                                                                <option value = "" disabled selected>Kriteria Processor</option>
                                                                <option value = "5">Core i7 12700H</option>
                                                                <option value = "5">AMD Ryzen 3 5300U</option>
                                                                <option value = "3">AMD Ryzen 5 3500U</option>
                                                                <option value = "3">Core i7 8565U</option>
                                                                <option value = "3">Core i5 8265U</option>
                                                                <option value = "3">Core i3 1115G4</option>
                                                                <option value = "3">Core i5 8250U</option>
                                                                <option value = "2">Core i3 10110U</option>
                                                                <option value = "2">Core i3 1005G1</option>
                                                                <option value = "2">AMD Ryzen 3 3250U</option>
                                                                <option value = "2">Core i7 7600U</option>
                                                                <option value = "1">Core M3 8100Y</option>
                                                                <option value = "1">Celeron N4020</option>
                                                            </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Baterai</b>
                                                            </div>
                                                            <div class="col s6">
                                                            <select required name="baterai" class="browser-default">
                                                                <option value = "" disabled selected>Kriteria Baterai</option>
                                                                <option value = "1">< 35Wh</option>
                                                                <option value = "2">35 - 40 Wh</option>
                                                                <option value = "3">41 - 45 Wh</option>
                                                                <option value = "4">46 - 50 Wh</option>
                                                                <option value = "5">> 50 Wh</option>
                                                            </select>
                                                            </div>
                                                            
                                                        </div>  
                                                    <center><button type="submit" class="waves-effect waves-light btn" style="margin-bottom:-46px;">Hitung</button></center>	
                                                </form>       
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="col s3">
                                </div>
                            </div>
                        </li>
                    </ul>	     
                </div>
            </div>
        </div>
        <!-- Rekomendasi Laptop End -->

    <!-- Modal Start -->
	<div id="about" class="modal">
        <div class="modal-content">
          <h4>Tentang</h4>
          <p>Sistem Pendukung Keputusan Pemilihan Smartphone ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP.
				Sistem ini dibuat sebagai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan Prodi Teknik Informatika Universitas Trunojoyo Madura. <br>
				<br>
				1. Zulfi Osman<br>
				2. Wahid Arinanto Nugroho <a href="https://wahidari.gitlab.io/"> (Gitlab)</a><br>
			</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Smartphone 2018.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>