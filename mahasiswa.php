<?php
include "koneksi.php";
$query 	= mysqli_query($koneksi, "SELECT * FROM biodata");
$data  	= mysqli_fetch_array($query);
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
                	<li class="active"><a href="mahasiswa.php"><i class="bi bi-house-door-fill"></i> Home</a></li>
                	<li class=""><a href="pengaturan.php"><i class="bi bi-gear-fill"></i> Pengaturan</a></li>
                	<li class=""><a href="logout.php"><i class="bi bi-power"></i> Logout</a></li>
            	</ul>
        	</div>
    	</div>
	</nav>
	<form class="container col-md-1"></form>
	<form class="container col-md-7" method="post" action="simpan.php">
		<h2>Biodata <b> <?php echo $data['nama'] ?></b></h2><br>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="npm"><i class="bi bi-person-vcard-fill"></i> NPM</label>
				<input type="text" class="form-control" name="npm" value="<?php echo $data['npm'] ?>" placeholder="Nomor Pokok Mahasiswa">
			</div>
			<div class="form-group col-md-8">
				<label for="nama"><i class="bi bi-person-fill"></i> Nama</label>
				<input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" placeholder="Nama Lengkap">
			</div>
		</div>
 
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="tempatlahir"><i class="bi bi-building-fill"></i> Tempat Lahir</label>
				<input type="text" class="form-control" name="tempatlahir" value="<?php echo $data['tempatlahir'] ?>" placeholder="Tempat Lahir">
			</div>
			<div class="form-group col-md-3">
				<label for="tanggallahir"><i class="bi bi-calendar-day-fill"></i> Tanggal Lahir</label>
				<input type="text" class="form-control" name="tanggallahir" value="<?php echo date('d-m-Y', strtotime($data['tanggallahir']));?>" placeholder="Format Tanggal: DD-MM-YY">
			</div>
			<div class="form-group col-md-3">
				<label for="jeniskelamin"><i class="bi bi-gender-ambiguous"></i> Jenis Kelamin</label>
				<select class="form-control" name="jeniskelamin" value="<?php echo $data['jeniskelamin'] ?>" placeholder="<?php echo $data['jeniskelamin'] ?>">>
					<option value="">- Pilih -</option>
					<option value="Laki-laki" <?php if ($data['jeniskelamin'] == "Laki-laki") echo "selected" ?>>Laki-laki</option>
				<option value="Perempuan" <?php if ($data['jeniskelamin'] == "Perempuan") echo "selected" ?>>Perempuan</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="alamatemail"><i class="bi bi-envelope-at-fill"></i> Email</label>
				<input type="email" class="form-control" name="alamatemail" value="<?php echo $data['alamatemail'] ?>" placeholder=". . . . @gmail.com">
			</div>
			<div class="form-group col-md-3">
				<label for="telpon"><i class="bi bi-telephone-fill"></i> No. HP / Telpon</label>
				<input type="text" class="form-control" name="telpon" value="<?php echo $data['telpon'] ?>" placeholder="Nomor Hanphone / Telepon">
			</div>
			<div class="form-group col-md-3">
				<label for="agama"><i class="bi bi-flag-fill"></i> Agama</label>
				<select name="agama" class="form-control">
					<option value="">- Pilih -</option>
					<option value="Islam"    <?php if ($data['agama'] == "Islam")	 echo "selected" ?>>Islam</option>
					<option value="Kristen"  <?php if ($data['agama'] == "Kristen")  echo "selected" ?>>Kristen</option>
					<option value="Protestan"<?php if ($data['agama'] == "Protestan")echo "selected" ?>>Protestan</option>
					<option value="Hindu"    <?php if ($data['agama'] == "Hindu")    echo "selected" ?>>Hindu</option>
					<option value="Budha"    <?php if ($data['agama'] == "Budha")    echo "selected" ?>>Budha</option>
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="goldarah"><i class="bi bi-droplet-fill"></i> Golongan Darah</label>
				<select name="goldarah" class="form-control">
					<option value="">- Pilih -</option>
					<option value="A+" <?php if ($data['goldarah'] == "A+") echo "selected" ?>>A+</option>
					<option value="A-" <?php if ($data['goldarah'] == "A-") echo "selected" ?>>A-</option>
					<option value="B+" <?php if ($data['goldarah'] == "B+") echo "selected" ?>>B+</option>
					<option value="B-" <?php if ($data['goldarah'] == "B-") echo "selected" ?>>B-</option>
					<option value="AB+"<?php if ($data['goldarah'] == "AB+")echo "selected" ?>>AB+</option>
					<option value="AB-"<?php if ($data['goldarah'] == "AB-")echo "selected" ?>>AB-</option>
					<option value="O+" <?php if ($data['goldarah'] == "O+") echo "selected" ?>>O+</option>
					<option value="O-" <?php if ($data['goldarah'] == "O-") echo "selected" ?>>O-</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="prodi"><i class="bi bi-mortarboard-fill"></i> Program Studi</label>
				<select name="prodi" class="form-control">
					<option value="">- Pilih -</option>
					<option value="Teknik Informatika S-1" <?php if ($data['prodi'] == "Teknik Informatika S-1") echo "selected" ?>>Teknik Informatika S-1</option>
					<option value="Teknik Informatika D-3" <?php if ($data['prodi'] == "Teknik Informatika D-3") echo "selected" ?>>Teknik Informatika D-3</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="fakultas"><i class="bi bi-mortarboard-fill"></i> Fakultas</label>
				<select name="fakultas" class="form-control">
					<option value="">- Pilih -</option>
            		<option value="Fakultas Teknik" <?php if ($data['fakultas'] == "Fakultas Teknik") echo "selected" ?>>Fakultas Teknik</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="alamat"><i class="bi bi-geo-alt-fill"></i> Alamat</label>
				<textarea class="form-control" name="alamat" rows="3" value="<?php echo $data['alamat'] ?>" placeholder="Jalan...."><?php echo $data['alamat'] ?></textarea>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-primary bi bi-download"></input>
			</div>
		</div>
	</form>

<?php
	include "koneksi.php";
    $ambil 	= mysqli_query($koneksi, "SELECT * FROM gambar");
	$foto  	= mysqli_fetch_array($ambil);
?>

<form class="container col-md-4" action="simpan_foto.php" method="post" enctype="multipart/form-data">
    <div class="row">
    	<div class="col-sm-7"><br>
    		<p><b><i class="bi bi-image"></i> Foto Profil</b></p>
    		<p>Pasphoto 4x6 <i>( .jpg .jpeg .png )</i></p>
        	<div class="form-group">
            <div id="msg"></div>
            	<img src="gambar/<?php echo $foto['gambar'] ?>" class="rounded" width='100%' alt="Cinque Terre"><br>
            </div>
            <div>
            	<input type="file" name="gambar" class="file" id="gambar"><br>
            </div>
            <button type="submit" name="simpanfoto" class="btn btn-success">Upload</button>
        </div>
    </div>
</form>
</body>
</html>