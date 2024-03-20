<?php
 $conn = mysqli_connect("localhost" , "root","","nlsmochie");
 $query= mysqli_query($conn, "SELECT * FROM pemesanan");

 $no = 1;

 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=Data pesanan.xls");

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
            <h1>Table Pemesanan</h1>
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
      <th scope="col">Nama</th>
      <th scope="col">Jumlah Pesanan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($query as $data) :?>
    <tr class="table-danger">
      <th><?=$no++?></th>
      <td><?= $data['nama'];?></td>
      <td><?= $data['Jumlah_pesanan'];?></td>
      <td><?= $data['alamat'];?></td>
      <td>
        <a class="btn btn-danger" href="delete.php?id_produk=<?=$data['id_pesanan'];?>">DELETE</a><br><br>
        <a class="btn btn-info" href="edit_pesanan.php?id_produk=<?=$data['id_pesanan'];?>">EDIT</a>
      </td>
  </tr>
  <?php endforeach;?>
  </tbody>
  </table>
  </body>
</html>