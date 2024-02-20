<?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}

	include "koneksi.php";
	$id=$_GET['id'];

	$hapus=$koneksi->query("delete from dt_minuman where id='$id'");

	if($hapus==true){
		header("location:data-minuman.php?pesan=hapusMinumanBerhasil");
	} else{
		echo "Error";
	}

?>