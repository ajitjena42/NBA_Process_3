<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
    $years=$_SESSION['year'];
    $class=$_SESSION['class'];
    $subject=$_SESSION['subject'];
$sql=mysqli_query($con,"select dept_name from assignsubject where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."'");
        $row=mysqli_fetch_array($sql);
            $_SESSION['dept']=$row['dept_name'];
            $dept=$_SESSION['dept'];
$sql=mysqli_query($con,"select * from student p,assignsubject a where p.years='".$years."' AND p.dept_name='".$dept."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
$a=0;
while($row=mysqli_fetch_array($sql)){
    $a+=1;
}
$sql1=mysqli_query($con,"select * from course_exit_form where years='".$years."' AND sub_name='".$subject."' GROUP BY st_id");
    $b=0;
while($row1=mysqli_fetch_array($sql1)){
    $b+=1;
}
$d=0;
$d=intval((20/100)*$a);
if($d<=$b){
}else{
    
    echo "<script>alert('Atleast 20% student should fill course exit form');</script>";
    echo '<script>setTimeout(function(){ location.href = "select.php"; }, 1);</script>';
}
if (ISSET($_POST['submit'])) {
    $years=$_SESSION['year'];
    $class=$_SESSION['class'];
    $subject=$_SESSION['subject'];
    $sql=mysqli_query($con,"select assign_id from assignsubject where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."'");
    $row=mysqli_fetch_array($sql);
    $assignid=$row['assign_id'];
    $A1=$_POST['lasttotalattain'];
    $sql=mysqli_query($con,"select assign_id from final_attainment where assign_id='".$assignid."'");
    $row=mysqli_fetch_array($sql);
    if($row==null){
    $sql=mysqli_query($con,"INSERT INTO `final_attainment` (`final_attain_id`, `assign_id`, `total_attain`) VALUES (NULL, '$assignid', '$A1')");
    }else{
        $sql=mysqli_query($con,"UPDATE `final_attainment` SET `total_attain`='$A1' WHERE `assign_id`='$assignid'");
    }
        echo '<script>setTimeout(function(){ location.href = "select.php"; }, 1);</script>';
}
?>
  <html>
   <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   </head>
    <body style="background-color:#42E93E;"><br>
       <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary" href="select.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
                </div>
            </div>
        </div><br>
        <form align="center" method="post">
            <table border="5" align="center" style="background-color:white;"><td>
            <table border="2" align="center" style="background-color:white;">
                <thead>
                    <tr>
               <td style="width:150px; height:130px;"><img src="../../images/vp1.png" alt="VP" style="width:150px; height:100px;"></td>
               <th style="text-align:center;width:460px;font-size:20px;">VIDYALANKAR POLYTECHNIC</th>
              </tr>
                </thead>
            </table><br>
        <table border="2" align="center" style="background-color:white;">
           <?php
            include('include/config.php');
//            $_SESSION['subject']="MAD";
            $_SESSION['exampage']="Main";
//            $_SESSION['year']="2019-2020";
            
            $subject=$_SESSION['subject'];
            $class=$_SESSION['class'];
            $exampage=$_SESSION['exampage'];
            $years=$_SESSION['year'];
            
        $sql=mysqli_query($con,"SELECT * FROM `cosfull` cf,`cos` c WHERE  cf.sem=c.sem AND c.years='".$years."' AND c.class_name='".$class."' AND cf.sub_name='".$subject."' GROUP BY cf.cosf_name");
    
        $row=mysqli_fetch_array($sql) ;
            $_SESSION['dept']=$row['dept_name'];
            $dept=$_SESSION['dept'];
        ?>
            <thead>
               
                <th colspan="2" style="text-align:center;width:610px;">Course Outcomes(<?php echo $years;?>)</th>
                <tr>
                    <th colspan="2" style="text-align:center;width:610px;">Courses(<?php echo $subject;?>) &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Class:<?php echo $class?></th>
                </tr>
            </thead>
            <tbody>
               <?php 
                $sql=mysqli_query($con,"SELECT * FROM `cosfull` cf,`cos` c WHERE  cf.sem=c.sem AND c.years='".$years."' AND c.class_name='".$class."' AND cf.sub_name='".$subject."' GROUP BY cf.cosf_name");
                while($row=mysqli_fetch_array($sql)){?>
               <tr>
                   <th style="text-align:center;width:80px;"><?php echo $row['cosf_name'];?></th>
                   <th style="width:530px;"><?php echo $row['cosf_full'];?></th>
                   
               </tr>
                
                <?php
                }
                $sql=mysqli_query($con,"SELECT * FROM `cosfull` cf,`cos` c WHERE  cf.sem=c.sem AND c.years='".$years."' AND c.class_name='".$class."' AND cf.sub_name='".$subject."' GROUP BY cf.cosf_name");
    
                $row=mysqli_fetch_array($sql) ;
                ?>
            </tbody>
        </table><br>
        <table border="2" align="center" style="background-color:white;">
            <thead>
                <tr>
                    <th colspan="7" style="text-align:center;">Direct attainment of COs for Internal Assessment Tools(<?php echo $row['class_name'];?>)</th>
                </tr>
                <tr>
                    <th colspan="1" style="text-align:center;">Tools/COs</th>
                    <?php
                    $sql=mysqli_query($con,"SELECT * FROM `cosfull` cf,`cos` c WHERE  cf.sem=c.sem AND c.years='".$years."' AND c.class_name='".$class."' AND cf.sub_name='".$subject."' GROUP BY cf.cosf_name");
                    while($row=mysqli_fetch_array($sql)){
                    ?>
                    <th colspan="1" style="text-align:center;"><?php echo $row['cosf_name'];?></th>
                    <?php }?>
                </tr>
            </thead>
            <tbody>
               <?php
                    $sql=mysqli_query($con,"SELECT * FROM `cosfull` cf,`cos` c WHERE  cf.sem=c.sem AND c.exam!='ESE' AND c.years='".$years."' AND c.class_name='".$class."' AND cf.sub_name='".$subject."' AND c.sub_name='".$subject."' GROUP BY c.cos_id");
                    while($row=mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                    <th style="width:150px"><?php echo $row['exam'];?></th>
                    <td><input type="text"name="item_name0[]"class="form-control item_name"style="width:75px" autocomplete="off" value="<?php echo $row['co1'];?>" readonly/></td>
                    <td><input type="text"name="item_name1[]"class="form-control item_name"style="width:75px" autocomplete="off" value="<?php echo $row['co2'];?>"readonly/></td>
                    <td><input type="text"name="item_name2[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['co3'];?>"readonly/></td>
                    <td><input type="text"name="item_name3[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['co4'];?>"readonly/></td>
                    <td><input type="text"name="item_name4[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['co5'];?>"readonly/></td>
                    <td><input type="text"name="item_name5[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['co6'];?>"readonly/></td>
                    </tr>
                    <?php }?>
                    <tr>
                    <th>Average</th>
                    <?php
                    $sql=mysqli_query($con,"SELECT * FROM `cosfull` cf,`cos` c WHERE  cf.sem=c.sem AND c.years='".$years."' AND c.class_name='".$class."' AND cf.sub_name='".$subject."' GROUP BY cf.cosf_name");
                    $i=0;
                    while($row=mysqli_fetch_array($sql)){
                        $i+=1;
                    ?>
                    <td><input type="text"name="item_average[]"class="form-control item_name"style="width:75px" autocomplete="off" readonly/></td>
                    <?php
                    }?>        
                    </tr>
            </tbody>
        </table><br>
        <table border="2" align="center" style="background-color:white;">
            <thead>
                <tr>
                    <th colspan="2" style="text-align:center;width:610px;">External Attainment of Semester Board Examinations</th>
                </tr>
                <tr><th  style="text-align:center;width: 50px;height: 100px;">Course Attainment(Direct)</th>
                   <?php
                    $sql=mysqli_query($con,"SELECT * FROM `cosfull` cf,`cos` c WHERE  cf.sem=c.sem AND c.years='".$years."' AND c.exam='ESE' AND c.class_name='".$class."' AND cf.sub_name='".$subject."' GROUP BY c.cos_id");
                    $row=mysqli_fetch_array($sql)
                    ?>
                    <td><input type="text"name="ese"class="form-control item_name"style="text-align:center;width: 470px;height: 100px;"  autocomplete="off"value="<?php echo $row['co1'];?>"readonly/></td>
                    <?php
                    ?>
                </tr>
            </thead>
        </table><br>
        <table border="2" align="center" style="background-color:white;">
            <thead>
                <tr>
                    <th colspan="2" style="text-align:center;">(70% of Board Exam Attainment + 30% of Attainment of Internal Assesment tools)</th>
                </tr>
                <tr><th  style="text-align:center;width: 530px;">Direct Attainment of all assessment tools for the course is </th>
                    <td><input type="text"name="lastattain"class="form-control item_name"style="text-align:center;width: 90px;"  autocomplete="off"readonly/></td>
                </tr>
            </thead>
        </table><br>
             
              <table border="2" align="center" style="background-color:white;">
            <thead>
                <tr>
                    <th colspan="2" style="text-align:center;">(80% of Direct Attainment + 20% of Indirect Attainment )</th>
                </tr>
                <tr><th  style="text-align:center;width: 520px;">Total Attainment for the course is </th>
                    <td><input type="text"name="lasttotalattain"class="form-control item_name"style="text-align:center;width: 90px;"  autocomplete="off"readonly/></td>
                </tr>
            </thead>
        </table><br>
            
             <?php
                $sql=mysqli_query($con,"SELECT * FROM `course_exit_form`  WHERE years='".$years."'  AND sub_name='".$subject."'AND dept_name='".$dept."'");
                $cnt=0;
                while($row=mysqli_fetch_array($sql)){
                ?>
             
              <input type="hidden" name="indirect[]" value="<?php echo $row['totalavg'];?>">
              
              <?php
                    $cnt+=1;
                }?>
              <input type="hidden" name="count1" value="<?php echo $cnt;?>">
                
              
              
              </td></table>
               <input type="submit" class="btn btn-primary" id="submit" name="submit" value="SUBMIT"/>
               <input type="button" class="btn btn-primary" id="print" name="print" value="PRINT" onClick="window.print();" />

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        </form>
        <script>
            $(window).on('load', function() {
                 var co1=0,co2=0,co3=0,co4=0,co5=0,co6=0,i=0,total=0,ese=0,a=0;
                $('input[name="item_name0[]"]').map(function () {
                    if(this.value!='-'){
                    co1+=parseInt(this.value);a++;}
                });
                co1=parseFloat(co1/a).toFixed(2);
                $('input[name="item_average[]"]').get(i).value=parseFloat(co1).toFixed(2);
                i+=1;a=0;
                $('input[name="item_name1[]"]').map(function () {
                     if(this.value!='-'){
                    co2+=parseInt(this.value);a++;}
                });
                co2=parseFloat(co2/a).toFixed(2);
                $('input[name="item_average[]"]').get(i).value=parseFloat(co2).toFixed(2);
                i+=1;a=0;
                $('input[name="item_name2[]"]').map(function () {
                     if(this.value!='-'){
                    co3+=parseInt(this.value);a++;}
                });
                co3=parseFloat(co3/a).toFixed(2);
                $('input[name="item_average[]"]').get(i).value=parseFloat(co3).toFixed(2);
                i+=1;a=0;
                $('input[name="item_name3[]"]').map(function () {
                     if(this.value!='-'){
                    co4+=parseInt(this.value);a++;}
                });
                co4=parseFloat(co4/a).toFixed(2);
                $('input[name="item_average[]"]').get(i).value=parseFloat(co4).toFixed(2);
                i+=1;a=0;
                $('input[name="item_name4[]"]').map(function () {
                     if(this.value!='-'){
                    co5+=parseInt(this.value);a++;}
                });
                co5=parseFloat(co5/a).toFixed(2);
                $('input[name="item_average[]"]').get(i).value=parseFloat(co5).toFixed(2);
                i+=1;a=0;
                $('input[name="item_name5[]"]').map(function () {
                     if(this.value!='-'){
                    co6+=parseInt(this.value);a++;}
                });
                co6=parseFloat(co6/a).toFixed(2);
                $('input[name="item_average[]"]').get(i).value=parseFloat(co6).toFixed(2);
                i+=1;
                ese=parseInt($('input[name="ese"]').get(0).value);
                total=parseFloat((parseFloat(co1)+parseFloat(co2)+parseFloat(co3)+parseFloat(co4)+parseFloat(co5)+parseFloat(co6))/6).toFixed(2);
                total=parseFloat((0.7*ese)+(0.3*total)).toFixed(2);
                $('input[name="lastattain"]').get(0).value=total;
                
                var cnt=$('input[name="count1"]').get(0).value;
                var total1=0;
                $('input[name="indirect[]"]').map(function(){
                    total1+=parseFloat(this.value);
                    
                });
                total1=total1/cnt;
                var last=(0.8*total+0.2*total1)
                $('input[name="lasttotalattain"]').get(0).value=parseFloat(last).toFixed(2);

            });
        
        </script>
    </body>
</html>