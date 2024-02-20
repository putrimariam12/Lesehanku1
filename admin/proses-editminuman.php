 <?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}
?>
<?php 
include "koneksi.php";
$id=$_POST['id_minuman'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$menu=$_POST['menu'];


$ubah=$koneksi->query("UPDATE dt_minuman set nama='$nama', jumlah='$jumlah', harga='$harga', menu='$menu' where id_minuman='$id'");

if($ubah==true){
	header("location:data-minuman.php?pesan=editMinumanBerhasil");
} else{
	echo "Error";
}

?>