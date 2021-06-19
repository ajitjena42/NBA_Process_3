<?php 
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if (ISSET($_POST['submit'])) {
        $_SESSION['exampage']="ESE";
        $class=$_SESSION['class'];
        $subject=$_SESSION['subject'];
        $exampage=$_SESSION['exampage'];
        $years=$_SESSION['year'];
    
        $A=$_POST['item_name'];
        $B=$_POST['item_namep'];
    
    
    $sql1=mysqli_query($con,"select * from ese where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."' GROUP BY st_id ");
                if($row1=mysqli_fetch_array($sql1)){
    
    
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        $i=0;
        while($row=mysqli_fetch_array($sql))
        {   $year=$years;
            $cname=$row['class_name'];
            $sname1=$subject;
            $tid=$row['teacher_id'];
            $enrol=$row['enrollment'];
            $sid=$row['st_id'];
            $sname=$row['st_name'];
            $theory=$A[$i];
         if($theory==null){
             $theory="-";
         }
            $practical=$B[$i];
         if($practical==null){
             $practical="-";
         }
            
    mysqli_query($con,"UPDATE `ese` SET `esetheory`='$theory',`esepractical`='$practical' WHERE `years`='$year' AND class_name='".$cname."' AND sub_name='".$sname1."' AND st_id='".$sid."' ");
            $i+=1;   
        }
        $j=0;
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        while($j<1){
        $row1=mysqli_fetch_array($sql);
            $year=$years;
            $dname=$row1['dept_name'];
            $sem=$row1['sem'];
            $cname=$row1['class_name'];
            $sname=$subject;
            $tid=$row1['teacher_id'];
            $co=$_POST['item_attainmentaverage'];
            
             mysqli_query($con,"UPDATE `cos` SET `co1`='$co',`co2`='$co',`co3`= '$co',`co4`= '$co',`co5`= '$co',`co6`= '$co' WHERE `years`='$year' AND class_name='".$cname."' AND sub_name='".$sname."' AND exam='ESE' ");

            $j+=1;   
        }}
    else{
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        $i=0;
        while($row=mysqli_fetch_array($sql))
        {   $year=$years;
            $cname=$row['class_name'];
            $sname1=$subject;
            $tid=$row['teacher_id'];
            $enrol=$row['enrollment'];
            $sid=$row['st_id'];
            $sname=$row['st_name'];
            $theory=$A[$i];
            $practical=$B[$i];
         if($theory==null){
             $theory="-";
         }
         if($practical==null){
             $practical="-";
         }
            
    
            mysqli_query($con,"INSERT INTO `ese` (`ese_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `enrollment`, `st_id`, `st_name`, `esetheory`, `esepractical`) VALUES (NULL, '$year', '$cname', '$sname1', '$tid', '$enrol', '$sid', '$sname', '$theory', '$practical')");
            $i+=1;   
        }
        $j=0;
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        while($j<1){
        $row1=mysqli_fetch_array($sql);
            $year=$years;
            $dname=$row1['dept_name'];
            $sem=$row1['sem'];
            $cname=$row1['class_name'];
            $sname=$subject;
            $tid=$row1['teacher_id'];
            $co=$_POST['item_attainmentaverage'];
            
            
            mysqli_query($con,"INSERT INTO `cos` (`cos_id`, `years`, `dept_name`, `sem`, `class_name`, `exam`,`sub_name`, `teacher_id`, `co1`, `co2`, `co3`, `co4`, `co5`, `co6`) VALUES (NULL, '$year', '$dname', '$sem', '$cname','$exampage', '$sname', '$tid', '$co', '$co', '$co', '$co', '$co', '$co')");
            $j+=1;   
        }
    }
    echo '<script>setTimeout(function(){ location.href = "select.php"; }, 1);</script>';
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
    <body style="background-color:#42E93E;"><br>
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
            $_SESSION['exampage']="ESE";
            $class=$_SESSION['class'];
            $subject=$_SESSION['subject'];
            $exampage=$_SESSION['exampage'];
            $years=$_SESSION['year'];
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        
        $row=mysqli_fetch_array($sql) 
        ?>
          <thead>
              <tr>
               <td colspan="1" style="width:150px; height:130px;"><img src="../../images/vp1.png" alt="VP" style="width:150px; height:100px;"></td>
               <th colspan="4" style="text-align:center;font-size:30px;">VIDYALANKAR POLYTECHNIC</th>
              </tr>
              <tr>
               <th colspan="1"style="text-align:center;"><?php echo $row['sem'];?> Sem</th>
               <th colspan="2"style="text-align:center;"><?php echo $row['dept_name'];?>(<?php echo $row['class_name'];?>)</th>
               <th colspan="2"style="text-align:center;"><?php echo $years;?></th>
              </tr>
               <tr>
                <th colspan="1" scope="colgroup"style="text-align:center;"rowspan="2">Enrollment No.</th>
                <th colspan="1" scope="colgroup"style="text-align:center;"rowspan="2">Roll ID</th>
                <th colspan="1" scope="colgroup"style="text-align:center;"rowspan="2">Student Name</th>
                <th colspan="2" scope="colgroup" style="text-align:center;"><?php echo $subject;?></th>
               </tr>
               <tr>
                <th scope="col">TH-ESE(out of 70)</th>
                <th scope="col">PR-ESE(OUT OF 25)</th>
               </tr>
            </thead>
            <tbody>
            <?php
                $sql=mysqli_query($con,"select * from ese where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."' GROUP BY st_id ");
                if($row=mysqli_fetch_array($sql)){
                    
                    $sql=mysqli_query($con,"select * from ese where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."' GROUP BY st_id ");
                while($row=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td style="width:140px"><?php echo $row['enrollment'];?></td>
                    <td style="width:140px"><?php echo $row['st_id'];?></td>
                    <td style="width:250px"><?php echo $row['st_name'];?></td>
                    <td><input type="text" name="item_name[]"class="form-control item_name"style="width:175px" value="<?php echo $row['esetheory'];?>" autocomplete="off"/></td>
                    <td><input type="text" name="item_namep[]"class="form-control item_name"style="width:175px" value="<?php echo $row['esepractical'];?>" autocomplete="off"/></td>
                </tr>
            
            
            
            <?php
                }}else{
            $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
            while( $row=mysqli_fetch_array($sql)){?>
                <tr>
                    <td style="width:140px"><?php echo $row['enrollment'];?></td>
                    <td style="width:140px"><?php echo $row['st_id'];?></td>
                    <td style="width:250px"><?php echo $row['st_name'];?></td>
                    <td><input type="text" name="item_name[]"class="form-control item_name"style="width:175px" autocomplete="off"/></td>
                    <td><input type="text" name="item_namep[]"class="form-control item_name"style="width:175px" autocomplete="off"/></td>
                </tr>
                <?php  
                 }}?>
           </tbody>
           <tfoot>
            <tr>
                <td colspan="3"><b>No. of students who appeared for Exam</b></td>
                <td><input type="text" name="item_nameattempt" class="form-control item_name"style="width:175px" autocomplete="off" readonly/></td>
                <td><input type="text" name="item_nameattemptp" class="form-control item_name"style="width:175px" autocomplete="off" readonly/></td>
            </tr>
            <tr>
                <td colspan="3"><b>Count greater than 60%</b></td>
                <td><input type="text" name="item_namegreater" class="form-control item_name" style="width:175px" autocomplete="off" readonly/></td>
                <td><input type="text" name="item_namegreaterp" class="form-control item_name" style="width:175px" autocomplete="off" readonly/></td>
            </tr>
            <tr>
                <td colspan="3"><b>Percentage of students scoring more than 60%</b></td>
                <td><input type="text" name="item_namepercent" class="form-control item_name"style="width:175px" autocomplete="off" readonly/></td>
                <td><input type="text" name="item_namepercentp" class="form-control item_name"style="width:175px" autocomplete="off" readonly/></td>
            </tr>
            <tr>
                <td colspan="3"><b>Attainment</b></td>
                <td colspan="1"><input type="text"name="item_attainmentco"class="form-control item_name"style="width:175px" autocomplete="off" readonly/></td>
                <td colspan="1"><input type="text"name="item_attainmentcop"class="form-control item_name"style="width:175px" autocomplete="off" readonly/></td>
            </tr>
            <tr>
                <td colspan="3"><b>Average of Attainments</b></td>
                <td colspan="2"><input type="text"name="item_attainmentaverage"class="form-control item_name"style="width:352px" autocomplete="off" readonly/></td>
            </tr>
            <tr>
               <td colspan="3"><b>No. of students in Class </b></td>
               <td colspan="2"><input type="text" name="item_appeared" class="form-control item_name"style="width:352px" autocomplete="off" readonly/></td>
            </tr>
           </tfoot>
        </table>
        
       <input type="button" class="btn btn-primary"name="calculate" value="CALCULATE"  onClick="total()"/>
       <input type="submit" class="btn btn-primary"id="submit" name="submit" value="<?php $sql1=mysqli_query($con,"select * from ese where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."' GROUP BY st_id ");
            if( $row1=mysqli_fetch_array($sql1)){echo "UPDATE";}else{echo "SUBMIT";} ?>" id="submit" />
       <input type="button" class="btn btn-primary"id="print" name="print" value="PRINT" id="submit" onclick="window.print();"/>
        
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        </form>
        
        <script>
            $("#submit").hide();
            $("#print").hide();
            
            function total(){
                $("#submit").show();
                $("#print").show();
                var count=0,j=0,k=0,l=0,a=0,z=0;
                    $('input[name="item_name[]"]').map(function () {
                        count+=1;
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1;
                            a=parseInt(this.value);
                            a=(a/70)*100;
                            if(a>=60){   k+=1;    }
                        }
                    })
                    var greater = $('input[name="item_namegreater"]').get(0);
                    greater.value = k;
                    greater = $('input[name="item_nameattempt"]').get(0);
                    greater.value = l; 
                    var m= parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercent"]').get(0);
                        if(isNaN(parseInt(m)))   {    m= 0;    }
                    greater.value = m+"%";
                    if(m>=80){   $('input[name="item_attainmentco"]').get(0).value=3; z=3;  }
                    else if(m>=70){   $('input[name="item_attainmentco"]').get(0).value=2; z=2;  }
                    else if(m>=60){   $('input[name="item_attainmentco"]').get(0).value=1; z=1;  }
                    else if(m<60){    $('input[name="item_attainmentco"]').get(0).value=0; z=0;  }
                    $('input[name="item_appeared"]').get(0).value=count;
                
                    var count=0,j=0,k=0,l=0,a=0,y=0;
                    $('input[name="item_namep[]"]').map(function () {
                        count+=1;
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1;
                            a=parseInt(this.value);
                            a=(a/25)*100;
                            if(a>=60){   k+=1;    }
                        }
                    })
                    var greater = $('input[name="item_namegreaterp"]').get(0);
                    greater.value = k;
                    greater = $('input[name="item_nameattemptp"]').get(0);
                    greater.value = l; 
                    var m= parseFloat((k/l)*100).toFixed(2);
                    greater = $('input[name="item_namepercentp"]').get(0);
                        if(isNaN(parseInt(m)))   {    m= 0;    }
                    greater.value = m+"%";
                    if(m>=80){   $('input[name="item_attainmentcop"]').get(0).value=3; y=3; }
                    else if(m>=70){   $('input[name="item_attainmentcop"]').get(0).value=2; y=2;  }
                    else if(m>=60){   $('input[name="item_attainmentcop"]').get(0).value=1; y=1;  }
                    else if(m<60){    $('input[name="item_attainmentcop"]').get(0).value=0; y=0;  }
                
                $('input[name="item_attainmentaverage"]').get(0).value=(z+y)/2;
                
                
            }
        </script>
    </body>
</html>