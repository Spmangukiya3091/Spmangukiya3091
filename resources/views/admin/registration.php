<?php 
  include "session.php";
  include "header.php";
  include "conn.php";
  include "slider.php";

if (isset($_POST['btnsignup']) && ($_POST['btnsignup'])==='Sign Up'){   
    $name           = $_POST['name'];
    $designation    = $_POST['designation'];
    $organization   = $_POST['organization'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $address        = $_POST['address'];
    $state          = $_POST['state'];
    $city           = $_POST['city'];
    $zipcode        = $_POST['zipcode'];
    $password       = md5($_POST['password']);
    $qr             = "INSERT INTO userdata(name, designation, organization, email, phone, address, state, city, zipcode, password) VALUES ('$name', '$designation', '$organization', '$email', '$phone', '$address', '$state', '$city', '$zipcode', '$password')";
    $res            = mysqli_query( $conn , $qr );
    if ( $res ){
        header("location:hospital_login.php");
    }else{
        ?>  
        <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Danger!</strong> Registration Is Not Success.
        </div>
        <?php
    }
}
?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Hospital's</li>
        <li class="breadcrumb-item active">Registration</li>
      </ol>
        <form action="" method="post" class="registration">
            <div class="form-row">
                <div class="form-group  col-md-6">
                    <label for="">Full Name *</label>
                    <input type="text" class="form-control" name="name" required="">
                </div>
        
                <div class="form-group  col-md-6">
                    <label for="">Designation *</label>
                    <input type="text" class="form-control" name="designation" required="">
                </div>
        
                <div class="form-group  col-md-6">
                    <label for="">Organization *</label>
                    <input type="text" class="form-control" name="organization" required="">
                </div>
        
                <div class="form-group  col-md-6">
                    <label for="">Email Address *</label>
                    <input type="email" class="form-control" name="email" required="">
                </div>
        
                <div class="form-group  col-md-6">
                    <label for="">Phone No. *</label>
                    <input type="text" class="form-control" name="phone" required="">
                </div>
        
                <div class="form-group  col-md-6">
                    <label for="">Address *</label>
                    <input type="text" class="form-control" name="address" required="" placeholder="">
                </div>
        
                <div class="form-group  col-md-6">
                    <label for="">State *</label>
                    <input type="text" class="form-control" name="state" required="">
                </div>
        
                <div class="form-group  col-md-6">
                    <label for="">City *</label>
                    <input type="text" class="form-control" name="city" required="">
                </div>
        
                <div class="form-group  col-md-6">
                    <label for="">Zip Code *</label>
                    <input type="text" class="form-control" name="zipcode" required="">
                </div>                          
            
                <div class="form-group  col-md-6">
                    <label for="">Password *</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>

                <div class="form-group  col-md-6">
                    <input type="submit" name="btnsignup" id= "btn-sign-up" class="btn btn-primary" value="Sign Up">
                </div>

                <div class="form-group  col-md-6">
                    <input type="reset" name="btnreset" class="btn btn-primary" value="Reset">
                </div>
            </div>
        </form>
    </div>
</main>
</div>