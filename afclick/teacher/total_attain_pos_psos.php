<?php 
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();


            $years=$_SESSION['year'];
            $subject=$_SESSION['subject'];
            $class=$_SESSION['class'];
        $sql=mysqli_query($con,"SELECT f.assign_id as f_aid,total_attain FROM `assignsubject` a,final_attainment f WHERE a.assign_id=f.assign_id AND a.years='".$years."' AND a.`sub_name`='".$subject."'");
        $cnt=0;$totattain=0;
        while($row=mysqli_fetch_array($sql)){
         $cnt+=1;
         $totattain+=$row['total_attain'];
        }
        if($cnt==0){
            echo "<script>alert('Please Fill all the marks');</script>";
            echo '<script>setTimeout(function(){ location.href = "select_class_pos_psos.php"; }, 1);</script>';
        }else{
        if($cnt!=3){
            echo "<script>alert('Only ".$cnt." teacher has filled marks');</script>";
            
        }}
        if($cnt==3){
        $sql=mysqli_query($con,"select dept_name from assignsubject where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."'");
        $row=mysqli_fetch_array($sql);
            $_SESSION['dept']=$row['dept_name'];
            $dept=$_SESSION['dept'];
        
        $sql=mysqli_query($con,"select * from pos_mapavg where  dept_name='".$dept."' AND sub_name='".$subject."'");
        $cnt1=0;
        while($row=mysqli_fetch_array($sql)){
            $cnt1+=1;
        }
            if($cnt1==0){
            echo "<script>alert('Please Fill co-po mapping');</script>";
        echo '<script>setTimeout(function(){ location.href = "cosmap.php"; }, 1);</script>';
                
            }
            if($cnt1==1){
               $sql=mysqli_query($con,"select * from pos_mapavg where  dept_name='".$dept."' AND sub_name='".$subject."'");
                $PO1;
            while($row=mysqli_fetch_array($sql)){ 
            $PO1=$row['PO1'];
            $PO2=$row['PO2'];
            $PO3=$row['PO3'];
            $PO4=$row['PO4'];
            $PO5=$row['PO5'];
            $PO6=$row['PO6'];
            $PO7=$row['PO7'];
            $PO8=$row['PO8'];
            $PO9=$row['PO9'];
            $PO10=$row['PO10'];
            $PSO1=$row['PSO1'];
            $PSO2=$row['PSO2'];
                $totattain=$totattain/3;
                if($PO1!='-'){
                $PO1=($PO1*$totattain)/3;
                $PO1=number_format($PO1, 2);
                }
                if($PO2!='-'){
                $PO2=($PO2*$totattain)/3;
                $PO2=number_format($PO2, 2);}
                if($PO3!='-'){
                $PO3=($PO3*$totattain)/3;
                $PO3=number_format($PO3, 2);}
                if($PO4!='-'){
                $PO4=($PO4*$totattain)/3;
                $PO4=number_format($PO4, 2);}
                if($PO5!='-'){
                $PO5=($PO5*$totattain)/3;
                $PO5=number_format($PO5, 2);}
                if($PO6!='-'){
                $PO6=($PO6*$totattain)/3;
                $PO6=number_format($PO6, 2);}
                if($PO7!='-'){
                $PO7=($PO7*$totattain)/3;
                $PO7=number_format($PO7, 2);}
                if($PO8!='-'){
                $PO8=($PO8*$totattain)/3;
                $PO8=number_format($PO8, 2);}
                if($PO9!='-'){
                $PO9=($PO9*$totattain)/3;
                $PO9=number_format($PO9, 2);}
                if($PO10!='-'){
                $PO10=($PO10*$totattain)/3;
                $PO10=number_format($PO10, 2);}
                if($PSO1!='-'){
                $PSO1=($PSO1*$totattain)/3;
                $PSO1=number_format($PSO1, 2);}
                if($PSO2!='-'){
                $PSO2=($PSO2*$totattain)/3;
                $PSO2=number_format($PSO2, 2);}
                
               $sql1=mysqli_query($con,"SELECT * FROM `subject` WHERE `sub_name`='".$subject."' AND `dept_name`='".$dept."' AND years='".$years."'");
                $row1=mysqli_fetch_array($sql1);
                $sid=$row1['sub_id'];;
                    
                $sql1=mysqli_query($con,"SELECT * FROM `subject` s ,direct_attain_pos_psos d WHERE d.sub_id=s.sub_id AND s.`sub_name`='".$subject."' AND s.`dept_name`='".$dept."' AND s.years='".$years."'");
                if($row1=mysqli_fetch_array($sql1)){
                    
               $sql1=mysqli_query($con,"UPDATE `direct_attain_pos_psos` SET `PO1`='$PO1',`PO2`='$PO2',`PO3`='$PO3',`PO4`='$PO4',`PO5`='$PO5',`PO6`='$PO6',`PO7`='$PO7',`PO8`='$PO8',`PO9`='$PO9',`PO10`='$PO10',`PSO1`='$PSO1',`PSO2`='$PSO2' WHERE `sub_id`='$sid'");
                    
                }else{
               $sql1=mysqli_query($con,"INSERT INTO `direct_attain_pos_psos`(`direct_attain_id`, `sub_id`, `PO1`, `PO2`, `PO3`, `PO4`, `PO5`, `PO6`, `PO7`, `PO8`, `PO9`, `PO10`, `PSO1`, `PSO2`) VALUES (null,'$sid','$PO1','$PO2','$PO3','$PO4','$PO5','$PO6','$PO7','$PO8','$PO9','$PO10','$PSO1','$PSO2')");
                    
                  }  
                }
              }
            }
if (ISSET($_POST['submit'])) {
            
        echo '<script>setTimeout(function(){ location.href = "select_class_pos_psos.php"; }, 1);</script>';
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
                    <a class="btn btn-primary" href="select_class_pos_psos.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
                </div>
            </div>
        </div>
       <br><br><br><br>
       <form align="center" method="post">
        
        <table border="5" align="center" style="background-color:white;">
            <thead>
                <tr>
               <td colspan="1" style="width:150px; height:130px;"><img src="../../images/vp1.png" alt="VP" style="width:150px; height:100px;"></td>
               <th colspan="12" style="text-align:center;font-size:30px;">VIDYALANKAR POLYTECHNIC </th>
              </tr>
               <tr>
                   <th></th>
                   <th colspan="6" scope="colgroup"style="text-align:center;"><?php echo $years ?></th>
                   <th colspan="6" scope="colgroup"style="text-align:center;"><?php echo $subject ?></th>
               </tr>
                  <tr>
                   <th></th>
                   <th colspan="10" scope="colgroup"style="text-align:center;">POs</th>
                   <th colspan="2" scope="colgroup"style="text-align:center;">PSOs</th>
               </tr>
                <tr>
                    <th></th>
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
               <tr>
                   <td></td>
                          
                                <td><input type="text"class="form-control item_name" value="<?php echo $PO1;?>" style="width:78px"autocomplete="off" readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PO2;?>" style="width:78px"autocomplete="off" readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PO3;?>" style="width:78px"autocomplete="off"readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PO4;?>" style="width:78px"autocomplete="off"readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PO5;?>" style="width:78px"autocomplete="off"readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PO6;?>" style="width:78px"autocomplete="off"readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PO7;?>" style="width:78px"autocomplete="off"readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PO8;?>" style="width:78px"autocomplete="off"readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PO9;?>" style="width:78px"autocomplete="off"readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PO10;?>" style="width:78px"autocomplete="off"readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PSO1;?>" style="width:78px"autocomplete="off"readonly required/></td>
                                <td><input type="text"class="form-control item_name" value="<?php echo $PSO2;?>" style="width:78px"autocomplete="off"readonly required/></td>
                                
                                
                            
               </tr>
            </tbody>
           </table><br>  
           
           
           
           
           <input type="submit" class="btn btn-primary"name="submit" value="SUBMIT"/>
           
           </form>
    </body>
</html>