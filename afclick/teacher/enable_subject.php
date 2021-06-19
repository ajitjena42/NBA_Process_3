<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_POST['submit1']))
{
    $_SESSION['subject']=$_POST['submit1'];
    
    $sql1=mysqli_query($con,"SELECT * FROM assignsubject WHERE teacher_id='".$_SESSION['dlogin']."' AND years='".$_SESSION['year']."' AND class_name='".$_SESSION['class']."' AND `sub_name`='".$_SESSION['subject']."'");
    $row=mysqli_fetch_array($sql1);
    if($row['exitform_enable']==1){
        $sql=mysqli_query($con,"UPDATE `assignsubject` SET `exitform_enable`='0' WHERE `teacher_id`='".$_SESSION['dlogin']."' AND `class_name`='".$_SESSION['class']."' AND `sub_name`='".$_SESSION['subject']."'");
	
		$ret3=mysqli_query($con,"select s.st_email as student_email, t.teacher_name as teachername,s.st_name as studentname FROM assignsubject a , student s , teacher t where t.teacher_id='".$_SESSION['dlogin']."' AND s.years='".$_SESSION['year']."' AND s.class_name='".$_SESSION['class']."' AND s.class_name = a.class_name AND a.teacher_id = t.teacher_id group BY s.st_email"); 
		while($row3=mysqli_fetch_array($ret3))
		{
			$subject1=$_SESSION['subject'];
			$teachername=$row3['teachername'];
			$studentname=$row3['studentname'];
			$email = $row3['student_email'];
			$subject = "Vidyalankar | Course Exit Form"; 
			$txt = "<h1> Vidyalankar | Course Exit Form </h1><br>";
			$txt .= "Hey <b>$studentname</b> , <br><br>The course exit form is enabled now of <b>$subject1</b> subject by your lecturer <b>$teachername</b> .<br>";
			$txt .= "Now you can login and fill course exit form till ma'am will not disable it .<br><br>";
			$txt  .= "<br>Thank you/Team Vidyalankar......";
			$headers = "From: ajitjena123456@gmail.com";
			$headers .= "MIME-Version: \r\n";
			$headers .= "Content-type: text/html\r\n";
			mail($email,$subject,$txt,$headers);
		}

	}
	else
	{
		$sql=mysqli_query($con,"UPDATE `assignsubject` SET `exitform_enable`='1' WHERE `teacher_id`='".$_SESSION['dlogin']."' AND `class_name`='".$_SESSION['class']."' AND `sub_name`='".$_SESSION['subject']."'");
	}
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Teacher |Select Subject to Enable</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Teacher |Select Subject to Enable</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Teacher</span>
									</li>
									<li class="active">
										<span>Select Subject to Enable</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->

								
                    <form  role="form" name="yeardept" method="post" >
                                                        
                                                        
                                                        <br><br>
     
                                                        
           
                        <div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<a class="btn btn-primary" href="select_course_class.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
									<div class="row margin-top-30">
										<div class="col-lg-12 col-md-12">
											<div class="panel panel-white ">
												
												<div class="panel-body">
                                                    
                                                    <h5 class="panel-title">Select Subject to Enable course exit form </h5>   <br> 
                                                    <table border="5" align="center">
                                                    <thead>
                                                        <th style="text-align:center;font-size:20px;">Subject</th>
                                                        <th style="text-align:center;font-size:20px;">Status</th>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $ret=mysqli_query($con,"SELECT * FROM assignsubject WHERE teacher_id='".$_SESSION['dlogin']."' AND years='".$_SESSION['year']."' AND class_name='".$_SESSION['class']."'"); 
                                                        while($row=mysqli_fetch_array($ret))
                                                        {
                                                        $sr=$row['sub_name'];
                                                        $en=$row['exitform_enable'];
                                                        $up=strtoupper($sr);
                                                        $pr=count($sr);


                                                        for($i=0;$i<$pr;$i++)
                                                        {?>
                                                        <tr><td style="width:900px;padding: 10px;"><button type="submit" name="submit1" value="<?php  print_r($up);?>" class="btn btn-o btn-primary btn-lg btn-block">
                                                        <?php print_r($up);?>
                                                        </button></td>
															<td style="text-align:center;font-size:20px;padding: 10px;">
																<?php 
																if($en==1)
																{
																	echo "Disabled";
																}
																else
																{
																	echo "Enabled"; 
																}
															
																?>
															</td>
                                                        </tr>
                                                        

                                                        <?php }}
                                                    ?> </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                         </form>
        </div>
    </div>
							</div>
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
    
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			</div>
			
			<!-- end: SETTINGS -->
		
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
