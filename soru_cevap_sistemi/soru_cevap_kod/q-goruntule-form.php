<?php
include "session_control.php";
?>
<!DOCTYPE html>
<html lang="en">
<center>
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
  <title>Soru Ekle</title>
</head>
<style>
  #time {
    margin-left: 1350px;
    margin-top: -750px;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    width: 100%;
    height: 900px;

  }

  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  .container {
    padding: 2px 16px;
  }
</style>

<body>
  <?php

  $kullanici_id = $_SESSION['kullanici_id'];
  $q_id = $_GET['id'];
  include 'baglanti.php';

  // idye göre veritabanından soruyu çeker
  $sql = "SELECT * FROM soru_bilgisi WHERE id = $q_id";
  $result = mysqli_query($baglan, $sql);
  $num_rows = mysqli_num_rows($result);
  if ($num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $soru_basligi = $row['soru_basligi'];
    $soru_kategori = $row['soru_kategori'];
    $soru_metni = $row['soru_metni'];
    $olusturan_kullanici = $row['olusturan_kullanici'];
    $eklenme_tarihi = $row['eklenme_tarihi'];
    $begenilmeme_sayisi = $row['begenilmeme_sayisi'];
  }
  // idye göre veritabanından sorunun cevaplarını çeker
  $sql2 = "SELECT * FROM soru_cevap WHERE soru_id = $q_id ORDER BY begenilme_sayisi DESC";
  $result2 = mysqli_query($baglan, $sql2);
  $num_rows2 = mysqli_num_rows($result2);

  // idye göre veritabanından soruyu beğenme sayısını çeker
  $sql3 = "SELECT * FROM soru_begenme  WHERE soru_id='$q_id'AND turu=1";
  $result3 = mysqli_query($baglan, $sql3);
  $num_rows3 = mysqli_num_rows($result3);

  // idye göre veritabanından soruyu beğenip beğenmeme durumunun kontrol eder
  $sql4 = "SELECT * FROM soru_begenme  WHERE soru_id='$q_id' AND kullanici_id='$kullanici_id'";
  $result4 = mysqli_query($baglan, $sql4);
  $num_rows4 = mysqli_num_rows($result4);

  // idye göre veritabanından soruyu beğenmeme sayısını çeker
  $sql5 = "SELECT * FROM soru_begenme  WHERE soru_id='$q_id'AND turu=0";
  $result5 = mysqli_query($baglan, $sql5);
  $num_rows5 = mysqli_num_rows($result5);







  ?>



  <div class="card">

    <div class="container">
      <h3><b>Soru Başlığı = <?php echo $soru_basligi; ?></b></h3>
      <h3>Soru Metni = <?php echo $soru_metni; ?></h3>
      <h3>Soru Kategori = <?php echo $soru_kategori; ?></h3>
      <h3>Oluşturan Kullanıcı = <?php echo $olusturan_kullanici; ?></h3>

      <?php
      if ($num_rows4 < 1) {
        echo "<a href='begen.php?soru_id=$q_id&kullanici_id=$kullanici_id&begenilme_sayisi=$num_rows3'>Beğen</a> ($num_rows3)";
      } else {
        echo "Beğen ($num_rows3)";
      }

      ?>
      <br></br>
      <?php
      if ($num_rows4 < 1) {
        echo "<a href='begenme.php?soru_id=$q_id&kullanici_id=$kullanici_id'>Beğenme</a> ($num_rows5)";
      } else {
        echo "Beğenme ($num_rows5)";
      }

      ?>
      <br></br>
      
      <a href="q-goruntule-cevap-ekle.php?id=<?php echo $q_id; ?>">
      <button  style="background-color:#20B2AA;color:white;width:5%;">Cevap Ekle</button>
      </a>
      <table border="1">
      
        <tr>

          <th>Cevap Metni</th>
          <th>Oluşturan Kullanıcı</th>
          <th>Beğenilme Durumu</th>
          <th>Eklenme Tarihi</th>

          <style>
            table, td, th {
                border-color: 2px black;
            }
        
        th {
            background-color:#D2B48C;
            color: black;
        }
        </style>


        </tr>
        <br></br>
        <?php
        if ($num_rows2 > 0) {
          while ($row2 = mysqli_fetch_assoc($result2)) {
            
            $sql6 = "SELECT * FROM cevap_begen  WHERE soru_id=$q_id AND turu=1  AND cevap_id=".$row2['id']." ";
            $result6 = mysqli_query($baglan, $sql6);
            $num_rows6 = mysqli_num_rows($result6);

            $sql7 = "SELECT * FROM cevap_begen  WHERE soru_id=$q_id AND turu=0  AND cevap_id=".$row2['id']." ";
            $result7 = mysqli_query($baglan, $sql7);
            $num_rows7 = mysqli_num_rows($result7);


            $sql9 = "SELECT * FROM cevap_begen  WHERE  kulanici_id='$kullanici_id'  AND soru_id=$q_id AND cevap_id=".$row2['id']." ";
            $result9 = mysqli_query($baglan, $sql9);
            $num_rows9 = mysqli_num_rows($result9);


            echo '<tr>';
            echo "<td>" . $row2['cevap_metni'] . "</td>";
            echo "<td>" . $row2['cevap_olusturan'] . "</td>";
            if ($num_rows9 < 1) {
              echo "<td>
                          
            <a href=cevap_begen.php?soru_id=$q_id&kullanici_id=$kullanici_id&begenilme_sayisi=$num_rows6&cevap_id=" . $row2['id'] . ">Beğen</a> ($num_rows6) <br></br>

            <a href=cevap_begenme.php?soru_id=$q_id&kullanici_id=$kullanici_id&cevap_id=" . $row2['id'] . ">Beğenme</a> ($num_rows7)</td>";
       } else {
              echo "<td>Beğen ($num_rows6)<br></br>Beğenme ($num_rows7) </td>";
            }
            echo "<td>" . $row2['cevap_tarihi'] . "</td>";
            echo '</tr>';
          }
        }

        ?>
      </table>


      <nav id="time">
      
      
        <p><?php echo $eklenme_tarihi; ?></p>
     
      </nav>


    </div>
  </div>

</body>

