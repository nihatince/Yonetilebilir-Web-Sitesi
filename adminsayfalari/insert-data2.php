<?php
include('baglan.php');
$dizi=array();

$baslik1=$_POST['baslik1'];
$baslik1_link=$_POST['baslik1_link'];




$stmt = $DBcon->prepare("INSERT INTO menu(baslik1,baslik1_link) VALUES(:baslik1,:baslik1_link)");
 
$stmt->bindparam(':baslik1', $baslik1);
$stmt->bindparam(':baslik1_link', $baslik1_link);

if($stmt->execute())
{
  $res="Veri eklendi";
  echo json_encode($res);
}
else {
  $error="Veri Eklenemedi,problem oluştu.";
  echo json_encode($error);
} 
?>