<?php 
    $page = 'services';
    include "session.php";
    include "header.php";
    include "conn.php";

if (isset($_POST['btncancel']) && ($_POST['btncancel'])==='cancel') {
    echo "<script>window.location.href='requests_list.php';</script>";
}
if (isset($_POST['btnsubmit']) && ($_POST['btnsubmit'])==='Submit') {   
    $request_no         =   $_POST['request_no'];
    $name               =   $_POST['name'];
    $blood_group        =   $_POST['blood_group'];
    $volume             =   $_POST['volume'];
    $recived_by         =   $_POST['recived_by'];
    $physician          =   $_POST['physician_name'];
    $organization       =   $_POST['organization'];
    $mobile             =   $_POST['phone'];
    $gender             =   $_POST['gender'];
    $age                =   $_POST['age']; 

    $qr="INSERT INTO `handed_over`(`ref_code`, `patient`,gender,age, `blood_group_id`, `volume`, `recived_by`, `physician`, `phone`, `organization`) VALUES ('$request_no','$name','$gender','$age','$blood_group','$volume','$recived_by','$physician','$mobile','$organization')";
    $res=mysqli_query($conn,$qr);
    if ($res) {   
        echo "<script>window.location.href='requests_list.php?is=1';</script>";   
    }
    else{
        ?>  
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Danger!</strong> Your Request is not submitted.
        </div>
        <?php
    }
}
?>
<div class="w3l-contact-main">
    <div class="container py-md-5">
        <div class="form-row">
            <div class="form-group  col-md-12 form_header">
                <h4 class='reg'>Handed Over Blood</h4>
            </div>
        </div>
        <form action="" method="post" class="registration form">
            <div class="form-row" style="margin-top: 10px;">
                <div class="form-group  col-md-6">
                    <label for=""><b>Organization *</b></label>
                    <?php 
                    $login      = $_SESSION['email'];
                    $sql        = "SELECT * from userdata where email='$login'";
                    $result     = mysqli_query($conn,$sql);
                    $datares    = mysqli_fetch_assoc($result);
                    ?>
                    <input type="text" name="organization" readonly="" class="form-control" value="<?php echo $datares['organization'];?>" >
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Users Request No. * </b></label>
                    <?php 
                    $ref_code=$_GET['ref_code'];
                    if (isset($ref_code)){   
                        $sql = "SELECT * from requests join userdata on requests.organization=userdata.organization where requests.status='1' and requests.ref_code='$ref_code' ";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_row($result);
                        ?>
                        <input type="text" name="request_no" id="request_no" class="form-control" value="<?php echo $row[1];?>" required="">
                        <?php
                    }
                    ?>
                </div>

                <div class="form-group  col-md-6">
                    <label for=""><b>Patient Full Name *</b></label>
                    <input type="name" class="form-control" name="name" id="name" required="">
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Blood Froup *</b></label>
                    <input type="text" class="form-control" name="blood_group" required="" id="blood_group">
                    <!-- <select class="form-control custom-select" name="blood_group" required="" id="blood_group" >
                        <option value="none">None</option>  
                        <option value="1">A+</option> 
                        <option value="2">A-</option>
                        <option value="3">B+</option>   
                        <option value="4">B-</option>   
                        <option value="7">AB+</option>   
                        <option value="8">AB-</option>   
                        <option value="5">O+</option> 
                        <option value="6">O-</option> 
                    </select> -->
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Gender *</b></label><br>
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
                    <label for=""><b>Age *</b></label>
                    <input type="number" id= "age" name="age" class="form-control" >
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Volume (ml.) * </b></label>
                    <input type="number" class="form-control" name="volume" id="volume"required="" readonly="">
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Recived By *</b></label>
                    <input type="text" id= "" class="form-control" name="recived_by" >
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Physician Name *</b></label>
                    <input type="text" class="form-control" name="physician_name" id="physician_name" required="">
                </div>
                <div class="form-group  col-md-6">
                    <label for=""><b>Mobile Number *</b></label>
                    <input type="text" class="form-control" name="phone" id="phone"required="">
                </div>
                <div class="form-group  col-md-6">
                    <?php
                    $ref_code=$_GET['ref_code'];
                    $sql = "SELECT ref_code from handed_over where ref_code='$ref_code' ";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($result);
                    if ($row){  
                        ?>
                        <button type="submit" id= "btn-sign-up" class="btn btn-sm btn-outline-primary" name="btnsubmit" value="Submit" disabled="">Submit</button>
                        <?php
                    }
                    else{
                        ?>
                        <button type="submit" id= "btn-sign-up" class="btn btn-sm btn-outline-primary" name="btnsubmit" value="Submit" >Submit</button>
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


<?php include "footer.php";?>
<script>
    $('document').ready(function(){
        var request_no = $('#request_no').val();
        getBloodgrp(request_no);
        function getBloodgrp(request_id){
            console.log(request_no);
             $.ajax({
                url:"gethanddata.php",
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
             $.ajax({
              url:"getbloodgrp.php",
              method:"post",
              data:{blood_group:blood_grp},
              success:function(data){   


                $('#avolume1').val(data);
              }
            });
        });
});
</script>