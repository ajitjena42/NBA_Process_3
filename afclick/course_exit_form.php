<?php 
session_start();
include('include/config.php');
include('include/checklogin.php');
if (ISSET($_POST['submit'])) {
//        $_SESSION['subject']="MAD";
    
        $subject=$_SESSION['subject'];
        $rollid=$_SESSION['login'];
        $A=$_POST['item_average'];
         $_SESSION['average']=$A;
        $B=$_POST['item_suggest'];
        $_SESSION['item_suggest']=$B;
        if (!empty($B)){
        }
        else{
            $B="-";
        }
    $sql=mysqli_query($con,"SELECT * FROM `student` st ,subject su,assignsubject a where st.st_id='$rollid' AND su.sub_name='$subject' AND a.years=st.years AND st.class_name=a.class_name GROUP BY a.years");
    
    $row=mysqli_fetch_array($sql);
    
    $year=$row['years'];
    $_SESSION['co_years']=$year;
    $dname=$row['dept_name'];
    $_SESSION['dept_name']=$dname;
    $sem=$row['sem'];
    $_SESSION['seme']=$sem;
    $subcode=$row['sub_code'];
    $_SESSION['sub_code']=$subcode;
    
    header("Location:signature.php"); 
}
?>
  <html>
   <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   </head>
    <body style="background-color:#42E93E;" ><br>
       <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary" href="student-course-exit.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
                </div>
            </div>
        </div><br>
        <form align="center" method="post">
        <?php
            
            
//            $_SESSION['subject']="MAD";
            
            
            $subject=$_SESSION['subject'];
            $rollid=$_SESSION['login'];
        $sql=mysqli_query($con,"SELECT * FROM `student` st ,subject su,assignsubject a where st.st_id='$rollid' AND su.sub_name='$subject' AND a.years=st.years AND st.class_name=a.class_name GROUP BY a.years");
        
        $row=mysqli_fetch_array($sql) 
        ?>
        <table border="5" align="center" style="background-color:white;"><td>
        <table border="5" align="center" style="background-color:white;padding: 50px;">
            <thead>
                <tr>
                    <td style="width:150px; height:130px;"><img src="../images/vp1.png" alt="VP" style="width:150px; height:100px;"></td>
                    <td colspan="4" style="width:500px; text-align:center;font-size:18px;text-transform:uppercase;"><b>DEPARTMENT OF<br><?php echo $row['dept_name']; ?> <br><br>COURSE EXIT FORM</b></td>
                </tr>
            
                <tr>
                    <th colspan="2" style="width:500px; text-align:center;font-size:20px;">Student Name:</th>
                    <td colspan="3" style="width:500px; text-align:center;font-size:20px;"><?php echo $row['st_name']; ?></td>
                </tr>
                <tr>
                    <th colspan="2" style="width:500px; text-align:center;font-size:20px;">Student Rollno:</th>
                    <td colspan="3" style="width:500px; text-align:center;font-size:20px;"><?php echo $rollid; ?></td>
                </tr>
                <tr>
                    <th colspan="2" style="width:500px; text-align:center;font-size:20px;">Class:</th>
                    <td colspan="3" style="width:500px; text-align:center;font-size:20px;"><?php echo $row['class_name']; ?></td>
                </tr>
                <tr>
                    <th colspan="2" style="width:500px; text-align:center;font-size:20px;">Course Code:</th>
                    <td colspan="3" style="width:500px; text-align:center;font-size:20px;"><?php echo $row['sub_code']; ?></td>
                </tr>
                <tr>
                    <th colspan="2" style="width:500px; text-align:center;font-size:20px;">Course:</th>
                    <td colspan="3" style="width:500px; text-align:center;font-size:20px;"><?php echo $_SESSION['subject'] ?></td>
                </tr>
           
              <tr>
                  <th style="width:700px; text-align:center;font-size:20px;"colspan="5">(3-Exellent&nbsp;&nbsp;2-Good&nbsp;&nbsp;1-Average&nbsp;&nbsp;)</th>
              </tr>
               <tr>
                <th style="text-align:center;"colspan="1">CO's</th>    
                <th style="text-align:center;"colspan="1">Course Outcomes</th>
                <th style="text-align:center;"colspan="1">Excellent</th>
                <th style="text-align:center;"colspan="1">Good</th>
                <th style="text-align:center;"colspan="1">Average</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql=mysqli_query($con,"SELECT * FROM `cosfull` WHERE sub_name='$subject'");
                $j=0;
            while($row=mysqli_fetch_array($sql)){
            ?>
               <tr>
                   <td style="text-align:center;"><?php echo $row['cosf_name']; ?></td>
                   <td style="text-align:center;"><?php echo $row['cosf_full']; ?></td>
                   <td style="text-align:center;width:30px;height:30px;"><input type="radio" name="marks<?php echo $j;?>" value="3" style="width:20px;height:20px;"required></td>
                   <td style="text-align:center;width:30px;height:30px;"><input type="radio" name="marks<?php echo $j;?>" value="2"style="width:20px;height:20px;"></td>
                   <td style="text-align:center;width:30px;height:30px;"><input type="radio" name="marks<?php echo $j;?>" value="1"style="width:20px;height:20px;"></td>
               </tr>
           <?php
                $j=$j+1;
            }
            ?>
            <td><input type="hidden"name="item_average"/></td>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2"style="text-align:center;width:30px;height:30px;">Suggest if:</th>
                    <td colspan="3"><textarea name="item_suggest" rows="4" cols="63"></textarea></td>
                </tr>
                <tr>
                    <th colspan="2"style="text-align:center;width:30px;height:60px;">Date and Time:</th>
                    <th colspan="1"style="text-align:center;width:30px;height:30px;"></th>
                    <a href="signature.php"><th colspan="1" style="text-align:center"> <button hidden type="button"onClick="total()"><button type="submit"name="submit"class="btn btn-o btn-primary" onClick="total()" name="signature">Signature</button></button></th>
                    <th colspan="1"style="text-align:center;"></th></a>
                </tr>
            </tfoot>
        </table></td>
        
        
        </table><br>
       
       <input type="button" class="btn btn-primary" id="print" name="print" value="PRINT"  onClick="window.print();" />
        
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        </form >
        <script>
            function total(){
                var radioValue = parseInt($("input[name='marks0']:checked").val());
                var radioValue1 = parseInt($("input[name='marks1']:checked").val());
                var radioValue2 = parseInt($("input[name='marks2']:checked").val());
                var radioValue3 = parseInt($("input[name='marks3']:checked").val());
                var radioValue4 = parseInt($("input[name='marks4']:checked").val());
                var radioValue5 = parseInt($("input[name='marks5']:checked").val());
                var average=parseFloat((radioValue+radioValue1+radioValue2+radioValue3+radioValue4+radioValue5)/6).toFixed(2);
                $('input[name="item_average"]').get(0).value=average;
                
            }
        </script>
    </body>
</html>