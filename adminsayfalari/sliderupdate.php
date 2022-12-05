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

    $uyesor = $DBcon->prepare("select * from slider where id=:id");
    $uyesor->execute(array('id' => $_GET["id"]));
    $uyecek = $uyesor->fetch(PDO::FETCH_ASSOC);
    $uyekontrol = $uyesor->rowCount();
?>

    

    

    
   
    <div class="con">  
    
    <form id="contt" class="profil-duzenle" method="post" action="" enctype="multipart/form-data">
        <input value="<?php echo $uyecek["id"] ?>" name="id" type="hidden">
        <img width="350px" height="200px" src="../img/anasayfa/slider/<?php echo $uyecek["file_name"]; ?>">
        <label>Slider Resmi Düzenle: </label>
        <input type="file" name="file_name">
        <br>
        
        
        <br>
        <button value="1" class="btn btn-success btn-block" name="profilkaydet">Kaydet</button>
    </form>


   </div>
      

    
     <?php

if(isset($_POST["profilkaydet"])){

        $resimad = $uyecek["file_name"];
        $name = $_FILES["file_name"]["name"];
    // dosya varmı kontrol
    if(strlen($name) > 0){
        $yukleklasor = '../img/anasayfa/slider/';
        $tmp_name = $_FILES["file_name"]["tmp_name"];
        $boyut = $_FILES["file_name"]["size"];
        $tip = $_FILES["file_name"]["type"];
        $uzanti = substr($name,-4,4);
        $randsayi1 = rand(10000,50000);
        $randsayi2 = rand(10000,50000);
        $resimad = $randsayi1.$randsayi2.$uzanti;
    
    // boyut kontrol
    if($boyut > (2000*2000*3)){
        echo "Dosya boyutu çok büyük!";
        exit;   
    }
    // tip kontrol
    if($tip !== 'image/jpeg' and $tip !== 'image/png' and $uzanti !== '.jpg'){
        echo "Yalnızca jpeg veya png formatında resim yüklenebilir!";
        exit();
    }
    $eskiresim = $uyecek["file_name"];
    unlink("../img/anasayfa/slider/".$eskiresim);

    // klasöre yükleme
    move_uploaded_file($tmp_name, "$yukleklasor/$resimad");
    
    }// varsa yap sonu

    $uyesor = $DBcon->prepare("update slider set file_name=:resim where id={$_POST['id']}");
    $uyeguncelle = $uyesor->execute(array('resim' => $resimad));
    
    if($uyeguncelle){
       
        $id = $_POST["id"];
        header("Location: sliderduzenle.php");
    }else{
        echo "güncellenirken bir hata oluştu!";
    }


}
?>
        




    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
</body>

<?php ob_end_flush(); ?>

</html>
























<?php

  }

   ?>
