<link rel="stylesheet" type="text/css" href="../assets/css/model.css">
<!-- The Modal -->
<?php
include "session.php";
include 'conn.php';

if (isset($_POST['submit']) && $_POST['submit'] == 'btnPasswordUpdate') {
    // code...
    $email = $_SESSION["email"];/* userid of the user */
    if(count($_POST)>0) {
        $result = mysqli_query($conn,"SELECT * from userdata WHERE email='" . $email . "'");
        $row=mysqli_fetch_array($result);
        $md1 = md5($_POST["currentPassword"]);
        $md2 = md5($_POST["newPassword"]);
        $md3 = md5($_POST["confirmPassword"]);

        if($md1 == $row["password"] && $md2 == $md3 ) {
            mysqli_query($conn,"UPDATE userdata set password='" . $md2 . "' WHERE email='" . $email . "'");
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
                <strong>Danger!</strong> Your Password Is Not Updated...
            </div>
            <?php
        }
    }
}
?>
<div id="myManagePassword" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <h3 class="reg">Manage Password
    <span class="close-model">&times;</span></h3>
    <form id="forgot_form" method="post" class="registration">
      <div class="form-row">
        <div class="form-group  col-md-12">
            <label for="">Old Password</label>
            <input type="password" class="form-control "name="currentPassword"><span id="currentPassword" class="required"></span>
        </div>
        <div class="form-group  col-md-12">
            <label for="">New Password</label>
            <input type="password" class="form-control" name="newPassword"><span id="newPassword" class="required"></span>
        </div>
        <div class="form-group  col-md-12">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" name="confirmPassword"><span id="confirmPassword" class="required"></span>
        </div>
        <div class="form-group  col-md-12">
            <input type="submit" name="btnPasswordUpdate" class="btn btn-primary" value="Update">
        </div>
      </div>
    </form>
  </div>
</div>