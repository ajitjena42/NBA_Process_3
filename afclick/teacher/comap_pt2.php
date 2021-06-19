<?php 
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
if (ISSET($_POST['submit'])) {
//            $_SESSION['subject']="MAD";
//            $_SESSION['year']="2019-2020";
            $years=$_SESSION['year'];
            $subject=$_SESSION['subject'];
            $class=$_SESSION['class'];
        $sql=mysqli_query($con,"select dept_name from assignsubject where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."'");
        $row=mysqli_fetch_array($sql);
            $_SESSION['dept']=$row['dept_name'];
            $dept=$_SESSION['dept'];
            $A=$_POST['item_nameoutcome1'];
    for($i=0;$i<10;$i++){
            $Aa=$A[$i];
            $Ab=$A[$i+=1];
            $Ac=$A[$i+=1];
            $Ad=$A[$i+=1];
            $Ae=$A[$i+=1];
            $Af=$A[$i+=1];
            $Ba=$A[$i+=1];
            $Bb=$A[$i+=1];
            $Bc=$A[$i+=1];
            $Bd=$A[$i+=1];}
        
    
    
    $sql=mysqli_query($con,"select sub_id from subject where years='".$years."' AND dept_name='".$dept."' AND sub_name='".$subject."'");
        $row=mysqli_fetch_array($sql);
        $subid=$row['sub_id'];
        $sql=mysqli_query($con,"select sub_id from comap_pt2 where sub_id='".$subid."'");
        $row=mysqli_fetch_array($sql);
        if($row==null){
        $sql=mysqli_query($con,"INSERT INTO `comap_pt2` (`comap_pt2_id`, `sub_id`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `2a`, `2b`, `2c`, `2d`) VALUES (NULL,'$subid' ,'$Aa', '$Ab', '$Ac', '$Ad', '$Ae', '$Af', '$Ba', '$Bb', '$Bc', '$Bd')");
        
        $sql=mysqli_query($con,"UPDATE `subject` SET `co_pt2`=1 WHERE years='$years' AND dept_name='$dept' AND sub_name='$subject'");
        }else{
        $sql=mysqli_query($con,"UPDATE `comap_pt2` SET `1a`='$Aa',`1b`='$Ab',`1c`='$Ac',`1d`='$Ad',`1e`='$Ae',`1f`='$Af',`2a`='$Ba',`2b`='$Bb',`2c`='$Bc',`2d`='$Bd' where sub_id='".$subid."'");   
        }
        echo '<script>setTimeout(function(){ location.href = "select-copo.php"; }, 1);</script>';
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
                    <a class="btn btn-primary" href="select-copo.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
                </div>
            </div>
        </div>
       <br><br><br><br>
       <form align="center" method="post">
        <table border="5" align="center" style="background-color:white;"><td>
        <table border="5" align="center" style="background-color:white;">
            <thead>
              <tr>
               <td colspan="1" style="width:150px; height:130px;"><img src="../../images/vp1.png" alt="VP" style="width:150px; height:100px;"></td>
               <th colspan="10" style="text-align:center;font-size:30px;">VIDYALANKAR POLYTECHNIC</th>
              </tr>
               <tr>
                  <th></th>
                   <th colspan="10" scope="colgroup"style="text-align:center;">Assign COs to Questions</th>
               </tr>
                <tr>
                <th></th>
                <th scope="col">1A</th>
                <th scope="col">1B</th>
                <th scope="col">1C</th>
                <th scope="col">1D</th>
                <th scope="col">1E</th>
                <th scope="col">1F</th>

                <th scope="col">2A</th>
                <th scope="col">2B</th>
                <th scope="col">2C</th>
                <th scope="col">2D</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                   <td></td>
                    <?php
        $years=$_SESSION['year'];
        $subject=$_SESSION['subject'];
        $class=$_SESSION['class'];
        $sql=mysqli_query($con,"select dept_name from assignsubject where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."'");
        $row=mysqli_fetch_array($sql);
        $_SESSION['dept']=$row['dept_name'];
        $dept=$_SESSION['dept'];
        $sql=mysqli_query($con,"select sub_id from subject where years='".$years."' AND dept_name='".$dept."' AND sub_name='".$subject."'");
        $row=mysqli_fetch_array($sql);
        $subid=$row['sub_id'];
        $sql=mysqli_query($con,"select * from comap_pt2 where sub_id='".$subid."'");
        $row=mysqli_fetch_array($sql);
        if($row==null){
                   
                        for($i=0;$i<10;$i++)
                        {
                        ?>
                            <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="4" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                            <?php
                                }}
                   else{
                                ?>
                                <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="<?php echo $row['1a'];?>" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                                <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="<?php echo $row['1b'];?>" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                                <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="<?php echo $row['1c'];?>" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                                <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="<?php echo $row['1d'];?>" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                                <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="<?php echo $row['1e'];?>" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                                <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="<?php echo $row['1f'];?>" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                                <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="<?php echo $row['2a'];?>" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                                <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="<?php echo $row['2b'];?>" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                                <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="<?php echo $row['2c'];?>" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                                <td><input type="number"name="item_nameoutcome1[]"class="form-control item_name" value="<?php echo $row['2d'];?>" min="0" max="6" style="width:78px"autocomplete="off" required/></td>
                                <?php } ?>
                            
               </tr>
            </tbody>
           </table><br>
           <table border="5" align="center" style="background-color:white;">
            <thead>
            <th colspan="2" style="text-align:center;width:948px;">Course Outcomes(<?php echo $years;?>)</th>
                <tr>
                    <th colspan="2" style="text-align:center;width:948px;">Courses(<?php echo $subject;?>) &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Class:<?php echo $class?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql=mysqli_query($con,"SELECT * FROM `cosfull` WHERE  dept_name='".$dept."' AND sub_name='".$subject."' GROUP BY cosf_name");
                while($row=mysqli_fetch_array($sql)){
                ?>
                
                <tr>
                    <th style="text-align:center;width:100px;"><?php echo $row['cosf_name'];?></th>
                   <th style="width:848px;"><?php echo $row['cosf_full'];?></th>
                </tr>
               <?php
                }?>
            </tbody>
           </table></td>
           </table><br>
           <input type="submit" name="submit" class="btn btn-primary" value="<?php $sql=mysqli_query($con,"select sub_id from comap_pt2 where sub_id='".$subid."'");
        $row=mysqli_fetch_array($sql); if($row==null) { echo "SUBMIT"; } else{ echo "UPDATE";  } ?>"/>
           </form>
    </body>
</html>