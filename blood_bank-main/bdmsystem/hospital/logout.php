<?php
    include "session.php";
    @session_destroy();
    header('location:../users/index.php');
?>