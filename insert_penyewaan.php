<?php 
	require 'index.php';
	include 'database.php';
	if($_POST ) {
		$id_sewa = $_POST['id_sewa'];
		$id = $_POST['id'];
		$kode = $_POST['kode'];
		$tgl_sewa = $_POST['tgl_sewa'];
		$tgl_kembali = $_POST['tgl_kembali'];
		$tarif = $_POST['tarif'];
		

		echo $id_sewa;
		echo $id;
		echo $kode;
		echo $tgl_sewa;
		echo $tgl_kembali;
		echo $tarif;
		

		$query = mysqli_query($connect,"INSERT INTO penyewaan VALUES($id_sewa, $id, $kode,'$tgl_sewa','$tgl_kembali', $tarif)");
		//$sql = mysqli_query($connect, $query);

		if($query) {
			//echo "Data tersimpan";
			// die("berhasil");
			header("location:tampil_penyewaan.php");
		} else {
			echo "Gagal tersimpan";
			
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1 class="display-2 text-center py-5">HALAMAN INPUT</h1>
		<p class="lead text-center">Masukan Data Penyewaan</p>
		<div class="row">
			<div class="col-1"></div>		
			<div class="col-6">
				<form action="insert_penyewaan.php" method="post">
				  <div class="form-group">
				    <label for="id_sewa">ID Sewa</label>
				    <input type="text" class="form-control" id="id_sewa" name="id_sewa" placeholder="ID Sewa">
				  </div>
				  <div class="form-group">
				    <label for="id">ID Pelanggan</label>
				    <input type="text" class="form-control" id="id" name="id" placeholder="ID Pelanggan">
				  </div>
				  <div class="form-group">
				    <label for="kode">Kode Mobil</label>
				    <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Mobil">
				  </div>
				  <div class="form-group">
				    <label for="tgl_sewa">Tanggal Sewa</label>
				    <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" placeholder="Tanggal Sewa">
				  </div>
				  <div class="form-group">
				    <label for="tgl_kembali">Tanggal Kembali</label>
				    <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" placeholder="Tanggal Kembali">
				  </div>
				  <div class="form-group">
				    <label for="tarif">Tarif</label>
				    <input type="text" class="form-control" id="tarif" name="tarif" placeholder="Tarif">
				  </div>
				  <button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>			
			<div class="col-2"></div>		
		</div>
	</div>
</body>
</html>