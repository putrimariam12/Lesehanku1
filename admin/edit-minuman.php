<?php
  session_start();
  if (empty($_SESSION['id_user'])){
    header("location:../login.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
   	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lesehanku</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/plugins/datatable/style.css" rel="stylesheet">
    
</head>
<body>
	<font face="serif"><strong><center><h2><b>L E S E H A N K U</b></h2></center></strong></font><br>
	<nav class="navbar navbar-inverse">
    <div class="container">
      <div class="Medsos">
    <div class="Medsos">
			
    
    	
    		
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Les</span>
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <font face="serif">

     <a class="navbar-brand" href="#" ></a></font>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
    
       <li><a href="index.php">Beranda<span class="sr-only">(current)</span></a></li>

       <li><a href="menu.php">Menu  <span class="glyphicon glyphicon-cutlery"></a></li></span>
       <li><a href="contact.php">Kontak saran<span class="glyphicon glyphicon-phone-alt"></a></li></span>
            
<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-large"></span>Data Lesehanku<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li class="active"><a href="data-makanan.php"> <span class="glyphicon glyphicon-cutlery list-group-item-info"></span> Makanan</a></li>
                <li><a href="data-minuman.php"><span class="glyphicon glyphicon-glass list-group-item-warning"></span> Minuman</a></li>
                <li><a href="data-pelanggan.php"><span class="glyphicon glyphicon-user list-group-item-danger"></span> Pelanggan </a></li>
                
                
                </ul>
            </li></a></li></ul>
                               
                               

		<form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="cari di lesehanku"></div>
        <button type="submit" class="btn btn-warning">Cari</button>
        <a href="logout.php" class="btn btn-success">Logout <span class="glyphicon glyphicon-user"></span></a></form></div></div></div></div>
      </nav>

            

			
				
		
	<div class="col-md-12">
		<div class="row">
			</div></div>
			<div class="col-md-7">
				<form action="proses-editminuman.php" method="POST">
					<?php
					include "koneksi.php";
					$id=$_GET['id'];
					$sql=$koneksi->query("SELECT * from dt_minuman where id_minuman='$id'");
					while ($row=$sql->fetch_assoc()){
					?>
					
					<div class="form-group">
						<label for="nama">Nama Minuman</label>
						<input type="hidden" name="id_minuman" value="<?php echo $row['id_minuman']?>" class="form-control">
						<input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
					</div>
	 

     <div class="form-group">
		<label for="jumlah">Jumlah</label>
		<input type="number" name="jumlah" class="form-control" value="<?php echo $row['jumlah']?>">
	</div>
	<div class="form-group">
		<label for="harga">Harga</label>
		<input type="text" name="harga" value="<?php echo $row['harga']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="menu">Menu</label>
		<textarea name="menu" class="form-control"><?php echo $row['menu']?></textarea>
	</div>
<input type="submit" name="kirim" value="ubah" class="btn btn-info">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
 <a href="data-minuman.php" class="btn btn-md btn-warning">Kembali</a>
<?php
						} 
					?>
</div>
		</div>
	</div></form>
</div></div>

<div class="col-md-4">
 <img src="../img/15.png" class="img-circle" width="350px" height="300px"></div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
</form>       





        
</a></div></h6></a></div></h6></a></div></div></div></div></div></font></div>
</a></li></a></li></a></li></ul></div></div></div></div></nav>
<br><br><br><br><br><br><center><h3><b clas="btn btn-warning">MONGGO DISEKECAAKEN/SELAMAT MENIKMATI</center></p></h3>
          </div></div></ul></div></div></div></div></nav>
             
    
        <font face="serif">
        <br><center><h3> > > > > > > > > > > > L E S E H A N K U < < < < < < < < < < < < </h3></center></font>
        
        <h4>_____________________________________________________________________________________________________________________________________</h4>
       <font face="serif">
             <div class="list-group-item-warning">
            <h3><div class="col-md-4 btn btn-warning"><p><a href="index.php"> | ABOUT |</a></p></div>  
                 <div class="col-md-4 btn btn-warning" ><p><a href="contact.php">| KONTAK KAMI |</a></p></div> 
                  <div class="col-md-4 btn btn-warning"><p><a href="menu.php"> | PESAN |</a></p></div>   
                <center>
                    <strong>WWW.lesehanku.COM</strong></p> 
            <small>CopyRight & copy; 2022 - LESEHANKU. All Right Reserved</small></p>
           </font>
              
     </div>
    </div>
  </div>

  <script src="../bootstrap/js/jQuery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/plugins/datatable/jquery.dataTables.js"></script>
    <script src="../bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('#dataTables').DataTable();
    });
  </body>
  </html>