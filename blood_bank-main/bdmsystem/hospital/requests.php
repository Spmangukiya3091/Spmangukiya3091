<?php 
    $page = 'services';
include "session.php";
include "conn.php";
include "header.php";


if (isset($_POST['btnsubmit']) && ($_POST['btnsubmit'])==='Submit') 
{   $request_no         =   $_POST['request_no'];
    $name               =   $_POST['name'];
    $blood_group        =   $_POST['blood_group'];
    $volume             =   $_POST['volume'];
    $physician_name     =   $_POST['physician_name'];
    $gender             =   $_POST['gender'];
    $age                =   $_POST['age'];              
    $organization       =   $_POST['organization'];
    $mobile             =   $_POST['phone'];
    $login              =   $_SESSION['email'];
    $qr="INSERT INTO requests(ref_code,patient, gender,age,blood_group_id, volume, physician_name,organization,phone,login) VALUES ('$request_no','$name','$gender','$age','$blood_group','$volume','$physician_name','$organization','$mobile','$login')";
    $res=mysqli_query($conn,$qr);
    if ($res) 
    {   

        echo "<script>window.location.href='requests_list.php?is=1';</script>";
        
    }
    else
    {
        ?>  <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Danger!</strong> Your Request is not submitted.
            </div>
        <?php
    }

}
if (isset($_POST['btncancel']) && ($_POST['btncancel'])==='cancel') {
    echo "<script>window.location.href='users_requests_list.php';</script>";
}

$today = date("Ymd");
$rand = sprintf("%04d", rand(0,9999));
$unique = $today . $rand;
?>
<!-- /breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="index.php">Home</a> » <a href="services.php">Service</a> » <span class="breadcrumb_last" aria-current="page">Request</span>
    </div>
