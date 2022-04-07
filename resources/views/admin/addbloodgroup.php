<?php 
include "session.php";
include "conn.php";
include "slider.php";
include "header.php";


if ( isset( $_POST[ 'btnadd' ] ) && ( $_POST[ 'btnadd' ] ) === 'Add' ) {   
    $blood_group = $_POST['blood_group'];
    $qr          = "INSERT INTO `blood_group`(`blood_group`) VALUES ('$blood_group')";
    $res         = mysqli_query($conn,$qr);
    if ($res) {
        echo "<script>window.location.href='blood_group_data.php?isAdd=1';</script>";
            // header('location:blood_group_data.php?isAdd=1');  
    } else {
        echo "<script>window.location.href='blood_group_data.php?isError=1';</script>";
      
    }
}
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Admin Detalis</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Blood Group</li>
                <li class="breadcrumb-item active">Blood Group Add</li>
            </ol>
            
        <form action="" method="post" class="registration">
        <div class="form-row" >
            <div class="form-group  col-md-12">
                <label for=""><i class="fa fa-tint text-danger" aria-hidden="true"></i>
                    Blood Group *</label>
                <input type="text" class="form-control" name="blood_group" required="">
            </div>
            <div class="form-group  col-md-12">
                <input type="submit" name="btnadd" id= "btn-sign-up" class="btn btn-primary" value="Add">
            </div>
        </div>
    </form>
</div>
</main>