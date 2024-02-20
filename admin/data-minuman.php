<?php
  session_start();
  if (empty($_SESSION['id_user'])){
    header("location:../login.php");
  }
?><!DOCTYPE html>
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
                <li><a href="data-makanan.php"> <span class="glyphicon glyphicon-cutlery list-group-item-info"></span> Makanan</a></li>
                <li class="active"><a href="data-minuman.php"><span class="glyphicon glyphicon-glass list-group-item-warning"></span> Minuman</a></li>
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
<center><h1> Data Minuman</h1></center>
<div class="col-md-12 list-group-item-success">
<?php

if(@$_GET['pesan']=="inputMinumanBerhasil"){
?>

<div class="alert alert-success">
  penyimpanan 1 Data Menu berhasil
</div>

<?php

}

?>


<?php

if(@$_GET['pesan']=="hapusMinumanBerhasil"){
?>

<div class="alert alert-success">
  1 Data Menu berhasil dihapus!
</div>

<?php

}

?>

<?php

if(@$_GET['pesan']=="editMinumanBerhasil"){
?>

<div class="alert alert-success">
  1 perubahan berhasil di Edit!
</div>

<?php

}

?>

    <table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
    
    <thead>
    <tr><center>
      <td><center><b>Kode Minuman</b></center>
      </td><td><center><b>Nama Minuman</b></center></td>
      <td><center><b>Jumlah </b></center></td>
      <td><center><b>Harga</b></center></td>
      <td><center><b>Menu</b></td>
      <th>
                <a href="inputminuman.php">
                    <button class="btn btn-info glyphicon glyphicon-plus">
                     </button>

                </a>
      </th>
    </tr>
    </thead>
    <tbody>
    <?php

    include"koneksi.php";
$sql=$koneksi->query("select * from dt_minuman order by id_minuman ASC");

while($row= $sql->fetch_assoc()){
  ?>

  <tr>
      <td><?php echo $row['id_minuman']?></td>
      <td><?php echo $row['nama']?></td>
      <td><?php echo $row['jumlah']?></td>
      <td><?php echo $row['harga']?></td>
      <td><?php echo $row['menu']?></td>
      <td>

             <a href="edit-minuman.php?id=<?php echo $row['id_minuman']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"> </button>

                </a>

                 <a href="hapusminuman.php?id=<?php echo $row['id_minuman']?>" onclick="return confirm('anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"> </button>

                </a>

      </td>
    </tr>


</td>
<?php
  }
  ?>
  </tbody>

  </table></div></div>
  
























        
</a></div></h6></a></div></h6></a></div></div></div></div></div></font></div>
</a></li></a></li></a></li></ul></div></div></div></div></nav>   </div></div></ul></div></div></div></div></nav>
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