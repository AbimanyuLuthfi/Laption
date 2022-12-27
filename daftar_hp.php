<?php 
session_start();
include('koneksi.php');
?>

<?php 
	if(isset($_POST["tambah_laptop"])){
		$nama_laptop      = $_POST["nama_laptop"];
		$harga_laptop     = $_POST["harga_laptop"];
		$ram_laptop       = $_POST["ram_laptop"];
		$storage_laptop    = $_POST["storage_laptop"];
		$processor_laptop = $_POST["processor_laptop"];
		$baterai_laptop    = $_POST["baterai_laptop"];
		
		$harga_angka = $ram_angka = $storage_angka = $processor_angka = $baterai_angka = 0;

		if($harga_laptop < 6000000){
			$harga_angka = 5;
		} 
		elseif($harga_laptop >= 6000000 && $harga_laptop <= 7000000){
			$harga_angka = 4;
		}
		elseif($harga_laptop > 7000000 && $harga_laptop <= 8000000){
			$harga_angka = 3;
		}
		elseif($harga_laptop > 8000000 && $harga_laptop <= 9500000){
			$harga_angka = 2;
		}
		elseif($harga_laptop > 9500000){
			$harga_angka = 1;
		}


		if($ram_laptop < 2){
			$ram_angka = 1;
		}
		elseif($ram_laptop >= 2 && $ram_laptop <4){
			$ram_angka = 2;
		}
        elseif($ram_laptop >= 4 && $ram_laptop < 8) {
            $ram_angka = 3;
        }
        elseif($ram_laptop == 8) {
            $ram_angka = 4;
        }
        elseif($ram_laptop > 8) {
            $ram_angka = 5;
        }


		if($storage_laptop < 1000){
			$storage_angka = 1;
		}
		elseif($storage_laptop == 1000){
			$storage_angka = 2;
		}
		elseif($storage_laptop == 128){
			$storage_angka = 3;
		}
		elseif($storage_laptop == 256){
			$storage_angka = 4;
		}
		elseif($storage_laptop >= 512){
			$storage_angka = 5;
		}


		if($processor_laptop == "AMD Ryzen 3 5300U"){
			$processor_angka = 5;
		}
		elseif($processor_laptop == "Core i7 12700H"){
			$processor_angka = 5;
		}
		elseif($processor_laptop == "Core i7 8565U"){
			$processor_angka = 3;
		}
        elseif($processor_laptop == "Core i5 8265U"){
			$processor_angka = 3;
		}
        elseif($processor_laptop == "Core i3 1115G4"){
			$processor_angka = 3;
		}
        elseif($processor_laptop == "Core i5 8250U"){
			$processor_angka = 3;
		}
        elseif($processor_laptop == "AMD Ryzen 5 3500U"){
			$processor_angka = 3;
		}
        elseif($processor_laptop == "Core i3 1005G1"){
			$processor_angka = 2;
		}
        elseif($processor_laptop == "AMD Ryzen 3 3250U"){
			$processor_angka = 2;
		}
        elseif($processor_laptop == "Core i7 7600U"){
			$processor_angka = 2;
		}
        elseif($processor_laptop == "Core i3 10110U"){
			$processor_angka = 2;
		}
        elseif($processor_laptop == "AMD Ryzen 3 3250U"){
			$processor_angka = 2;
		}
        elseif($processor_laptop == "Core M3 8100Y"){
			$processor_angka = 1;
		}
        elseif($processor_laptop == "Celeron N4020"){
			$processor_angka = 1;
		}


		if($baterai_laptop <= 35){
			$baterai_angka = 1;
		}
		elseif($baterai_laptop > 36 && $baterai_laptop <= 40){
			$baterai_angka = 2;
		}
		elseif($baterai_laptop > 41 && $baterai_laptop <= 45){
			$baterai_angka = 3;
		}
        elseif($baterai_laptop > 46 && $baterai_laptop <= 50){
			$baterai_angka = 4;
		}
        elseif($baterai_laptop > 50){
			$baterai_angka = 5;
		}

		$sql = "INSERT INTO `data_laptop` (`id_laptop`, `nama_laptop`, `harga_laptop`, `ram_laptop`, `storage_laptop`, `processor_laptop`, `baterai_laptop`, `harga_angka`, `ram_angka`, `storage_angka`, `processor_angka`, `baterai_angka`) 
				VALUES (NULL, :nama_laptop, :harga_laptop, :ram_laptop, :storage_laptop, :processor_laptop, :baterai_laptop, :harga_angka, :ram_angka, :storage_angka, :processor_angka, :baterai_angka)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nama_laptop', $nama_laptop);
		$stmt->bindValue(':harga_laptop', $harga_laptop);
		$stmt->bindValue(':ram_laptop', $ram_laptop);
		$stmt->bindValue(':storage_laptop', $storage_laptop);
		$stmt->bindValue(':processor_laptop', $processor_laptop);
		$stmt->bindValue(':baterai_laptop', $baterai_laptop);
		$stmt->bindValue(':harga_angka', $harga_angka);
		$stmt->bindValue(':ram_angka', $ram_angka);
		$stmt->bindValue(':storage_angka', $storage_angka);
		$stmt->bindValue(':processor_angka', $processor_angka);
		$stmt->bindValue(':baterai_angka', $baterai_angka);
		$stmt->execute();
	}

	if(isset($_POST["hapus_laptop"])){
		$id_hapus_laptop = $_POST['id_hapus_laptop'];
		$sql_delete = "DELETE FROM `data_laptop` WHERE `id` = :id_hapus_laptop";
		$stmt_delete = $db->prepare($sql_delete);
		$stmt_delete->bindValue(':id_hapus_laptop', $id_hapus_laptop);
		$stmt_delete->execute();
		$query_reorder_id=mysqli_query($selectdb,"ALTER TABLE data_laptop AUTO_INCREMENT = 1");
	}
