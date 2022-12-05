<?php
if ($_POST) { //post var mı diye bakıyoruz
    include("baglan.php"); //veri tabanına bağlanıyoruz

    //değişkenleri integer olarak alıyoruz
    $id = (int)$_POST['id'];
    $durum = (int)$_POST['durum'];
    

    //Güncellme sorgumuzu yazıyoruz
    $sorgu = $DBcon->query("UPDATE slider SET durum=$durum WHERE  id=$id");

    //gerekli ise geriye değer döndürüyoruz
    echo $id . " nolu kayıt değiştirildi";
}
?>