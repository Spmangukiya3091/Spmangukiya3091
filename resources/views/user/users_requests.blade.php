@extends('layouts.main')

@section()
    <?php
include "conn.php";
include "header.php";

if (isset($_POST['btnsubmit']) && ($_POST['btnsubmit'])==='Submit') {
    $name           = $_POST['name'];
    $blood_group    = $_POST['blood_group'];
    $volume         = $_POST['volume'];
    $physician_name = $_POST['physician_name'];
    $uniqe_number   = $_POST['uniqe_number'];
    $organization   = $_POST['organization'];
    $Mobile         = $_POST['phone'];
    $age            = $_POST['age'];
    $gender         = (isset($_POST['gender'])) ? $_POST['gender'] : '';
    $qr = "INSERT INTO requests_users(ref_code,patient,gender,age, blood_group_id, volume, physician_name,organization_id,phone) VALUES ('$uniqe_number','$name','$gender','$age','$blood_group','$volume','$physician_name','$organization','$Mobile')";

    $res = mysqli_query($conn,$qr);
    if ($res) {
        ?>
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Your Request is submitted.
    </div>
    <?php
    } else{
        ?>
    <div class="alert alert-danger alert-dismissbe">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Danger!</strong> Your Request is not submitted.
    </div>
    <?php
    }
}

$today  = date("Ymd");
$rand   = sprintf("%04d", rand(0,9999));
$unique = $today . $rand;

?>
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper">
            <a href="index.php">Home</a> » <a href="services.php">Service</a> » <span class="breadcrumb_last" aria-current="page">Users Request</span>
        </div>
    </nav>
    <div class="w3l-contact-main">
        <div class="container py-md-5">
            <div class="form-row">
                <div class="form-group  col-md-12 form_header">
                    <h3 class='reg'>Request For Blood </h3>
                </div>
            </div>
            <form action="users_requests.php" method="post" class="registration form">
                <div class="form-row" style="margin-top: 10px;">
                    <div class="form-group  col-md-6">
                        <label for=""><b>Full Name * </b></label>
                        <input type="name" class="form-control" name="name" required="">
                    </div>

                    <div class="form-group  col-md-6">
                        <label for=""><b>Blood Group * </b></label>
                        <select class="form-control custom-select" name="blood_group" id="blood_group" required="">
                            <option value="none">None</option>
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
                        <label for=""><b>Gender *</b></label><br>
                        <div class="form-control">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="male" required="">
                                <label class="custom-control-label" for="customRadioInline1">Male</label></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="female" required="">
                                <label class="custom-control-label" for="customRadioInline2">Female</label></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group  col-md-6">
                        <label for=""><b>Age *</b></label>
                        <input type="number" class="form-control" name="age" required="" min="18" max="65">
                    </div>

                    <div class="form-group  col-md-6">
                        <label for=""><b>Available Volume *</b></label>
                        <input type="number" id="avolume" class="form-control" name="volume" readonly="">
                    </div>

                    <div class="form-group  col-md-6">
                        <label for=""><b>Volume *</b></label>
                        <input type="number" class="form-control" name="volume" min="0" required="">
                    </div>

                    <div class="form-group  col-md-6">
                        <label for=""><b>Referral Organization *</b></label>
                        <select class="form-control" name="organization">
                            <option value="none">None</option>
                            <?php
                            $sql    = "SELECT * FROM userdata";
                            $result = mysqli_query($conn,$sql);
                            $num    = mysqli_num_rows($result);

                            if( $num = 1 ) {
                                while ( $row = mysqli_fetch_assoc($result)) {
                                    ?>
                            <option value="<?php echo $row['id']; ?>" required=""><?php echo $row['organization']; ?></option>
                            <?php
                                }
                            }
                        ?>
                        </select>
                        <!-- <select class="form-control" name="organization" >
                            <option value="none">None</option>
                            <option value="Kiran Hospital">Kiran Hospital</option>
                            <option value="Navyug Hospital">Navyug Hospital</option>
                            <option value="Jivan Jyot Hospital">Jivan Jyot Hospital</option>
                        </select> -->
                    </div>

                    <div class="form-group  col-md-6">
                        <label for=""><b>Physician Name *</b></label>
                        <input type="text" class="form-control" name="physician_name" required="">
                    </div>

                    <div class="form-group  col-md-6">
                        <label for=""><b>Mobile No. *</b></label>
                        <input type="text" class="form-control" name="phone" required="">
                    </div>

                    <div class="form-group  col-md-6">
                        <label for=""><b>Unique Number *</b></label>
                        <input type="text" class="form-control" name="uniqe_number" readonly="" value="<?php echo $unique; ?>">
                    </div>
                    <div class="form-group  col-md-6">
                        <button type="submit" id="btn-sign-up" class="btn btn-sm btn-outline-primary" name="btnsubmit" value="Submit"
                            onclick='return checksend("<?php echo $unique; ?>")'>Submit</button>
                    </div>
                    <div class="form-group  col-md-6">
                        <button type="reset" class="btn btn-sm btn-outline-primary" name="btnreset" value="Reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function checksend() {
            return confirm('Your Unique Id Is : <?php echo $unique; ?>');
            // swal("Congratulation!", 'Your Unique Id Is : <?php echo $unique; ?>', "success");

        }
    </script>
@endsection
