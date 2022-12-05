<?php
include('baglan.php');




?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Giriş</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/rez.css">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
   
        
        
       
    
    
    
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top " id="mainNav">
            <div class="container">
               
               
              
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item " ><a class="nav-link" href="../index.php" style="color:white">Anasayfa</a></li>
                        <li class="nav-item " ><a class="nav-link" href="../konaklama.php" style="color:white">Konaklama</a></li>
                        <li class="nav-item " ><a class="nav-link" href="../hakkimizda.php" style="color:white">Hakkımızda</a></li>
                        <li class="nav-item " ><a class="nav-link" href="../iletisim.php" style="color:white">İletişim</a></li>
                        
                        
                        
                        
                        
                        
                    </ul>
                    
                </div>
            </div>
        </nav>
    
    
    
    
    
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <CENTER><h3>Giriş Yap</h3></CENTER>
                    
                </div>
                <div class="card-body">
        


                    <form action="" method="POST" id="girisformu">
                        <div class="input-group form-group">
                            
                            <input type="text" id="kulad" name="kulad" class="form-control" placeholder="Kullanıcı Adı">

                        </div>
                        <br>
                        <div class="input-group form-group">
                            
                            <input type="password" id="sifre" name="sifre" class="form-control" placeholder="Şifre">
                        </div>
                        <br>
                        <div class="form-group">

                           <center><input type="submit" name="login" value="Giriş Yap" class="btn btn-danger btn-block"></center> 
                        </div>
                    </form>
                    
                    <?php

                if ($_POST) {
                        $kulad = $_POST['kulad'];
                        $sifre = $_POST['sifre'];
                        $giris = $DBcon->query("SELECT * FROM giris where kulad='$kulad' and sifre='$sifre'");
                        if ($giris->rowCount() > 0) {
                            while ($row = $giris->fetch(PDO::FETCH_ASSOC)) {
                                echo '<span style="color:#AFA;text-align:center;">Giriş Başarılı.</br>Panele Yönlendiriliyorsunuz...</span>';
                                header("Refresh: 2; url=ayar2.php");
                                date_default_timezone_set('Europe/Istanbul');
                                $ip=$_SERVER['REMOTE_ADDR'];
                                $tarih=date('Y.m.d H:i:s');

                                $log1=$DBcon->query("INSERT INTO log(giris_tarihi,log_ip) VALUES('$tarih','$ip')");
                                
                            }
                        } else{
                            echo '<span style="color:#FF0000;text-align:center;">Kullanıcı Adı Veya Şifre Yanlış.</span>';
                        }
                  
                }
                ?>
                </div>
            </div>

        </div>

    </div>
</body>

</html>
