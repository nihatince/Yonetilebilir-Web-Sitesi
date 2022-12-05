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
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
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
          
       	<th>Menü Adı</th>
       	<th >Menü Linki</th>
       	
           
           <th>Düzenle</th>
           
         
           
          
       	
       </thead>
       <tbody>
       	  <?php 
     
        $query = $DBcon->query('SELECT * FROM logo ORDER BY id ASC',PDO::FETCH_ASSOC);

          foreach($query as  $row){
      
            ?>
                <tr id="<?=$row['id']?>">
                    <td data-target="id"><?=$row['id']?></td>
                
            	<td data-target="logobaslik"><?=$row['logobaslik']?></td>
            	<td data-target="logoresim" ><img width="50px" height="50px"  src="../<?=$row['logoresim']?>"></td>
            	<td><a data-role="update" data-id="<?=$row['id']?>" href="#"><button class="btn btn-success">Düzenle</button></a></td>
              
        
            </tr>
            <?php

          }  
  
       	  ?>
            
            

       </tbody>

      </table>
 
	 </div>
    
    

    
    
    


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logo Düzenle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Logo Başlık:</label>
            <input id="logobaslik" type="text" class="form-control" id="recipient-name">
          </div>
            
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Resim Link:</label>
            <textarea id="logoresim" class="form-control" id="message-text"></textarea>
          </div>
            
          
           
           
            
            
            
          <input type="hidden" id="konu_id" name="">
            
        </form>
      </div>
      <div class="modal-footer">
      	<a href="" id="save" class="btn btn-primary pull-right">Güncelle</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
    
 
    
    

    
    
    
    
    
    
    
    
    
    
    
  
   <script>
   	  
   	  $(function(){

      
   
      $(document).on('click','a[data-role=update]',function(e){
       
   
       var id = $(this).data('id');  
       
      
          
      
    
       var logobaslik   = $('#'+id).children('td[data-target=logobaslik]').text();
          
       var logoresim = $('#'+id).children('td[data-target=logoresim]').text();
          
      
        
       
       
       $('#logobaslik').val(logobaslik);
       $('#logoresim').val(logoresim);
       
       $('#konu_id').val(id);
       $('.modal').modal('toggle');
     
  
     e.preventDefault();

      });
  
     $('#save').click(function(e){

       // burda kayıt ederken value değerlerini alıyoruz..	
      
      var id       =  $('#konu_id').val();  
      
      var logobaslik =  $('#logobaslik').val();
      var logoresim =  $('#logoresim').val();
      
        
        // ajax ile değerleri gönderiyoruz..
   
       $.ajax({
   
         url    : 'ajax2.php',
         method : 'post',
         data   : {logobaslik : logobaslik, logoresim : logoresim, id : 
         	id},
         success: function(e){

         	// işlemi başarılıysa list ekranında değerlerin değişmiş hali gözükmesi aşağıdaki kodları yazıyoruz idsi eşit olan değeri düzenleme işlemi yapıyoruz..
             
             
         	$('#'+id).children('td[data-target=logobaslik]').text(logobaslik);
             
         	$('#'+id).children('td[data-target=logoresim]').text(logoresim);
             
             
         	 $('.modal').modal('toggle');

         }

       });
    // burda da aynı şekilde sayfa yenilenmeyi engelledik
e.preventDefault();
      
     });


   	  });

   </script>
    
    
    
   
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

</html>
























<?php

  }
   ?>


