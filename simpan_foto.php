<?php
    if (isset($_POST['simpanfoto'])) {
        include 'koneksi.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
            $gambar                 = $_FILES['gambar']['name'];
            $x                      = explode('.', $gambar);
            $ekstensi               = strtolower(end($x));
            $file_tmp               = $_FILES['gambar']['tmp_name'];

            if (!empty($gambar)){
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    move_uploaded_file($file_tmp, 'gambar/'.$gambar);
                    $sql="UPDATE gambar SET gambar='$gambar'";
                    $simpan_bank=mysqli_query($koneksi,$sql);

                    if ($simpan_bank) {
                        header("Location:mahasiswa.php");
                    }
                    else {
                        header("Location:mahasiswa.php");
                    }
                }
            }else {
                $gambar="bank_default.jpg";
            }
        }
    }
?>