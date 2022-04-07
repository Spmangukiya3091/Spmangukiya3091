<?php 
    include "conn.php";

if ( isset( $_POST[ 'btnsubmit' ] ) && ( $_POST[ 'btnsubmit' ] ) === 'Login' ) {   
    $email      = $_POST[ 'email' ];
    $password   = md5( $_POST[ 'password' ] );
    $qr         = "SELECT * FROM admin_login WHERE email = '$email' AND password = '$password' ";
    $res        = mysqli_query($conn,$qr);
    if ( mysqli_num_rows( $res ) == 1 ) {
        @session_start();
        $_SESSION[ 'admin_email' ] = $email;
        echo "<script>window.location.href='index.php';</script>";
    } else {
        $email_val = $_POST['email'];
        $password_val = $_POST['password'];
        $email = $_POST["email"] ;
        $password = $_POST["password"] ;
        $error_mesage = '';
        $email_er = '';
        $password_er = '';
        if(empty($email) && empty($password) ){
            ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php
                    echo $error_mesage = '<strong>All </strong> Filed are rquired!';
                ?>
            </div>
            <?php
        }
        else if(empty($email)){
            ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php
                    echo $email_er = ' <strong>Email </strong> are required! ';    
                ?>
            </div>
            <?php
        }
        else if(empty($password)){
            ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php
                    echo $password_er = ' <strong>Password </strong> are required! ';    
                ?>
            </div>
            <?php
        }
        else 
        {
            ?>  
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                <strong>Email </strong> Or  <strong>Password </strong> is not current...
            </div>
            <?php
        }
    }
}
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5" style="margin-top: 71px;">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Login</h3></div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="email" name="email" placeholder="Enter email address" value="<?php if(isset($email_val)){echo $email_val;} ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" value="<?php if(isset($password_val)){echo $password_val;} ?>"/>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="#">Forgot Password?</a>
                                            <input type="submit" name="btnsubmit" class="btn btn-primary" value="Login">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>


