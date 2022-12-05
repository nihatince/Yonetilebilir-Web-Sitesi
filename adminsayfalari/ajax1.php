<?php 
  
  require 'baglan.php';
  $id =  $_POST['id'];
       $menu_renk  = $_POST['menu_renk'];
      $menu_yazi  = $_POST['menu_yazi'];


     
  
header("Refresh: 0; url=menu_renk.php");
   
   
    
    if($_POST){

      

      $query = $DBcon->prepare('update menu_renk set 
        menu_renk = :menu_renk,
        menu_yazi = :menu_yazi where id = :id

        ');

     $ok =  $query->execute([
         'menu_renk' => $menu_renk,
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