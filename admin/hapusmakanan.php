<?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}

	include "koneksi.php";
	$id=$_GET['id'];

	$hapus=$koneksi->query("delete from dt_makanan where id_makanan='$id'");

	if($hapus==true){
		header("location:data-makanan.php?pesan=hapusMakananBerhasil");
	} else{
		echo "Error";
	}

?>