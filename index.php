<?php
include "koneksi.php";
session_start();
$err        = "";
$username   = "";

if(isset($_SESSION['session_username'])){
    header("location:mahasiswa.php");
    exit();
}

if(isset($_POST['login'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    if($username == '' or $password == ''){
        $err .= "<li>Silakan masukkan username dan juga password.</li>";
        $_SESSION['proses']= "Username atau Password anda salah";
    }else{
        $sql1 = "select * from login where username = '$username'";
        $q1   = mysqli_query($koneksi,$sql1);
        $r1   = mysqli_fetch_array($q1);

        if($r1['username'] == ''){
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
            $_SESSION['proses']= "Username atau Password anda salah";

        }elseif($r1['password'] != $password){
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
            $_SESSION['proses']= "Username atau Password anda salah";
        }       
        
        if(empty($err)){
            $_SESSION['session_username'] = $username; //server
            $_SESSION['session_password'] = $password;
            header("location:mahasiswa.php");
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="https://ft.unigha.ac.id/wp-content/uploads/sites/4/2021/02/cropped-Logo-Ung-Transparan-192x192.png">
  <title>Sistem Informasi Mahasiswa</title>
</head>

<body>
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://labkom.unigha.ac.id/wp-content/uploads/sites/22/2021/11/cropped-Universitas-Jabal-Ghafur-1.png"class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form id="loginform" class="form-horizontal" action="" method="post" role="form">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3"><b>SISTEM INFORMASI MAHASISWA</b></p>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Silahkan Login</p>
          </div>

          <div class="form-outline mb-4">
            <input type="text" name="username" class="form-control form-control-lg" placeholder="Masukkan Username" />
            <label class="form-label" for="username">Username</label>
          </div>

          <div class="form-outline mb-3">
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Masukkan Password" />
            <label class="form-label" for="password">Password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"></input>
          </div><br>
        </form>

        <?php 
            if (isset($_SESSION['proses'])):
         ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <?php echo $_SESSION['proses'] ?>
            </div>
        <?php 
            session_destroy();
            endif;
         ?>

      </div>
    </div>
  </div>
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
  <div class="text-white mb-3 mb-md-0">Copyright © 2023 <b>Andi Ardiyansyah</b>. All rights reserved.</div>
</section>
</body>
</html>