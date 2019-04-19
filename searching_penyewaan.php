<?php
include "database.php";
$key = $_POST['search'];
$query = mysqli_query($connect, "SELECT * FROM penyewaan WHERE id_sewa LIKE '%$key%' OR tanggal_sewa LIKE '%$key%' OR tanggal_kembali LIKE '%$key%' OR tarif LIKE '%$key%'  ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>



		<div class="container">
		<h1 class="display-4 text-center py-5">Penyewaan</h1>
		<table border="1" class="table">
			<tr class="p-3 mb-2 bg-dark text-white">
        <th> ID Sewa </th>
        <th> Tanggal Sewa </th>
        <th> Alamat </th>
        <th> Tanggal Kembali </th>
        <th> Tarif</th>
			</tr>

		<?php

			foreach ($query as $key)
			{
				echo "
					<tr>
          <td>$key[id_sewa]</td>
          <td>$key[tanggal_sewa]</td>
          <td>$key[tanggal_kembali]</td>
          <td>$key[tarif]</td>
					</tr>
				";

			}
		?>

		</table>
	</div>
</body>