?>

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

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

</head>
<body>
<?php
require_once "header.php";
?>
		<!-- Body Start -->

		<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 40px 0px 20px 0px;">
				<ul>
				    <li>
						<div class="row">
						<div class="card">
								<div class="card-content">
									<center><h4 style="margin-bottom: 0px; margin-top: -8px;">Daftar Laptop</h4></center>
									<table id="table_id" class="hover dataTablesCustom" style="width:100%">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>No </center></th>
													<th><center>Nama HP</center></th>
													<th><center>Harga HP</center></th>
													<th><center>RAM HP</center></th>
													<th><center>Memori HP</center></th>
													<th><center>Processor HP</center></th>
													<th><center>Kamera HP</center></th>
													<th><center>Hapus</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_laptop");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $data['nama_laptop'] ?></center></td>
													<td><center><?php echo "Rp. ", $data['harga_laptop'] ?></center></td>
													<td><center><?php echo $data['ram_laptop']," GB" ?></center></td>
													<td><center><?php echo $data['storage_laptop']," GB" ?></center></td>
													<td><center><?php echo $data['processor_laptop'] ?></center></td>
													<td><center><?php echo $data['baterai_laptop']," Wh" ?></center></td>
													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_laptop" value="<?php echo $data['id'] ?>">
																<button type="submit" name="hapus_laptop" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 32px;" class="material-icons">remove</i></button>
															</form>
														</center>
													</td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
									
							</div>
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light teal btn-float-custom"><i class="material-icons">add</i></a>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 1px 20% 24px 20%;">
				<ul>
				    <li>
						<div class="row">
							<div class="card">
								<div class="card-content" style="padding-top: 10px;">
									<center><h5 style="margin-bottom: 10px;">Analisa Smartphone</h5></center>
									<table class="responsive-table">
									
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>Alternatif</center></th>
													<th><center>C1 (Cost)</center></th>
													<th><center>C2 (Benefit)</center></th>
													<th><center>C3 (Benefit)</center></th>
													<th><center>C4 (Benefit)</center></th>
													<th><center>C5 (Benefit)</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_laptop");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo "A",$no ?></center></td>
													<td><center><?php echo $data['harga_angka'] ?></center></td>
													<td><center><?php echo $data['ram_angka'] ?></center></td>
													<td><center><?php echo $data['storage_angka'] ?></center></td>
													<td><center><?php echo $data['processor_angka'] ?></center></td>
													<td><center><?php echo $data['baterai_angka'] ?></center></td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
							</div>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Modal Start -->
	<div id="tambah" class="modal" style="width: 40%; height: 100%;">
		<div class="modal-content">
			<div class="col s6">
					<div class="card-content">
						<div class="row">
							<center><h5 style="margin-top:-8px;">Masukan Smartphone</h5></center>
							<form method="POST" action="">
								<div class = "row">
									<div class="col s12">

										<div class="col s6" style="margin-top: 10px;">
											<b>Nama</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="nama" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Harga</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="harga" type="number" required>
										</div>
										
										<div class="col s6" style="margin-top: 10px;">
										<b>RAM</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="ram">
												<!-- <option value = "" disabled selected>Kriteria RAM</option>  -->
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
											<select style="display: block; margin-bottom: 4px;" required name="memori">
												<!-- <option value = "" disabled selected>Kriteria Penyimpanan</option> -->
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
											<select style="display: block; margin-bottom: 4px;" required name="memori">
												<!-- <option value = "" disabled selected>Kriteria Penyimpanan</option> -->
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
											<input style="height: 2rem;" name="harga" type="number" required>
										</div>

									</div>  
								</div> 
								<center><button name="tambah_laptop" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;">Tambah</button></center>	
							</form>
						</div>
					</div>
				</div>
			</div>
		<div style="height: 0px; "class="modal-footer">
          <a style="margin-top: -30px;" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
	</div>
	<!-- Modal End -->

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
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>