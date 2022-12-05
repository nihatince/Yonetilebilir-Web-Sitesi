<?php

include 'adminsayfalari/baglan.php';
$menu_renk= $DBcon->query("SELECT * FROM menu_renk WHERE id=1")->fetch(PDO::FETCH_ASSOC);
$logo= $DBcon->query("SELECT * FROM logo WHERE id=0")->fetch(PDO::FETCH_ASSOC);

$hakkimizda1= $DBcon->query("SELECT * FROM hakkimizda WHERE id=1")->fetch(PDO::FETCH_ASSOC);
$hakkimizda2= $DBcon->query("SELECT * FROM hakkimizda WHERE id=2")->fetch(PDO::FETCH_ASSOC);
$hakkimizda3= $DBcon->query("SELECT * FROM hakkimizda WHERE id=3")->fetch(PDO::FETCH_ASSOC);
$hakkimizda4= $DBcon->query("SELECT * FROM hakkimizda WHERE id=4")->fetch(PDO::FETCH_ASSOC);
$hakkimizda5= $DBcon->query("SELECT * FROM hakkimizda WHERE id=5")->fetch(PDO::FETCH_ASSOC);

$ekibimiz1= $DBcon->query("SELECT * FROM ekibimiz WHERE id=1")->fetch(PDO::FETCH_ASSOC);
$ekibimiz2= $DBcon->query("SELECT * FROM ekibimiz WHERE id=2")->fetch(PDO::FETCH_ASSOC);
$ekibimiz3= $DBcon->query("SELECT * FROM ekibimiz WHERE id=3")->fetch(PDO::FETCH_ASSOC);
$ekibimiz4= $DBcon->query("SELECT * FROM ekibimiz WHERE id=4")->fetch(PDO::FETCH_ASSOC);

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
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
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

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3"><?php echo $hakkimizda1['baslik'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $hakkimizda1['altbaslik'] ?></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/hakkimizda/<?php echo $hakkimizda2['resim'] ?>" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading"><?php echo $hakkimizda2['baslik'] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $hakkimizda2['altbaslik'] ?></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/hakkimizda/<?php echo $hakkimizda3['resim'] ?>" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading"><?php echo $hakkimizda3['baslik'] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                                <?php echo $hakkimizda3['altbaslik'] ?></p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/hakkimizda/<?php echo $hakkimizda4['resim'] ?>" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading"><?php echo $hakkimizda4['baslik'] ?>
</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $hakkimizda4['altbaslik'] ?></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/hakkimizda/<?php echo $hakkimizda5['resim'] ?>" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading"><?php echo $hakkimizda5['baslik'] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $hakkimizda5['altbaslik'] ?></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Hikayemizin
                                <br />
                                Bir Parçası
                                <br />
                                Olun!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo $ekibimiz1['baslik'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $ekibimiz1['altbaslik'] ?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/ekibimiz/<?php echo $ekibimiz2['resim'] ?>" alt="" />
                            <h4><?php echo $ekibimiz2['baslik'] ?></h4>
                            <p class="text-muted"><?php echo $ekibimiz2['altbaslik'] ?></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/ekibimiz/<?php echo $ekibimiz3['resim'] ?>" alt="" />
                            <h4><?php echo $ekibimiz3['baslik'] ?></h4>
                            <p class="text-muted"><?php echo $ekibimiz3['altbaslik'] ?></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/ekibimiz/<?php echo $ekibimiz4['resim'] ?>" alt="" />
                            <h4>Can Evren</h4>
                            <p class="text-muted">Ceo</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
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
        <!-- Portfolio Modals-->
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