</nav>
<!-- //breadcrumbs -->
<div class="w3l-contact-main">
    <div class="container py-md-5">
        <div class="form-row">
            <div class="form-group  col-md-12 form_header">
                <h4 class='reg'>Request For Blood</h4>
            </div>
        </div>
        <form action="" method="post" class="registration form" autocomplete="off">
            <div class="form-row"style="margin-top: 10px;">
                <div class="form-group  col-md-6">
                    <label for="">Organization *</label>
                    <?php 
                        $login   = $_SESSION['email'];
                        $sql     = "SELECT * from userdata where email='$login'";
                        $result  = mysqli_query($conn,$sql);
                        $datares = mysqli_fetch_assoc($result);
                    ?>
                    <input type="text" name="organization" readonly="" class="form-control" value="<?php echo $datares['organization'];?>" required="">
                </div>

                <div class="form-group  col-md-6">
                    <label for="">Users Request No. * </label>
                    <?php 
                        if (isset($_GET['ref_code'])){   
                            $ref_code=$_GET['ref_code'];
                            $sql = "SELECT requests_users.ref_code,userdata.id,userdata.organization,requests_users.organization_id from requests_users join userdata on requests_users.organization_id=userdata.id where requests_users.status='0' and ref_code='$ref_code' ";
                            $result=mysqli_query($conn,$sql);
                            $row=mysqli_fetch_row($result);
                            ?>
                            <input type="text" name="request_no" id="request_no" class="form-control" value="<?php echo $row[0];?>" required="">
                            <?php
                        }
                        else{
                            ?>
                            <input type="text" class="form-control" name="request_no" value="<?php echo $unique;?>" required="" readonly>
                            <?php
                        }
                        ?>
                </div>

                <div class="form-group  col-md-6">
                    <label for="">Patient Full Name *</label>
                    <input type="name" class="form-control" name="name" id="name" required="">
                </div>
            
                <div class="form-group  col-md-6">
                    <label for="">Blood Group *</label>
                    <?php 
                    if (isset($_GET['ref_code'])) {
                        ?>
                        <input type="text" class="form-control" name="blood_group" required="" id="blood_group">
                        <?php
                    }
                    else{
                        ?>
                        <select class="form-control custom-select" name="blood_group"  id="blood_group" required="">
                        <option value="none">None</option>  
                        <option value="A+">A+</option> 
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>   
                        <option value="B-">B-</option>  
                        <option value="O+">O+</option> 
                        <option value="O-">O-</option>    
                        <option value="AB+">AB+</option>   
                        <option value="AB-">AB-</option> 
                    </select>
                        <?php
                    }
                    ?>
                </div>
                
                <div class="form-group  col-md-6">
                    <label for="">Gender *</label><br>
                    <div class="form-control" >
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
                    <label for="">Age *</label>
                    <input type="number" max="65" min="18" id= "age" name="age" class="form-control" >
                </div>

                <div class="form-group  col-md-6">
                    <label for="">Available Volume *</label>
                    <?php
                    if (isset($_GET['ref_code'])) {
                        ?>
                        <input type="number" id= "avolume" class="form-control"  readonly="" >
                        <?php
                    }
                    else{
                        ?>
                        <input type="number" id= "avolume1" class="form-control" readonly="">
                        <?php
                    }
                    ?>
                </div>

                <div class="form-group  col-md-6">
                    <label for="">Volume (ml.) * </label>
                    <input type="number" min="0" class="form-control" name="volume" id="volume" required="">
                </div>

                <div class="form-group  col-md-6">
                    <label for="">Physician Name *</label>
                    <input type="text" class="form-control" name="physician_name" id="physician_name" required="">
                </div>

                <div class="form-group  col-md-6">
                    <label for="">Mobile Number *</label>
                    <input type="text" class="form-control" name="phone" id="phone"required="">
                </div>
                <div class="form-group  col-md-6">
                    <?php
                    if (isset($_GET['ref_code'])) {
                        $ref_code=$_GET['ref_code'];
                        $sql = "SELECT ref_code from requests where ref_code='$ref_code' ";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_row($result);
                        if ($row) 
                            {   ?>
                                <button type="submit" id= "btn-sign-up" class="btn btn-sm btn-outline-primary" name="btnsubmit" value="Submit" disabled="">Submit</button>
                                <?php
                        }
                        else{
                            ?>
                            <button type="submit" id= "btn-sign-up" class="btn btn-sm btn-outline-primary" name="btnsubmit" value="Submit" onclick='return checksend1()'>Submit</button>
                            <?php
                        }
                    }
                    else{
                            ?>
                            <button type="submit" id= "btn-sign-up" class="btn btn-sm btn-outline-primary" name="btnsubmit" value="Submit" onclick='return checksend("<?php echo $unique ;?>")'>Submit</button>
                            <?php
                        }
                    ?>
                    
                </div>
                <div class="form-group  col-md-6">
                    <button type="cancel" class="btn btn-sm btn-outline-primary" name="btncancel" value="cancel">cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include"footer.php" ?>
<script>
	$('document').ready(function(){
        var request_no = $('#request_no').val();
        getBloodgrp(request_no);
        function getBloodgrp(request_id){

             $.ajax({
                url:"getbloodgrp.php",
                method:"post",
                dataType: "json",
                data:{request_no:request_id},
                success:function(res){   
                // var res = json_decode(data['res']);
                 //console.log(datas);

                  // var res = $.parseJSON(datas);
                  console.log(res);
                  console.log(res['patient']);
                  console.log(res['blood_group']);
                  console.log(res['phone']);
                  console.log(res['volume']);
                  console.log(res['physician_name']);
                  console.log(res['avolume']);
                  console.log(res['gender']);
                  console.log(res['age']);

                  $('#name').val(res['patient']);
                  $('#blood_group').val(res['blood_group']);
                  $('#phone').val(res['phone']);
                  $('#volume').val(res['volume']);
                  $('#physician_name').val(res['physician_name']);
                  $('#avolume').val(res['avolume']);
                  $('#gender').val(res['gender']);
                  $('#age').val(res['age']);

                  if(res['gender'] == 'male' ){
                    $('#customRadioInline1').attr("checked", "checked");
                  }
                  else{
                    $('#customRadioInline2').attr("checked", "checked");
                  }
                }
              });
        }

        $('#blood_group').on('change',function(){
            var blood_grp = $(this).val();
            console.log(blood_grp);
             $.ajax({
              url:"getbloodgrp.php",
              method:"post",
              data:{blood_group:blood_grp},
              success:function(data){   

            console.log(data);

                $('#avolume1').val(data);
              }
            });
        });
});
</script>