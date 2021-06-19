<?php
$conn = mysqli_connect("localhost","root","","nba");
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"]))
{    
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(($_FILES["file"]["type"])){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $years = "";
                if(isset($Row[0])) {
                    $years = mysqli_real_escape_string($con,$Row[0]);
                }
                
                $enroll = "";
                if(isset($Row[1])) {
                    $enroll = mysqli_real_escape_string($con,$Row[1]);
                }
                $id = "";
                if(isset($Row[2])) {
                    $id = mysqli_real_escape_string($con,$Row[2]);
                }
                $name = "";
                if(isset($Row[3])) {
                    $name = mysqli_real_escape_string($con,$Row[3]);
                }
                $password = "";
                if(isset($Row[4])) {
                    $password = mysqli_real_escape_string($con,$Row[4]);
                }
                $phone = "";
                if(isset($Row[5])) {
                    $phone = mysqli_real_escape_string($con,$Row[5]);
                }
                $email = "";
                if(isset($Row[6])) {
                    $email = mysqli_real_escape_string($con,$Row[6]);
                }
                $class = "";
                if(isset($Row[7])) {
                    $class = mysqli_real_escape_string($con,$Row[7]);
                }
                $dept = "";
                if(isset($Row[8])) {
                    $dept = mysqli_real_escape_string($con,$Row[8]);
                }
                
                if (!empty($name) || !empty($description)) {
                    $query = "insert into student(years,enrollment,st_id,st_name,st_password,st_phone,st_email,class_name,dept_name) values('".$years."','".$enroll."','".$id."','".$name."','".$password."','".$phone."','".$email."','".$class."','".$dept."')";
                    $result = mysqli_query($con, $query);
                
                    if (! empty($result)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                    }
                }
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>

<!DOCTYPE html>
<html>    
<head>
<style>    
body {
	font-family: Arial;
	width: 550px;
}

.outer-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 40px 20px;
	border-radius: 2px;
}

.btn-submit {
	background: #333;
	border: #1d1d1d 1px solid;
    border-radius: 2px;
	color: #f0f0f0;
	cursor: pointer;
    padding: 5px 20px;
    font-size:0.9em;
}

.tutorial-table {
    margin-top: 40px;
    font-size: 0.8em;
	border-collapse: collapse;
	width: 100%;
}

.tutorial-table th {
    background: #f0f0f0;
    border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

.tutorial-table td {
    background: #FFF;
	border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>
</head>

<body>
    <h2>Import Excel File into MySQL Database using PHP</h2>
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         

</body>
</html>