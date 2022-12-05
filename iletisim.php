<?php

include 'adminsayfalari/baglan.php';
$menu_renk= $DBcon->query("SELECT * FROM menu_renk WHERE id=1")->fetch(PDO::FETCH_ASSOC);
$logo= $DBcon->query("SELECT * FROM logo WHERE id=0")->fetch(PDO::FETCH_ASSOC);
$iletisim= $DBcon->query("SELECT * FROM iletisim WHERE id=1")->fetch(PDO::FETCH_ASSOC);

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
    <body id="page-top" >
        <!-- menü-->
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

        <!-- munü bitiş-->
        <section class="page-section" id="contact" style="background-image:url(img/iletisim/<?php echo $iletisim['resim'] ?>);  ">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3"><?php echo $iletisim['baslik'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $iletisim['altbaslik'] ?></h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="<?php echo $iletisim['input1'] ?>" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="<?php echo $iletisim['input2'] ?>" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="<?php echo $iletisim['input3'] ?>" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="<?php echo $iletisim['input4'] ?>" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>


                            <?php
                $sorgu2=$DBcon->prepare("SELECT * from iletisim where buton ");
                $sorgu2->execute();
                if($iletisim['buton']==1)
                {
             ?> 
            <button class="btn btn-danger btn-xl text-uppercase" id="sendMessageButton" type="submit" >Gönder</button>
                     <?php
          }  
          else
          {
            ?> 
            <button class="btn btn-danger btn-xl text-uppercase" id="sendMessageButton" type="submit" disabled>Gönder</button>
            <?php
          }
  
          ?> 




                        
             




                        
                    </div>
                </form>
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
