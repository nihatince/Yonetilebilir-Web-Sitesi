<?php

  include("baglan.php");
  session_start();
  ob_start();
  if(($_POST["kulad"]==$kulad) and ($_POST["sifre"]==$sifre)){
  $_SESSION["giris2"] = "true";
  $_SESSION["kulad"] = $user;
  $_SESSION["sifre"] = $pass;
    
  header("Location:adminpaneli.php");
 }else{?>


            	<?php
  echo "Kullancı Adı veya Şifre Yanlış.<br>";
  


  }
  ob_end_flush();

  ?>
