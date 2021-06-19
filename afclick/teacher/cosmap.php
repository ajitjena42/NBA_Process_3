  <?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if (ISSET($_POST['submit'])) {
    
    $subject=$_SESSION['subject'];
    $class=$_SESSION['class'];
    $dept=$_SESSION['dept'];
    $subcode=$_SESSION['subcode'];
    $years=$_SESSION['year'];
    $A1=$_POST['item_name1'];
    $A2=$_POST['item_name2'];
    $A3=$_POST['item_name3'];
    $A4=$_POST['item_name4']; 
    $A5=$_POST['item_name5'];  
    $A6=$_POST['item_name6'];
    $A7=$_POST['item_name7'];
    $A8=$_POST['item_name8'];
    $A9=$_POST['item_name9'];
    $A10=$_POST['item_name10']; 
    $A11=$_POST['item_name11']; 
    $A12=$_POST['item_name12']; 
    $avg=$_POST['item_nameaverage']; 
    $sql1=mysqli_query($con,"select * from pos_mapping where dept_name='".$dept."' AND sub_code='".$subcode."' AND sub_name='".$_SESSION['subject']."'");
            if($row1=mysqli_fetch_array($sql1)){
    $sql=mysqli_query($con,"SELECT * FROM assignsubject a,subject s WHERE a.teacher_id='".$_SESSION['dlogin']."' AND s.sub_name='".$_SESSION['subject']."' AND a.sub_name='".$_SESSION['subject']."' AND a.years='".$_SESSION['year']."'");
     
    $row=mysqli_fetch_array($sql);
    $j=1;$k=0;$l=0;
        for($i=0;$i<6;$i++){
            $dname=$row['dept_name'];
            $sem=$row['sem'];
            $scode=$row['sub_code'];
            $sname=$row['sub_name'];
            $Aa=$A1[$i];
            $Ab=$A2[$i];
            $Ac=$A3[$i];
            $Ad=$A4[$i];
            $Ae=$A5[$i];
            $Af=$A6[$i];
            $Ag=$A7[$i];
            $Ah=$A8[$i];
            $Ai=$A9[$i];
            $Aj=$A10[$i];
            $Ak=$A11[$i];
            $Al=$A12[$i];
            
                mysqli_query($con,"UPDATE `pos_mapping` SET `PO1`='$Aa',`PO2`='$Ab',`PO3`= '$Ac',`PO4`= '$Ad',`PO5`= '$Ae',`PO6`= '$Af',`PO7`= '$Ag',`PO8`= '$Ah',`PO9`= '$Ai',`PO10`= '$Aj',`PSO1`= '$Ak',`PSO2`= '$Al' WHERE `cosf_name`='CO$j' AND dept_name='".$dept."' AND sub_code='".$subcode."' AND sub_name='".$_SESSION['subject']."' ");
            
            if($l==0){
            $avg1=$avg[$k];
            $k+=1;
            $avg2=$avg[$k];
            $k+=1;
            $avg3=$avg[$k];
            $k+=1;
            $avg4=$avg[$k];
            $k+=1;
            $avg5=$avg[$k];
            $k+=1;
            $avg6=$avg[$k];
            $k+=1;
            $avg7=$avg[$k];
            $k+=1;
            $avg8=$avg[$k];
            $k+=1;
            $avg9=$avg[$k];
            $k+=1;
            $avg10=$avg[$k];
            $k+=1;
            $avg11=$avg[$k];
            $k+=1;
            $avg12=$avg[$k];
            $k+=1;  
             
                mysqli_query($con,"UPDATE `pos_mapavg` SET `PO1`='$avg1',`PO2`='$avg2',`PO3`= '$avg3',`PO4`= '$avg4',`PO5`= '$avg5',`PO6`= '$avg6',`PO7`= '$avg7',`PO8`= '$avg8',`PO9`= '$avg9',`PO10`= '$avg10',`PSO1`= '$avg11',`PSO2`= '$avg12' WHERE dept_name='".$dept."' AND sub_code='".$subcode."' AND sub_name='".$_SESSION['subject']."' ");
            
             
                mysqli_query($con,"update  `subject` SET `pos_filled`= 1 WHERE `sub_code`='$scode'");
                $l=1;
            }
            $j+=1;
        }}
    else{
       
    $sql=mysqli_query($con,"SELECT * FROM assignsubject a,subject s WHERE a.teacher_id='".$_SESSION['dlogin']."' AND s.sub_name='".$_SESSION['subject']."' AND a.sub_name='".$_SESSION['subject']."' AND a.years='".$_SESSION['year']."'");
     
    $row=mysqli_fetch_array($sql);
    $j=1;$k=0;$l=0;
        for($i=0;$i<6;$i++){
            $dname=$row['dept_name'];
            $sem=$row['sem'];
            $scode=$row['sub_code'];
            $sname=$row['sub_name'];
            $Aa=$A1[$i];
            $Ab=$A2[$i];
            $Ac=$A3[$i];
            $Ad=$A4[$i];
            $Ae=$A5[$i];
            $Af=$A6[$i];
            $Ag=$A7[$i];
            $Ah=$A8[$i];
            $Ai=$A9[$i];
            $Aj=$A10[$i];
            $Ak=$A11[$i];
            $Al=$A12[$i];
             
                mysqli_query($con,"INSERT INTO `pos_mapping` (`pos_mapid`, `dept_name`, `sem`, `sub_code`, `sub_name`,`cosf_name`, `PO1`, `PO2`, `PO3`, `PO4`, `PO5`, `PO6`, `PO7`, `PO8`, `PO9`, `PO10`, `PSO1`, `PSO2`) VALUES (NULL, '$dname', '$sem', '$scode', '$sname','CO$j' ,'$Aa', '$Ab', '$Ac', '$Ad', '$Ae', '$Af', '$Ag', '$Ah', '$Ai', '$Aj', '$Ak','$Al')");
            
            if($l==0){
            $avg1=$avg[$k];
            $k+=1;
            $avg2=$avg[$k];
            $k+=1;
            $avg3=$avg[$k];
            $k+=1;
            $avg4=$avg[$k];
            $k+=1;
            $avg5=$avg[$k];
            $k+=1;
            $avg6=$avg[$k];
            $k+=1;
            $avg7=$avg[$k];
            $k+=1;
            $avg8=$avg[$k];
            $k+=1;
            $avg9=$avg[$k];
            $k+=1;
            $avg10=$avg[$k];
            $k+=1;
            $avg11=$avg[$k];
            $k+=1;
            $avg12=$avg[$k];
            $k+=1;  
            
                mysqli_query($con,"INSERT INTO `pos_mapavg` (`pos_mapavgid`, `dept_name`, `sub_code`, `sub_name`, `PO1`, `PO2`, `PO3`, `PO4`, `PO5`, `PO6`, `PO7`, `PO8`, `PO9`, `PO10`, `PSO1`, `PSO2`) VALUES (NULL, '$dname', '$scode', '$sname','$avg1', '$avg2', '$avg3', '$avg4', '$avg5', '$avg6', '$avg7', '$avg8', '$avg9', '$avg10', '$avg11','$avg12')");
            
             
                mysqli_query($con,"update  `subject` SET `pos_filled`= 1 WHERE `sub_code`='$scode'");
                $l=1;
            }
            $j+=1;
        } 
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
    <body style="background-color:#42E93E;" ><br>
       <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary" href="select-copo.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
                </div>
            </div>
        </div>
        <br><br><br><form align="center" method="post">
        <table border="5" align="center" style="background-color:white;">  
        <?php
            
//            $_SESSION['subject']="MAD";
//            $_SESSION['year']="2019-2020";
//            $_SESSION['id']="VP123IF";
            
            $subject=$_SESSION['subject'];
            $class=$_SESSION['class'];
            $years=$_SESSION['year'];
        $sql=mysqli_query($con,"SELECT * FROM assignsubject a,subject s WHERE a.teacher_id='".$_SESSION['dlogin']."' AND s.sub_name='".$_SESSION['subject']."' AND a.sub_name='".$_SESSION['subject']."' AND a.years='".$_SESSION['year']."'");
        
        $row=mysqli_fetch_array($sql);
         $_SESSION['subcode']= $row['sub_code'];
            $subcode=$_SESSION['subcode'];
        ?>
          <thead>
              <tr>
               <td colspan="1" style="width:150px; height:130px;"><img src="../../images/vp1.png" alt="VP" style="width:150px; height:100px;"></td>
               <th colspan="12" style="text-align:center;font-size:30px;">VIDYALANKAR POLYTECHNIC</th>
              </tr>
              <tr>
               <th colspan="1"style="text-align:center;"rowspan="2"><?php echo $row['sub_name'];?>(<?php echo $subcode;?>)</th>
               <th colspan="10"style="text-align:center;">POs</th>
               <th colspan="2"style="text-align:center;">PSOs</th>
              </tr>
               <tr>
                <th scope="col"style="text-align:center;">1</th>
                <th scope="col"style="text-align:center;">2</th>
                <th scope="col"style="text-align:center;">3</th>
                <th scope="col"style="text-align:center;">4</th>
                <th scope="col"style="text-align:center;">5</th>
                <th scope="col"style="text-align:center;">6</th>
                <th scope="col"style="text-align:center;">7</th>
                <th scope="col"style="text-align:center;">8</th>
                <th scope="col"style="text-align:center;">9</th>
                <th scope="col"style="text-align:center;">10</th>

                <th scope="col"style="text-align:center;">1</th>
                <th scope="col"style="text-align:center;">2</th>
               </tr>
            </thead>
            <?php
            $sql=mysqli_query($con,"select dept_name from assignsubject where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."'");
            $row=mysqli_fetch_array($sql);
            $_SESSION['dept']=$row['dept_name'];
            $dept=$_SESSION['dept'];
            $sql=mysqli_query($con,"select * from pos_mapping where dept_name='".$dept."' AND sub_code='".$subcode."' AND sub_name='".$_SESSION['subject']."'");
            if($row=mysqli_fetch_array($sql)){
            
            $sql=mysqli_query($con,"select * from pos_mapping where dept_name='".$dept."' AND sub_code='".$subcode."' AND sub_name='".$_SESSION['subject']."'");
                $i=0;
            while($row=mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td style="text-align:center;"><b><?php echo $row['cosf_name'];?></b></td>
                    <td><input type="text"name="item_name1[]"class="form-control item_name"style="width:75px" autocomplete="off" value="<?php echo $row['PO1'];?>" /></td>
                    <td><input type="text"name="item_name2[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PO2'];?>"/></td>
                    <td><input type="text"name="item_name3[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PO3'];?>"/></td>
                    <td><input type="text"name="item_name4[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PO4'];?>"/></td>
                    <td><input type="text"name="item_name5[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PO5'];?>"/></td>
                    <td><input type="text"name="item_name6[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PO6'];?>"/></td>
                    <td><input type="text"name="item_name7[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PO7'];?>"/></td>
                    <td><input type="text"name="item_name8[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PO8'];?>"/></td>
                    <td><input type="text"name="item_name9[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PO9'];?>"/></td>
                    <td><input type="text"name="item_name10[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PO10'];?>"/></td>
                    <td><input type="text"name="item_name11[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PSO1'];?>"/></td>
                    <td><input type="text"name="item_name12[]"class="form-control item_name"style="width:75px" autocomplete="off"value="<?php echo $row['PSO2'];?>"/></td>
                    
                </tr>
            
            <?php
            }
            }
            else{
            
            
            
            for($i=0;$i<6;$i++){
            ?>
            <tbody>
                <tr>
                <td style="text-align:center;"><b>CO<?php echo $i+1;?></b></td>
                    <td><input type="text"name="item_name1[]"class="form-control item_name"style="width:75px" autocomplete="off" /></td>
                    <td><input type="text"name="item_name2[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name3[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name4[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name5[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name6[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name7[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name8[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name9[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name10[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name11[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name12[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    
                </tr>
                <?php
                }}
                ?>
            </tbody>
               <tfoot>
                <tr>
                    <td colspan="1"style="text-align:center;"><b>Average</b></td>
                      <?php
                        for($i=0;$i<12;$i++)
                        {
                        ?>
                        <td><input type="text"name="item_nameaverage[]"class="form-control item_name"style="width:75px" autocomplete="off" readonly/></td>
                        <?php
                        }?>
                </tr>
            </tfoot>
        </table><br>
        
       <input type="button" class="btn btn-primary" name="submit" value="CALCULATE"  onClick="total()"/>
       <input type="submit" class="btn btn-primary"id="submit" name="submit" value="<?php $sql=mysqli_query($con,"select * from pos_mapping where dept_name='".$dept."' AND sub_code='".$subcode."' AND sub_name='".$_SESSION['subject']."'");
            if($row=mysqli_fetch_array($sql)){echo "UPDATE";}else{ echo "SUBMIT";}?>" id="submit" />
       <input type="button" class="btn btn-primary"id="print" name="print" value="PRINT" id="submit" onClick="window.print();" />
        
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        </form>
        <script>
            $("#submit").hide();
            $("#print").hide();
            
            function total(){
                var aj=0,sum=0,a=0;
                while(aj<12){
                    $('input[name="item_name1[]"]').map(function () {
                        if(this.value!='-'){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                        var m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        // m.value="-";
                                                }
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-"; 
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name2[]"]').map(function () {
                        if(this.value!='-', this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                        var m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-" ;
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name3[]"]').map(function () {
                        if(this.value!='-', this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                         m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-" ;
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name4[]"]').map(function () {
                        if(this.value!='-', this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                         m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-" ;
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name5[]"]').map(function () {
                        if(this.value!='-', this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                         m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-" ;
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name6[]"]').map(function () {
                        if(this.value!='-', this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                         m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-" ;
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name7[]"]').map(function () {
                        if(this.value!='-', this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                         m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-" ;
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name8[]"]').map(function () {
                        if(this.value!='-' , this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                         m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-" ;
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name9[]"]').map(function () {
                        if(this.value!='-', this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                         m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-" ;
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name10[]"]').map(function () {
                        if(this.value!='-', this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                         m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-" ;
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name11[]"]').map(function () {
                        if(this.value!='-', this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                         m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-"; 
                        }}
                    aj+=1;
                    
                    sum=0,a=0;
                    $('input[name="item_name12[]"]').map(function () {
                        if(this.value!='-', this.value!=''){
                        sum+=parseFloat(this.value);
                        a++;
                        }
                        
                    });
                         m=$('input[name="item_nameaverage[]"]').get(aj);
                        sum=sum/a;
                        if(parseInt(sum)==0){
                        m.value="-";}
                        else {if(!isNaN(sum)){
                            m.value=parseFloat(sum).toFixed(2);
                        }
                        else{
                       m.value="-" ;    
                        }}
                    aj+=1;
            }
                $("#submit").show();
                $("#print").show();
            }
        </script>
    </body>
</html>