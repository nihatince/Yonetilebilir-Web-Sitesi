<?php 
  
  require 'baglan.php';
   
   if($_POST){

   	  $id =  $_POST['id'];
       $baslik1  = $_POST['baslik1'];
      $baslik1_link  = $_POST['baslik1_link'];
      

      $query = $DBcon->prepare('update menu set 
        baslik1 = :baslik1,
         baslik1_link = :baslik1_link where id = :id

      	');

     $ok =  $query->execute([
         'baslik1' => $baslik1,
          'baslik1_link' => $baslik1_link,
          'id' => $id
      ]); 

      if($ok){
      	echo 'güncelleme başarılı';
      }else {
   
        echo 'güncelleme hatası';

      }    
}

?>