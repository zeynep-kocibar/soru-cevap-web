<?php
    include "session_control.php";
    include "baglanti.php";
    
    $q_id = $_GET['soru_id'];
    $user_id = $_GET['kullanici_id'];
    $sql = "INSERT INTO `soru_begenme` (`soru_id`, `kullanici_id`, `turu`) VALUES ($q_id, $user_id, 0);";
    //echo $sql;
    $result = mysqli_query($baglan, $sql);
    header("Location: sorular.php?kategori=Hepsi");
    
?>