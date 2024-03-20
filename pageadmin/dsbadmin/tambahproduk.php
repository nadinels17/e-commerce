<?php
include 'function.php';

global $conn;
$data = mysqli_query($conn, "SELECT * FROM shop"); 

if (isset($_POST["submit"])) {
        
  if (insertdata($_POST) > 0){
    echo "
      <script>
      alert('Product berhasil ditambahkan!!');
      Document.location.href = 'tambahproduk.php';
      </script>
      ";
  } else {

    echo "
          <script>
            alert('Product gagal ditambahkan!!')
            Document.location.href = 'tambahproduk.php';
          </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard-Admin nls'mochies</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #FAA0A0;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">NLS' Mochies</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-danger" id="btnNavbarSearch" type="button"><i class="fas fa-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                    <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                    <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"/>
                    </svg>
                    </i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

<?php


$conn = mysqli_connect("localhost" , "root","","nlsmochie");
$query= mysqli_query($conn, "SELECT * FROM admin");
$row=mysqli_fetch_assoc($query);



?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" style="background-color: #E37383;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading">Admin Profile</div>
                            <a style="color: white;" class="nav-link" href="index.php">
                                <img src="image3/<?=$row['gambar'];?>" class="rounded-circle"  style="margin-left:50px;" width="60px" alt=""><br><br>
                            </a>
                            <a style="color: white;" class="nav-link" href="index.php">  
                                <p style="margin-left:20px;"><?=$row['namaawal'];?></p>
                            </a>
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a style="color: white;" class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Shop</div>
                            <a style="color: white;" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Product
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a style="color: #00308F;" class="nav-link" href="allproduct.php">All Product</a>
                                    <a style="color: #00308F;" class="nav-link" href="review.php">Reviews</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" style="color: white;" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pemesanan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a style="color: #00308F;" class="nav-link" href="detailpesanan.php">Detail Pesanan</a>
                                </nav>

                                    <!-- <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
                                        </nav>
                                    </div> -->
                            </div>
                            <div class="sb-sidenav-menu-heading">Details</div>
                            <a style="color: white;" class="nav-link" href="suppliers.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-truck"></i></div>
                                Suppliers
                            </a>
                            <a style="color: white;" class="nav-link" href="user.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                                Customers
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Nadyne Lourensia
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Product</li>
                        </ol>
                        
                        <br><hr>
                        

<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="POST">
    <div class="input-group">
        <a href="allproduct.php"><button class="btn btn-dark" id="btnNavbarSearch" type="button" name="search"><i class="bi bi-backspace">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
  <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
  <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
</svg> Back
        </i></button></a>
        </div>
</form>
<!-- Section 1-->
<div class="isi1">
</br> </br>
<div class="container">
  <div class="row">
    <div class="col">
    <form action="" method="post" enctype="multipart/form-data">
      <label class="form-label" for="">Nama produk</label>
      <input class="form-control" type="text" name="nm_produk" id="">
</br>
      <label class="form-label" for="">Deskripsi</label>
      <input class="form-control" type="text" name="deskripsi" id="">
</br>
      <label class="form-label" for="">Harga produk</label>
      <input class="form-control" type="text" name="harga" id="">
<!-- </br>
      <label class="form-label" for="">Jumlah Pesanan</label>
      <input class="form-control" type="number" name="jumlah" id=""> -->
</br> 
      <label class="form-label" for="">Gambar Produk</label>
      <input class="form-control" type="file" name="gambar" id="">
    
    </br><br>

      <button type="submit" class="btn btn-success" name="submit" >Tambah Produk</button>
    </form>
    </br> </br>
    </div>

    <div class="col"></div>
</div>
</div>


                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; nls'mochies Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
