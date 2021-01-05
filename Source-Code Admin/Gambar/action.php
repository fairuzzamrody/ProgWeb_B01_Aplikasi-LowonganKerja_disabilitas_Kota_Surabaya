<?php
session_start();

include "php1.php";

$e_mail = $_POST["e_mail"];
$p = md5($_POST["password"]);

	 $sql = "SELECT * from tb_user where e_mail='".$e_mail."' and password='".$p."' limit 1";
$query = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($query);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($query);
		$_SESSION["id_user"]=$row["id_user"];
		$_SESSION["nama_user"]=$row["nama_user"];
        $_SESSION["tgl_lahir"]=$row["tgl_lahir"];
        $_SESSION["jenis_kelamin"]=$row["jenis_kelamin"];
        $_SESSION["alamat"]=$row["alamat"];
		$_SESSION["e_mail"]=$row["e_mail"];
		$_SESSION["password"]=$row["password"];
        $_SESSION["disabilitas"]=$row["disabilitas"];
        $_SESSION["no_telp"]=$row["no_telp"];
	

		header("<Location:profileuser1>");
		
	}else {
		echo "Username atau password salah <br><a href='LoginUser.php'>Kembali</a>";
	}
?>