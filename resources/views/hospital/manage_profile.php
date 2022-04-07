<?php 
    include "session.php";
    include "header.php";
    include "conn.php";

if (isset($_SESSION['email'])) {   
    $email       = $_SESSION['email'];
    $q           = "SELECT * FROM userdata WHERE email='$email'";
    $rs          = mysqli_query($conn,$q);
    $res         = mysqli_fetch_row($rs);
    $id          = $res[0];
    $name        = $res[1];
    $organization= $res[3];
    $email       = $res[4];
    $phone       = $res[5];
    $address     = $res[6];
    $state       = $res[7];
    $city        = $res[8];
    $zipcode     = $res[9];
}

if(isset($_POST['btnEdit'])){
    $email       = $_SESSION['email'];
    $name        = $_POST['name'];
    $organization= $_POST['organization'];
    $phone       = $_POST['phone'];
    $address     = $_POST['address'];
    $state       = $_POST['state'];
    $city        = $_POST['city'];
    $zipcode     = $_POST['zipcode'];
    $sql         = "UPDATE userdata 
                    SET name='$name',organization='$organization',email='$email',phone='$phone',address='$address',state='$state',city='$city',zipcode='$zipcode'
                    WHERE email='$email'";
    if ( $rs = mysqli_query( $conn , $sql )){
        ?>  
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Update Success.
        </div>
        <?php
    } else{
        ?>  
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Danger!</strong> Update Not Success.
        </div>
        <?php
    }
}

if(isset($_POST['btnCancle'])){
    echo "<script>window.location.href='index.php';</script>";
}

?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">manage Profile</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<div class="w3l-contact-main">
    <div class="container py-md-5">
        <form action="" method="post" class="registration">
            <div class="form-row" style="margin-right: 10px; margin-left: 10px;">
            <div class="form-group  col-md-6">
                <label for="">Name *</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required="">
            </div>
            <div class="form-group  col-md-6">
                <label for="">Organization *</label>
                <input type="text" class="form-control" name="organization" value="<?php echo $organization; ?>" required="" readonly>
                <!-- <select class="form-control" name="organization" required="">
                    <option value="none"<?php if ($organization == 'none'){echo "selected";}?>>None</option>  
                    <option value="Kiran Hospital"<?php if ($organization == 'Kiran Hospital'){echo "selected";}?>>Kiran Hospital</option> 
                    <option value="Navyug Hospital"<?php if ($organization == 'Navyug Hospital'){echo "selected";}?>>Navyug Hospital</option>
                    <option value="Jivan Jyot Hospital"<?php if ($organization == 'Jivan Jyot Hospital'){echo "selected";}?>>Jivan Jyot Hospital</option>   
                </select> -->
            </div>
        
            <div class="form-group  col-md-6">
                <label for="">Email Address *</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required="">
            </div>
        
            <div class="form-group  col-md-6">
                <label for="">Phone No. *</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" required="">
            </div>
        
            <div class="form-group  col-md-6">
                <label for="">Address *</label>
                <input type="text" class="form-control" name="address" value="<?php echo $address; ?>" required="">
            </div>
        
            <div class="form-group  col-md-6">
                <label for="">State *</label>
                <input type="text" class="form-control" name="state" value="<?php echo $state; ?>"required="">
            </div>
        
            <div class="form-group  col-md-6">
                <label for="">City *</label>
                <input type="text" class="form-control" name="city" value="<?php echo $city; ?>" required="">
            </div>
        
            <div class="form-group  col-md-6">
                <label for="">Zip Code *</label>
                <input type="text" class="form-control" name="zipcode" value="<?php echo $zipcode; ?>" required="">
            </div>   
            <div class="form-group  col-md-6" style="text-align: right;">
                    <button type="submit" class="btn btn-sm btn-outline-primary" name="btnEdit" value="Update">Update</button>
            </div>
            <div class="form-group  col-md-6" >
                    <button type="cancle" class="btn btn-sm btn-outline-primary" name="btnCancle" value="Cancle">Cancle</button>
            </div>
        </div>
    </form>
</div>
</div>
<?php include "footer.php"?>