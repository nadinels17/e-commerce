<?php 
$conn = mysqli_connect("localhost","root","","nlsmochie");

function insertdata($data){
    global $conn;

    $nm_produk= $data["nm_produk"];
    $deskripsi= $data["deskripsi"];
    $harga= $data["harga"];
    $foto= tambahfoto();

    if(!$foto){
        return false;
    }
    
    mysqli_query($conn, "INSERT INTO shop VALUES (NULL,'$nm_produk','$deskripsi','$harga','$foto')");
    
    return mysqli_affected_rows($conn);

    
    
}

function pesanan($data){
    global $conn;

    $nama= $data["nama"];
    $Jumlah_pesanan= $data["Jumlah_pesanan"];
    $negara= $data["negara"];
    $provinsi= $data["provinsi"];
    $kota= $data["kota"];
    $alamat= $data["alamat"];
    $kodepos= $data["kodepos"];
    $notelp= $data["notelp"];
    $notes= $data["notes"];
    $method= $data["method"];
    $status= $data["status"];

    
    mysqli_query($conn, "INSERT INTO pemesanan VALUES (NULL,'$nama','$Jumlah_pesanan','','$negara','$provinsi','$kota','
                                                    $alamat','$kodepos','$notelp','$notes','$method','$status')");
    
    return mysqli_affected_rows($conn);

    
    
}

function regisadmin($data){
    global $conn;

    $namaawal= strtolower(stripslashes($data["namaawal"]));
    $email= strtolower(stripslashes($data["email"]));
    $password= mysqli_real_escape_string($conn , $data["password"]);
    $confirmpass= mysqli_real_escape_string($conn , $data["password2"]);
    $foto= adminfoto();

    if(!$foto){
        return false;
    }
    $role = "admin";

    //validasi 1
    if ($password !== $confirmpass) {
        echo "
            <script>
                alert('konfirmasi password salah!!');
            </script>
        ";
        return false;
    }

    //validasi 2

    $validasi2 = mysqli_query($conn, "SELECT namaawal FROM admin WHERE namaawal = '$namaawal' ") ;
       if (mysqli_fetch_assoc($validasi2)) {
        echo "
            <script>
                alert('nama sudah terdaftar');
                </script>
                ";
            }
            
            //validasi 3
            $validasi3 = mysqli_query($conn, "SELECT email FROM admin WHERE email = '$email' ") ;
            if (mysqli_fetch_assoc($validasi3)) {
                echo "
                <script>
                alert('email sudah terdaftar');
                </script>
                ";
            }
            
            $password = password_hash($password , PASSWORD_DEFAULT);
            
            mysqli_query($conn, "INSERT INTO admin VALUES('', '$namaawal','$email', '$password','$role',now(),'$foto')");
            
            return mysqli_affected_rows($conn);
            
        }

        function adminfoto() {

            $namaFile = $_FILES['gambar']['name'];
            $ukuranFile = $_FILES['gambar']['size'];
            $error = $_FILES['gambar']['error'];
            $tmpName = $_FILES['gambar']['tmp_name'];
            
            // cek apakah tidak ada foto yang diupload
            if( $error === 4 ) {
                echo "<script>
                alert('pilih gambar terlebih dahulu!');
                      </script>";
                return false;
            }
            
            // cek apakah yg diupload adalah foto
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
                echo "<script>
                        alert('Yang Anda upload bukan gambar!');
                    </script>";
                return false;
            }
        
            // cek jika ukurannya terlalu besar
            if( $ukuranFile > 1000000 ) {
                echo "<script>
                        alert('ukuran gambar terlalu besar!');
                    </script>";
                return false;
            }
        
            // lolos pengecekan, foto siap upload
            // generate nama foto baru
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;
        
            move_uploaded_file($tmpName, 'image3/' . $namaFileBaru);
        
            return $namaFileBaru;
        
        }
        
        function tambahfoto() {
        
            $namaFile = $_FILES['gambar']['name'];
            $ukuranFile = $_FILES['gambar']['size'];
            $error = $_FILES['gambar']['error'];
            $tmpName = $_FILES['gambar']['tmp_name'];
        
            // cek apakah tidak ada foto yang diupload
            if( $error === 4 ) {
                echo "<script>
                        alert('pilih foto terlebih dahulu!');
                      </script>";
                return false;
            }
        
            // cek apakah yg diupload adalah foto
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
                echo "<script>
                        alert('Yang Anda upload bukan foto!');
                    </script>";
                return false;
            }
        
            // cek jika ukurannya terlalu besar
            if( $ukuranFile > 1000000 ) {
                echo "<script>
                        alert('ukuran foto terlalu besar!');
                    </script>";
                return false;
            }
        
            // lolos pengecekan, foto siap upload
            // generate nama foto baru
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;
        
            move_uploaded_file($tmpName, 'image/' . $namaFileBaru);
        
            return $namaFileBaru;
        
        }
        
    function masukdata($data){
            global $conn;
        
            $nama= strtolower(stripslashes($data["nama"]));
            $email= strtolower(stripslashes($data["email"]));
            $password= mysqli_real_escape_string($conn , $data["password"]);
            $confirmpass= mysqli_real_escape_string($conn , $data["password2"]);
            $role = "user";
            
            
        
            $foto= registerfoto();
        
            if(!$foto){
                return false;
            }
        
            //validasi 1
            if ($password !== $confirmpass) {
                echo "
                    <script>
                        alert('konfirmasi password salah!!');
                    </script>
                ";
                return false;
            }
        
            //validasi 2
        
            $validasi2 = mysqli_query($conn, "SELECT nama FROM akun WHERE nama = '$nama' ") ;
               if (mysqli_fetch_assoc($validasi2)) {
                echo "
                    <script>
                        alert('nama sudah terdaftar');
                        </script>
                        ";
                    }
                    
                    //validasi 3
                    $validasi3 = mysqli_query($conn, "SELECT email FROM akun WHERE email = '$email' ") ;
                    if (mysqli_fetch_assoc($validasi3)) {
                        echo "
                        <script>
                        alert('email sudah terdaftar');
                        </script>
                        ";
                    }
                    
                    $password = password_hash($password , PASSWORD_DEFAULT);
                    
                    mysqli_query($conn, "INSERT INTO akun VALUES('', '$nama','$email', '$password','$role',now(),'$foto')");
                    
                    return mysqli_affected_rows($conn);
                    
    }     
        
function registerfoto() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    
    // cek apakah tidak ada foto yang diupload
    if( $error === 4 ) {
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }
    
    // cek apakah yg diupload adalah foto
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Yang Anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, foto siap upload
    // generate nama foto baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../pageadmin/dsbadmin/image2/' . $namaFileBaru);

    return $namaFileBaru;

}


function masukfoto() {

    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah tidak ada foto yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih foto terlebih dahulu!');
              </script>";
        return false;
    }

    // cek apakah yg diupload adalah foto
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Yang Anda upload bukan foto!');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran foto terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, foto siap upload
    // generate nama foto baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'image/' . $namaFileBaru);

    return $namaFileBaru;

}

?>