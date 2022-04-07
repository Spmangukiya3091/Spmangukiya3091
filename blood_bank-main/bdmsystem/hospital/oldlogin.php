<?php 
include "conn.php";
if (isset($_POST['btnsubmit']) && ($_POST['btnsubmit'])==='Submit'){   
    $email      = $_POST['email'];
    $password   = md5($_POST['password']);
    $qr         = "SELECT * FROM userdata WHERE email='$email' AND password='$password'";
    $res        = mysqli_query($conn,$qr);
    if ( mysqli_num_rows($res) == 1 ){
        
        @session_start();
        $_SESSION['email'] = $email;
        header("location:index.php");
    } else{
        ?>  
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Email </strong> And  <strong>Password </strong> is not current...
        </div>
        <?php
    }
}
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Bank</title>
    <!-- Template CSS -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
</head>
<body>
<?php
// define variables and set to empty values
$emailErr = $passwordErr = "";
$email = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty( $_POST["email"] )) {
    $emailErr = "Email is required";
  } else {
    $email = test_input( $_POST["email"] );
  }
  if (empty( $_POST["password"] )) {
    $passwordErr = "Passowrd is required";
  } else {
    $password = test_input( $_POST["password"] );
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="w3l-contact-main">
    <div class="left-side">
        <img src="../assets/images/1.jpg" style="height: 428px; width: 720px;"/>
        <!-- random images -->
        <!-- <?php $randomdir = dir('../assets/images');
        $count = 1;
        $pattern="/(gif|jpg|jpeg|png)/";
        while($file = $randomdir->read()) {
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            if (preg_match($pattern, $ext)) {
                $imagearray[$count] = $file;
                $count++;
            }
        }
        $random = mt_rand(1, $count - 1); 
        echo '<img src="../assets/images/'.$imagearray[$random].'" alt style="height: 428px; width: 720px;"/>';
        ?> -->
    </div>
    <div class="right-side">
        <h3 class="reg">Login</h3>
        <form action="" method="post">
            <div class="form-row">
                <div class="container py-md-4">
                    <div class="form-group col-md-12">
                        <label for="">Email * <span class="error"><?php echo $emailErr;?> </span></label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Password * <span class="error"><?php echo $passwordErr;?> </span></label>
                       <input type="password" id="password" name="password" class="form-control" data-toggle="password" placeholder="Password">
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-6">
                            <button type="submit" id= "btn-sign-up" class="btn btn-primary" name="btnsubmit" value="Submit">Login</button>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="button" class="btn btn-primary" name="btnreset" value="Reset">Reset</button>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <!-- <h6><i class="fa fa-user-circle-o" aria-hidden="true"></i> New User ? <a class="mybtn-action" id="myBtn" data-id='reg' style="color: #337ab7">Registration Here</a></h6> -->
                        <h6><i class="fa fa-user-circle-o" aria-hidden="true"></i> Forgot Password ? <a class="mybtn-action" data-id='forgot' style="color: #337ab7">Click Here</a></h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include 'registration.php';?>
<?php include 'forgotpassword.php';?>

<script>
// Get the modal

/*$('#myBtn').on('click',function(){
    $('#myModal').css('display','block');
});

 $('.close-model').on('click',function(){
    $('#myModal').css('display','none');

 });

$( window ).load(function() {
    $('#myModal').css('display','none');
});*/

//class="mybtn-action"

$('document').ready(function(){
  $( ".mybtn-action" ).each(function( index ) {
      console.log( index + ": " + $( this ).text() );
      $(this).on('click',function(){
        var data_val = $(this).data('id');
        if(data_val == 'forgot'){
            console.log(1313132);
            $('#myfor').css('display','block');
        }
      });
    });
});
$('.close-model').on('click',function(){
    $('#myfor').css('display','none');
 });
</script>

<script type="text/javascript">
    $("#password").password('toggle');
</script>
</body>
</html>