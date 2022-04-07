<?php 
    include "session.php";
    include 'conn.php';
    include "slider.php";
    include "header.php";

if ( isset( $_GET[ 'id' ] ) ) {   
        $id          =  $_GET[ 'id' ];
        $q           =  "SELECT * FROM blood_inventory_data WHERE id = '$id' ";
        $rs          =  mysqli_query( $conn, $q );
        $res         =  mysqli_fetch_row( $rs );
        $name        =  $res[1];
        $blood_group =  $res[3];
        $volume      =  $res[8];
        $city        =  $res[10];
        $gender      =  $res[11];
    }

if( isset( $_POST[ 'btnedit' ] ) ) {
    $name        = $_POST[ 'name' ];
    $blood_group = $_POST[ 'blood_group' ];
    $volume      = $_POST[ 'volume' ];
    $city        = $_POST[ 'city' ];
    $gender      = $_POST[ 'gender' ];
    $sql         = "UPDATE blood_inventory_data SET name = '$name', blood_group_id = '$blood_group', volume = '$volume', city = '$city', gender = '$gender' WHERE id = '$id' ";
    $rs          = mysqli_query( $conn, $sql );
    if ( $rs ) {
        echo "<script>window.location.href='donation_list.php?isUpdate=1';</script>";
    } else {
        ?>  <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Danger!</strong> Update Not Success.
            </div>
        <?php
    }
}
?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Donation Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Donation Details</li>
                <li class="breadcrumb-item active">Donation Details Edit</li>
            </ol>
            <form action="" method="post" class="registration">
                <div class="form-row" >
                    <div class="form-group  col-md-6">
                        <lable>Name : </lable>
                        <input type="text" class="form-control" name="name" required="" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Blood Group *</label>
                        <select class="form-control" name="blood_group" required="">
                            <option value="none"<?php if ($blood_group == 'none'){echo "selected";}?>>None</option>  
                            <option value="1"<?php if ($blood_group == '1'){echo "selected";}?>>A+</option> 
                            <option value="2"<?php if ($blood_group == '2'){echo "selected";}?>>A-</option>
                            <option value="3"<?php if ($blood_group == '3'){echo "selected";}?>>B+</option>
                            <option value="4"<?php if ($blood_group == '4'){echo "selected";}?>>B-</option>
                            <option value="7"<?php if ($blood_group == '7'){echo "selected";}?>>AB+</option>
                            <option value="8"<?php if ($blood_group == '8'){echo "selected";}?>>AB-</option>   
                            <option value="5"<?php if ($blood_group == '5'){echo "selected";}?>>O+</option>   
                            <option value="6"<?php if ($blood_group == '6'){echo "selected";}?>>O-</option>   
                        </select>
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Gender *</label>
                        <div class="form-control md-3">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadioInline1" name="gender" value="male"<?php if($gender=="male"){ echo "checked";}?>>
                            <label class="custom-control-label" for="customRadioInline1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadioInline2" name="gender" value="female"<?php if($gender=="female"){ echo "checked";}?>>
                            <label class="custom-control-label" for="customRadioInline2">Female</label>
                        </div></div>
                    </div>
                    <div class="form-group  col-md-6">
                        City : <input type="text" class="form-control" name="city" required="" value="<?php echo $city; ?>">
                    </div>
                    <div class="form-group  col-md-6"> 
                        Volume : <input type="text" class="form-control" name="volume" required="" value="<?php echo $volume; ?>">
                    </div>

                    <div class="form-group  col-md-12">
                        <input type="submit" name="btnedit" id= "btn-sign-up" class="btn btn-primary" value="update">
                    </div>
                </div>
            </form>
        </div>
    </main>

<?php include "footer.php"; ?>