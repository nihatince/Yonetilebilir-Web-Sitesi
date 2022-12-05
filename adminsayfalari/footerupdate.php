<?php

  include("baglan.php");
ob_start();
  session_start();
  if(!isset($_SESSION["giris2"])){
  echo "Bu sayfayı görüntüleme yetkiniz yoktur.<br>";
      echo "Anasayfaya Yönlendiriliyorunuz.";
header("Refresh: 3; url=ogretmenlogin.php");
  }else{
      
      
      
      

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>NMC PANEL</title>
    
    <link href="css/stylee.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
</head>

<body>
   


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="adminpaneli.php">NMC OTEL</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
            Menü
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           
           <li><a class="dropdown-item" href="adminpaneli.php">Menü Düzenle</a></li>

            <li><a class="dropdown-item" href="menurenk.php">Menü Renk</a></li>
            
            <li><a class="dropdown-item" href="menuekle.php">Menü Ekle</a></li>

            <li><a class="dropdown-item" href="logoduzenle.php">Logo Düzenle</a></li>
            
            <li><a class="dropdown-item" href="loglar.php">Loglar</a></li>
          </ul>
        </li>


        

          <li class="nav-item">
        <a class="nav-link" href="anasayfaduzenle.php">Anasayfa Düzenle</a>
      </li>

                      <li class="nav-item">
        <a class="nav-link" href="hakkimizdaduzenle.php">Hakkımızda Düzenle</a>
      </li>
          
          <li class="nav-item">
        <a class="nav-link" href="konaklamaduzenle.php">Konaklama Düzenle</a>
      </li>
          
          <li class="nav-item">
        <a class="nav-link" href="footerduzenle.php">Footer Düzenle</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="iletisimduzenle.php">İletişim Düzenle</a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
            Slider
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           
           <li><a class="dropdown-item" href="sliderduzenle.php">Slider Düzenle</a></li>

            <li><a class="dropdown-item" href="sliderekle.php">Slider Ekle</a></li>
            
            
          </ul>
        </li>
       
      </ul>
      <form class="d-flex" action="logout2.php" method="POST">
        
        <input type="submit" name="buton" value="Çıkış Yap" class="btn btn-outline-danger">
      </form>
    </div>
  </div>
</nav>


    

    
<?php
        $id=$_GET['id'];
        $sorgu=$DBcon ->prepare("SELECT * FROM footer WHERE id=:id");
        $sorgu -> execute(array(":id" => $id));
        $row=$sorgu -> fetch(PDO::FETCH_ASSOC);

        
?>
    
   
    
    
    <div class="con">  
      <form id="contt" action="" method="POST" enctype="multipart/form-data">
       <center> <h3>Düzenle</h3>
        <h4>Anasayfa Düzenle</h4></center>
          
          
          <fieldset>
          Footer Başlık: <input type="text" name="baslik" value="<?php echo $row['baslik']; ?>" required>
          </fieldset>
          
          
          
          <fieldset>Footer Renk:
     
                    <select id="" name="renk" id="" type="sınıf" class="" required>
                        <option selected hidden><?php echo $row['renk']; ?></option>
                        <option>primary</option>
                        <option>secondary</option>
                          <option>success</option>
                          <option>danger</option>
                          <option>warning</option>
                          <option>info</option>
                          <option>dark</option>
                        <option>white</option>
                      </select>        

          </fieldset>
          
          
          <fieldset>
          İcon 1: 
              <select id="" name="icon1" id="" type="sınıf" class="" value="<?php echo $row['icon1']; ?>" required>
                  
                        <option selected hidden><?php echo $row['icon1']; ?></option>
                       <option>fab fa-twitter</option>
                        <option>fab fa-facebook-f</option>
                          <option>fab fa-linkedin-in</option>
                          <option>fab fa-youtube</option>
                          <option>fab fa-instagram</option>
                      </select> 
              
          </fieldset>
          
          <fieldset>
          İcon 1 Link: <input type="text" name="icon1_link" value="<?php echo $row['icon1_link']; ?>" required>
          </fieldset>
          
          <fieldset>
          İcon 2: 
              <select id="" name="icon2" id="" type="sınıf" class="" required>
                        
                        <option selected hidden><?php echo $row['icon2']; ?></option>
                        <option>fab fa-twitter</option>
                        <option>fab fa-facebook-f</option>
                          <option>fab fa-linkedin-in</option>
                          <option>fab fa-youtube</option>
                          <option>fab fa-instagram</option>

                      </select> 
              
          </fieldset>
          
          <fieldset>
          İcon 2 Link: <input type="text" name="icon2_link" value="<?php echo $row['icon2_link']; ?>" required>
          </fieldset>
          
          <fieldset>
          İcon 3:
              <select id="" name="icon3" id="" type="sınıf" class="" required>
                  <option selected hidden><?php echo $row['icon3']; ?></option>
                        <option>fab fa-twitter</option>
                        <option>fab fa-facebook-f</option>
                          <option>fab fa-linkedin-in</option>
                          <option>fab fa-youtube</option>
                          <option>fab fa-instagram</option>
                      </select> 
              
          </fieldset>
          
          <fieldset>
          İcon 3 Link: <input type="text" name="icon3_link" value="<?php echo $row['icon3_link']; ?>" required>
          </fieldset>
          <br>
          
          
          
          
          
        
          
          
          
        
            
          
          
          
       
        <fieldset>
         
            
            <button id="contt" type="submit" class="btn btn-success btn-block">Düzenle</button>
        </fieldset>
          
          <p id="message"></p>
      </form>
    </div>
    
    <?php 
    
        if($_POST){
 

            
            $baslik=$_POST['baslik'];
            $icon1=$_POST['icon1'];
            $icon2=$_POST['icon2'];
            $icon3=$_POST['icon3'];
            $renk=$_POST['renk'];
            $icon1_link=$_POST['icon1_link'];
            $icon2_link=$_POST['icon2_link'];
            $icon3_link=$_POST['icon3_link'];
            
            $guncelle= $DBcon -> prepare("UPDATE footer SET baslik=:baslik, icon1=:icon1, icon2=:icon2, icon3=:icon3, icon1_link=:icon1_link,icon2_link=:icon2_link,icon3_link=:icon3_link, renk=:renk WHERE id=:id");
            $guncelle -> execute(array(":baslik" => $baslik,":icon1" => $icon1,":icon2" => $icon2,":icon3" => $icon3,":icon1_link" => $icon1_link,":icon2_link" => $icon2_link,":icon3_link" => $icon3_link,":renk" => $renk,":id" =>$id));
            
           
           
            if($guncelle){
                echo "<script type='text/javascript'>alert('Başarıyla Güncellendi');</script>";
                header("Refresh:0 ; url=footerduzenle.php");
            }
            
           
        }
        
    ?>
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
</body>

<?php ob_end_flush(); ?>

</html>
























<?php

  }
   ?>
