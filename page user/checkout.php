<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #FFB6C1;">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-family: 'Alumni Sans Inline One', cursive;
                                   font-size: 60px; margin-left: 480px; margin-top: 20px;" href="#">
                NLS'Mochies
            </a>
            <a class="propil" href="user.php" style="width: 40px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFB6C1;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="yah">
                    <li class="yeh">
                        <a class="yih" href="index.php">Home</a>
                    </li>
                    <li class="yeh">
                        <a class="yih" href="aboutus.php">About us</a>
                    </li>
                    <li class="yeh">
                        <a class="yih" href="shop.php">Shop</a>
                    </li>
                    <li class="yeh">
                        <a class="yih" href="cart.php">Cart</a>
                    </li>
                    <li class="yeh">
                        <a class="yih" href="checkout.php">Checkout</a>
                    </li>
                </ul>

            </div>
        </div>
        <br><br><br>
    </nav>

    <?php
require "../pageadmin/dsbadmin/function.php";
$conn = mysqli_connect("localhost" , "root","","nlsmochie");

$qury = mysqli_query($conn, "SELECT * FROM akun" );
$qry= mysqli_query($conn, "SELECT * FROM keranjang");
$qry2= mysqli_query($conn, "SELECT * FROM shop");

if(isset($_POST['submit'])){
// $id_produk = mysql_real_escape_string($_GET['id_produk']);
  $id_produk = $_GET['id_produk'];
  $nama = $_POST['nama'];
  $negara = $_POST['negara'];
  $provinsi = $_POST['provinsi'];
  $kota = $_POST['kota'];
  $alamat = $_POST['alamat'];
  $kodepos= $_POST['kodepos'];
  $notelp = $_POST['notelp'];
  $method = $_POST['method'];
  $notes = $_POST['notes'];

  $simpan= mysqli_query($conn, "INSERT INTO pemesanan VALUES(NULL,'$nama','$id_produk', '$negara','$provinsi','$kota','$alamat', '$kodepos','$notelp','$notes', '$method', 'Menunggu konfirmasi')");
  
  if($simpan){
    echo "<script>
          alert('TERIMAKASIH SUDAH MEMBELI');
          document.location.href = 'shop.php';
        </script>";

  }else {
    echo "maaf proses pembelian gagal!";
  }
}

//     
?>





    <br><br>

    <div class="container">
        <div class="bungkus" style=" border: 2px solid #FFB6C1; border-radius: 20px; background-color: #FFB6C1">

            <div class="row mt-3 mx-4">
                <div class="col">
                    <form action="" method="post" enctype="multipart/form-data">
                        <label class="form-label" for="">Nama</label>
                        <input class="form-control" value="<?=$_SESSION["nama"];?>" type=" text" name="nama" id="">
                        </br>
                        <label class="form-label" for="">Country/Region</label>
                        <input class="form-control" type="text" name="negara" id="">
                        </br>
                        <label class="form-label" for="">Province</label>
                        <input class="form-control" type="text" name="provinsi" id="">
                        </br>
                        <label class="form-label" for="">Town/City</label>
                        <input class="form-control" type="text" name="kota" id="">
                        </br>
                        <label class="form-label" for="">Street Address</label>
                        <input class="form-control" type="text" name="alamat" id="">
                        </br>
                        <label class="form-label" for="">Postcode/Zip</label>
                        <input class="form-control" type="number" name="kodepos" id="">
                        </br>
                        <label class="form-label" for="">Phone</label>
                        <input class="form-control" type="text" name="notelp" id="">
                        </br>
                        <!-- <div class="mb-3">
        <label class="form-label" for="">Email</label>
        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" name="email" value="<?=$data['email'];?>"
                            placeholder="Email address">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div> -->

                        </br><br>
                </div>

                <div class="col mx-3">
                    <span>Payments method</span><br><br>
                    <select class="btn btn-danger dropdown-toggle" name="method">
                        <option class="dropdown-item" value="Cash on delivery" selected>Cash on delivery</option>
                        <option class="dropdown-item" value="Credit card">Credit card</option>
                    </select><br><br>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Order notes (optional)</label>
                        <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-success" name="submit">Pesan</button>
                </form>

            </div>
            <br><br>
        </div>
    </div>