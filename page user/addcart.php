<?php 
session_start();

$id_produk= $_GET['id_produk'];

if (isset($_SESSION['cart'][$id_produk]))
{
    $_SESSION['cart'][$id_produk] +=1;
}

else 
{
    // $_SESSION['cart'][$id_produk]= 1;
}

// echo "
// <script> alert('Product berhasil ditambahkan'); </script>";
// echo "
// <script> document.location.href= 'cart.php'; </script>";


?>