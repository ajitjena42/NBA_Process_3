<?php
session_start();
unset($_SESSION['year1']);
unset($_SESSION['dept1']);
unset($_SESSION['sem1']);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit1']))
{
	header('Location: add-subjects.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Add Subjects</title>
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
									<h1 class="mainTitle">Admin | Add Subjects</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Subjects</span>
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
										<div class="col-lg-12 col-md-12">
											<div class="panel panel-white ">
												<div class="panel-heading">
													<h5 class="panel-title">Select Year and Department to Add Subject</h5>
												</div>
												<div class="panel-body">
								
													<form action="add-subjects.php" role="form" name="yeardept" method="post" >
<div class="form-group">
<label for="Selectyear">
    Select Year
</label>
    <select name="Selectyear" class="form-control" required="true">
        <option value="">Select Year</option>
            <?php $ret=mysqli_query($con,"select * from year");
            while($row=mysqli_fetch_array($ret))
            {
            ?>
            <option value="<?php echo htmlentities($row['years']);?>">
                <?php echo htmlentities($row['years']);?>
            </option>
            <?php } ?>												
    </select>
</div>
            <?php
                    $ret=mysqli_query($con,"select * from department group by dept_name ");
                    while($row=mysqli_fetch_array($ret))
                    {
                         $sr=$row['dept_name'];
                        $up=strtoupper($sr);
                         $pr=count($sr);
                        
                        
                    
                for($i=0;$i<$pr;$i++)
                {?>
                    <button type="submit" name="submit1" value="<?php  print_r($up);?>" class="btn btn-o btn-primary btn-lg btn-block">
                        <?php print_r($up);?>
                    </button><br>
                                                        
                <?php }}
            ?>                                                        
                                                        
                                                        
                                                        <br><br>
        <!--<label for="Selectdepartment">
        Select Department
        </label>
                                                        
        <button type="submit" name="submit1" value="Information Technology" class="btn btn-o btn-primary btn-lg btn-block">
            IF
        </button><br>
        
        <button type="submit" name="submit1" value="Computer Engineering" class="btn btn-o btn-primary btn-lg btn-block">
            CO
        </button><br>
                                                        
        <button type="submit" name="submit1" value="Electronics Engineering" class="btn btn-o btn-primary btn-lg btn-block">
            EJ
        </button>-->
                                                        
            </form>
        </div>
    </div>
</div>

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
