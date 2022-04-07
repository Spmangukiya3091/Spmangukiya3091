<?php 
  include "conn.php";
  include "session.php";
  #send admin  Data
  if (isset($_GET['id1'])){   
    $id               = $_GET['id1'];
    $q                = "SELECT * FROM requests_users WHERE id='$id'";
    $rs               = mysqli_query($conn,$q);
    $res              = mysqli_fetch_row($rs);
    $id               = $res[0];
    $ref_code         = $res[1];
    $patient          = $res[2];
    $blood_group_id   = $res[3];
    $volume           = $res[4];
    $physician_name   = $res[5];
    $organization_id  = $res[6];
    $phone            = $res[7];
    $status           = $res[8];
    $date_created     = $res[9];
    $email            = $_SESSION['email'];
    $qu               = "INSERT INTO `requests`(`ref_code`, `patient`, `blood_group_id`, `volume`, `physician_name`, `organization`, `phone`, `status`, `date_created`, `login`) VALUES ($ref_code','$patient','$blood_group_id','$volume','$physician_name','$organization_id','$phone','$status','$date_created','$email')";
    $result           = mysqli_query( $conn , $qu );
    if ( $result ){
      //header('location:requests.php?isDelet=1');
      echo "<script>window.location.href='users_requests_list.php?isSubmit=1';</script>";
    } else{
      ?>  
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Danger!</strong> Your Request Is Not Submited....
        </div>
     <?php
    } 
  }
?>
