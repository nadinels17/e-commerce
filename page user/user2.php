<?php 
session_start();

if ($_SESSION["login"] != true){
    echo
    "<script>
        alert('silahkan login dulu!');
        document.location.href = 'login.php';
    </script>";
}

if ($_SESSION["delete.php?id_akun=<?=$data['id_akun'];?"] != true){
    echo
    "<script>
        alert('silahkan login dulu!');
        document.location.href = 'login.php';
    </script>";
}
?>