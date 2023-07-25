<?php
//memasukkan file config.php
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register SamBat</title>
    <link rel="shortcut icon" href="img/logosn.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row"style="background-image: url(assets/img/slide/images.jpg); background-size: cover;">
                    <div class="col-lg-5 d-none d-lg-block ">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                <p style="text-align: center; color: black; font-style: bold; font-size: 20px;">Daftar akun anda menggunakan NIK anda</p>
                            </div>
        <?php
        if(isset($_POST['submit'])){
            $nik                = $_POST['nik'];
            $nama               = $_POST['nama'];
            $username           = $_POST['username'];
            $password           = $_POST['password'];
            $telp               = $_POST['telp'];
            $email 				= $_POST['email'];
            
            $cek = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE nik='$nik'") or die(sql_error($koneksi,_LINE_));
            
            if(mysqli_num_rows($cek) == 0){
                $sql = mysqli_query($koneksi, "INSERT INTO masyarakat (nik, nama, username, password, telp, email) VALUES('$nik', '$nama', '$username', '$password', '$telp', '$email')") or die(sql_error($koneksi,_LINE_));
                
                if($sql){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="login-masyarakat.php";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }
            }else{
                echo '<div class="alert alert-warning">Gagal, NIK sudah terdaftar.</div>';
            }
        }
        ?>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nik" id="exampleFirstName"
                                            placeholder="Nik">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="nama" id="exampleLastName"
                                            placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                	<div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="username" id="exampleInputEmail"
                                        placeholder="Username">
                                	</div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleRepeatPassword" name="telp" placeholder="No Telepon">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleRepeatPassword" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Register account">
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html" style="color: black; font-style: bold;">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login-masyarakat.php" style="color: black;">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>