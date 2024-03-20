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

require "function.php";

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
                        <h1 class="mt-4">Customers</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Customers</li>
                        </ol>
                        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="POST">
                            <div class="input-group">
                            <input class="form-control" style="margin-left: 50rem;" type="text" name="name" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch"/>
                                <button class="btn btn-danger" id="btnNavbarSearch" type="button" name="search"><i class="fas fa-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                                <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                                <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"/>
                                </svg>
                                </i></button><br>
                               <!-- <a href="excel.php" class="btn btn-danger">EXPORT TO EXCEL</a> -->
                            </div>
                        </form>
                        <br><br>
                        
                        <!-- Section 1-->
<div class="isi1">


<div class="row">
  <div class="col"></div>
  <div class="col">

  </div>
  <div class="col"></div>
</div>
    <div class="row">

    <?php 
    $conn = mysqli_connect("localhost" , "root","","nlsmochie");
    $query= mysqli_query($conn, "SELECT * FROM akun");

    $no = 1;


    if (isset($_POST['search'])) {
      $search = $_POST['nama'];
      $query = mysqli_query($conn, "SELECT * FROM akun WHERE nama = '$search'");
    }

    $data = mysqli_query($conn, "SELECT * FROM akun");
    $jumlahuser= mysqli_num_rows($data);
  
  ?>

  <p style="font-size: 20px; color: grey;">Jumlah Customers : <?=$jumlahuser;?></p>

<div class="kertas">
</br>
<table class="table">
  <thead>
    <tr class="table-danger">
      <th scope="col">No</th>
      <!-- <th scope="col">foto</th> -->
      <th scope="col">foto</th>
      <th scope="col">Nama User</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach ($query as $data) :?>
    <tr class="table-danger">
      <th><?=$no++?></th>
      <td>
        <img src="image2/<?=$data['gambar'];?>" width="50px" alt="">
      </td>
      <td><?= $data['nama'];?></td>
      <td><?= $data['email'];?></td>
      
  <?php endforeach;?>

    </tr>
  </tbody>
</table>
<button class="btn btn-danger" onclick="pdf()" >EXPORT JADI PDF</button>
</div>
</div>
</div>
    </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
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

        <script>
            function pdf(){
                window.print();
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
