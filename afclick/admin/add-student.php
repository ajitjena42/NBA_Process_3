<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
{	$year=$_POST['year'];
    $enrollnum=$_POST['enrollnum'];
    $studentclass=$_POST['class'];
    $studentid=$_POST['studid'];
    $studentrname=$_POST['studname'];
    $departmentname=$_POST['selectdept'];
    $studconno=$_POST['studcontact'];
    $studentmail=$_POST['studemail'];
    $password=md5($_POST['npass']);
 
    $sql=mysqli_query($con,"INSERT INTO `student` (`years`, `enrollment`, `class_name`, `st_id`, `st_name`, `dept_name`, `st_phone`, `st_email`, `st_password`) VALUES ('$year', '$enrollnum', '$studentclass', '$studentid', '$studentrname', '$departmentname', '$studconno', '$studentmail', '$password')");
 echo $sql;
if($sql)
{
    $_SESSION['msg']="Student Data Succesfully Inserted !!";
echo "<script>alert('Student info added Successfully');</script>";
header('Location:manage-students.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Add Student</title>
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
<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>
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
									<h1 class="mainTitle">Admin | Add Student</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Student</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<a class="btn btn-primary" href="dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Add Student</h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														
                    <div class="form-group">
                        <label for="Selectyear">
                        Select Year
                        </label>
                        <select name="year" class="form-control" required="true">
                        <option name="year" value="">Select Year</option>
                        <?php $ret=mysqli_query($con,"select * from year");
                        while($row=mysqli_fetch_array($ret))
                        {
                        ?>
                        <option name="year" value="<?php echo htmlentities($row['years']);?>">
                        <?php echo htmlentities($row['years']);?>
                        </option>
                        <?php } ?>												
                        </select>
                    </div>
                                              <div class="form-group">
                                                <label for="doctorname">
                                                     Enrollment Number
                                                </label>
                                                <input type="text" name="enrollnum" class="form-control"  placeholder="Enter Enrollment Number">
                                            </div>
                                                        
                                            <div class="form-group">
                                                <label for="doctorname">
                                                     Student ID
                                                </label>
                                                <input type="text" name="studid" class="form-control"  placeholder="Enter Student ID">
                                            </div>
														
														<div class="form-group">
															<label for="doctorname">
																 Student Name
															</label>
					<input type="text" name="studname" class="form-control"  placeholder="Enter Student Name">
														</div>
                                                        
                    <div class="form-group">
                        <label for="Selectyear">
                        Select Department
                        </label>
                        <select name="selectdept" class="form-control" required="true">
                        <option name="selectdept" value="">Select Department</option>
                        <?php $ret=mysqli_query($con,"select * from department");
                        while($row=mysqli_fetch_array($ret))
                        {
                        ?>
                        <option name="selectdept" value="<?php echo htmlentities($row['dept_name']);?>">
                        <?php echo htmlentities($row['dept_name']);?>
                        </option>
                        <?php } ?>												
                        </select>
                    </div>
                                                        
                                                        
                                                        
                    <div class="form-group">
                        <label for="Selectclass">
                        Select Class
                        </label>
                        <select name="class" class="form-control" required="true">
                        <option name="class" value="">Select Class</option>
                        <?php $ret=mysqli_query($con,"select * from class");
                        while($row=mysqli_fetch_array($ret))
                        {
                        ?>
                        <option name="class" value="<?php echo htmlentities($row['class_name']);?>">
                        <?php echo htmlentities($row['class_name']);?>
                        </option>
                        <?php } ?>												
                        </select>
                    </div>

	
<div class="form-group">
									<label for="fess">
																 Student Contact no
															</label>
					<input type="text" name="studcontact" class="form-control"  placeholder="Enter Student Contact no">
														</div>

<div class="form-group">
									<label for="fess">
																 Student Email
															</label>
					<input type="email" name="studemail" class="form-control"  placeholder="Enter Student Email id">
														</div>



														
														<div class="form-group">
															<label for="exampleInputPassword1">
																 Password
															</label>
					<input type="password" name="npass" class="form-control"  placeholder="New Password" required="required">
														</div>
														
<div class="form-group">
															<label for="exampleInputPassword2">
																Confirm Password
															</label>
									<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password" required="required">
														</div>
														
														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
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
