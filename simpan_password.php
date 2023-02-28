<?php
    if (isset($_POST['simpanpassword'])) {
        include 'koneksi.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$password       = $_POST['password'];
            $sql            ="UPDATE login SET password='$password'";
            $simpan_password=mysqli_query($koneksi,$sql);

                if ($simpan_password) {
                    header("Location:pengaturan.php");
                }
                else {
                    header("Location:pengaturan.php");
                }
            }
        }
?>