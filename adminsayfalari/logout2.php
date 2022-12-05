<?php

  session_start();
  ob_start();
  session_destroy();

  header("Refresh: 0; url=login.php");
  ob_end_flush();

  if (isset($_POST['buton'])) {
      require 'baglan.php';
      date_default_timezone_set('Europe/Istanbul');
      $tarih = date('Y.m.d H:i:s');
      $log2 = $DBcon->query("UPDATE log SET cikis_tarihi='$tarih' WHERE cikis_tarihi=0");
      header("Refresh: 0; url=login.php");
  }
  ?>