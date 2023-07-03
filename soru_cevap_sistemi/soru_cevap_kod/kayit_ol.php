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
<center>
<font face="tahoma" size="6" color="#339999"> KAYIT OL </font><br><br>


<form action="kayit_ol.php" method="post" >

  <label for="fname">AD:</label><br>
  <input type="text" id="isim" name="isim"><br><br>

  <label for="lname">SOYAD:</label><br>
  <input type="text" id="soyad" name="soyad" ><br><br>

  <label for="kullanıcı">KULLANICI ADI:</label><br>
  <input type="text"id="kullanici" name="kullanici" ><br><br>

  <label for="boy">PAROLANIZ:</label><br>
  <input type="password" id="parola" name="parola" value=><br><br>
  

  <input type="submit" value="Kayıt Ol">

  <input type="button" value="Anasayfaya Dön" onclick="window.location='index.php';" />

</form>

</body>
</html>


<?php
include("baglanti.php");

if(isset($_POST["isim"], $_POST["soyad"], $_POST["kullanici"] ,$_POST["parola"]))
{
      $add=$_POST["isim"];
      $soyadd=$_POST["soyad"];
      $kullanicii=$_POST["kullanici"];
      $parolaa=$_POST["parola"];
      


      $ekle="INSERT INTO kayit_ol (isim, soyisim , kullanici_ad ,parola)
       VALUES ('".$add."','".$soyadd."','".$kullanicii."','".$parolaa."')";

      if($baglan->query($ekle)==TRUE)
      {
        echo " <script>alert(Kayıt Başarılı')</script>";
 
      }else{
          echo " <script>alert(Kayıt Başarısız')</script>";
      }
      
      
     
      
      

}



?>


</center>