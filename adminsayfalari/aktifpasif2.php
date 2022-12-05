<?php
if ($_POST) { //post var mı diye bakıyoruz
    include("baglan.php"); //veri tabanına bağlanıyoruz

    //değişkenleri integer olarak alıyoruz
    $id = (int)$_POST['id'];
    $buton = (int)$_POST['buton'];
    

    //Güncellme sorgumuzu yazıyoruz
    $sorgu = $DBcon->query("UPDATE iletisim SET buton=$buton WHERE  id=$id");

    //gerekli ise geriye değer döndürüyoruz
    echo $id . " nolu kayıt değiştirildi";
}
?>