<?php 
    $page = 'services';
    include "session.php";
    include "header.php";
    include "conn.php";

if (isset($_GET['id'])) {   
    $id         = $_GET['id'];
    $q          = "SELECT * FROM blood_inventory_data WHERE id='$id'";
    $rs         = mysqli_query($conn,$q);
    $res        = mysqli_fetch_row($rs);
    $id         = $res[0];
    $name       = $res[1];
    $age        = $res[2];
    $blood_group= $res[3];
    $address    = $res[4];
    $phone      = $res[5];
    $email      = $res[6];
    $donat_date = $res[7];
    $volume     = $res[8];
    $zipcode    = $res[9];
    $city       = $res[10];
    $gender     = $res[11];
}


if(isset($_POST['btnEdit'])){
    $name       = $_POST['name'];
    $age        = $_POST['age'];
    $blood_group= $_POST['blood_group'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];
    $volume     = $_POST['volume'];
    $city       = $_POST['city'];
    $zipcode    = $_POST['zipcode'];
    $donat_date = $_POST['donat_date'];
    $gender     = $_POST['gender'];
    $sql        = "UPDATE blood_inventory_data 
                    SET name='$name',age='$age',blood_group_id='$blood_group',address='$address',phone='$phone',email='$email',donat_date='$donat_date',volume='$volume',zipcode='$zipcode',city='$city',gender='$gender'
                    WHERE id='$id'";
    if ($rs=mysqli_query($conn,$sql)){
        echo "<script>window.location.href='donor_list.php?isUpdate=1';</script>";  
    } else{
        ?>  
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Danger!</strong> Update Not Success.
        </div>
        <?php
    }
}
?>

<div class="container" style="padding-right: 150px;padding-left: 150px;">
    <form action="" method="post" class="registration">
        <div class="form-row" style="margin-right: 10px; margin-left: 10px;">

        <div class="form-group  col-md-6">
            <label for="">User Id *</label>
            <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly="">
        </div>

        <div class="form-group  col-md-6">
            <label for="">Full Name *</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required="">
        </div>
    
        <div class="form-group  col-md-6">
            <label for="">Age *</label>
            <input type="text" class="form-control" name="age" value="<?php echo $age; ?>" required="">
        </div>

        <div class="form-group  col-md-6">
            <label for="">Gender *</label>
            <div class="form-control" >
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" <?=$gender =="male" ? "checked" : ""?> value="male">
                    <label class="custom-control-label" for="customRadioInline1">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" <?=$gender =="female" ? "checked" : ""?> value="female">
                    <label class="custom-control-label" for="customRadioInline2">Female</label>
                </div>
            </div>
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
            <label for="">Address *</label>
            <input type="text" class="form-control" name="address" value="<?php echo $address; ?>" required="">
        </div>
    
        <div class="form-group  col-md-6">
            <label for="">Phone No. *</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" required="">
        </div>
    
        <div class="form-group  col-md-6">
            <label for="">Email Address *</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required="">
        </div>
    
        <div class="form-group  col-md-6">
            <label for="">Donat Date *</label>
            <input type="tetx" class="form-control" name="donat_date" value="<?php echo $donat_date; ?>"required="">
        </div>
    
        <div class="form-group  col-md-6">
            <label for="">Volume *</label>
            <input type="text" class="form-control" name="volume" value="<?php echo $volume; ?>" required="">
        </div>
    
        <div class="form-group  col-md-6">
            <label for="">Zip Code *</label>
            <input type="text" class="form-control" name="zipcode" value="<?php echo $zipcode; ?>" required="">
        </div>                          
        
        <div class="form-group  col-md-6">
            <label for="">city *</label>
            <input type="text" class="form-control" name="city" value="<?php echo $city; ?>" required="   ">
        </div>
        </div>
        <div style="margin-top: 10px;">
            <center>
                <button type="submit" class="btn btn-primary" name="btnEdit" value="Update">Update</button>
            </center>
        </div>
    </form>
</div>

<?php include "footer.php"?>