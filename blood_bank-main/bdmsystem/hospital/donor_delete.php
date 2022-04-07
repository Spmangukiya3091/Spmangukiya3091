<?php 
    include "session.php";
    include "header.php";
    include "conn.php";
#Delete Data 
    if (isset($_GET['id'])){
        $id      = $_GET['id'];
        $qu      = "DELETE FROM blood_inventory_data WHERE id=$id";
        $result  = mysqli_query($conn,$qu);
        if ( $result ){
            echo "<script>window.location.href='donor_list.php?isDelet=1';</script>";
        } else{
            ?>  
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Danger!</strong> Donor Data Is  Not Deleted.
            </div>
            <?php
        }
    }   
?>