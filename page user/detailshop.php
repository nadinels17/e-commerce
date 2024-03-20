<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
    </a>
  </div>
</nav>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFB6C1;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

<div class="container-fluid px-4">

<?php

require "../pageadmin/dsbadmin/function.php";

$id = $_GET['id_produk'];

$conn = mysqli_connect("localhost" , "root","","nlsmochie");
$query= mysqli_query($conn, "SELECT * FROM shop WHERE id_produk = '$id'");



    $no = 1;

?>

<h1 style="margin-left: 60px; margin-top: 30px; color: brown; font-size: 50px;">Shop</h1>

<?php while($row = mysqli_fetch_array($query)) { ?>
<ol class="breadcrumb mb-4" style="margin-left: 60px;">
                            <li class="breadcrumb-item"><a style="color:grey;" href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a style="color:grey;" href="shop.php">Shop</a></li>
                            <li class="breadcrumb-item active"><a style="color:grey;" href="shop.php"><?=$row['nm_produk'];?></a></li>
</ol>
</div>
<a href="shop.php" style="margin-left: 90px;" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
  <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
  <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
</svg> Back</a><br><br>
<div class="container-fluid">

<div class="row">

<div class="col"><img style="margin-left: 80px; border-radius: 20px;" src="../pageadmin/dsbadmin/image/<?=$row['gambar'];?>" alt=""></div>

<div class="col">

    <h1 style="font-size: 60px;"><?=$row['nm_produk'];?></h1><br>
    <h6 style="color: grey; font-size: 30px;">Rp <?=$row['harga'];?>,00</h6><br>
    <p><?=$row['deskripsi'];?></p>
<br>
    <div class="row">

    <div class="col">
      <form>
      <input type="number" name="quantity" value="1" class="form-control btn" style="background-color: #FFB6C1; width: 70px;">
      </form>
    </div>
    <div class="col">
    <input type="submit" name="addcart" class="btn" style="margin-left: -200px; background-color: #FF69B4; color: white;" 
    value= "Add to cart">
    </div>
    </div>
</div>

</div>
</div>
<?php } ?>

<br><br><br>
<!--Footer--> 
<!--<div class="card text-center">
  <div class="card-header" style="background-color: #C87979;">
  </div>
</div>-->
<div class="card-body" style="background-color: #C87979;">
    <br>
    <div class="row">
      <div class="col">
    <h2 style="font-family: 'Alumni Sans Inline One', cursive;">NLS' Mochies</h2>
    <h5 class="card-title mx-5">Mochi everyday</h5>
    <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item mx-2">
        <a class="nav-link active" style="color: rgb(255, 255, 255);" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link" style="color: rgb(255, 255, 255);" href="#">About us</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link" style="color: rgb(255, 255, 255);" href="#">Shop</a>
      </li>
    </ul> -->
      </div>

      <div class="col">
        <div class="text-center">
    <h5 class="card-title">We Accept</h5>
    <p class="card-text">Our ordering system use 
      shopeepay, ovo, dana, <br>
      credit card</p>
      </div>
      </div>

      <div class="col">
        <h6 class="mx-5">Contact us</h6>
        <p class="mx-5">+62 858 1033 8875<br>
          (you can call 8 AM- 10 PM)
        </p>
        <h6 class="mx-5">Follow us</h6>
        <div class="text-center">
        <a href="#" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg>
        </a>

        <a href="#" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
          <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
        </svg>
        </a>

        <a href="#" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
          </svg>
        </a><br>
        </div>
        
      </div>
    </div>
  </div>

  <div class="card text-center">
  <div class="card-footer text-muted">
    copyright©2022 nls'mochies All Rights Reserved
  </div>
  </div>