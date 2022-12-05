<?php

  include("baglan.php");
ob_start();
  session_start();
  if(!isset($_SESSION["giris2"])){
  echo "Bu sayfayı görüntüleme yetkiniz yoktur.<br>";
      echo "Anasayfaya Yönlendiriliyorunuz.";
header("Refresh: 3; url=login.php");
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
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    
    <script src="https://kit.fontawesome.com/64136669dd.js" crossorigin="anonymous"></script>
    
    <link href="css/switch.css" rel="stylesheet"/>
    
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


    
    
    <?php require 'baglan.php';?>
   <div class="container pt-5 pb-5">        
      <table class="table"> 
       <thead>
           <th>İD</th>

        <th>Slider Resmi</th>
        
        <th>Durum</th>
           
           <th>Düzenle</th>
           <th>Sil</th>
           
           
           
           
        
       </thead>
       <tbody>
          <?php 
     
        $query = $DBcon->query('SELECT * FROM slider ORDER BY id ASC',PDO::FETCH_ASSOC);

          foreach($query as  $row){
      
            ?>
                <tr id="<?=$row['id']?>">
              
              <td data-target="id"><?=$row['id']?></td>
          
              
                     <td data-target="resim" ><img width="200px" height="125px" src="../img/anasayfa/slider/<?=$row['file_name']?>"></td>
             

              <td>
                    
                        <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $row['id'] ?>' class="aktifPasif" <?php echo $row['durum']==1?'checked':'' ?>  />
                        <span class="slider round"></span>
                    </label>
                    
                        
                        
                        
                    
                    </td>

              
              
              
               
                
                    <td><a href="sliderupdate.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-pen-to-square" style='font-size:27px'></i></a></td>
                     <td><a class='btn btn-danger' href='sliderduzenle.php?sil=<?php echo $row["id"]; ?>&sliderresimsil=<?php echo $row["file_name"]; ?>' role='button'>Sil</a></td>
              
            
                    
            </tr>
            <?php

          }  
  
          ?>

          <?php
       
  
    if ($_GET) {
    $id = $_GET["sil"];

    $sil = $DBcon->prepare("DELETE FROM slider WHERE id=:id");
    $sil->execute(array(":id" => $id));
    if ($sil) {
        echo "Silme İşlemi Başarı ile Gerçekleşti";
        $resim_sil=$_GET["sliderresimsil"];
        echo $resim_sil;
        unlink("../img/anasayfa/slider/$resim_sil");
        header("Location:sliderduzenle.php");
        
    } else {
        echo "hata oluştu";
    }
}

?> 
         

         <script>

     $(document).ready(function () {
    $('.aktifPasif').click(function (event) {
        var id = $(this).attr("id");  //id değerini alıyoruz

        var durum = ($(this).is(':checked')) ? '1' : '0';
        //checkbox a göre aktif mi pasif mi bilgisini alıyoruz.

        $.ajax({
            type: 'POST',
            url: 'aktifpasif3.php',  //işlem yaptığımız sayfayı belirtiyoruz
            data: { id:id,durum: durum }, //datamızı yolluyoruz
            success: function (result) {
                $('#sonuc').text(result);
                //gelen sonucu h2 tagında gösteriyoruz
            },
            error: function () {
                alert('Hata');
            }
        });
    });
});
    
</script>  
          
           
        
            
            

       </tbody>

      </table>
 
   </div>
    
    

    
    
    



    
  
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
    
    
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

</html>
























<?php

  }
   ?>


