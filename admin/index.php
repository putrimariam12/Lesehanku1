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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
    
       <li class="active"><a href="index.php">Beranda<span class="sr-only">(current)</span></a></li>

       <li><a href="menu.php">Menu  <span class="glyphicon glyphicon-cutlery"></a></li></span>
       <li><a href="contact.php">Kontak saran <span class="glyphicon glyphicon-phone-alt"></a></li></span>
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
         <a href="logout.php" class="btn btn-success">Logout <span class="glyphicon glyphicon-user"></span></a></form></ul>
                
                 <div class="container"></nav>
                    
                    <div class="col-md-12"> 
                    <div class="carousel slide" id="contoh-carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#contoh-carousel" data-slide-to="1"></li>
                            <li data-target="#contoh-carousel" data-slide-to="2"></li>
                            <li data-target="#contoh-carousel" data-slide-to="3"></li>
                            <li data-target="#contoh-carousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="../img/car1.png" alt="Keterangan Gambar satu">
                                <div class="carousel-caption">
                                    
                                    <font face="serif">
                                    <a class="btn btn-warning btn-lg" href="menu.html" role="button">
                                        BELI SEKARANG</a>
                                    <p>
                                    <h3><strong>PESAN SEKARANG</strong></h3></p>
                                </font>
                                </div>
                            </div>
                            <div class="item">
                                <img src="../img/car2.png" alt="Keterangan Gambar dua">
                                <div class="carousel-caption">
                                    
                                </div>
                            </div>
                            <div class="item">
                                <img src="../img/car3.png" alt="Keterangan Gambar tiga">
                                <div class="carousel-caption"><font face="serif">
                                <h1>Temukan MAKANAN</h1>
                                    
                                    <p><a class="btn btn-primary btn-lg" href="menu.html" role="button">
                                        Buka</a> </p></font>
                                </div>
                            </div>
                        <div class="item">
                                <img src="../img/car4.png" alt="Keterangan Gambar empat" >
                                <div class="carousel-caption">
                                    <p><a class="btn btn-warning btn-lg" href="contact.html" role="button">
                                        Informasi Layanan</a> </p>
                                </div>
                            </div><div class="item">
                                <img src="../img/car6.png" alt="Keterangan Gambar lima" >
                                <div class="carousel-caption">
                                    
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Prev</span>
                        </a>
                        <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a></p>
                    </div><br>
                    <div class="jumbotron list-group-item-info">
        <div class="container">
            <div class="row"><font face="serif">
                <div class="col-md-12"> <center><button class="btn btn-warning"><marquee>
                  <h3><b>------------HALLO, SUGENG RAWUH ADMINISTATOR LESEHANKU------------</b></h3></marquee></center></button></div><div class="col-md-12">
                  <p><h4>
                    <center>      Terimah kaseh anda sudah melakukan Proses Login dengan Benar :))<br> </h4>
                    <center><h3><b>MONGGO DISEKECAAKEN/SELAMAT Pagi/Siang/Sore</center></p></h3>
                 </div></b>
                </div>
            </div></center></center></h4></b></p></div></center>
        <br><br><br><br><br><br><br><br><br><br><br>
                
                <div class="container">
                
                    <div class="col-md-7">
                 <font face="serif">
                <h2><strong> |</strong>|<strong>| ABOUT |</strong>|<strong>|</strong></h2>
          <h4><strong> | </strong>LESEHANKU
                 adalah Tempat wisata kulineran khas tradisional lokal.
                 <strong>Lesehanku,
                     bisa dibilang surganya para pencinta kulineran,menyuguhkan ragam kuliner dengan cita rasa yang luar biasa.</strong> <b>|</b>
                      
                </h4></font></div><div class="col-md-1"></div><div class="col-md-4">
                   <img src="../img/pos1.png" class="img-circle" width="350px" height="300px"></div></div>
                   <br><br><br><br><br><br><br><br>
                    <div class="col-md-1"></div>
                <div class="col-md-5">
                 <font face="serif">
                     <img src="../img/ea.jpg" width="450px" height="300px">
                
                      
                </h4></font></div><div class="col-md-6"> <font face="serif">
                    <h1><center></center></h1><h4>LESEHANKU
                 adalah tempat kuliner legendaris yang berdiri sejak tahun 1988. 
                 <strong>Disamping itu, makanan yang dihidangkan pun bervariasi 
                     menyesuaikan hidangan sesuai lidah orang indonesia lokal. Hingga saat ini Lesehanku menjadi tempat ternyaman untuk kalangan masyarakat untuk semua jenis golongan.</strong>
                  
                    </font>
                    
                                    </div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div></div></div>

          </div></div></ul></div></div></div></div></nav>

        <font face="serif">
        <br><center><h3> > > > > > > > > > > > L E S E H A N K U < < < < < < < < < < < < </h3></center></font>
        
        <h4>____________________________________________________________________________________________________________________________________________________</h4>
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