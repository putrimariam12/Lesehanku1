<?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}
?>
<?php
$id_minuman=$_POST['id_minuman'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$menu=$_POST['menu'];


include "koneksi.php";

$simpan=$koneksi->query("insert into dt_minuman
	(id_minuman,nama,jumlah,harga,menu) values 
	('$id_minuman', '$nama', '$jumlah', '$harga',
	                      '$menu')");

if($simpan==true){

	header("location:data-minuman.php?pesan=inputMinumanBerhasil");
} else{
	echo "Error";
}

?>

 