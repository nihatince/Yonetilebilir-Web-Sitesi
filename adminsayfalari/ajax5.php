<?php 
  
  require 'baglan.php';
   
   if($_POST){

   	  $id =  $_POST['id'];
       $menu_yazi  = $_POST['menu_yazi'];
      

      $query = $DBcon->prepare('update menu_yazi set 
        menu_yazi = :menu_yazi where id = :id

      	');

     $ok =  $query->execute([
         'menu_yazi' => $menu_yazi,
          'id' => $id
      ]); 

      if($ok){
      	echo 'güncelleme başarılı';
      }else {
   
        echo 'güncelleme hatası';

      }    
}

?>