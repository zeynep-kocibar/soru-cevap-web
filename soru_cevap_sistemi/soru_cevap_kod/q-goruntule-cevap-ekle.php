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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
</head>

<body>
<?php
        $q_id = $_GET['id'];
        
        ?>
    <form action="q-goruntule-insert.php?id=<?php echo $q_id; ?>" method="post">
        <table>
            <tr>
                <table>
                    <tr>
                        <p>cevap metni:</p>
                        <td><input type="text" name="cevap_metni"></td>
                        <table>
                            <tr>
                                <td><input type="submit" value="Ekle"></td>
                            </tr>
                        </table>
    </form>



</body>

</html>