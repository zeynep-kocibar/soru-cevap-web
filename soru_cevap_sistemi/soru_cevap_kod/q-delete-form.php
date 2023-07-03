<?php
    include "session_control.php";
?>
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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
</head>
<body>
    <?php
        $q_id = $_GET['id'];
        include 'baglanti.php';
        $sql = "SELECT * FROM soru_bilgisi WHERE id = $q_id";
        $result = mysqli_query($baglan,$sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $q_name = $row['soru_basligi'];
            $q_date = $row['eklenme_tarihi'];
        }
    ?>
    <table>
        <tr>
            <td>Soru</td>
            <td><?php echo $q_name; ?></td>
        </tr>
        <tr>
            <td>Tarih</td>
            <td><?php echo $q_date; ?></td>
        </tr>
    </table>
    <hr>
    <h2>Soruyu silmek istediğinizden emin misiniz?</h2>
    <h1>
    <a href="q-delete.php?id=<?php echo $q_id; ?>">
    <button  style="background-color:#20B2AA;color:white;width:5%;">Evet
    </h1>
    <p>
    <h1>  
    <a href="sorular.php?kategori=Hepsi">
    <button  style="background-color:#20B2AA;color:white;width:5%;">Hayır
    </h1>
    </p>

</body>