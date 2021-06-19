<?php
session_start();
error_reporting(0);
include('include/checklogin.php');
include("include/config.php");
//Checking Details for reset password
if(isset($_POST['submit']))
{
	$studentid=$_POST['studentid'];
    $_SESSION['studentid']=$studentid;
	$query=mysqli_query($con,"select st_email from  student where st_id='$studentid'");
	$row=mysqli_fetch_array($query);
	if($row>0)
	{ 
        $email=$row['st_email'];
		$_SESSION['email']=$email;
		$rndno=rand(100000, 999999);
		$message = urlencode("otp number.".$rndno);
		$to=$email;
		$subject = "Vidyalankar | Student password recovery"; 
		$txt = "<h1> Vidyalankar | Student password recovery </h1><br>";
		$txt .= "<h3><b>OTP:</b> ".$rndno."</h3><br>";
		$txt .= "The validity of above OTP is only 5 minutes.";
		$txt .= "<br>when 5 minutes will be over then click on resend button to get new OTP. <br><br>";
		$txt  .= "<br>Thank you/Team Vidyalankar......";
		$headers = "From: yelurkarsushant@gmail.com";
		$headers .= "MIME-Version: \r\n";
        $headers .= "Content-type: text/html\r\n";
		mail($to,$subject,$txt,$headers);
		$selectedTime = date("Y-m-d h:i:sa");
		// $_SESSION['sendtime']=$selectedTime;
		$addtime = strtotime("+5 minutes", strtotime($selectedTime));
		$endTime=date('d-m-Y h:i:sa', $addtime);
		$_SESSION['endtime']=$endTime; 
		$_SESSION['otp']=$rndno;
		echo "<script>alert('OTP succefully sent on -> ' + '$to');</script>";  
        echo '<script>setTimeout(function(){ location.href = "reset-password.php"; }, 10);</script>';
	}
	else
	{
		echo "<script>alert('Invalid details. Please try with valid details');</script>";
		echo "<script>window.location.href ='forgot-password.php'</script>";
	}

}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Password Recovery</title>
		
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
	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../../index.html"><h2> Vidyalankar | Student Password Recovery</h2></a>
				</div>

				<div class="box-login">
					<form class="form-login" method="post">
						<fieldset>
							<legend>
								Student Password Recovery
							</legend>
							<p>
								Please enter your ID Number to recover your password.<br />
					
							</p>

							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="text" class="form-control" name="studentid" placeholder="Enter your ID">
									<i class="fa fa-lock"></i>
									 </span>
							</div>

							

							<div class="form-actions">
								<a class="btn btn-primary" href="index.php"><span class="fa fa-arrow-circle-left"></span> BACK</a>
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Reset <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
								Already have an account? 
								<a href="index.php">
									Log-in
								</a>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> NBA</span>. <span>All rights reserved by-Ajit  and Sushant </span>
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