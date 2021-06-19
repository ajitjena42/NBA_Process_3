<?php 
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
$years=$_SESSION['year'];
$sql1=mysqli_query($con,"select * from direct_attain_pos_psos d,subject s where d.sub_id=s.sub_id AND s.years='".$years."'");
            if( $row1=mysqli_fetch_array($sql1)){
                
            }else{
                echo "<script>alert('No Attainment yet filled for this year yet');</script>";
        echo '<script>setTimeout(function(){ location.href = "select-year.php"; }, 1);</script>';
            }
if (ISSET($_POST['submit'])) {
            
        echo '<script>setTimeout(function(){ location.href = "select-year.php"; }, 1);</script>';
}
?>
<html>
   <head>
       <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   </head>
    <body  style="background-color:#42E93E;"><br>
       <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary" href="select-year.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
                </div>
            </div>
        </div>
       <br><br><br><br>
       <form align="center" method="post">
        
        <table border="5" align="center" style="background-color:white;">
            <thead>
                <tr>
                   <?php
                $years=$_SESSION['year'];?>
               <td colspan="1" style="width:150px; height:130px;"><img src="../../images/vp1.png" alt="VP" style="width:150px; height:100px;"></td>
               <th colspan="12" style="text-align:center;font-size:30px;">VIDYALANKAR POLYTECHNIC<br>Direct Attainment of PO's<br>(<?php echo $years;?>)</th>
              </tr>
               <tr>
                   <th></th>
                   <th colspan="10" scope="colgroup"style="text-align:center;">POs</th>
                   <th colspan="2" scope="colgroup"style="text-align:center;">PSOs</th>
               </tr>
                <tr>
                    <th style="text-align:center;font-size:20px;">Subject</th>
                <th scope="col">PO1</th>
                <th scope="col">PO2</th>
                <th scope="col">PO3</th>
                <th scope="col">PO4</th>
                <th scope="col">PO5</th>
                <th scope="col">PO6</th>
                <th scope="col">PO7</th>
                <th scope="col">PO8</th>
                <th scope="col">PO9</th>
                <th scope="col">PO10</th>
                <th scope="col">PSO1</th>
                <th scope="col">PSO2</th>
               </tr>
            </thead>
            <tbody>
                      <?php
                $years=$_SESSION['year'];
                $sql1=mysqli_query($con,"select * from direct_attain_pos_psos d,subject s where d.sub_id=s.sub_id AND s.years='".$years."'");
            if( $row1=mysqli_fetch_array($sql1)){
                    $sql1=mysqli_query($con,"select * from direct_attain_pos_psos d,subject s where d.sub_id=s.sub_id AND s.years='".$years."'");
                    while($row1=mysqli_fetch_array($sql1)){
                ?>
               <tr>  
                    <td style="text-align:center;font-size:20px;"><?php echo $row1['sub_name'];?>(<?php echo $row1['sub_code'];?>)</td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PO1'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PO2'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PO3'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PO4'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PO5'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PO6'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PO7'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PO8'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PO9'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PO10'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PSO1'];?>"readonly/></td>
                    <td><input type="text"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['PSO2'];?>"readonly/></td>
                    
                </tr>
               <?php
            }}?>
            </tbody>
           </table><br>  
           <input type="submit" class="btn btn-primary" name="submit" value="SUBMIT"/>
           
           </form>
    </body>
</html>