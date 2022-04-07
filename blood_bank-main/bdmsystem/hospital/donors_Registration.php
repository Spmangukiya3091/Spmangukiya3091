<?php 
    $page = 'services';
    include "conn.php";
	include "session.php";
    include "header.php";
if (isset($_POST['btnsubmit']) && ($_POST['btnsubmit'])==='Submit') {   
    $name           = $_POST['name'];
    $age            = $_POST['age'];
    $blood_group_id = $_POST['blood_group_id'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $address        = $_POST['address'];
    $gender         = (isset($_POST['gender'])) ? $_POST['gender'] : '';
    $volume         = $_POST['volume'];
    $city           = $_POST['city'];
    $zipcode        = $_POST['zipcode'];
    $pname          = $_FILES['photo']['name'];
    $tname          = $_FILES['photo']['tmp_name'];
    $login          = $_SESSION['email'];
    $upload_dir     = '../assets/images';
    move_uploaded_file($tname,$upload_dir.'/'.$pname); 
    $qr = "INSERT INTO `blood_inventory_data`(`name`, `age`, `blood_group_id`, `address`, `phone`, `email`, `volume`, `zipcode`, `city`, `gender`, `file`, `login`) VALUES ('$name','$age','$blood_group_id','$address','$phone','$email','$volume','$zipcode','$city','$gender','$pname','$login')";
    $res = mysqli_query($conn,$qr);
    if ( $res ){   
        $blood_group_id     = $_POST['blood_group_id'];
        $volume             = $_POST['volume'];
        $sql                = "SELECT volume from total_blood where id='$blood_group_id'";
        $result             = mysqli_query($conn,$sql);
        $row                = mysqli_fetch_assoc($result);
        if( $row["volume"] == 0 ){
            $total_fetch_volume = $volume;
        }else{
            $fetch_volume = $row["volume"];
            $total_fetch_volume = $volume + $fetch_volume;
        }

        $qr     = "UPDATE total_blood set volume='$total_fetch_volume' where id='$blood_group_id'";
        $res    = mysqli_query($conn,$qr);
        if ( $res) {
            ?>  
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Donor Registration Is Success.
            </div>
            <?php
        }  
    } 
    else{
        ?>  
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Danger!</strong> Donor Registration Is Not Success.
        </div>
        <?php
    }
}
// define variables and set to empty values
$nameErr =$genderErr = $ageErr = $bloodErr = $volumeErr = $phoneErr =  $emailErr = $addressErr = $cityErr = $zipcodeErr = "";
$name = $gender = $age = $blood = $volume = $phone = $email = $address = $city = $zipcode ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
  }
  if (empty($_POST["blood_group_id"])) {
    $bloodErr = "Blood Group is required";
  } else {
    $blood = test_input($_POST["blood_group_id"]);
  }
  if (empty($_POST["volume"])) {
    $volumeErr = "Volume is required";
  } else {
    $volume = test_input($_POST["volume"]);
  }
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone No is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }
  if (empty($_POST["city"])) {
    $cityErr = "City is required";
  } else {
    $city = test_input($_POST["city"]);
  }
  if (empty($_POST["zipcode"])) {
    $zipcodeErr = "Zipcode is required";
  } else {
    $zipcode = test_input($_POST["zipcode"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <a href="services.php">Service</a> » <span class="breadcrumb_last" aria-current="page">New Donor</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<div class="w3l-contact-main">
    <div class="container py-md-5">
        <div class="form-row">
            <div class="form-group  col-md-12 form_header">
                <h4 class='reg'>Donors Registration</h4>
            </div>
        </div>
        <form action="donors_Registration.php" method="post" enctype="multipart/form-data" class="registration form" autocomplete="off">
            <div class="form-row" style="margin-top: 10px;">
                <div class="form-group  col-md-6">
                    <label for=""><b>Full Name * <span class="error"><?php echo $nameErr;?> </span></b></label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Photo *</b></label>
                    <input type="file" class="form-control" name="photo" style="padding-top: 3px">
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Gender * <span class="error"><?php echo $genderErr;?> </span></b></label><br>
                    <div class="form-control">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="male">
                            <label class="custom-control-label" for="customRadioInline1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="female">
                            <label class="custom-control-label" for="customRadioInline2">Female</label>
                        </div>
                    </div>
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Age * <span class="error"><?php echo $ageErr;?> </span></b></label>
                    <input type="number" class="form-control" name="age" max="65" min="18">
                </div>          
                <div class="form-group  col-md-6">
                    <label for=""><b>Blood Group * <span class="error"><?php echo $bloodErr;?> </span></b></label>
                    <select class="form-control" name="blood_group_id">
                        <option value="">--Select--</option>  
                        <option value="1">A+</option> 
                        <option value="2">A-</option>
                        <option value="3">B+</option>   
                        <option value="4">B-</option>   
                        <option value="5">O+</option> 
                        <option value="6">O-</option> 
                        <option value="7">AB+</option>   
                        <option value="8">AB-</option>   
                    </select>
                </div>            
                <div class="form-group  col-md-6">
                    <label for=""><b>Volume * <span class="error"><?php echo $volumeErr;?> </span></b></label>
                    <input type="number" class="form-control" name="volume" min="0">
                </div>            
                <div class="form-group  col-md-6">
                    <label for=""><b>Phone No. * <span class="error"><?php echo $phoneErr;?> </span></b></label>
                    <input type="text" class="form-control" name="phone">
                </div>           
                <div class="form-group  col-md-6">
                    <label for=""><b>Email Address * <span class="error"><?php echo $emailErr;?> </span></b></label>
                    <input type="email" class="form-control" name="email">
                </div>             
                <div class="form-group  col-md-6">
                    <label for=""><b>Address * <span class="error"><?php echo $addressErr;?> </span></b></label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>City * <span class="error"><?php echo $cityErr;?> </span></b></label>
                    <input type="text" class="form-control" name="city">
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Zip Code * <span class="error"><?php echo $zipcodeErr;?> </span></b></label>
                    <input type="text" class="form-control" name="zipcode">
                </div>
                <div class="form-group  col-md-6">
                </div>
                <div class="form-group  col-md-6">
                    <button type="submit" id= "btn-sign-up"  class="btn btn-sm btn-outline-primary" name="btnsubmit" value="Submit">Submit</button>
                </div>
                <div class="form-group  col-md-6">
                    <button type="reset"  class="btn btn-sm btn-outline-primary" name="btnreset" value="Reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "footer.php" ?>