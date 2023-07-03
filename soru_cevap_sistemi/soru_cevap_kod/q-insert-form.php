<!DOCTYPE html>
<html lang="en">
<style>
    body {
  background-image: url('arkaplan.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<?php
include "session_control.php";
?>
<center>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
</head>

<body>
    <form action="q-insert.php" method="post">
        <table>
            <tr>
            <font face="tahoma" size="5" color="#20B2AA">Soru Kategorisi: </font><br><br>
                <input type="radio" id="Ekonomi" name="fav_language" value="Ekonomi">
                <label for="Ekonomi">Ekonomi</label><br>

                <input type="radio" id="Siyaset" name="fav_language" value="Siyaset">
                <label for="Siyaset">Siyaset</label><br>

                <input type="radio" id="Magazin" name="fav_language" value="Magazin">
                <label for="Magazin">Magazin</label><br>
                
                <input type="radio" id="Bilim" name="fav_language" value="Bilim">
                <label for="Bilim">Bilim</label><br>

                <input type="radio" id="Müzik" name="fav_language" value="Müzik">
                <label for="Müzik">Müzik</label><br>

                <input type="radio" id="Eğitim" name="fav_language" value="Eğitim">
                <label for="Eğitim">Eğitim</label><br>

                <input type="radio" id="Gündem" name="fav_language" value="Gündem">
                <label for="Gündem">Gündem</label><br>

                <input type="radio" id="Spor" name="fav_language" value="Spor">
                <label for="Spor">Spor</label><br><br>


                <table>
                    <tr>
                    <h1 style="font-size:19px;">Soru Başlığı:</h1>
                        <td><input type="text" name="qnamebaslik"></td>
                        <table>
                            <tr>
                                <h1 style="font-size:19px;">Soru Açıklaması:</h1>
                                <td><input type="text" name="qnameaciklama"></td>

                            </tr>
                            <tr>
                               
                                <td><input type="submit" value="Ekle"></td>
                            </tr>
                        </table>
    </form>



</body>

</html>