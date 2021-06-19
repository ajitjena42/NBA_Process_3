<?php
session_start();
unset($_SESSION['year1']);
unset($_SESSION['dept1']);
unset($_SESSION['sem1']);
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
{ 
	$_SESSION['subject']=$_POST['submit'];
    echo '<script>setTimeout(function(){ location.href = "view-teacher-status.php"; }, 1);</script>';    
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HOD | Teacher Status</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=0.9, user-scalable=1, minimum-scale=0.9, maximum-scale=2.0">
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
									<h1 class="mainTitle">HOD | Teacher Status</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>HOD</span>
									</li>
									<li class="active">
										<span>Teacher Status</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
								   <a class="btn btn-primary" href="check-teacher-status.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
									<div class="row margin-top-30">
										<div class="col-lg-12 col-md-12">
											<div class="panel panel-white ">
												<div class="panel-heading">
													<h5 class="panel-title">Select class to see status</h5>
												</div>
												<div class="panel-body">
								
													<form role="form" name="yeardept" method="post" >
  <?php
                                                        
                    $ret=mysqli_query($con,"select * from assignsubject WHERE years='".$_SESSION['year']."' AND dept_name='".$_SESSION['dept_name']."' AND sem='".$_SESSION['seme']."' group by class_name;");
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
                                                        
                                                        
                                                        <br><br>
                                                        
                                                        
                                                        
                                      <div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">List of <span class="text-bold">Students</span></h5>
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Teacher ID</th>
                                                <th>Teacher Name</th>
												<th class="hidden-xs">Assign Subject</th>
												<th>Status</th>
                                                <th>View Status</th>
											</tr>
										</thead>
										<tbody>
<?php
     if(isset($_POST['submit1']))
{ 
    
	$_SESSION['class']=$_POST['submit1'];                                       
$sql=mysqli_query($con,"SELECT a.teacher_id as atid,c.teacher_id as ctid, a.sem as asem, a.class_name as aclass, a.sub_name as asub , t.teacher_name as tname, a.dept_name as dname FROM assignsubject a,cos c,teacher t WHERE a.teacher_id=t.teacher_id AND a.class_name='".$_SESSION['class']."' AND a.years='".$_SESSION['year']."' AND a.sem='".$_SESSION['seme']."' group by a.sub_name");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['atid'];?></td>
                                                <td><?php echo $row['tname'];?></td>
												<td><?php echo $row['asub'];?></td>
                                                <td>
                                                <?php $sushant=0; $sp1; $sp2;
 $sql1=mysqli_query($con,"SELECT exam FROM `cos` WHERE  teacher_id='".$row['atid']."' AND sub_name='".$row['asub']."' AND years='".$_SESSION['year']."' AND dept_name='".$_SESSION['dept_name']."' AND sem='".$_SESSION['seme']."' AND class_name='".$_SESSION['class']."'");
$examfil=" ";
while($row1=mysqli_fetch_array($sql1))
{
    $sushant=$sushant+1;
    $examfil.= " ".$row1['exam'];
//   echo $row1['exam']; echo ", \r\n";
    
    
    
    $sql2=mysqli_query($con,"SELECT theory,practical FROM subject WHERE years='".$_SESSION['year']."' AND dept_name='".$_SESSION['dept_name']."' AND sem='".$_SESSION['seme']."' AND sub_name='".$row['asub']."'");

while($row2=mysqli_fetch_array($sql2))
{
   if($row2['theory']==1 && $row2['practical']==1)
   {
       $sp1=5;
   }
    else if($row2['theory']==1 && $row2['practical']==0)
    {
        $sp1=4;
    }
    else if($row2['theory']==0 && $row2['practical']==1)
    {
        $sp1=3;
    } } }                   
                                                    ?> 
                                                
                                                                            
                                      
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $sushant; ?>" aria-valuemin="0" aria-valuemax="<?php echo $sp1; ?>" style="width: <?php   $sushant=intval(($sushant/$sp1)*100); echo $sushant; ?>%"><?php echo $sushant."%"; ?></div>
</div>
                                       <?php 
                                                    echo $examfil;
                                                    
              ?>
                                                    
              </td>
                                                <td><button type="submit" value="<?php echo $row['asub'];?>" name="submit" class="btn btn-o btn-primary">
															Check
														</button></td>
												 
											</tr>
											
											<?php 
$cnt=$cnt+1;
											 }}?>
											
											
										</tbody>
									</table>
								</div>
							</div>
                              
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
