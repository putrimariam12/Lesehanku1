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

       <li class="active"><a href="menu.php">Menu  <span class="glyphicon glyphicon-cutlery"></a></li></span>
       <li><a href="contact.php">Kontak saran<span class="glyphicon glyphicon-phone-alt"></a></li></span>
            
<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-large"></span>Data Lesehanku<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="data-makanan.php"> <span class="glyphicon glyphicon-cutlery list-group-item-info"></span> Makanan</a></li>
                <li><a href="data-minuman.php"><span class="glyphicon glyphicon-glass list-group-item-warning"></span> Minuman</a></li>
                <li><a href="data-pelanggan.php"><span class="glyphicon glyphicon-user list-group-item-danger"></span> Pelanggan </a></li>
                
                
                </ul>
            </li></a></li></ul>
                               
                               

		<form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="cari di lesehanku"></div>
        <button type="submit" class="btn btn-warning">Cari</button>
        <a href="logout.php" class="btn btn-success">Logout <span class="glyphicon glyphicon-user"></span></a></form>

				
				 <div class="container"></nav><font face="serif">
					 <h3><center>| O U R   M E N U ' S |</center></h3>
            
					<div class="col-md-12">	
						<div class="col-md-3">	<a href="data-makanan.php">
						<img src="../img/1.png" height="300px" width="250px">
						<br><h4><b>Soup & Soto Daging Sapi Kuah Telur</b></h4>
            <h6><del>Rp. 79.000,- </h6></del><h4>Rp. 45.000,-
            <br><button class="btn btn-warning">Edit Sekarang </button></h4></a></div>

						<div class="col-md-3">	<a href="data-makanan.php">
						<img src="../img/4.png" height="300px" width="250px">
						<br><h4><b>Pangsit Goreng Daging Telur</b></h4><h6>
              <del>Rp. 119.000,- </h6></del><h4>Rp. 75.000,- 
            <br><button class="btn btn-warning">Edit Sekarang </button></h4></a></div>

						<div class="col-md-3">		<a href="data-makanan.php">
						<img src="../img/3.png" height="300px" width="250px">
						<br><h4><b>Bakso Kuah Mie Campur</b></h4>
            <h6><del>Rp. 69.000,- </h6></del><h4>Rp. 35.000,- 
            <br><button class="btn btn-warning">Edit Sekarang </button></h4></a></div></h6></a>
      	<a href="data-makanan.php">
            <img src="../img/5.png" height="300px" width="250px">
            <br><h4><b>Nasi Goreng Special Paha</b></h4>
            <h6><del>Rp. 59.000,- </h6></del><h4>Rp. 25.000,- ,
             <br><button class="btn btn-warning">Edit Sekarang </button></h4></a></h6></a></div>

            <div class="col-md-3">  	<a href="data-makanan.php">
            <img src="../img/6.png" height="300px" width="250px">
           <br><h4><b>Tempe Goreng </b></h4>
           <h6><del>Rp. 29.000,- </h6></del><h4>Rp. 15.000,- 
            <br><button class="btn btn-warning">Edit Sekarang </button></h4></h6></a></div>

            <div class="col-md-3">   	<a href="data-makanan.php">
            <img src="../img/7.png" height="300px" width="250px">
            <br><h4><b>Bakwan Sayur Goreng</b></h4><h6>
              <del>Rp. 29.000,- </h6></del><h4>Rp. 15.000,- 
               <br><button class="btn btn-warning">Edit Sekarang </button></h4></h6></a></div>

                
            <div class="col-md-3">  	<a href="data-makanan.php">
            <img src="../img/8.png" height="300px" width="250px">
            <br><h4><b> Mie Pangsit Kuah  </b></h4>
           <h6><del>Rp. 79.000,- </h6></del><h4>Rp. 45.000,- 
            <br><button class="btn btn-warning">Edit Sekarang </button></h4></h6></a></div>

            <br><br> 	<a href="data-makanan.php">
            <img src="../img/co1.jpg" height="270px" width="250px">
           <br><h4><b>Pangsit Kuah Daging </b></h4>
           <h6><del>Rp. 79.000,- </h6></del><h4>Rp. 45.000,- <br><button class="btn btn-warning">Edit Sekarang </button></h4></h6></div>
            <br><br><br><br><br><br><br><br><br></h6></a></h6></a></div></h6></a></div></h6></a></div></div></div></a></li></a>


             <h3><center><b>|</b> O u r    d r i n k ' s <b>|</b></center></h3>
             <div class="col-md-12">  
            <div class="col-md-3"> 	<a href="data-minuman.php.php">
            <img src="../img/10.png" height="300px" width="250px">
            <br><h4><b>Coffe Late Special</b></h4>
           <h6><del>Rp. 29.000,- </h6></del><h4>Rp. 15.000,- 
           <br><button class="btn btn-warning">Edit Sekarang </button></div>
         </h4></h6></a>
            <div class="col-md-3">  	<a href="data-minuman.php">
            <img src="../img/15.png" height="300px" width="250px">
             <h4><b>Lemon Ice Special</b></h4>
           <h6><del>Rp. 29.000,- </h6></del><h4>Rp. 15.000,- 
            <br><button class="btn btn-warning">Edit Sekarang </button></div>
         </h4></h6></a>
            <div class="col-md-3"> 	<a href="data-minuman.php">
            <img src="../img/16.png" height="300px" width="250px">
            <br><h4><b>Manggoe's Juice Special</b></h4>
           <h6><del>Rp. 39.000,- </h6></del><h4>Rp. 25.000,-
           <br> <button class="btn btn-warning">Edit Sekarang </button></div>
         </h4></h6></a>        	<a href="data-minuman.php">
            <img src="../img/17.png" height="300px" width="250px">
              <br><h4><b>Leci Ice Syrup</b></h4>
            <h6><del>Rp. 39.000,- </h6></del><h4>Rp. 25.000,-<br> <button class="btn btn-warning">Edit Sekarang </button></div></h4></h6></a>

            <div class="col-md-12">
            <div class="col-md-4">  	<a href="data-minuman.php">
            <img src="../img/11.png" height="350px" width="350px">
            <br><h4><b>Es Teh Manis Dingin</b></h4>
           <h6><del>Rp. 29.000,- </h6></del><h4>Rp. 15.000,- 
            <br> <button class="btn btn-warning">Edit Sekarang </button></div></h4></h6></a>
            <div class="col-md-4"> 	<a href="data-minuman.php">
            <img src="../img/13.png" height="350px" width="350px">
             <br><h4><b>Chocelate Milk Shake</b></h4>
           <h6><del>Rp. 29.000,- </h6></del><h4>Rp. 15.000,- 
            <br> <button class="btn btn-warning">Edit Sekarang </button></div></h4></h6></a> 
             <a href="m14.html"> 	<a href="data-minuman.php">
            <img src="../img/14.png" height="350px" width="350px"><br><h4><b>Dalgona Coffe jelly</b></h4>
           <h6><del>Rp. 59.000,- </h6></del><h4>Rp. 35.000,- 
            <br> <button class="btn btn-warning">Edit Sekarang </button></div></h4></h6></a> 
				  	</font>
				  	
				  	

</a></div></h6></a></div></h6></a></div></div></div></div></div></font></div></a></li></a></li></a></li></ul></div></div></div></div></nav>
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
</body>
</html> 