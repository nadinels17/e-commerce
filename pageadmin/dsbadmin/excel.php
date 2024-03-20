<?php
 $conn = mysqli_connect("localhost" , "root","","nlsmochie");
 $query= mysqli_query($conn, "SELECT * FROM shop");

 $no = 1;

 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=Data shop.xls");

?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>

<title></title>
<style type="text/css">
    table {
        border-collapse: collapse;
    }
    table th, table td {
        border: 3px solid pink;
        padding: 1px 6px;
    }

</style>
</head>

<body>

        <center>
            <h1>Table Produk</h1>
        </center>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="POST">
                            <div class="input-group">
                            <input class="form-control" style="margin-left: 45rem;" type="text" name="name" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch"/>
                                <button class="btn btn-danger" id="btnNavbarSearch" type="button" name="search">EXPORT EXCEL</button>
                            </div>
</form>
<br><br>
<table class="table">
  <thead>
    <tr class="table-danger">
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Harga Produk</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($query as $data) :?>
    <tr class="table-danger">
      <th><?=$no++?></th>
      <td><?= $data['nm_produk'];?></td>
      <td><?= $data['deskripsi'];?></td>
      <td><?= $data['harga'];?></td>
  <?php endforeach;?>

  </body>
</html>