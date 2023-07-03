<?php
    include "session_control.php";
    include "baglanti.php";
    
    $q_id = $_GET['soru_id'];
    $user_id = $_GET['kullanici_id'];
    $begenilme_sayisi=$_GET['begenilme_sayisi']+1;

    $sql = "INSERT INTO `soru_begenme` (`soru_id`,`kullanici_id`,`turu`) VALUES ($q_id, $user_id, 1);";
    //echo $sql;
    $result = mysqli_query($baglan, $sql);

    $sql2 = "UPDATE soru_bilgisi SET begenilme_sayisi='$begenilme_sayisi' WHERE id=$q_id;";

    $result1 = mysqli_query($baglan, $sql2);
    header("Location: sorular.php?kategori=Hepsi");
    
    
?>