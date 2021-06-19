<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit1']))
{
    $_SESSION['class']=$_POST['submit1'];
}
if(isset($_POST['submit2']))
{
    $_SESSION['year']=$_POST['Selectyear'];
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HOD | Teachers List</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1, minimum-scale=1.0, maximum-scale=2.0">
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
									<h1 class="mainTitle">HOD | Student List</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>HOD</span>
									</li>
									<li class="active">
										<span>Student List</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
                            
                            
                            <form  role="form" name="yeardept" method="post" >
                            <a class="btn btn-primary" href="dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
                            <div class="row margin-top-30">
										<div class="col-lg-12 col-md-12">
											<div class="panel panel-white ">
												<div class="panel-heading">
													<h5 class="panel-title">Select academic year to see Student list</h5>
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
                                                        Submit
                                                        </button>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div></div></div>
                            
                            
                            
                                <div class="row margin-top-30">
										<div class="col-lg-12 col-md-12">
											<div class="panel panel-white ">
												<div class="panel-heading">
													<h5 class="panel-title">Select class to see student list</h5>
                                                    <br>
                                                    selected year is <?php echo $_SESSION['year']; ?>
												</div>
												<div class="panel-body">
								
													<form  role="form" name="yeardept" method="post" >

            <?php
                    $ret=mysqli_query($con,"SELECT * FROM `student` where years='".$_SESSION['year']."' GROUP BY class_name");
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
            </form>
        </div>
    </div>
</div>
				</div>
                            </form>
                            
									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">List of <span class="text-bold">Students</span></h5>
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Student ID</th>
                                                <th>Enrollment No</th>
												<th class="hidden-xs">Student Name</th>
												<th>Student Class </th>	
											</tr>
										</thead>
										<tbody>
<?php
$sql=mysqli_query($con,"SELECT * FROM `student` WHERE years='".$_SESSION['year']."' AND class_name='".$_SESSION['class']."' ORDER BY student.st_id ASC");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['st_id'];?></td>
                                                <td><?php echo $row['enrollment'];?></td>
												<td><?php echo $row['st_name'];?></td>
												<td><?php echo $row['class_name'];?></td>
											</tr>
											
											<?php 
$cnt=$cnt+1;
											 }?>
											
											
										</tbody>
									</table>
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
