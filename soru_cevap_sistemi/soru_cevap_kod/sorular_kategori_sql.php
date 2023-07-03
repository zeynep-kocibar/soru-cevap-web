
<?php
include "session_control.php";
include ('baglanti.php');

$kategori=$_POST['kategori_sor'];

echo $kategori;
header("Location: sorular.php?kategori=$kategori");
?>