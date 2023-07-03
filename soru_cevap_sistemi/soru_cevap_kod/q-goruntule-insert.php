
    

<?php
include "session_control.php";
include ('baglanti.php');
session_start();
$q_id = $_GET['id'];
$cevap_metni = $_POST['cevap_metni'];
$cevap_olusturan = $_SESSION['currentuser'];



$sql = "INSERT INTO soru_cevap (soru_id,cevap_metni,cevap_olusturan) VALUES ('$q_id','$cevap_metni','$cevap_olusturan')";

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

