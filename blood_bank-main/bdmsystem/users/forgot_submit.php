<?php
require('conn.php');
//require('functions.inc.php');
include('../assets/smtp/PHPMailerAutoload.php');
session_start();

function rand_str()
{
	$str = str_shuffle("abcdefghijklQWEXXCFRTYYBVFSmnopqrstuvwxyzabcdXCVBMLKJHZAXefghijklmnopqrstuvwxyz");
	return $str = substr($str, 0, 15);
}
function random_password($length = 10)
{
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$password = substr(str_shuffle($chars), 0, $length);
	return $password;
}


function send_email($email, $html, $subject)
{
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->SMTPSecure = "tls";
	$mail->SMTPAuth = true;
	$mail->Username = "sahilmangukiya566@gmail.com";
	$mail->Password = "sahil@10";
	$mail->setFrom("sahilmangukiya566@gmail.com");
	$mail->addAddress($email);
	$mail->addReplyTo('sahilmangukiya566@gmail.com', 'NoReply');
	$mail->IsHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $html;
	$mail->SMTPOptions = array('ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => false
	));
	if ($mail->send()) {
		//echo "done";
	} else {
		//echo "Please try after sometime";
		//$arr = array('status' => 'success', 'msg' => 'Please try after sometime', 'field' => 'form_msg');
		//echo json_encode($arr);
	}
}

$type =  $_POST['type'];

if ($type == 'forgot') {
  $email =$_POST['email'];
  $res = mysqli_query($conn, "select * from `user_login` where `email`='$email'");
  $check = mysqli_num_rows($res);
  if ($check > 0) {
    $row = mysqli_fetch_assoc($res);
    $active = $row['active'];
    // $email_verify = $row['email_verify'];
    $id = $row['id'];
    // if ($email_verify == 1) {
		if ($active == 1) {
			$rand_password = random_password(10);
			$new_password = md5($rand_password);
			mysqli_query($conn, "update userdata set password='$new_password' where id='$id'");
			// send email text
			$html ='<h1>Your new password is: '. $rand_password.'</h1>';
			send_email($email, $html, 'Password has been reset and Check Your email id');
			$arr = array('status' => 'success', 'msg' => ' <font color="green"> Password has been reset and send it to your email id </font>');
		} else {
			$arr = array('status' => 'error', 'msg' => '<font color="red"> Your account has been deactivated. </font>');
		}
    // } else {
    //   $arr = array('status' => 'error', 'msg' => 'Please varify your email id');
    // }
  } else {
    $arr = array('status' => 'error', 'msg' => '<font color="red"> Please enter valid email id </font>');
  }
  echo json_encode($arr);
}
?>