<?php
    if(!isset($_SESSION['email'])){
        session_start();
        header('location:bootstrap.php');
        session_unset();
        session_destroy();    
    }else{
        session_unset();
        session_destroy();
    }
    header('location:bootstrap.php');
?>