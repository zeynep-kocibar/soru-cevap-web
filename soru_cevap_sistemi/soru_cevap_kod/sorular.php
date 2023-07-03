<!DOCTYPE html>
<html lang="en">
<head>

<div align="center">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorular</title>
</head>
<body>
<style>
    body {
  background-image: url('arkaplan.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<form action="sorular_kategori_sql.php"  method="post">
        <table>
            <tr>
            <font face="tahoma" size="6" color="#20B2AA">Soru Kategorisi</font><br><br>
                <input type="radio" id="Hepsi" name="kategori_sor" value="Hepsi">
                <label for="Hepsi">Hepsi</label><br>

                <input type="radio" id="Ekonomi" name="kategori_sor" value="Ekonomi">
                <label for="Ekonomi">Ekonomi</label><br>

                <input type="radio" id="Siyaset" name="kategori_sor" value="Siyaset">
                <label for="Siyaset">Siyaset</label><br>

                <input type="radio" id="Magazin" name="kategori_sor" value="Magazin">
                <label for="Magazin">Magazin</label><br>

                <input type="radio" id="Bilim" name="kategori_sor" value="Bilim">
                <label for="Bilim">Bilim</label><br>

                <input type="radio" id="Müzik" name="kategori_sor" value="Müzik">
                <label for="Müzik">Müzik</label><br>

                <input type="radio" id="Eğitim" name="kategori_sor" value="Eğitim">
                <label for="Eğitim">Eğitim</label><br>

                <input type="radio" id="Gündem" name="kategori_sor" value="Gündem">
                <label for="Gündem">Gündem</label><br>

                <input type="radio" id="Spor" name="kategori_sor" value="Spor">
                <label for="Spor">Spor</label><br><br>

                <button style="background-color:#20B2AA;color:white;width:5%;">Sorgula</button>

    </form> 
<?php
include "session_control.php";
include( 'baglanti.php');

$kategori=$_GET['kategori'];


if(isset($kategori)){
  if($kategori=='Hepsi'){
    $sql = "SELECT * FROM soru_bilgisi ORDER BY begenilme_sayisi DESC";
    $result = mysqli_query($baglan,$sql);
    $num_rows = mysqli_num_rows($result);
  }else{
    $sql = "SELECT * FROM soru_bilgisi WHERE soru_kategori= '$kategori'  ORDER BY begenilme_sayisi DESC";
    $result = mysqli_query($baglan,$sql);
    $num_rows = mysqli_num_rows($result);

  }

}

?>
    <p>
        <a href="q-insert-form.php">Soru Ekle</a>
        
    </p>
    <p> <a href="logout.php">Çıkış Yap</a></p>
    <hr>
    <table bgcolor="#66CCCC">
    <table border="1">

    <style>
            table, td, th {
                border-color: 2px black;
            }
        
        th {
            background-color:#D2B48C;
            color: black;
        }
        </style>

        <tr>
           
            <th>Soru Başlığı</th>
            <th>Oluşturan Kullanıcı</th>
            <th>Eklenme Tarihi</th>
            
            
        </tr>
        <?php    
            if($num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>';
                       
                        echo "<td>".$row['soru_basligi']."</td>";
                        
                        echo "<td>".$row['olusturan_kullanici']."</td>";
                        echo "<td>".$row['eklenme_tarihi']."</td>";
                       
                        echo '<td>';
                            echo '<a href="q-goruntule-form.php?id=' . $row['id'] . '">Görüntüle</a> -';
                            echo '<a href="q-delete-form.php?id=' . $row['id'] . '">Sil</a>';
                          
                        echo '</td>';
                    echo '</tr>';
                  
                }
            }
            ?>
    </table>
</body> 
</html>

