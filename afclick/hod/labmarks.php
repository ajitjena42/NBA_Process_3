<?php 
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
        $subject=$_SESSION['subject'];
        $class=$_SESSION['class'];
        $years=$_SESSION['year'];
$sql=mysqli_query($con,"select outof,nofprac from lab where years='".$years."' AND class_name='".$class."' AND sub_name='".$subject."' GROUP BY class_name ");
        if($row=mysqli_fetch_array($sql)){
            $_SESSION['nofprac']=$row['nofprac'];
            $_SESSION['marksof']=$row['outof'];}
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
                    <a class="btn btn-primary" href="view-teacher-status.php"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
                </div>
            </div>
        </div>
       <br>
        <form align="center" method="post">
        <table border="5" align="center" style="background-color:white;">  
        <?php
        $_SESSION['exampage']="Microproject";
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
                    <td style="width:150px"><?php echo $row['st_name'];?></td> 
                    
                    <?php 
                    $count+=1;
                    $j=0;
                    for($i=0;$i<$nofprac;$i++)
                       {
                        $j+=1;
                    ?>
                    <td><input type="text"name="item_name<?php echo $i;?>[]"class="form-control item_name"style="width:75px" value="<?php echo $row['p'.$j.''];?>" autocomplete="off" readonly/></td>   
                    <?php
                    }
                    ?>
                    <td><input type="text"name="item_nametotal[]"class="form-control item_name"style="width:75px" autocomplete="off"readonly/></td>  
                </tr>
            <?php
                }}else{
            }?>
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
                
                <?php
                $sql1=mysqli_query($con,"select * from cos where years='".$years."' AND class_name='".$class."' AND sub_name='$subject' AND exam='Microproject' ");
            if( $row1=mysqli_fetch_array($sql1)){
                    
                       for($i=1;$i<=6;$i++){
                ?>
                    <tr class="co<?php echo $i;?>">
                        
                        <td colspan="3"><b>Hence attainment level of CO<?php echo $i;?> is</b></td>
                        <td colspan="2"><input type="text"name="item_attainmentco[]"value="<?php echo $row1['co'.$i .'']; ?>"class="form-control item_name"style="width:152px" autocomplete="off" readonly/></td>
                        <td colspan="<?php echo $nofprac-1;?>"></td>
                    </tr>
                <?php
                }}?>     
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
       
       <input type="button" class="btn btn-primary"id="print" name="print" value="PRINT" id="submit" onclick="window.print();"/>
        
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        </form>
        
        
        <script>
            $(window).on('load', function() {
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
            })           
        </script>
    </body>
</html>