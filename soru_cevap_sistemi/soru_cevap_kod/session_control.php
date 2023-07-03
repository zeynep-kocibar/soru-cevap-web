<?php
    session_start();

    if(!isset($_SESSION['currentuser'])){
        header("Location: uye_girisi.php");
    }