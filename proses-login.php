  <?php
session_start();
include "koneksi.php";
$username=$koneksi->real_escape_string($_POST['username']);
$password_=$koneksi->real_escape_string($_POST['password']);
$password=md5($password_);

$sql=$koneksi->query("SELECT * FROM login WHERE username='$username' and password='$password'");
$row=$sql->fetch_assoc();
$result=$sql->num_rows;

if ($result==TRUE)
{
    $id_user=$row['id_user'];
    $token=md5($username.$password);

    $sql=$koneksi->query("UPDATE login set last_login=now(), token='$password_hash'where id_user='$id_user'");

    $_SESSION['id_user']=$row['id_user'];
    $_SESSION['username']=$row['username'];
   
    header("location:admin/index.php");    
} else {
    echo"<script>alert('Username atau password salah !');document.location.href='login.php';</script>";
}
?>