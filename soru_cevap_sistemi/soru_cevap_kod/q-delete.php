<?php
    include "session_control.php";
?>
<?php
        $q_id = $_GET['id'];
        include 'baglanti.php';
        $sql = "DELETE FROM soru_bilgisi WHERE id = $q_id";
        $result = mysqli_query($baglan,$sql);
        header("Location: sorular.php?kategori=Hepsi");
    ?> 