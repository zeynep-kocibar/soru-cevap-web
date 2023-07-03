
    

<?php
include "session_control.php";
include ('baglanti.php');

$qnamebaslik = $_POST['qnamebaslik'];
$qnameaciklama = $_POST['qnameaciklama'];
$kategori=$_POST['fav_language'];
$qolusturan=$_SESSION['currentuser'];



$sql = "INSERT INTO soru_bilgisi (soru_basligi,soru_metni,olusturan_kullanici,soru_kategori) VALUES ('$qnamebaslik','$qnameaciklama','$qolusturan','$kategori')";

mysqli_query($baglan, $sql);
$last_id = mysqli_insert_id($baglan);
if($last_id > 0)
{
    echo "Soru eklendi. " . $last_id;
    header("Location: sorular.php?kategori=Hepsi");
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($baglan);
}