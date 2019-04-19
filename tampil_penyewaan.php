<?php
  include 'database.php';
  $query = mysqli_query($connect, "SELECT * FROM penyewaan");
  // print_r($query);
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Rental Mobil</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" form method="post" action="searching_penyewaan.php">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-succses my-2 my-sm-0"  type="submit" name ="send" >Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
    <h1 class="display-3 text-center py-5">Penyewaan</h1>
    <table border="1" class="table">
      <tr class="p-3 mb-2 bg-dark text-white">
        <th> ID Sewa </th>
        <th> ID Pelanggan </th>
        <th> Kode Mobil </th>
        <th> Tanggal Sewa </th>
        <th> Tanggal Kembali </th>
        <th> Tarif</th>
        <th colspan="2"> Actions </th>
      </tr>

    <?php

      foreach ($query as $key)
      {
        echo "
          <tr>
            <td>$key[id_sewa]</td>
            <td>$key[id]</td>
            <td>$key[kode]</td>
            <td>$key[tgl_sewa]</td>
            <td>$key[tgl_kembali]</td>
            <td>$key[tarif]</td>
            <td><a href=editpelanggan.php?id=$key[id_sewa]>Edit</a></td>
            <td><a href=deletepelanggan.php?id=$key[id_sewa]>Delete</a></td>
          </tr>
        ";

      }
    ?>

    </table>
  </div>

</body>
</html>
