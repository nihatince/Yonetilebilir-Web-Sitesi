<?php

include 'adminsayfalari/baglan.php';

$menu_renk= $DBcon->query("SELECT * FROM menu_renk WHERE id=1")->fetch(PDO::FETCH_ASSOC);
$logo= $DBcon->query("SELECT * FROM logo WHERE id=0")->fetch(PDO::FETCH_ASSOC);
$lokasyon1= $DBcon->query("SELECT * FROM lokasyonbaslik WHERE id=1")->fetch(PDO::FETCH_ASSOC);
$lokasyon2= $DBcon->query("SELECT * FROM lokasyonbaslik WHERE id=2")->fetch(PDO::FETCH_ASSOC);
$lokasyon3= $DBcon->query("SELECT * FROM lokasyonbaslik WHERE id=3")->fetch(PDO::FETCH_ASSOC);
$lokasyon4= $DBcon->query("SELECT * FROM lokasyonbaslik WHERE id=4")->fetch(PDO::FETCH_ASSOC);

$odalarimiz1= $DBcon->query("SELECT * FROM odalarimiz WHERE id=1")->fetch(PDO::FETCH_ASSOC);
$odalarimiz2= $DBcon->query("SELECT * FROM odalarimiz WHERE id=2")->fetch(PDO::FETCH_ASSOC);
$odalarimiz3= $DBcon->query("SELECT * FROM odalarimiz WHERE id=3")->fetch(PDO::FETCH_ASSOC);
$odalarimiz4= $DBcon->query("SELECT * FROM odalarimiz WHERE id=4")->fetch(PDO::FETCH_ASSOC);

$footer= $DBcon->query("SELECT * FROM footer WHERE id=1")->fetch(PDO::FETCH_ASSOC);




?>


<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NMC Otel</title>

        <link rel="apple-touch-icon" href="./img/logo.fw.png">
    <link rel="shortcut icon" type="image/x-icon" href="./img/logo.fw.png">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        
     
        
        
        <link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">   
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="sss/sss.min.js"></script> 
        <script>    
            jQuery(function($) {
                $('.slider').sss();
            });
        </script>

        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-<?php echo $menu_renk['menu_renk'] ?> " id="mainNav">
            <div class="container">
                <div class="logo"><img src="<?php echo $logo['logoresim'] ?>" width="75px" height="50px"><a class="text-<?php echo $menu_renk['menu_yazi'] ?>" href="index.php"><?php echo $logo['logobaslik'] ?></a></div>
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menü
                    <i class="fas fa-bars ml-1"></i>
                </button>
                
                
                
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    
                    <ul class="navbar-nav text-uppercase ml-auto">
                       <?php
                $sorgu2=$DBcon->prepare("SELECT * from menu where durum=1 order by sira");
                $sorgu2->execute();
                while($sonuc2=$sorgu2->fetch())
                {
             ?> 
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-<?php echo $menu_renk['menu_yazi'] ?> " href="<?=$sonuc2['baslik1_link']?>"><?=$sonuc2['baslik1']?></a></li>
                     <?php

          }  
  
       	  ?>   
                        
                    </ul>
                     
                    
                </div>
           
                
            </div>
            
            <div class="collapse navbar-collapse">
                <div class="btn-group ">
                  <a href="adminsayfalari/login.php">  <button type="button" class="btn btn-danger-light"style="color:aliceblue;border-radius: 15px;background:#808080;padding: 10px;">ADMİN PANELİ</button></a>

                </div>
            </div>
            
            
            
            
            
            
            
        </nav>
        <!-- Masthead-->
        
        <!--slider-->
        
      
         <div class="sayfa">
        <div class="slider">
            <?php
                $sorgu3=$DBcon->prepare("SELECT * from slider where durum=1");
                $sorgu3->execute();
                while($sonuc3=$sorgu3->fetch())
                {
             ?> 
                        <div class="carousel-item">
                <img id="slider" src="img/anasayfa/slider/<?php  echo $sonuc3['file_name'] ?>" class="d-block w-100" >
            </div>
                     <?php

          }  
  
          ?> 
        </div>
    </div>
        
       <!--slider bitiş--> 
       
        
	

	

	<br /><br />

	


        
        
        <!--içerik2-->
        
        
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3"><?php echo $lokasyon1['baslik'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $lokasyon1['altbaslik'] ?></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-info"></i>
                            <i class="fas fa-map fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"><?php echo $lokasyon2['baslik'] ?></h4>
                        <p class="text-muted"><?php echo $lokasyon2['altbaslik'] ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fas fa-hotel fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"><?php echo $lokasyon3['baslik'] ?></h4>
                        <p class="text-muted"><?php echo $lokasyon3['altbaslik'] ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                       <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-warning"></i>
                            <i class="fas fa-bed fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"><?php echo $lokasyon4['baslik'] ?></h4>
                        <p class="text-muted"><?php echo $lokasyon4['altbaslik'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!--içerik2 bitiş-->
        <!--içerik1-->
        
        <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1"><?php echo $odalarimiz1['baslik'] ?></h1>
                    <p>
                        <?php echo $odalarimiz1['altbaslik'] ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        
                            <img src="img/anasayfa/icerik/<?php echo $odalarimiz2['resim'] ?>" class="card-img-top" alt="...">
                        
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">350TL</li>
                            </ul>
                            <a  class="h2 text-decoration-none text-dark"><?php echo $odalarimiz2['baslik'] ?></a>
                            <p class="card-text">
                                <?php echo $odalarimiz2['altbaslik'] ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                       
                            <img src="img/anasayfa/icerik/<?php echo $odalarimiz3['resim'] ?>" class="card-img-top" alt="...">
                        
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">450TL</li>
                            </ul>
                            <a class="h2 text-decoration-none text-dark"><?php echo $odalarimiz3['baslik'] ?></a>
                            <p class="card-text">
                                <?php echo $odalarimiz3['altbaslik'] ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                      
                            <img src="img/anasayfa/icerik/<?php echo $odalarimiz4['resim'] ?>" class="card-img-top" alt="...">
                    
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">360TL</li>
                            </ul>
                            <a class="h2 text-decoration-none text-dark"><?php echo $odalarimiz4['baslik'] ?></a>
                            <p class="card-text">
                                <?php echo $odalarimiz4['altbaslik'] ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
        
        
        <!--içerik1 bitiş-->
        
        
        
        
        
        
        
        
        
        
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="img/anasayfa/sponsor/sponsor1.fw.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="img/anasayfa/sponsor/sponsor2.fw.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="img/anasayfa/sponsor/sponsor3.fw.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="img/anasayfa/sponsor/sponsor4.fw.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="footer py-4 bg-<?php echo $footer['renk'] ?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left"><?php echo $footer['baslik'] ?></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $footer['icon1_link'] ?>"><i class="<?php echo $footer['icon1'] ?>"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $footer['icon2_link'] ?>"><i class="<?php echo $footer['icon2'] ?>"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $footer['icon3_link'] ?>"><i class="<?php echo $footer['icon3'] ?>"></i></a>
                    </div>
                   
                </div>
            </div>
        </footer>
 <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
