<?php
    @session_start();
    if(!isset($_SESSION['admin_email']))
    {
        //@header('location:login.php');
         echo "<script>window.location.href='login.php';</script>";
       
    }
   /* else
    {
        //header("location:index.php");
        echo "<script>window.location.href='index.php';</script>";
    }*/

?>