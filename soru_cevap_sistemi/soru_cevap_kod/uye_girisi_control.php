<?php

include("baglanti.php");

if(isset($_POST["kullanici"], $_POST["parola"])){

    $gmaill=$_POST["kullanici"];
    $gparolaa=$_POST["parola"];

    $sql = "SELECT * FROM kayit_ol WHERE kullanici_ad='$gmaill' AND parola='$gparolaa'";

    $sonuc=$baglan->query($sql);
    echo "connects Successful";
    $result = mysqli_query($baglan, $sql);
    echo "result Successful";
    $num_rows = mysqli_num_rows($result);  
    if($num_rows >= 1){
        $row = mysqli_fetch_assoc($result);
        session_start();
        echo "Login Successful";
        $_SESSION['currentuser'] = $gmaill;
        $_SESSION['kullanici_id'] = $row['id'];

        header("Location: index.php");
    }else{
     
        echo " <script>alert('Kullanıcı bulunamadı ')</script>";
        header("Location: uye_girisi.php");
    }

}
?>