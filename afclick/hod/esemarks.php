<?php 
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

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
                    <a class="btn btn-primary" href="view-teacher-status.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
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
                    <td><input type="text" name="item_name[]"class="form-control item_name"style="width:175px" value="<?php echo $row['esetheory'];?>" autocomplete="off" readonly/></td>
                    <td><input type="text" name="item_namep[]"class="form-control item_name"style="width:175px" value="<?php echo $row['esepractical'];?>" autocomplete="off"readonly/></td>
                </tr>
            <?php
                }}else{
            }?>
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
               <?php
                $sql1=mysqli_query($con,"select * from cos where years='".$years."' AND class_name='".$class."' AND sub_name='$subject' AND exam='ESE' "); 
            if($row1=mysqli_fetch_array($sql1)){
                ?>
                <td colspan="3"><b>Average of Attainments</b></td>
                <td colspan="2"><input type="text"name="item_attainmentaverage" value="<?php echo $row1['co1']; ?>"class="form-control item_name"style="width:352px" autocomplete="off" readonly/></td>
                <?php
                }?>
            </tr>
            <tr>
               <td colspan="3"><b>No. of students in Class </b></td>
               <td colspan="2"><input type="text" name="item_appeared" class="form-control item_name"style="width:352px" autocomplete="off" readonly/></td>
            </tr>
           </tfoot>
        </table>
        
       
       <input type="button"class="btn btn-primary" id="print" name="print" value="PRINT" id="submit" onclick="window.print();"/>
        
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        </form>
        
        <script>
           
            
            $(window).on('load', function() {   
                
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
                    
                
               
                
                
            })
        </script>
    </body>
</html>