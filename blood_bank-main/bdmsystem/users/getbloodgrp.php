<?php 
    include('conn.php');
    if(isset($_POST['blood_group'])){ 
        $blood_group    = $_POST['blood_group'];
        $qr             = "SELECT volume FROM total_blood WHERE id='$blood_group'";
        $result         = mysqli_query($conn,$qr) or die(mysqli_error($conn)); 
        $total_vol      = 0;
        while( $row = mysqli_fetch_array($result) ){
            $volum      = $row['volume'];
            $total_vol  = $total_vol + $volum;
        }
        echo $total_vol;
    }
?>