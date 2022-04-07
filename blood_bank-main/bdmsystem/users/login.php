<?php
include "conn.php";
if (isset($_POST['btnsubmit']) && ($_POST['btnsubmit']) === 'Submit') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $qr = "SELECT * FROM user_login WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $qr);
    if (mysqli_num_rows($res) == 1) {

        @session_start();
        $_SESSION['email'] = $email;
        header("location:index.php");
    } else {
        $email_val = $_POST['email'];
        $password_val = $_POST['password'];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $error_mesage = '';
        $email_er = '';
        $password_er = '';
        if (empty($email) && empty($password)) {
            ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
echo $error_mesage = '<strong>All </strong> Filed are rquired!';
            ?>
                </div>
                <?php
} else if (empty($email)) {
            ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
echo $email_er = ' <strong>Email </strong> are required! ';
            ?>
                </div>
                <?php
} else if (empty($password)) {
            ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
echo $password_er = ' <strong>Password </strong> are required! ';
            ?>
                </div>
                <?php
} else {
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
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="margin: 0 0 0 0 ;">
    <div class="main">
        <div class="login-photo">
            <!-- <img src="../assets/images/1.jpg" alt="BloodBank"> -->
        </div>
        <div class="login-div">
            <div class="logo" style="background-image: url('../assets/');">
              
            </div>
            <div class="title">Login</div>
            <form method="post" autocomplete="">
            <div class="fields">
                <div class="username">
                    <input type="email" class="user-input" placeholder="User Email" name="email" value="<?php if (isset($email_val)) {echo $email_val;}?>" />
                </div>
                <div class="password">
                    <input type="password" class="pass-input" placeholder="Password" name="password" value="<?php if (isset($password_val)) {echo $password_val;}?>"/>
                </div>
            </div>
            <button type="submit" class="signin-button" name="btnsubmit" value="Submit">Login</button>
            <div class="link">
                <a class="mybtn-action" data-id='forgot' >Forgot password ?</a>
                <a class="mybtn-action" data-id='Registration' href="user_registration.php">Register</a>
            </div>
            </form>
        </div>
    </div>
    <?php include 'forgotpassword.php';?>

<script>
$('document').ready(function(){
    $('.mybtn-action').on('click',function(){
        var data_val = $(this).data('id');
        if(data_val == 'forgot'){
            console.log('forgot password');
            $('#myfor').css('display','block');
        }
    });

    $('.close-model').on('click',function(){
        $('#myfor').css('display','none');
    });

});
</script>
</body>
</html>