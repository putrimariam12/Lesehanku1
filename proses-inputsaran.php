 <?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:login.php");
	}
?>
<?php

$nama=$_POST['nama'];
$email=$_POST['email'];
$saran=$_POST['saran'];


include "koneksi.php";

$simpan=$koneksi->query("insert into dt_saran
	(nama,email,saran) values 
	( '$nama', '$email', '$saran' )");

if($simpan==true){

	header("location:admin/contact.php?pesan=saranBerhasil");
} else{
	echo "Error";
}

?>

 