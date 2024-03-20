<?php 

require "function.php";
$conn = mysqli_connect("localhost" , "root","","nlsmochie");

$id=$_GET["id_produk"];

// mysqli_query($conn, "DELETE FROM tb_transaksi WHERE id_transaksi= $id");
if  (hapustransaksi($id)>0) {
    echo "
            <script>
                alert('Produk berhasil dihapus!!');
                document.location.href = 'allproduct.php';
            </script>
    ";
} else{ 
    echo "
            <script>
                alert('Produk gagal dihapus!');
                document.location.href = 'allproduct.php';
            </script>
    ";
}

?>

<?php 

require "function.php";
$conn = mysqli_connect("localhost" , "root","","nlsmochie");

$id=$_GET["id_pesanan"];

// mysqli_query($conn, "DELETE FROM tb_transaksi WHERE id_transaksi= $id");
if  (hapuspesanan($id)>0) {
    echo "
            <script>
                alert('Produk berhasil dihapus!!');
                document.location.href = 'detailpesanan.php';
            </script>
    ";
} else{ 
    echo "
            <script>
                alert('Produk gagal dihapus!');
                document.location.href = 'detailpesanan.php';
            </script>
    ";
}

?>