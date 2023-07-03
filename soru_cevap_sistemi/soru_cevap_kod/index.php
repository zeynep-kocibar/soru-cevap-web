  <!DOCTYPE html>
<html lang="tr">
<style>
    body {
        
  background-image: url('arkaplan.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
 
}

</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANASAYFA</title>
</head>

<body>
  <center>
<?php

            session_start();
            if(isset($_SESSION['currentuser'])){
                echo '<p>Merhaba, ' . $_SESSION['currentuser'] . '</p>';
                echo '<p>Merhaba, ' . $_SESSION['kullanici_id'] . '</p>';
                echo '<p><a href="logout.php">Çıkış Yap</a></p>';
                echo '<p><a href="sorular.php?kategori=Hepsi">Sorular</a></p>';
            }
            else{
                echo '<p>Giriş yapmadıysanız önce giriş yapmalısınız.</p>';
                echo '<p><a href="uye_girisi.php">Giriş</a></p>';
            }
        ?>

  


</body>
</center>
