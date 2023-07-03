<?php
    include "session_control.php";
    include "baglanti.php";
    
    $q_id = $_GET['soru_id'];
    $user_id = $_GET['kullanici_id'];
    $cevap_id = $_GET['cevap_id'];
    $begenilme_sayisi=$_GET['begenilme_sayisi']+1;

    $sql1="INSERT INTO `cevap_begen`( `soru_id`, `kulanici_id`, `cevap_id`, `turu`)
    VALUES ($q_id, $user_id, $cevap_id,1)";
    //echo $sql;
    $result = mysqli_query($baglan, $sql1);

    $sql2 = "UPDATE soru_cevap SET begenilme_sayisi='$begenilme_sayisi' WHERE id=$cevap_id;";

    $result1 = mysqli_query($baglan, $sql2);
    header("Location: sorular.php?kategori=Hepsi");

   
    
?>