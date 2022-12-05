<?php 
  
  require 'baglan.php';
   
   if($_POST){

      $id =  $_POST['id'];
       $logobaslik  = $_POST['logobaslik'];
      $logoresim  = $_POST['logoresim'];
      

      $query = $DBcon->prepare('update logo set 
        logobaslik = :logobaslik,
         logoresim = :logoresim where id = :id

        ');

     $ok =  $query->execute([
         'logobaslik' => $logobaslik,
          'logoresim' => $logoresim,
          'id' => $id
      ]); 

      if($ok){
        echo 'güncelleme başarılı';
      }else {
   
        echo 'güncelleme hatası';

      }    
}

?>