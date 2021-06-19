<?php 
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
        $_SESSION['exampage']="PT1";
        $subject=$_SESSION['subject'];
        $class=$_SESSION['class'];
        $exampage=$_SESSION['exampage'];
        $years=$_SESSION['year'];
$sql=mysqli_query($con,"select dept_name from assignsubject where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."'");
        $row=mysqli_fetch_array($sql);
            $_SESSION['dept']=$row['dept_name'];
            $dept=$_SESSION['dept'];
$sql=mysqli_query($con,"SELECT * FROM subject s,comap_pt1 c where s.sub_id=c.sub_id AND s.years='".$years."' AND s.dept_name='".$dept."' AND s.sub_name='".$subject."'");
if($row=mysqli_fetch_array($sql)){
}
else{
    echo "<script>alert('You have not set co for PT1');</script>";
    echo '<script>setTimeout(function(){ location.href = "comap_pt1.php"; }, 1);</script>';
}
if (ISSET($_POST['submit'])) {
        $_SESSION['exampage']="PT1";
        $subject=$_SESSION['subject'];
        $class=$_SESSION['class'];
        $exampage=$_SESSION['exampage'];
        $years=$_SESSION['year'];
        $A=$_POST['item_name'];
        $A1=$_POST['item_name1'];
        $A2=$_POST['item_name2'];
        $A3=$_POST['item_name3'];
        $A4=$_POST['item_name4']; 
        $A5=$_POST['item_name5'];  
        $B=$_POST['item_nameb'];
        $B1=$_POST['item_name1b'];
        $B2=$_POST['item_name2b'];
        $B3=$_POST['item_name3b'];
        $Total=$_POST['item_nametotal'];
        $absent=$_POST['item_namehid'];
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        $i=0;
    
        $sql1=mysqli_query($con,"select * from pt1 where years='".$years."' AND class_name='".$class."' AND sub_name='$subject' GROUP BY st_id");
            if( $row1=mysqli_fetch_array($sql1)){
    
        while($row=mysqli_fetch_array($sql))
        {   $year=$years;
            $cname=$row['class_name'];
            $s1name=$subject;
            $tid=$row['teacher_id'];
            $sid=$row['st_id'];
            $sname=$row['st_name'];
            $Aa=$A[$i];
         if($Aa==null){
             $Aa="-";
         }
            $Ab=$A1[$i];
         if($Ab==null){
             $Ab="-";
         }
            $Ac=$A2[$i];
         if($Ac==null){
             $Ac="-";
         }
            $Ad=$A3[$i];
         if($Ad==null){
             $Ad="-";
         }
            $Ae=$A4[$i];
         if($Ae==null){
             $Ae="-";
         }
            $Af=$A5[$i];
         if($Af==null){
             $Af="-";
         }
            $Ba=$B[$i];
         if($Ba==null){
             $Ba="-";
         }
            $Bb=$B1[$i];
         if($Bb==null){
             $Bb="-";
         }
            $Bc=$B2[$i];
         if($Bc==null){
             $Bc="-";
         }
            $Bd=$B3[$i];
         if($Bd==null){
             $Bd="-";
         }
            $total=$Total[$i];
            $abs=$absent[$i];
         if($abs==1){
             $Aa="-";
            $Ab="-";
            $Ac="-";
            $Ad="-";
            $Ae="-";
            $Af="-";
            $Ba="-";
            $Bb="-";    
            $Bc="-";
            $Bd="-";
         }
            
                mysqli_query($con,"UPDATE `pt1` SET `1a`='$Aa',`1b`='$Ab',`1c`= '$Ac',`1d`= '$Ad',`1e`= '$Ae',`1f`= '$Af',`2a`= '$Ba',`2b`= '$Bb',`2c`= '$Bc',`2d`= '$Bd',`total`= '$total',`absent`= '$abs' WHERE `years`='$year' AND class_name='".$cname."' AND sub_name='".$s1name."' AND st_id='".$sid."' ");
            
            $i+=1;   
        }
        $j=0;
        $co=$_POST['item_attainmentco'];
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        while($j<1){
        $row1=mysqli_fetch_array($sql);
            $year=$years;
            $dname=$row1['dept_name'];
            $sem=$row1['sem'];
            $cname=$row1['class_name'];
            $sname=$subject;
            $tid=$_SESSION['dlogin'];
            $co1=$co[0];
            $co2=$co[1];
            $co3=$co[2];
            $co4=$co[3];
            
                mysqli_query($con,"UPDATE `cos` SET `co1`='$co1',`co2`='$co2',`co3`= '$co3',`co4`= '$co4',`co5`= '-',`co6`= '-' WHERE `years`='$year' AND class_name='".$cname."' AND sub_name='".$s1name."' AND exam='PT1' ");
            
           
            $j+=1;   
        }
            }
    else{
        while($row=mysqli_fetch_array($sql))
        {   $year=$years;
            $cname=$row['class_name'];
            $s1name=$subject;
            $tid=$_SESSION['dlogin'];
            $sid=$row['st_id'];
            $sname=$row['st_name'];
            $Aa=$A[$i];
         if($Aa==null){
             $Aa="-";
         }
            $Ab=$A1[$i];
         if($Ab==null){
             $Ab="-";
         }
            $Ac=$A2[$i];
         if($Ac==null){
             $Ac="-";
         }
            $Ad=$A3[$i];
         if($Ad==null){
             $Ad="-";
         }
            $Ae=$A4[$i];
         if($Ae==null){
             $Ae="-";
         }
            $Af=$A5[$i];
         if($Af==null){
             $Af="-";
         }
            $Ba=$B[$i];
         if($Ba==null){
             $Ba="-";
         }
            $Bb=$B1[$i];
         if($Bb==null){
             $Bb="-";
         }
            $Bc=$B2[$i];
         if($Bc==null){
             $Bc="-";
         }
            $Bd=$B3[$i];
         if($Bd==null){
             $Bd="-";
         }
            $total=$Total[$i];
            $abs=$absent[$i];
         if($abs==1){
             $Aa="-";
            $Ab="-";
            $Ac="-";
            $Ad="-";
            $Ae="-";
            $Af="-";
            $Ba="-";
            $Bb="-";
            $Bc="-";
            $Bd="-";
         }
            
                mysqli_query($con,"INSERT INTO `pt1` (`pt1_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `st_id`, `st_name`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `2a`, `2b`, `2c`, `2d`, `total`,`absent`) VALUES (NULL, '$year', '$cname', '$s1name', '$tid', '$sid', '$sname', '$Aa', '$Ab', '$Ac', '$Ad', '$Ae', '$Af', '$Ba', '$Bb', '$Bc', '$Bd', '$total','$abs')");
            
            $i+=1;   
        }
        $j=0;
        $co=$_POST['item_attainmentco'];
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        while($j<1){
        $row1=mysqli_fetch_array($sql);
            $year=$years;
            $dname=$row1['dept_name'];
            $sem=$row1['sem'];
            $cname=$row1['class_name'];
            $sname=$subject;
            $tid=$_SESSION['dlogin'];
            $co1=$co[0];
            $co2=$co[1];
            $co3=$co[2];
            $co4=$co[3];
            
            mysqli_query($con,"INSERT INTO `cos` (`cos_id`, `years`, `dept_name`, `sem`, `class_name`, `exam`,`sub_name`, `teacher_id`, `co1`, `co2`, `co3`, `co4`, `co5`, `co6`) VALUES (NULL, '$year', '$dname', '$sem', '$cname','$exampage', '$sname', '$tid', '$co1', '$co2', '$co3', '$co4', '0', '0')");
            
            $j+=1;   
        }
    }
unset($_SESSION['exampage']);
echo '<script>setTimeout(function(){ location.href = "select.php"; }, 1);</script>';
}
?>
<html>
   <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   </head>
   <style> 
        input.check { 
            width: 20px; 
            height: 20px; 
        } 
    </style>
    <body style="background-color:#42E93E;" ><br>
       <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary" href="select.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
                </div>
            </div>
        </div>
       <br>
        <form align="center" method="post">
        <table border="5" align="center" style="background-color:white;">  
        <?php
            $_SESSION['exampage']="PT1";
            $class=$_SESSION['class'];
            $subject=$_SESSION['subject'];
            $exampage=$_SESSION['exampage'];
            $years=$_SESSION['year'];
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        
        $row=mysqli_fetch_array($sql);
            $_SESSION['dept']=$row['dept_name'];
            $dept=$_SESSION['dept'];
        ?>
          <thead>
             
              <tr>
               <td colspan="1" style="width:150px; height:130px;"><img src="../../images/vp1.png" alt="VP" style="width:150px; height:100px;"></td>
               <th colspan="13" style="text-align:center;font-size:30px;">VIDYALANKAR POLYTECHNIC</th>
              </tr>
              <tr>
               <th colspan="1"style="text-align:center;"><?php echo $row['sem'];?> Sem</th>
               <th colspan="5"style="text-align:center;"><?php echo $row['dept_name'];?>(<?php echo $row['class_name'];?>)</th>
               <th colspan="3"style="text-align:center;"><?php echo $row['years'];?></th>
               <th colspan="5"style="text-align:center;"><?php echo $exampage;?></th>
              </tr>
               <tr>
                <th colspan="1" scope="colgroup"style="text-align:center;"rowspan="2">Roll ID</th>
                <th colspan="1" scope="colgroup"style="text-align:center;"rowspan="2">Student Name</th>
                <th colspan="10" scope="colgroup" style="text-align:center;"><?php echo $row['sub_name'];?></th>
                <th colspan="2" scope="colgroup"></th>
               </tr>
               <tr>
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
                <th scope="col">Total</th>
                <th scope="col">Absent</th>
               </tr>
            </thead>
            <tbody>
               
               <?php
                $sql1=mysqli_query($con,"select * from pt1 where years='".$years."' AND class_name='".$class."' AND sub_name='$subject' GROUP BY st_id");
            if( $row1=mysqli_fetch_array($sql1)){
                    $sql1=mysqli_query($con,"select * from pt1 where years='".$years."' AND class_name='".$class."' AND sub_name='$subject' GROUP BY st_id");
                    while($row1=mysqli_fetch_array($sql1)){
                ?>
               <tr> 
                    <td><?php echo $row1['st_id'];?></td>
                    <td><?php echo $row1['st_name'];?></td>
                    <td><input type="text"name="item_name[]"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['1a'];?>"/></td>
                    <td><input type="text"name="item_name1[]"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['1b'];?>"/></td>
                    <td><input type="text"name="item_name2[]"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['1c'];?>"/></td>
                    <td><input type="text"name="item_name3[]"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['1d'];?>"/></td>
                    <td><input type="text"name="item_name4[]"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['1e'];?>"/></td>
                    <td><input type="text"name="item_name5[]"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['1f'];?>"/></td>
                    <td><input type="text"name="item_nameb[]"class="form-control item_name"style="width:78px" autocomplete="off" value="<?php echo $row1['2a'];?>"/></td>
                    <td><input type="text"name="item_name1b[]"class="form-control item_name"style="width:78px"autocomplete="off" value="<?php echo $row1['2b'];?>"/></td>
                    <td><input type="text"name="item_name2b[]"class="form-control item_name"style="width:78px"autocomplete="off" value="<?php echo $row1['2c'];?>"/></td>
                    <td><input type="text"name="item_name3b[]"class="form-control item_name"style="width:78px"autocomplete="off" value="<?php echo $row1['2d'];?>"/></td>
                    <td><input type="text"name="item_nametotal[]"class="form-control item_name"style="width:78px" autocomplete="off"readonly value="<?php echo $row1['total'];?>"/></td>
                    <td style="text-align:center; vertical-align: middle;"><input type="checkbox" class="check" name="item_nameabs[]"  <?php if($row1['absent']==1){ echo "checked";} ?> ><input type="hidden" name="item_namehid[]" value="0"></td>
                </tr>
               <?php
            }}else{
                $sql=mysqli_query($con,"select * from student p,assignsubject a where p.years='".$years."' AND a.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='$subject' GROUP BY p.st_id");
            while( $row=mysqli_fetch_array($sql)){
                ?>
                <tr> 
                    <td><?php echo $row['st_id'];?></td>
                    <td><?php echo $row['st_name'];?></td>
                    <td><input type="text"name="item_name[]"class="form-control item_name"style="width:78px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name1[]"class="form-control item_name"style="width:78px" autocomplete="off" /></td>
                    <td><input type="text"name="item_name2[]"class="form-control item_name"style="width:78px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name3[]"class="form-control item_name"style="width:78px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name4[]"class="form-control item_name"style="width:78px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name5[]"class="form-control item_name"style="width:78px" autocomplete="off"/></td>
                    <td><input type="text"name="item_nameb[]"class="form-control item_name"style="width:78px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name1b[]"class="form-control item_name"style="width:78px"autocomplete="off"/></td>
                    <td><input type="text"name="item_name2b[]"class="form-control item_name"style="width:78px"autocomplete="off"/></td>
                    <td><input type="text"name="item_name3b[]"class="form-control item_name"style="width:78px"autocomplete="off"/></td>
                    <td><input type="text"name="item_nametotal[]"class="form-control item_name"style="width:78px" autocomplete="off"readonly/></td>
                    <td style="text-align:center; vertical-align: middle;"><input type="checkbox" class="check" name="item_nameabs[]" ><input type="hidden" name="item_namehid[]" value="0"></td>
                </tr>
                <?php  
                 }}?>
            </tbody>
               <tfoot>
                <tr>
                    <td colspan="2"><b>No. of students who attempted the question</b></td>
                      <?php
                        for($i=0;$i<11;$i++)
                        {
                        ?>
                        <td><input type="text"name="item_nameattempt[]"class="form-control item_name"style="width:78px" autocomplete="off" readonly/></td>
                        <?php
                        }?>
                        <td colspan="1"></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Count greater than 60%</b></td>
                      <?php
                        for($i=0;$i<11;$i++)
                        {
                        ?>
                        <td><input type="text" name="item_namegreater[]" class="form-control item_name" style="width:78px" autocomplete="off" readonly/></td>
                        <?php
                        }?>
                        <td colspan="1"></td>
                </tr>
                <tr>
                    <td colspan="2"><b>percentage of students scoring more than 60%</b></td>
                      <?php
                        for($i=0;$i<11;$i++)
                        {
                        ?>
                        <td><input type="text"name="item_namepercent[]"class="form-control item_name"style="width:78px" autocomplete="off" readonly/></td>
                        <?php
                        }?>
                        <td colspan="1"></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Course Outcomes (Co's)</b></td>
                        <?php
                    $sql=mysqli_query($con,"SELECT * FROM subject s,comap_pt1 c where s.sub_id=c.sub_id AND s.years='".$years."' AND s.dept_name='".$dept."' AND s.sub_name='".$subject."'");
                                $row=mysqli_fetch_array($sql);
                                $Aa=$row['1a'];
                                $Ab=$row['1b'];
                                $Ac=$row['1c'];
                                $Ad=$row['1d'];
                                $Ae=$row['1e'];
                                $Af=$row['1f'];
                                $Ba=$row['2a'];
                                $Bb=$row['2b'];
                                $Bc=$row['2c'];
                                $Bd=$row['2d'];        
                        ?>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $Aa;?>" style="width:78px"autocomplete="off" readonly /></td>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $Ab;?>" style="width:78px"autocomplete="off" readonly /></td>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $Ac;?>" style="width:78px"autocomplete="off" readonly /></td>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $Ad;?>" style="width:78px"autocomplete="off" readonly /></td>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $Ae;?>" style="width:78px"autocomplete="off" readonly /></td>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $Af;?>" style="width:78px"autocomplete="off" readonly /></td>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $Ba;?>" style="width:78px"autocomplete="off" readonly /></td>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $Bb;?>" style="width:78px"autocomplete="off" readonly /></td>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $Bc;?>" style="width:78px"autocomplete="off" readonly /></td>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $Bd;?>" style="width:78px"autocomplete="off" readonly /></td>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name"   style="width:78px"autocomplete="off" readonly/></td>
                        <td colspan="1"></td>
                </tr>
                <tr>
                    <td colspan="2"><b>No Of CO's to be take</b></td>
                      <?php
                        for($i=0;$i<10;$i++)
                        {
                        ?>
                        <td style="text-align:center; vertical-align: middle;height:30px;"><input type="checkbox" style="width:20px;height:40px;"class="check" name="item_nameabs1[]" ><input type="hidden" name="item_namehid1[]" value="0"></td>
                        <?php
                        }?>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Options</b></td>
                      
                        <td colspan="6"style="text-align:center; vertical-align: middle;height:30px;"><b>ANY 4</b></td>
                        <td colspan="4"style="text-align:center; vertical-align: middle;height:30px;"><b>ANY 3</b></td>
                        
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                </tr>
                
                
                <?php
                for($i=0;$i<4;$i++)
                {?>
                    <tr class="co<?php echo $i+1?>">
                        <td colspan="2"><b>Average of CO<?php echo $i+1?> is</b></td>
                        <td colspan="2"><input type="text"name="item_co[]"class="form-control item_name"style="width:160px" autocomplete="off" readonly/></td>
                        <td colspan="2"></td>
                        <td colspan="4"><b>Hence attainment level is</b></td>
                        <td colspan="2"><input type="text"name="item_attainmentco[]"class="form-control item_name"style="width:160px" autocomplete="off" readonly/></td>
                        <td colspan="2"></td>
                    </tr>
                <?php
                }?>   
                <tr>
                   <td colspan="2"><b>No. of students who appeared for exam</b></td>
                   <td colspan="2"><input type="text"name="item_appeared"class="form-control item_name"style="width:160px" autocomplete="off" readonly/></td>
                   <td colspan="2"></td>
                   <td colspan="4"><b>Out of</b></td>
                   <td colspan="2" class="green"><input type="text"name="item_outof"class="form-control item_name"style="width:160px" autocomplete="off" readonly/></td>
                   <td colspan="2"></td>
                </tr>
            </tfoot>
        </table>
        
       <input type="button"class="btn btn-primary" name="submit" value="CALCULATE"  onClick="total()"/>
       <input type="submit"class="btn btn-primary" id="submit" name="submit" value="<?php $sql1=mysqli_query($con,"select * from pt1 where years='".$years."' AND class_name='".$class."' AND sub_name='$subject' GROUP BY st_id");
            if( $row1=mysqli_fetch_array($sql1)){echo "UPDATE";}else{echo "SUBMIT";} ?>" id="submit" />
       <input type="button"class="btn btn-primary" id="print" name="print" value="PRINT" id="submit" onClick="window.print();" />
        
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        </form>
        
        <script>
            $("#cal1").hide();
            $("#submit").hide();
            $("#print").hide();
            
            function total1(){
                var aj=0;
                var co=0,co2n=0,co3n=0,co4n=0,avg1=0,avg2=0,avg3=0,avg4=0;
                var co1n=0,co1=0;
                while(aj<11)
                { 
                    $('input[name="item_nameoutcome[]"]').map(function () {
                    co=parseInt(this.value);
                    if(co==1){
                    var m=$('input[name="item_namepercent[]"]').get(aj);
                        if($('input[name="item_namehid1[]"]').get(aj).value==1){
                      avg1+=parseFloat(m.value);
                      co1n+=1;}
                    }
                    else if(co==2){
                      var m=$('input[name="item_namepercent[]"]').get(aj);
                        if($('input[name="item_namehid1[]"]').get(aj).value==1){
                      avg2+=parseFloat(m.value);
                      co2n+=1;   }
                    }
                    else if(co==3){
                      var m=$('input[name="item_namepercent[]"]').get(aj);
                        if($('input[name="item_namehid1[]"]').get(aj).value==1){
                      avg3+=parseFloat(m.value);
                      co3n+=1;    }
                    }
                    else if(co==4){
                      var m=$('input[name="item_namepercent[]"]').get(aj);
                        if($('input[name="item_namehid1[]"]').get(aj).value==1){
                      avg4+=parseFloat(m.value);
                      co4n+=1;    }
                    }
                        aj+=1;
                });
                var attainment=0;  
                if(co1n!=0){
                avg1=avg1/co1n;
                $('input[name="item_co[]"]').get(0).value=parseFloat(avg1).toFixed(2)+"%"; 
                    if(avg1>=80)
                        {
                            attainment=3;
                            $('input[name="item_attainmentco[]"]').get(0).value=parseInt(attainment); 
                        }
                    else if(avg1>=70){
                            attainment=2;
                            $('input[name="item_attainmentco[]"]').get(0).value=parseInt(attainment);
                            }
                    else if(avg1>=60){
                            attainment=1;
                            $('input[name="item_attainmentco[]"]').get(0).value=parseInt(attainment);
                            }
                    else if(avg1<60){
                            attainment=0;
                            $('input[name="item_attainmentco[]"]').get(0).value=parseInt(attainment);
                            }
                }
                if(co2n!=0){
                avg2=avg2/co2n;
                $('input[name="item_co[]"]').get(1).value=parseFloat(avg2).toFixed(2)+"%";
                    if(avg2>=80)
                        {
                            attainment=3;
                            $('input[name="item_attainmentco[]"]').get(1).value=parseInt(attainment); 
                        }
                    else if(avg2>=70){
                            attainment=2;
                            $('input[name="item_attainmentco[]"]').get(1).value=parseInt(attainment);
                            }
                    else if(avg2>=60){
                            attainment=1;
                            $('input[name="item_attainmentco[]"]').get(1).value=parseInt(attainment);
                            }
                    else if(avg2<60){
                            attainment=0;
                            $('input[name="item_attainmentco[]"]').get(1).value=parseInt(attainment);
                            }
                }
                if(co3n!=0){
                avg3=avg3/co3n;
                $('input[name="item_co[]"]').get(2).value=parseFloat(avg3).toFixed(2)+"%";
                        if(avg3>=80)
                        {
                            attainment=3;
                            $('input[name="item_attainmentco[]"]').get(2).value=parseInt(attainment); 
                        }
                    else if(avg3>=70){
                            attainment=2;
                            $('input[name="item_attainmentco[]"]').get(2).value=parseInt(attainment);
                            }
                    else if(avg3>=60){
                            attainment=1;
                            $('input[name="item_attainmentco[]"]').get(2).value=parseInt(attainment);
                            }
                    else if(avg3<60){
                            attainment=0;
                            $('input[name="item_attainmentco[]"]').get(2).value=parseInt(attainment);
                            }
                }
                if(co4n==0){
                $('input[name="item_attainmentco[]"]').get(3).value='-';
                $(".co4").hide();
                }
                else{
                $(".co4").show();  
                avg4=avg4/co4n;
                $('input[name="item_co[]"]').get(3).value=parseFloat(avg4).toFixed(2)+"%";
                        if(avg4>=80)
                        {
                            attainment=3;
                            $('input[name="item_attainmentco[]"]').get(3).value=parseInt(attainment); 
                        }
                    else if(avg4>=70){
                            attainment=2;
                            $('input[name="item_attainmentco[]"]').get(3).value=parseInt(attainment);
                            }
                    else if(avg4>=60){
                            attainment=1;
                            $('input[name="item_attainmentco[]"]').get(3).value=parseInt(attainment);
                            }
                    else if(avg4<60){
                            attainment=0;
                            $('input[name="item_attainmentco[]"]').get(3).value=parseInt(attainment);
                            }
                }            
                $("#submit").show();
                $("#print").show();
            }}
            
            function total(){
                $("#cal1").show();
                var count=0;
                var j=0;
                var k=0;
                var l=0;
                while(j<1)
                {    
                    var total=0;
                        var a=0;
                    $('input[name="item_name[]"]').map(function () {
                        count+=1;
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1;
                            a=parseInt(this.value);
                            a=(a/2)*100;
                            if(a>=60){
                                k+=1;
                            }
                        }
                    })
                    var greater = $('input[name="item_namegreater[]"]').get(j);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt[]"]').get(j);
                    greater.value = l; 
                    var m= parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent[]"]').get(j);
                        if(isNaN(parseInt(m)))
                        {
                            m= 0;
                        }
                    greater.value = m+"%";

                    l=0;
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name1[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1;
                            a=parseInt(this.value);
                            a=(a/2)*100;
                            if(a>=60){
                                k+=1;
                            }
                        }
                    })
                    var greater = $('input[name="item_namegreater[]"]').get(j);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt[]"]').get(j);
                    greater.value = l; 
                    m=parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent[]"]').get(j);
                        if(isNaN(parseInt(m)))
                        {
                            m= 0;
                        }
                    greater.value = m+"%";    

                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name2[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/2)*100;
                            if(a>=60){
                                k+=1;
                            }
                        }
                    })
                    var greater = $('input[name="item_namegreater[]"]').get(j);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt[]"]').get(j);
                    greater.value = l; 
                    m=parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent[]"]').get(j);
                        if(isNaN(parseInt(m)))
                        {
                            m= 0;
                        }
                    greater.value = m+"%";    

                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name3[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/2)*100;
                            if(a>=60){
                                k+=1;
                            }
                        }
                    })
                    var greater = $('input[name="item_namegreater[]"]').get(j);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt[]"]').get(j);
                    greater.value = l;
                    m=parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent[]"]').get(j);
                        if(isNaN(parseInt(m)))
                        {
                            m= 0;
                        }
                    greater.value = m+"%";    

                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name4[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/2)*100;
                            if(a>=60){
                                k+=1;
                            }
                        }
                    })
                    var greater = $('input[name="item_namegreater[]"]').get(j);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt[]"]').get(j);
                    greater.value = l;
                    m=parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent[]"]').get(j);
                        if(isNaN(parseInt(m)))
                        {
                            m= 0;
                        }
                    greater.value = m+"%";    

                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name5[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/2)*100;
                            if(a>=60){
                                k+=1;
                            }
                        }
                    })
                    var greater = $('input[name="item_namegreater[]"]').get(j);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt[]"]').get(j);
                    greater.value = l;  
                    m=parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent[]"]').get(j);
                        if(isNaN(parseInt(m)))
                        {
                            m= 0;
                        }
                    greater.value = m+"%";    

                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_nameb[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/4)*100;
                            if(a>=60){
                                k+=1;
                            }
                        }
                    })
                    var greater = $('input[name="item_namegreater[]"]').get(j);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt[]"]').get(j);
                    greater.value = l; 
                    m=parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent[]"]').get(j);
                        if(isNaN(parseInt(m)))
                        {
                            m= 0;
                        }
                    greater.value = m+"%";    

                    l=0;    
                    k=0;
                    j+=1;
                    total=0;
                    $('input[name="item_name1b[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/4)*100;
                            if(a>=60){
                                k+=1;
                            }
                        }
                    })
                    var greater = $('input[name="item_namegreater[]"]').get(j);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt[]"]').get(j);
                    greater.value = l; 
                    m=parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent[]"]').get(j);
                        if(isNaN(parseInt(m)))
                        {
                            m= 0;
                        }
                    greater.value = m+"%";    

                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name2b[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/4)*100;
                            if(a>=60){
                                k+=1;
                            }
                        }
                    })
                    var greater = $('input[name="item_namegreater[]"]').get(j);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt[]"]').get(j);
                    greater.value = l;  
                    m=parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent[]"]').get(j);
                        if(isNaN(parseInt(m)))
                        {
                            m= 0;
                        }
                    greater.value = m+"%";    

                    l=0;    
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name3b[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/4)*100;
                            if(a>=60){
                                k+=1;
                            }
                        }
                    })
                    var greater = $('input[name="item_namegreater[]"]').get(j);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt[]"]').get(j);
                    greater.value = l;  
                    m=parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent[]"]').get(j);
                        if(isNaN(parseInt(m)))
                        {
                            m= 0;
                        }
                    greater.value = m+"%"; 

                    $('input[name="item_nameabs[]"]').map(function(){
                    (this.value)=1;
                    })          
                    var aj1= $('input[name="item_nameabs[]"]').length;
                    $('input[name="item_outof"]').get(0).value=aj1;
                    var aj=$('input[name="item_nameabs[]"]:checked').length;
                    aj1=aj1-aj;
                    $('input[name="item_appeared"]').get(0).value=aj1;
                    var i=0,j=0;
                    $('input[name="item_nameabs[]"]').map(function(){
                        if($(this). is(":checked")){
                        $('input[name="item_namehid[]"]').get(i).value=1;
                        }
                        i+=1;
                    }) 
                    $('input[name="item_nameabs1[]"]').map(function(){
                        if($(this). is(":checked")){
                        $('input[name="item_namehid1[]"]').get(j).value=1;
                        }
                        j+=1;
                    })
                    j=0;
                    $('input[name="item_nameabs1[]"]').map(function(){
                        if($(this). is(":checked")){
                        $('input[name="item_namehid1[]"]').get(j).value=1;
                        }
                        j+=1;
                    })   
                }
                for(var i=0;i<count;i++)
                {
                    var element1 = [];
                    total=0;
                    a = (isNaN(parseInt($('input[name="item_name[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name[]"]').get(i).value);
                    element1.push(a);
                    b = (isNaN(parseInt($('input[name="item_name1[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name1[]"]').get(i).value);
                    element1.push(b);
                    c = (isNaN(parseInt($('input[name="item_name2[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name2[]"]').get(i).value);
                    element1.push(c);
                    d = (isNaN(parseInt($('input[name="item_name3[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name3[]"]').get(i).value);
                    element1.push(d);
                    e = (isNaN(parseInt($('input[name="item_name4[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name4[]"]').get(i).value);
                    element1.push(e);
                    f = (isNaN(parseInt($('input[name="item_name5[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name5[]"]').get(i).value);
                    element1.push(f);
                    
                    for(var j=0;j<count;j++){
                    element1.sort(function(a, b){
                    return parseInt(b)- parseInt(a);
                    });
                    }
                    
                    for(var j=0;j<4;j++){
                    total+=element1[j];
                    }

                    element1=[];
                    a1 = (isNaN(parseInt($('input[name="item_nameb[]"]').get(i).value)))? 0 : parseInt($('input[name="item_nameb[]"]').get(i).value);
                    element1.push(a1);
                    a2 = (isNaN(parseInt($('input[name="item_name1b[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name1b[]"]').get(i).value);
                    element1.push(a2);
                    a3 = (isNaN(parseInt($('input[name="item_name2b[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name2b[]"]').get(i).value);
                    element1.push(a3);
                    a4 = (isNaN(parseInt($('input[name="item_name3b[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name3b[]"]').get(i).value);
                    element1.push(a4);
                                        
                    for(var j=0;j<count;j++){
                    element1.sort(function(a, b){
                    return parseInt(b)- parseInt(a);
                    });
                    }
                    
                    for(var j=0;j<3;j++){
                    total+=element1[j];
                    }
                    
                    $('input[name="item_nametotal[]"]').get(i).value = total;
                }
                total1();
            }
        </script>
    </body>
</html>