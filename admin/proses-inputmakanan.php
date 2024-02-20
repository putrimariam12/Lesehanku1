<?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}
?>
<?php
$id_makanan=$_POST['id_makanan'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$menu=$_POST['menu'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into dt_makanan
	(id_makanan,nama,jumlah,harga,menu) values 
	('$id_makanan', '$nama', '$jumlah', '$harga',
	                      '$menu')");

if($simpan==true){

	header("location:data-makanan.php?pesan=inputMakananBerhasil");
} else{
	echo "Error";
}

?>

 