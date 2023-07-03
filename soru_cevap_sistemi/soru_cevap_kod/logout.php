<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<style>
   body {
  background-image: url('arkaplan.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<?php
// session değişkenlerini sil
session_unset();

// oturumu kapat
session_destroy();
?>
<hr>
<a href="index.php">Çıkış Yapıldı</a>