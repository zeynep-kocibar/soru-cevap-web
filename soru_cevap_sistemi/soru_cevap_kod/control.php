<?php

  echo $_GET['user'];
  echo "<br>";
  echo $_GET['password'];

  

  $user = $_GET['user'];
  $passwd = $_GET['password'];
  if($users[$user] == $passwd){
    echo "<br>";
    echo "Giriş başarılı";
  }
  else{
    echo "<br>";
    echo "Giriş BAŞARISIZ";
  }
?>