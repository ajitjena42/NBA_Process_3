<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
//    unset($_SESSION['year']);
//        unset($_SESSION['class']);
check_login();
if(isset($_POST['submit2']))
{
$_SESSION['year']=$_POST['Selectyear'];
}
if(isset($_POST['submit2']))
{
    $_SESSION['year']=$_POST['Selectyear'];
    $s= $_SESSION['year'];
}

if(isset($_POST['submit1']))
{
    $_SESSION['class']=$_POST['submit1'];
    header('Location: enable_subject.php');
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Teacher |ENABLE COURSE EXIT FORM</title>
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
									<h1 class="mainTitle">Teacher | ENABLE COURSE EXIT FORM</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Teacher</span>
									</li>
									<li class="active">
										<span>ENABLE COURSE EXIT FORM</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
                    <form  role="form" name="yeardept" method="post" >
                        <div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<a class="btn btn-primary" href="dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
									<div class="row margin-top-30">
										<div class="col-lg-12 col-md-12">
											<div class="panel panel-white ">
												<div class="panel-heading">
													<h5 class="panel-title">Select year to Enable course exit form </h5>
												</div>
												<div class="panel-body">
                                                    <div class="form-group">
                                                    <label for="Selectyear">
                                                        Select Year
                                                    </label>
                                                        <select name="Selectyear" class="form-control" >
                                                            <option name="Selectyear" value="">Select Year</option>
                                                                <?php

                                                            $ret=mysqli_query($con,"select * from year");
                                                                while($row=mysqli_fetch_array($ret))
                                                                {
                                                                ?>
                                                                <option name="Selectyear" value="<?php echo htmlentities($row['years']);?>">
                                                                    <?php echo htmlentities($row['years']);?>
                                                                </option>
                                                                <?php } ?>												
                                                        </select>
                                                        <br>
                                                        
                                                        <button type="submit" name="submit2" class="btn btn-o btn-primary btn-lg btn-block">
                                                        submit
                                                        </button><br><br><br>
                                                    </div>
                                                    <h5 class="panel-title">Select class to Enable course exit form </h5>   <br>     
                                                    <?php
                                                        $ret=mysqli_query($con,"SELECT * FROM assignsubject WHERE teacher_id='".$_SESSION['dlogin']."' AND years='".$_SESSION['year']."' Group By class_name");
                                                        while($row=mysqli_fetch_array($ret))
                                                        {
                                                        $sr=$row['class_name'];
                                                        $up=strtoupper($sr);
                                                        $pr=count($sr);
                                                        for($i=0;$i<$pr;$i++)
                                                        {?>
                                                        <button type="submit" name="submit1" value="<?php  print_r($up);?>" class="btn btn-o btn-primary btn-lg btn-block">
                                                        <?php print_r($up);?>
                                                        </button><br>
                                                        <?php }}
                                                    ?> 
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
