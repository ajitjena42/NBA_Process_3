
<?php 
include('include/config.php');
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
    <body style="background-color:#42E93E;" >
       <h1 align=center color="red">Vidyalankar Polytechnic</h1>
        <form align="center" method="post">
        <table border="5" align="center" style="background-color:white;">  
        <?php
            
            $_SESSION['subject']="MAD";
            $_SESSION['exampage']="PT1";
            $_SESSION['year']="2019-2020";
            
            $subject=$_SESSION['subject'];
            $exampage=$_SESSION['exampage'];
            $years=$_SESSION['year'];
        $sql=mysqli_query($con,"select * from student p,assignsubject a where a.years='".$years."' AND p.years='".$years."' AND p.class_name=a.class_name AND a.sub_name='".$subject."' GROUP BY p.st_id");
        
        $row=mysqli_fetch_array($sql) 
        ?>
          <thead>
              <tr>
               <th colspan="14" style="text-align:center;"class="head">VIDYALANKAR POLYTECHNIC</th>
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
            <?php
            $sql=mysqli_query($con,"select * from student p,assignsubject a where p.years=a.years AND p.class_name=a.class_name AND a.sub_name='MAD' GROUP BY p.st_id");
            while( $row=mysqli_fetch_array($sql)){?>
            <tbody>
                <tr>
                    <td><?php echo $row['st_id'];?></td>
                    <td><?php echo $row['st_name'];?></td>
                    <td><input type="text"name="item_name[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name1[]"class="form-control item_name"style="width:75px" autocomplete="off" /></td>
                    <td><input type="text"name="item_name2[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name3[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name4[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name5[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    
                    <td><input type="text"name="item_nameb[]"class="form-control item_name"style="width:75px" autocomplete="off"/></td>
                    <td><input type="text"name="item_name1b[]"class="form-control item_name"style="width:75px"autocomplete="off"/></td>
                    <td><input type="text"name="item_name2b[]"class="form-control item_name"style="width:75px"autocomplete="off"/></td>
                    <td><input type="text"name="item_name3b[]"class="form-control item_name"style="width:75px"autocomplete="off"/></td>
                    
                    <td><input type="text"name="item_nametotal[]"class="form-control item_name"style="width:75px" autocomplete="off"readonly/></td>
                    
                    <td style="text-align:center; vertical-align: middle;"><input type="checkbox" class="check" name="item_nameabs[]" value="1" ><input type="hidden" name="item_namehid[]" value="0"></td>
                </tr>
                <?php  
                 }?>
            </tbody>
               <tfoot>
                <tr>
                    <td colspan="2"><b>No. of students who attempted the question</b></td>
                      <?php
                        for($i=0;$i<11;$i++)
                        {
                        ?>
                        <td><input type="text"name="item_nameattempt[]"class="form-control item_name"style="width:75px" autocomplete="off" readonly/></td>
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
                        <td><input type="text" name="item_namegreater[]" class="form-control item_name" style="width:75px" autocomplete="off" readonly/></td>
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
                        <td><input type="text"name="item_namepercent[]"class="form-control item_name"style="width:75px" autocomplete="off" readonly/></td>
                        <?php
                        }?>
                        <td colspan="1"></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Course Outcomes (Co's)</b></td>
                        <?php
                        for($i=0;$i<11;$i++)
                        {
                            if($i!=10){
                        ?>
                            <td><input type="number"name="item_nameoutcome[]"class="form-control item_name" value="0" min="0" max="4" style="width:75px"autocomplete="off" /></td>
                            <?php
                                }
                            else{
                                ?>
                            <td><input type="text"name="item_nameoutcome[]"class="form-control item_name"   style="width:75px"autocomplete="off" readonly/></td>
                            <?php
                            }}?>
                        <td colspan="1"></td>
                </tr>
                <?php
                for($i=0;$i<4;$i++)
                {?>
                    <tr class="co<?php echo $i+1?>">
                        <td colspan="2"><b>Average of CO<?php echo $i+1?> is</b></td>
                        <td colspan="2"><input type="text"name="item_co[]"class="form-control item_name"style="width:152px" autocomplete="off" readonly/></td>
                        <td colspan="2"></td>
                        <td colspan="4"><b>Hence attainment level is</b></td>
                        <td colspan="2"><input type="text"name="item_attainmentco[]"class="form-control item_name"style="width:152px" autocomplete="off" readonly/></td>
                        <td colspan="2"></td>
                    </tr>
                <?php
                }?>   
                <tr>
                   <td colspan="2"><b>No. of students who appeared for exam</b></td>
                   <td colspan="2"><input type="text"name="item_appeared"class="form-control item_name"style="width:152px" autocomplete="off" readonly/></td>
                   <td colspan="2"></td>
                   <td colspan="4"><b>Out of</b></td>
                   <td colspan="2" class="green"><input type="text"name="item_outof"class="form-control item_name"style="width:152px" autocomplete="off" readonly/></td>
                   <td colspan="2"></td>
                </tr>
            </tfoot>
        </table>
        
       <input type="button" name="submit" value="Calculate"  onClick="total()"/>
       <input type="button" id="cal1" name="submit1" value="Calculate1"  onClick="total1()"/>
       <input type="submit" id="submit" name="submit" value="Submit" id="submit" />
       <input type="button" id="print" name="print" value="Print" id="submit" onClick="window.print();" />
        
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        </form>
    </body>
</html>