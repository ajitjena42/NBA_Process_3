<?php
session_start();
//error_reporting(0);
include("include/config.php");
// Code for updating Password

if(isset($_POST['change']))
{
	if($_SESSION['endtime'] > date("d-m-Y h:i:sa"))
    {
        $rno=$_SESSION['otp'];
        $urno=$_POST['otpvalue'];
        if(strcmp($rno,$urno)==0)
        {
            $cno=$_SESSION['studentid'];
			$email=$_SESSION['email'];
			$newpassword=md5($_POST['password1']);
			$query=mysqli_query($con,"update student set st_password='$newpassword' where st_id='$cno' and st_email='$email'");
			if ($query == true) 
			{
				$subject = "Vidyalankar | Student Reset Password"; 
				$txt = "<h1> Vidyalankar | Student Reset Password </h1><br>";
				$txt .= "Password reset successfully.";
				$txt .= "Now you can login with your new password.<br><br>";
				$txt  .= "<br>Thank you/Team Vidyalankar......";
				$headers = "From: Yelurkarsushant@gmail.com";
				$headers .= "MIME-Version: \r\n";
				$headers .= "Content-type: text/html\r\n";
				mail($email,$subject,$txt,$headers);
				echo "<script>alert('Password successfully updated.');</script>";
				echo "<script>window.location.href ='index.php'</script>";
			}
        }
        else
        {
            echo '<script>alert("Invalid OTP")</script>';
        }
    }
    else
    {
        echo '<script>alert("Time out")</script>';
    }

}
if(isset($_POST['resend']))
{
    $selectedTime = date("Y-m-d h:i:sa");
    $addtime = strtotime("+5 minutes", strtotime($selectedTime));
    $_SESSION['endtime']=date('d-m-Y h:i:sa', $addtime);
    $message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
    $rno=$_SESSION['otp'];
	$to=$_SESSION['email'];
	$subject = "Vidyalankar | Student password recovery"; 
		$txt = "<h1> Vidyalankar | Student password recovery </h1><br>";
		$txt .= "<h3><b>OTP:</b> ".$rno."</h3><br>";
		$txt .= "The validity of above OTP is only 5 minutes.";
		$txt .= "<br>when 5 minutes will be over then click on resend button to get new OTP. <br><br>";
		$txt  .= "<br>Thank you/Team Vidyalankar......";
		$headers = "From: Yelurkarsushant@gmail.com";
		$headers .= "MIME-Version: \r\n";
        $headers .= "Content-type: text/html\r\n";
    mail($to,$subject,$txt,$headers);
    echo "<script>alert('OTP succefully sent on -> '+'$to');</script>";
}


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Password Reset</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

				<script type="text/javascript">
function valid()
{
 if(document.passwordreset.password1.value!= document.passwordreset.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.passwordreset.password_again.focus();
return false;
}
return true;
}
</script>
	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.html"><h2> Vidyalankar | Teacher Reset Password</h2></a>
				</div>

				<div class="box-login">
					<form class="form-login" name="passwordreset" method="post" >
						<fieldset>
							<legend>
								Teacher Reset Password
							</legend>
							<p>
								Please set your new password.<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>
<div class="form-group">
<span class="input-icon">
<input type="text" class="form-control" name="otpvalue" placeholder="Enter OTP" >
<i class="fa fa-lock"></i> </span>
</div>
	

<div class="form-group">
<span class="input-icon">
<input type="password" class="form-control"  id="password1" name="password1" placeholder="Password">
<i class="fa fa-lock"></i> </span>
</div>
	

<div class="form-group">
<span class="input-icon">
<input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Password Again">
<i class="fa fa-lock"></i> </span>
</div>
							

							<div class="form-actions">
								<button type="submit" class="btn btn-primary pull-left" onclick="return valid();" name="change">
									Change <i class="fa fa-arrow-circle-right"></i>
								</button>
								<button type="submit" class="btn btn-primary pull-right" name="resend">
									Resend OTP
								</button>
							</div>
							
							<div class="new-account">
							You know your password? 
								<a href="index.php">
									Log-in
								</a>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> </span>. <span>All rights reserved by Ajit & Sushant</span>
					</div>
			
				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>