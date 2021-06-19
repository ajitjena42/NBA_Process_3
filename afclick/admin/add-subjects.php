<?php

session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_GET['del']))
		  {
		          mysqli_query($con,"DELETE FROM `subject` where `sub_id` = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
		  }

if(isset($_POST['submit1']))
{
    $year = $_POST['Selectyear'];
    $_SESSION['year1']=$year;
	$department = $_POST['submit1'];  
    $_SESSION['dept1']=$department;

}
if(isset($_POST['submit']))
{
    $semester= $_POST['selectsemester'];
    $_SESSION['sem1']=$semester;
}
if(isset($_POST['submit3']))
{ 
        
        $A3=$_POST['a'];
        $A4=$_POST['b']; 
        $A5=$_POST['c'];
        $A6=$_POST['d'];
    
        for($i=0;$i < $_SESSION['noofsub'];$i+=1)
        {   
        $A=$_SESSION['year1'];
        $A1=$_SESSION['dept1'];
        $A2=$_SESSION['sem1'];
        $Ad=$A3[$i];
        $Ae=$A4[$i];
            if(is_null($A5[$i])){
                $A5[$i]=0;
            }
            else{
                $A5[$i]=1;
            }
        $Af=$A5[$i];
            if(is_null($A6[$i])){
                $A6[$i]=0;
            }
            else{
              $A6[$i]=1;  
            }
        $Ag=$A6[$i];
            
                
            $sql=mysqli_query($con,"INSERT INTO `subject` (`years`, `dept_name`, `sem`, `sub_name`, `sub_code`, `theory`, `practical`) VALUES ('$A','$A1','$A2','$Ae','$Ad','$Af','$Ag')"); 
            
        }
            echo '<script>alert("Subjects is successfully added.")</script>';  
            header("refresh: 0"); 
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
									<a class="btn btn-primary" href="sele-year-dept.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
									<div class="row margin-top-30">
                                        <div class="row d-flex justify-content-center" >
										<div class="col-lg-6 col-md-12"  >
											<div class="panel panel-white ">
												<div class="panel-heading">
													<h5 class="panel-title">Select Semester and Number of Subjects</h5>
												</div>
												<div class="panel-body">
													<form  role="form" name="yeardept" method="post" >
 <div class="form-group">
<label for="Selectyear">
    Select Semester
</label>
    <select name="selectsemester" class="form-control" required="true">
        <option  value="">Select Semester</option>
            <?php $ret=mysqli_query($con,"select * from semester");
            while($row=mysqli_fetch_array($ret))
            {
            ?>
            <option name="smester" value="<?php echo htmlentities($row['sem']);?>">
                <?php echo htmlentities($row['sem']);?>
            </option>
            <?php } ?>												
    </select>
</div>
                                                        <br>
        <label for="Selectdepartment">
        Select Number of Subject to Add
        </label>
                  <br>                                      
        <input type="number" class="form-control" name="numofsubject" min="1" max="10"> <br>
        
        <button type="submit" name="submit" class="btn btn-o btn-primary btn-lg btn-block">
            Submit
        </button><br>
                                                        
                                                        
            </form>
        </div>
    </div>
</div>
                                            

											</div>
										</div>
                                
                                <form method="post">
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-white ">
                <table class="table table-hover" id="sample-table-1">
                <thead>
                    <tr>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th class="center">Theory</th>
                    <th class="center">Practical</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $_SESSION['noofsub']=$_POST['numofsubject'];
                for($i=0;$i<$_SESSION['noofsub'];$i++)
                {?><tr>
                    <td><input type="text"  name="a[<?php echo $i?>]" style="width:200px"></td>
                    <td><input type="text"  name="b[<?php echo $i?>]" style="width:200px"></td>
                    <td class="center"><input value="Theory" type="checkbox"  name="c[<?php echo $i?>]"></td>
                    <td class="center"><input value="Practical" type="checkbox" name="d[<?php echo $i?>]"></td> 
                    </tr>
                <?php }
                    ?>
                </tbody>
            </table>
                <button type="submit" name="submit3" class="btn btn-o btn-primary btn-lg btn-block">
            Submit
        </button>
            </div>
        </div>
                    </form>            
                                
                                
                                
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
                <p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
                <?php echo htmlentities($_SESSION['msg']="");?></p>
												
											</div>
										</div>
									</div>

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Subject-Code and Subjects</span></h5>
									
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Subject Code</th>
												<th>Subject Name</th>
												<th class="hidden-xs">Creation Date</th>
												<th>Updation Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
<?php
$A11=$_SESSION['year1'];
$prash=$_SESSION['dept1'];
$sush=$_SESSION['sem1'];
                                            
$sql=mysqli_query($con,"SELECT * FROM subject WHERE years='$A11' AND dept_name='$prash' AND sem='$sush' ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['sub_code'];?></td>
												<td class="hidden-xs"><?php echo $row['sub_name'];?></td>
												<td><?php echo $row['creationdate'];?></td>
												<td><?php echo $row['updationdate'];?>
												</td>
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
    <a href="edit-subject-&-code.php?id=<?php echo $row['sub_id'];?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>                                                
    <a href="add-subjects.php?id=<?php echo $row['sub_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
										</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group" dropdown is-open="status.isopen">
														<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
															<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
														</button>
														<ul class="dropdown-menu pull-right dropdown-light" role="menu">
															<li>
																<a href="#">
																	Edit
																</a>
															</li>
															<li>
																<a href="#">
																	Share
																</a>
															</li>
															<li>
																<a href="#">
																	Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
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
