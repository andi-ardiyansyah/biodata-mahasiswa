<?php
	include "koneksi.php";
	$log 	= mysqli_query($koneksi, "SELECT * FROM login");
	$ganti  = mysqli_fetch_array($log);
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Sistem Informasi Mahasiswa</title>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
      <link rel="shortcut icon" href="https://ft.unigha.ac.id/wp-content/uploads/sites/4/2021/02/cropped-Logo-Ung-Transparan-192x192.png">
      <script src="js/jquery-3.4.1.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse social-buttons">
            <ul class="nav navbar-nav">
                <li class=""><a href="mahasiswa.php"><i class="bi bi-house-door-fill"></i> Home</a></li>
                <li class="active"><a href="pengaturan.php"><i class="bi bi-gear-fill"></i> Pengaturan</a></li>
                <li class=""><a href="logout.php"><i class="bi bi-power"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<br>
<form class="container col-md-1"></form>
<form class="container col-md-2 panel panel-default" action="simpan_password.php" method="post">
	<h4><i class="bi bi-key-fill"></i> Ubah Password</h4><br>
    <div class="row">
        <div class="col-sm-12">
        	<div class="form-row">
				<div class="form-group col-md-12">
					<label for="username"><i class="bi bi-person-vcard-fill"></i> Username</label>
					<input type="text" class="form-control" name="username" value="<?php echo $ganti['username'] ?>" placeholder="Username" disabled>
				</div>
				<div class="form-group col-md-12">
					<label for="password"><i class="bi bi-person-fill"></i> Password Baru</label>
					<input type="text" class="form-control" name="password" value="" placeholder="Password"><br>
					<div><button type="submit" name="simpanpassword" class="btn btn-success">Ganti</button></div>
				</div>
			</div>
    	</div>
    </div>
</form>

<form class="container col-md-1"></form>
<form class="container col-md-7 panel panel-default">
	<h3><i class="bi bi-chat-left-text"></i> Sepatah Dua Kata</h3><br>
	<div class="row">
        <div class="col-sm-12">
        	<div class="card text-bg-primary mb-3" style="text-align: center;">
  				<div class="card-header"><b><i>Assalamualaikum warahmatullahi wabarakatuh</i></b></div>
  				<div class="card-body">
    				<h5 class="card-title">Puji Syukur Alhamdulillah tugas membuat website biodata mahasiswa ini selesai</h5>
    				<p class="card-text">Website ini ditujukan untuk menyelesaikan tugas final mata kuliah Algoritma dan Pemograman III.</p>
  				</div>
			</div>
    	</div>
    </div>
</form>
<form class="container col-md-1"></form>
</body>
</html>