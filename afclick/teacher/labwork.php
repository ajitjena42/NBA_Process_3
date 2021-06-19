<?php 
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
        $_SESSION['exampage']="Practical";
        $subject=$_SESSION['subject'];
        $class=$_SESSION['class'];
        $exampage=$_SESSION['exampage'];
        $years=$_SESSION['year'];
$sql=mysqli_query($con,"select dept_name from assignsubject where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."'");
        $row=mysqli_fetch_array($sql);
            $_SESSION['dept']=$row['dept_name'];
            $dept=$_SESSION['dept'];
$sql=mysqli_query($con,"SELECT * FROM subject s,comap_prac c where s.sub_id=c.sub_id AND s.years='".$years."' AND s.dept_name='".$dept."' AND s.sub_name='".$subject."'");
if($row=mysqli_fetch_array($sql)){
    $_SESSION['nofprac']=$row['nofprac'];
    $_SESSION['marksof']=$row['outof'];
}
else{
    echo "<script>alert('You have not set co for Practicals');</script>";
    echo '<script>setTimeout(function(){ location.href = "labwork_decide.php"; }, 1);</script>';
}
if (ISSET($_POST['submit'])) {
    $_SESSION['count']=$_POST['item_namecount'];
    $_SESSION['exampage']="Practical";

    $subject=$_SESSION['subject'];
    $class=$_SESSION['class'];
    $exampage=$_SESSION['exampage'];
    $years=$_SESSION['year'];
    $aj=0;
    
        $A1=$_POST['item_name0'];
        $aj+=1;
        $A2=$_POST['item_name1'];
        $aj+=1;
        $A3=$_POST['item_name2'];
        $aj+=1;
        $A4=$_POST['item_name3'];
        $aj+=1;
        $A5=$_POST['item_name4'];
        $aj+=1;
        $A6=$_POST['item_name5'];
        $aj+=1;
        $A7=$_POST['item_name6'];
        $aj+=1;
        $A8=$_POST['item_name7'];
        $aj+=1;
        $A9=$_POST['item_name8'];
        $aj+=1;
        $A10=$_POST['item_name9'];
        $aj+=1;
        $A11=$_POST['item_name10'];
        $aj+=1;
     if($aj<$_SESSION['nofprac']){
        $A12=$_POST['item_name11'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A13=$_POST['item_name12'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A14=$_POST['item_name13'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A15=$_POST['item_name14'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A16=$_POST['item_name15'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A17=$_POST['item_name16'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A18=$_POST['item_name17'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A19=$_POST['item_name18'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A20=$_POST['item_name19'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A21=$_POST['item_name20'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A22=$_POST['item_name21'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A23=$_POST['item_name22'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A24=$_POST['item_name23'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A25=$_POST['item_name24'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A26=$_POST['item_name25'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A27=$_POST['item_name26'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A28=$_POST['item_name27'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A29=$_POST['item_name28'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A30=$_POST['item_name29'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A31=$_POST['item_name30'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A32=$_POST['item_name31'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A33=$_POST['item_name32'];
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A34=$_POST['item_name33']; 
        $aj+=1;
     }
     if($aj<$_SESSION['nofprac']){
        $A35=$_POST['item_name34']; 
        $aj+=1;
     }
        

    
    
    $Total=$_POST['item_nametotal'];
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        $i=0;
        $aj=0;
    
    
    
    
    
    
    $sql1=mysqli_query($con,"select * from lab where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."' ");
            if( $row1=mysqli_fetch_array($sql1)){
        while($row=mysqli_fetch_array($sql))
        {   
            $year=$years;
            $cname=$row['class_name'];
            $sname1=$subject;
            $tid=$row['teacher_id'];
            $enrol=$row['enrollment'];
            $sid=$row['st_id'];
            $sname=$row['st_name'];
         
             
             $Aa0=$A1[$i];
             $aj+=1;
             $Aa1=$A2[$i];
             $aj+=1;
             $Aa2=$A3[$i];
             $aj+=1;
             $Aa3=$A4[$i];
             $aj+=1;
             $Aa4=$A5[$i];
             $aj+=1;
             $Aa5=$A6[$i];
             $aj+=1;
             $Aa6=$A7[$i];
             $aj+=1;
             $Aa7=$A8[$i];
             $aj+=1;
             $Aa8=$A9[$i];
             $aj+=1;
             $Aa9=$A10[$i];
             $aj+=1;
             $Aa10=$A11[$i];
             $aj+=1;
             if($aj<$_SESSION['nofprac']){
             $Aa11=$A12[$i];
                  $aj+=1;
             }
             else{
                $Aa11=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa12=$A13[$i];
                  $aj+=1;
             }
             else{
                $Aa12=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa13=$A14[$i];
                  $aj+=1;
             }
             else{
                $Aa13=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa14=$A15[$i];
                  $aj+=1;
             }
             else{
                $Aa14=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa15=$A16[$i];
                  $aj+=1;
             }
             else{
                $Aa15=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa16=$A17[$i];
                  $aj+=1;
             }
             else{
                $Aa16=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa17=$A18[$i];
                  $aj+=1;
             }
             else{
                $Aa17=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa18=$A19[$i];
                  $aj+=1;
             }
             else{
                $Aa18=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa19=$A20[$i];
                  $aj+=1;
             }
             else{
                $Aa19=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa20=$A21[$i];
                  $aj+=1;
             }
             else{
                $Aa20=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa21=$A22[$i];
                  $aj+=1;
             }
             else{
                $Aa21=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa22=$A23[$i];
                  $aj+=1;
             }
             else{
                $Aa22=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa23=$A24[$i];
                  $aj+=1;
             }
             else{
                $Aa23=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa24=$A25[$i];
                  $aj+=1;
             }
             else{
                $Aa24=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa25=$A26[$i];
                  $aj+=1;
             }
             else{
                $Aa25=0; 
             }
             
             if($aj<$_SESSION['nofprac']){
             $Aa26=$A27[$i];
                  $aj+=1;
             }
             else{
                $Aa26=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa27=$A28[$i];
                  $aj+=1;
             }
             else{
                $Aa27=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa28=$A29[$i];
                  $aj+=1;
             }
             else{
                $Aa28=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa29=$A30[$i];
                  $aj+=1;
             }
             else{
                $Aa29=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa30=$A31[$i];
                  $aj+=1;
             }
             else{
                $Aa30=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa31=$A32[$i];
                  $aj+=1;
             }
             else{
                $Aa31=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa32=$A33[$i];
                  $aj+=1;
             }
             else{
                $Aa32=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa33=$A34[$i];
                  $aj+=1;
             }
             else{
                $Aa33=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa34=$A35[$i];
                  $aj+=1;
             }
             else{
                $Aa34=0; 
             }
            
             $outof=$_POST['item_namemarksof'];
            $total=$Total[$i];
            $nofprac=$_SESSION['nofprac'];
            
            
           
            mysqli_query($con,"UPDATE `lab` SET `outof`='$outof',`p1`='$Aa0',`p2`='$Aa1',`p3`='$Aa2',`p4`='$Aa3',`p5`='$Aa4',`p6`='$Aa5',`p7`='$Aa6',`p8`='$Aa7',`p9`='$Aa8',`p10`='$Aa9',`p11`='$Aa10',`p12`='$Aa11',`p13`='$Aa12',`p14`='$Aa13',`p15`='$Aa14',`p16`='$Aa15',`p17`='$Aa16',`p18`='$Aa17',`p19`='$Aa18',`p20`='$Aa19',`p21`='$Aa20',`p22`='$Aa21',`p23`='$Aa22',`p24`='$Aa23',`p25`='$Aa24',`p26`='$Aa25',`p27`='$Aa26',`p28`='$Aa27',`p29`='$Aa28',`p30`='$Aa29',`p31`='$Aa30',`p32`='$Aa31',`p33`='$Aa32',`p34`='$Aa33',`p35`='$Aa34',`total`='$total',`nofprac`='$nofprac' WHERE `years`='$year' AND class_name='".$cname."' AND sub_name='".$sname1."' AND st_id='$sid'");
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
            $tid=$row1['teacher_id'];
            $co1=$co[0];
            $co2=$co[1];
            $co3=$co[2];
            $co4=$co[3];
            $co5=$co[4];
            $co6=$co[5];
            
            mysqli_query($con,"UPDATE `cos` SET `co1`='$co1',`co2`='$co2',`co3`= '$co3',`co4`= '$co4',`co5`= '$co5',`co6`= '$co6' WHERE `years`='$year' AND class_name='".$cname."' AND sub_name='".$s1name."' AND exam='Practical' ");
            $j+=1;   
        }
            }else{
                while($row=mysqli_fetch_array($sql))
        {   
            $year=$years;
            $cname=$row['class_name'];
            $sname1=$subject;
            $tid=$row['teacher_id'];
            $enrol=$row['enrollment'];
            $sid=$row['st_id'];
            $sname=$row['st_name'];
         
             
             $Aa0=$A1[$i];
             $aj+=1;
             $Aa1=$A2[$i];
             $aj+=1;
             $Aa2=$A3[$i];
             $aj+=1;
             $Aa3=$A4[$i];
             $aj+=1;
             $Aa4=$A5[$i];
             $aj+=1;
             $Aa5=$A6[$i];
             $aj+=1;
             $Aa6=$A7[$i];
             $aj+=1;
             $Aa7=$A8[$i];
             $aj+=1;
             $Aa8=$A9[$i];
             $aj+=1;
             $Aa9=$A10[$i];
             $aj+=1;
             $Aa10=$A11[$i];
             $aj+=1;
             if($aj<$_SESSION['nofprac']){
             $Aa11=$A12[$i];
                  $aj+=1;
             }
             else{
                $Aa11=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa12=$A13[$i];
                  $aj+=1;
             }
             else{
                $Aa12=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa13=$A14[$i];
                  $aj+=1;
             }
             else{
                $Aa13=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa14=$A15[$i];
                  $aj+=1;
             }
             else{
                $Aa14=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa15=$A16[$i];
                  $aj+=1;
             }
             else{
                $Aa15=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa16=$A17[$i];
                  $aj+=1;
             }
             else{
                $Aa16=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa17=$A18[$i];
                  $aj+=1;
             }
             else{
                $Aa17=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa18=$A19[$i];
                  $aj+=1;
             }
             else{
                $Aa18=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa19=$A20[$i];
                  $aj+=1;
             }
             else{
                $Aa19=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa20=$A21[$i];
                  $aj+=1;
             }
             else{
                $Aa20=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa21=$A22[$i];
                  $aj+=1;
             }
             else{
                $Aa21=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa22=$A23[$i];
                  $aj+=1;
             }
             else{
                $Aa22=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa23=$A24[$i];
                  $aj+=1;
             }
             else{
                $Aa23=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa24=$A25[$i];
                  $aj+=1;
             }
             else{
                $Aa24=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa25=$A26[$i];
                  $aj+=1;
             }
             else{
                $Aa25=0; 
             }
             
             if($aj<$_SESSION['nofprac']){
             $Aa26=$A27[$i];
                  $aj+=1;
             }
             else{
                $Aa26=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa27=$A28[$i];
                  $aj+=1;
             }
             else{
                $Aa27=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa28=$A29[$i];
                  $aj+=1;
             }
             else{
                $Aa28=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa29=$A30[$i];
                  $aj+=1;
             }
             else{
                $Aa29=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa30=$A31[$i];
                  $aj+=1;
             }
             else{
                $Aa30=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa31=$A32[$i];
                  $aj+=1;
             }
             else{
                $Aa31=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa32=$A33[$i];
                  $aj+=1;
             }
             else{
                $Aa32=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa33=$A34[$i];
                  $aj+=1;
             }
             else{
                $Aa33=0; 
             }
             if($aj<$_SESSION['nofprac']){
             $Aa34=$A35[$i];
                  $aj+=1;
             }
             else{
                $Aa34=0; 
             }
            
             $outof=$_POST['item_namemarksof'];
            $total=$Total[$i];
            $nofprac=$_SESSION['nofprac'];
            
            mysqli_query($con,"INSERT INTO `lab` (`lab_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `enrollment`, `st_id`, `st_name`, `outof`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`,`p35`, `total`,`nofprac`) VALUES (NULL, '$year', '$cname','$sname1', '$tid', '$enrol', '$sid','$sname','$outof','$Aa0','$Aa1','$Aa2','$Aa3','$Aa4','$Aa5','$Aa6','$Aa7','$Aa8','$Aa9','$Aa10','$Aa11','$Aa12','$Aa13','$Aa14','$Aa15','$Aa16','$Aa17','$Aa18','$Aa19','$Aa20','$Aa21','$Aa22','$Aa23','$Aa24','$Aa25','$Aa26','$Aa27','$Aa28','$Aa29','$Aa30','$Aa31','$Aa32','$Aa33','$Aa34','$total','$nofprac')");
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
            $tid=$row1['teacher_id'];
            $co1=$co[0];
            $co2=$co[1];
            $co3=$co[2];
            $co4=$co[3];
            $co5=$co[4];
            $co6=$co[5];
            
            mysqli_query($con,"INSERT INTO `cos` (`cos_id`, `years`, `dept_name`, `sem`, `class_name`, `exam`,`sub_name`, `teacher_id`, `co1`, `co2`, `co3`, `co4`, `co5`, `co6`) VALUES (NULL, '$year', '$dname', '$sem', '$cname','$exampage', '$sname', '$tid', '$co1', '$co2', '$co3', '$co4', '$co5', '$co6')");
            
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
            
        $_SESSION['exampage']="Practical";
        $class=$_SESSION['class'];
        $subject=$_SESSION['subject'];
        $exampage=$_SESSION['exampage'];
        $years=$_SESSION['year'];
        $nofprac=$_SESSION['nofprac'];
        $marksof=$_SESSION['marksof'];
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
        $row=mysqli_fetch_array($sql) 
        ?>
          <thead>
             <tr>
               <td colspan="1" style="width:150px; height:130px;"><img src="../../images/vp1.png" alt="VP" style="width:150px; height:100px;"></td>
               <th colspan="<?php echo $nofprac+3;?>" style="text-align:center;font-size:30px;">VIDYALANKAR POLYTECHNIC</th>
              </tr>
              <tr>
               <th colspan="1"style="text-align:center;"><?php echo $row['sem'];?> Sem</th>
               <th colspan="5"style="text-align:center;"><?php echo $row['dept_name'];?>(<?php echo $row['class_name'];?>)</th>
               <th colspan="3"style="text-align:center;"><?php echo $row['years'];?></th>
               <th colspan="<?php echo $nofprac-5;?>"style="text-align:center;">Practicals</th>
              </tr>
               <tr>
                <th colspan="1" scope="colgroup"style="width:100px;text-align:center;"rowspan="2">Enrollment</th>
                <th colspan="1" scope="colgroup"style="width:100px;text-align:center;"rowspan="2">Roll ID</th>
                <th colspan="1" scope="colgroup"style="width:150px;text-align:center;"rowspan="2">Student Name</th>
                <th colspan="10" scope="colgroup" style="text-align:center;"><?php echo $subject;?></th>
                <th colspan="<?php echo $nofprac-9;?>" scope="colgroup"></th>
               </tr>
               <tr>
               <?php for($i=1;$i<=$nofprac;$i++)
                {
               ?>
                <th scope="col">P<?php echo $i;?></th>
                <?php
                }
                ?>
                <th scope="col">Total</th>
               </tr>
            </thead>
            <tbody>
            <?php
                $count=0;
                $sql=mysqli_query($con,"select * from lab where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."' GROUP BY st_id ");
                if($row=mysqli_fetch_array($sql)){
                    $sql=mysqli_query($con,"select * from lab where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."' GROUP BY st_id ");
                while($row=mysqli_fetch_array($sql)){
                ?>
            <tr>
                    <td style="width:100px"><?php echo $row['enrollment'];?></td>
                    <td style="width:100px"><?php echo $row['st_id'];?></td>
                    <td><?php echo $row['st_name'];?></td> 
                    
                    <?php 
                    $count+=1;
                    $j=0;
                    for($i=0;$i<$nofprac;$i++)
                       {
                        $j+=1;
                    ?>
                    <td><input type="text"name="item_name<?php echo $i;?>[]"class="form-control item_name"style="width:75px" value="<?php echo $row['p'.$j.''];?>" autocomplete="off" /></td>   
                    <?php
                    }
                    ?>
                    <td><input type="text"name="item_nametotal[]"class="form-control item_name"style="width:75px" autocomplete="off"readonly/></td>  
                </tr>
            <?php
                }}else{
            $count=0;$i=0;
            $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name='".$class."' AND a.class_name='".$class."' AND a.sub_name='".$subject."' GROUP BY p.st_id");
            while( $row=mysqli_fetch_array($sql))
            {
            ?>
                <tr>
                    <td style="width:100px"><?php echo $row['enrollment'];?></td>
                    <td style="width:100px"><?php echo $row['st_id'];?></td>
                    <td ><?php echo $row['st_name'];?></td> 
                    
                    <?php 
                    $count+=1;
                    for($i=0;$i<$nofprac;$i++)
                       {
                    ?>
                    <td><input type="text"name="item_name<?php echo $i;?>[]"class="form-control item_name"style="width:75px" autocomplete="off" /></td>   
                    <?php
                    }
                    ?>
                    <td><input type="text"name="item_nametotal[]"class="form-control item_name"style="width:75px" autocomplete="off"readonly/></td>  
                </tr>
            <?php  
            }}?>
                 <input type="hidden"name="item_namecount"class="form-control item_name"style="width:75px" autocomplete="off"readonly value="<?php echo $count; ?>"/>
                 
                 <input type="hidden"name="item_namenofpractical"class="form-control item_name"style="width:75px" autocomplete="off"readonly value="<?php echo $nofprac; ?>"/>
                 <input type="hidden"name="item_namemarksof"class="form-control item_name"style="width:75px" autocomplete="off"readonly value="<?php echo $marksof; ?>"/>
            </tbody>
               <tfoot>
                <tr>
                    <td colspan="3"><b>No. of students who attempted the question</b></td>
                      <?php
                        for($i=0;$i<$nofprac;$i++)
                        {
                        ?>
                        <td><input type="text"name="item_nameattempt[]"class="form-control item_name"style="width:75px" autocomplete="off" readonly/></td>
                        <?php
                        }?>
                        <td colspan="1"></td>
                </tr>
                <tr>
                    <td colspan="3"><b>Count greater than 60%</b></td>
                      <?php
                        for($i=0;$i<$nofprac;$i++)
                        {
                        ?>
                        <td><input type="text" name="item_namegreater[]" class="form-control item_name" style="width:75px" autocomplete="off" readonly/></td>
                        <?php
                        }?>
                        <td colspan="1"></td>
                </tr>
                <tr>
                    <td colspan="3"><b>percentage of students scoring more than 60%</b></td>
                      <?php
                        for($i=0;$i<$nofprac;$i++)
                        {
                        ?>
                        <td><input type="text"name="item_namepercent[]"class="form-control item_name"style="width:75px" autocomplete="off" readonly/></td>
                        <?php
                        }?>
                        <td colspan="1"></td>
                </tr>
                <tr>
                        <td colspan="3"><b>Course Outcomes (Co's)</b></td>
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM subject s,comap_prac c where s.sub_id=c.sub_id AND s.years='".$years."' AND s.dept_name='".$dept."' AND s.sub_name='".$subject."'");
                        if($row=mysqli_fetch_array($sql)){
                        for($i=1;$i<=$nofprac;$i++)
                        {
                        ?>
                        <td><input type="number"name="item_nameoutcome[]"class="form-control item_name" value="<?php echo $row['p'.$i.'']; ?>" style="width:75px"autocomplete="off" readonly /></td>   
                        <?php
                        }
                        }
                        ?>            
                        <td colspan="1"></td>
                </tr>
                
                <?php
                for($i=0;$i<6;$i++)
                {?>
                    <tr class="co<?php echo $i+1?>">
                        <td colspan="3"><b>Average of CO<?php echo $i+1?> is</b></td>
                        <td colspan="2"><input type="text"name="item_co[]"class="form-control item_name"style="width:152px" autocomplete="off" readonly/></td>
                        <td colspan="2"></td>
                        <td colspan="4"><b>Hence attainment level is</b></td>
                        <td colspan="2"><input type="text"name="item_attainmentco[]"class="form-control item_name"style="width:152px" autocomplete="off" readonly/></td>
                        <td colspan="<?php echo $nofprac-9;?>"></td>
                    </tr>
                <?php
                }?>  
                 
                <tr>
                   <td colspan="3"><b>No. of students who appeared for exam</b></td>
                   <td colspan="2"><input type="text"name="item_appeared"class="form-control item_name"style="width:152px" autocomplete="off" readonly/></td>
                   <td colspan="2"></td>
                   <td colspan="4"><b>Out of</b></td>
                   <td colspan="2" class="green"><input type="text"name="item_outof"class="form-control item_name"style="width:152px" autocomplete="off" readonly/></td>
                   <td colspan="<?php echo $nofprac-9;?>"></td>
                </tr>
            </tfoot>
        </table>
       <input type="button" class="btn btn-primary"name="submit" value="CALCULATE" id="btnSubmit" onClick="total()"/>
       <input type="button"class="btn btn-primary"id="cal1" name="submit1" value="CALCULATE ATTAINMENT"  onClick="total1()"/>
       <input type="submit"class="btn btn-primary" id="submit" name="submit" value="<?php $sql1=mysqli_query($con,"select * from lab where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."' GROUP BY st_id ");
            if( $row1=mysqli_fetch_array($sql1)){echo "UPDATE";}else{echo "SUBMIT";} ?>" id="submit" />
       <input type="button" class="btn btn-primary"id="print" name="print" value="PRINT" id="submit" onclick="window.print();"/>
        
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        </form>
        <script>
            $("#cal1").hide();
            $("#submit").hide();
            $("#print").hide();
            function total(){
                $("#cal1").show();
                
                var counts=($('input[name="item_namecount"]').get(0).value);
                var nofprac=($('input[name="item_namenofpractical"]').get(0).value);
                var marksof=($('input[name="item_namemarksof"]').get(0).value);
                
                for(var i=0;i<counts;i++)
                {   var a=0;
                    var j=0;
                    var total=0;
                    a = (isNaN(parseInt($('input[name="item_name0[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name0[]"]').get(i).value);
                    total+=a;j+=1;
                    a = (isNaN(parseInt($('input[name="item_name1[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name1[]"]').get(i).value);
                    total+=a;j+=1;
                    a = (isNaN(parseInt($('input[name="item_name2[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name2[]"]').get(i).value);
                    total+=a;j+=1;
                    a = (isNaN(parseInt($('input[name="item_name3[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name3[]"]').get(i).value);
                    total+=a;j+=1;
                    a = (isNaN(parseInt($('input[name="item_name4[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name4[]"]').get(i).value);
                    total+=a;j+=1;
                    a = (isNaN(parseInt($('input[name="item_name5[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name5[]"]').get(i).value);
                    total+=a;j+=1;
                    a = (isNaN(parseInt($('input[name="item_name6[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name6[]"]').get(i).value);
                    total+=a;j+=1;
                    a = (isNaN(parseInt($('input[name="item_name7[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name7[]"]').get(i).value);
                    total+=a;j+=1;
                    a = (isNaN(parseInt($('input[name="item_name8[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name8[]"]').get(i).value);
                    total+=a;j+=1;
                    a = (isNaN(parseInt($('input[name="item_name9[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name9[]"]').get(i).value);
                    total+=a;j+=1;
                    a = (isNaN(parseInt($('input[name="item_name10[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name10[]"]').get(i).value);
                    total+=a;j+=1;
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name11[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name11[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name12[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name12[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name13[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name13[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name14[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name14[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name15[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name15[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name16[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name16[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name17[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name17[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name18[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name18[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name19[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name19[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name20[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name20[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name21[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name21[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name22[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name22[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name23[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name23[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name24[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name24[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name25[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name25[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name26[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name26[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name27[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name27[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name28[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name28[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name29[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name29[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name30[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name30[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name31[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name31[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name32[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name32[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name33[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name33[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name34[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name34[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                     if(j<nofprac){
                        a = (isNaN(parseInt($('input[name="item_name35[]"]').get(i).value)))? 0 : parseInt($('input[name="item_name35[]"]').get(i).value);
                        total+=a;j+=1;
                        }
                 total=total/nofprac;
                    $('input[name="item_nametotal[]"]').get(i).value = parseInt(total);
                }
                $('input[name="item_appeared"]').get(0).value=counts;
                $('input[name="item_outof"]').get(0).value=counts;

                var aj=marksof;
                var count=0;
                var j=0;
                var k=0;
                var l=0;
                while(j<1)
                {    
                    var total=0;
                        var a=0;
                    $('input[name="item_name0[]"]').map(function () {
                        count+=1;
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1;
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                            a=(a/aj)*100;
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
                            a=(a/aj)*100;
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
                            a=(a/aj)*100;
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
                            a=(a/aj)*100;
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
                            a=(a/aj)*100;
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
                    $('input[name="item_name6[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    $('input[name="item_name7[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    $('input[name="item_name8[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    $('input[name="item_name9[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    $('input[name="item_name10[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name11[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name12[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name11[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name12[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name13[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name14[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name15[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name16[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name17[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name18[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name19[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name20[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name21[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name22[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name23[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name24[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name25[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name26[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name27[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name28[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name29[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name30[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name31[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name32[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name33[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name34[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }
                    if(j<nofprac){ 
                    l=0;    
                    k=0;    
                    j+=1;
                    total=0;
                    $('input[name="item_name35[]"]').map(function () {
                        if(!isNaN(parseInt(this.value)))
                        {   l+=1; 
                            a=parseInt(this.value);
                            a=(a/aj)*100;
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
                    }  
                }  
            }
            
            
            
            
            
            
            function total1(){
                var counts=($('input[name="item_namecount"]').get(0).value);
                var nofprac=($('input[name="item_namenofpractical"]').get(0).value);
                var marksof=($('input[name="item_namemarksof"]').get(0).value);
                var aj=0,co=0,co2n=0,co3n=0,co4n=0,co5n=0,co6n=0,avg1=0,avg2=0,avg3=0,avg4=0,avg5=0,avg6=0,co1n=0,co1=0;
       
                while(aj<nofprac)
                { 
                    $('input[name="item_nameoutcome[]"]').map(function () {
                    co=parseInt(this.value);
                    if(co==1){
                    var m=$('input[name="item_namepercent[]"]').get(aj);
                      avg1+=parseFloat(m.value);
                      co1n+=1;
                    }
                    else if(co==2){
                      var m=$('input[name="item_namepercent[]"]').get(aj);
                      avg2+=parseFloat(m.value);
                      co2n+=1;   
                    }
                    else if(co==3){
                      var m=$('input[name="item_namepercent[]"]').get(aj);
                      avg3+=parseFloat(m.value);
                      co3n+=1;    
                    }
                    else if(co==4){
                      var m=$('input[name="item_namepercent[]"]').get(aj);
                      avg4+=parseFloat(m.value);
                      co4n+=1;    
                    }
                    else if(co==5){
                      var m=$('input[name="item_namepercent[]"]').get(aj);
                      avg5+=parseFloat(m.value);
                      co5n+=1;    
                    }
                    else if(co==6){
                      var m=$('input[name="item_namepercent[]"]').get(aj);
                      avg6+=parseFloat(m.value);
                      co6n+=1;    
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
                if(co4n!=0){  
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
                if(co5n!=0){
                avg5=avg5/co5n;
                $('input[name="item_co[]"]').get(4).value=parseFloat(avg5).toFixed(2)+"%";
                        if(avg5>=80)
                        {
                            attainment=3;
                            $('input[name="item_attainmentco[]"]').get(4).value=parseInt(attainment); 
                        }
                    else if(avg5>=70){
                            attainment=2;
                            $('input[name="item_attainmentco[]"]').get(4).value=parseInt(attainment);
                            }
                    else if(avg5>=60){
                            attainment=1;
                            $('input[name="item_attainmentco[]"]').get(4).value=parseInt(attainment);
                            }
                    else if(avg5<60){
                            attainment=0;
                            $('input[name="item_attainmentco[]"]').get(4).value=parseInt(attainment);
                            }
                }
                if(co6n!=0){
                avg6=avg6/co6n;
                $('input[name="item_co[]"]').get(5).value=parseFloat(avg6).toFixed(2)+"%";
                        if(avg6>=80)
                        {
                            attainment=3;
                            $('input[name="item_attainmentco[]"]').get(5).value=parseInt(attainment); 
                        }
                    else if(avg6>=70){
                            attainment=2;
                            $('input[name="item_attainmentco[]"]').get(5).value=parseInt(attainment);
                            }
                    else if(avg6>=60){
                            attainment=1;
                            $('input[name="item_attainmentco[]"]').get(5).value=parseInt(attainment);
                            }
                    else if(avg6<60){
                            attainment=0;
                            $('input[name="item_attainmentco[]"]').get(5).value=parseInt(attainment);
                            }
                }
                $("#submit").show();
                $("#print").show();
            }}
            
            
        </script>
    </body>
</html>