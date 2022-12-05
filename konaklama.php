<?php

include 'adminsayfalari/baglan.php';

$menu_renk= $DBcon->query("SELECT * FROM menu_renk WHERE id=1")->fetch(PDO::FETCH_ASSOC);
$logo= $DBcon->query("SELECT * FROM logo WHERE id=0")->fetch(PDO::FETCH_ASSOC);

$konaklama1= $DBcon->query("SELECT * FROM konaklama WHERE id=1")->fetch(PDO::FETCH_ASSOC);
$konaklama2= $DBcon->query("SELECT * FROM konaklama WHERE id=2")->fetch(PDO::FETCH_ASSOC);
$konaklama3= $DBcon->query("SELECT * FROM konaklama WHERE id=3")->fetch(PDO::FETCH_ASSOC);
$konaklama4= $DBcon->query("SELECT * FROM konaklama WHERE id=4")->fetch(PDO::FETCH_ASSOC);
$konaklama5= $DBcon->query("SELECT * FROM konaklama WHERE id=5")->fetch(PDO::FETCH_ASSOC);
$konaklama6= $DBcon->query("SELECT * FROM konaklama WHERE id=6")->fetch(PDO::FETCH_ASSOC);
$konaklama7= $DBcon->query("SELECT * FROM konaklama WHERE id=7")->fetch(PDO::FETCH_ASSOC);

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
        
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
      
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    </head>
    <body id="page-top">
       
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-<?php echo $menu_renk['menu_renk'] ?>" id="mainNav">
            <div class="container">
                <div class="logo"><img src="<?php echo $logo['logoresim'] ?>" width="75px" height="50px"><a class="text-<?php echo $menu_renk['menu_yazi'] ?>" href="index.php"><?php echo $logo['logobaslik'] ?></a></div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav text-uppercase ml-auto">
                       <?php 
     
        $query = $DBcon->query('SELECT * FROM menu ORDER BY id ASC',PDO::FETCH_ASSOC);

          foreach($query as  $row){
      
            ?> 
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-<?php echo $menu_renk['menu_yazi'] ?>" href="<?=$row['baslik1_link']?>"><?=$row['baslik1']?></a></li>
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

        
        <section class="page-section bg-light " id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3"><?php echo $konaklama1['baslik'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $konaklama1['altbaslik'] ?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/konaklama/<?php echo $konaklama2['resim'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $konaklama2['baslik'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $konaklama2['altbaslik'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/konaklama/<?php echo $konaklama3['resim'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $konaklama3['baslik'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $konaklama3['altbaslik'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/konaklama/<?php echo $konaklama4['resim'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $konaklama4['baslik'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $konaklama4['altbaslik'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/konaklama/<?php echo $konaklama5['resim'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $konaklama5['baslik'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $konaklama5['altbaslik'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/konaklama/<?php echo $konaklama6['resim'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $konaklama6['baslik'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $konaklama6['altbaslik'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/konaklama/<?php echo $konaklama7['resim'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $konaklama7['baslik'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $konaklama7['altbaslik'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
        
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/konaklama/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                   
                                    <h2 class="text-uppercase"><?php echo $konaklama2['baslik'] ?></h2>
                                    <br>

                                    <img class="img-fluid d-block mx-auto" src="img/konaklama/<?php echo $konaklama2['resim'] ?>" alt="" />
                                    
                                    
                                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Çıkış
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/konaklama/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                   
                                    <h2 class="text-uppercase"><?php echo $konaklama3['baslik'] ?></h2><br>
                                    
                                    <img class="img-fluid d-block mx-auto" src="img/konaklama/<?php echo $konaklama3['resim'] ?>" alt="" />
                                    
                                    
                                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Çıkış
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/konaklama/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $konaklama4['baslik'] ?></h2><br>
                                   
                                    <img class="img-fluid d-block mx-auto" src="img/konaklama/<?php echo $konaklama4['resim'] ?>" alt="" />
                                  
                                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Çıkış
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/konaklama/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $konaklama5['baslik'] ?></h2>
                                    
                                    <img class="img-fluid d-block mx-auto" src="img/konaklama/<?php echo $konaklama5['resim'] ?>" alt="" />
                                    
                                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Çıkış
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/konaklama/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $konaklama6['baslik'] ?></h2>
                                  
                                    <img class="img-fluid d-block mx-auto" src="img/konaklama/<?php echo $konaklama6['resim'] ?>" alt="" />
                                  
                                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Çıkış
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/konaklama/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $konaklama7['baslik'] ?></h2>
                              
                                    <img class="img-fluid d-block mx-auto" src="img/konaklama/<?php echo $konaklama7['resim'] ?>" alt="" />
                                    
                                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Çıkış
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
