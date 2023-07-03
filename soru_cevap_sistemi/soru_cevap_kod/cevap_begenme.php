<?php
    include "session_control.php";
    include "baglanti.php";
    
    $q_id = $_GET['soru_id'];
    $user_id = $_GET['kullanici_id'];
    $cevap_id = $_GET['cevap_id'];
    

    $sql1="INSERT INTO `cevap_begen`( `soru_id`, `kulanici_id`, `cevap_id`, `turu`)
     VALUES ($q_id, $user_id, $cevap_id,0)";
    //echo $sql;
    $result = mysqli_query($baglan, $sql1);
    header("Location: sorular.php?kategori=Hepsi");


    

?>