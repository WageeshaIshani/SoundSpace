<?php
include "conn.php" ;
		
	if(isset($_POST['addButton'])){
	
	$stuId = $_POST['stuId'];
	$stuName = $_POST['stuName'];
	$stuAddress = $_POST['stuAddress'];
	$stuPCode = $_POST['stuPCode'];
	$stuTelNo = $_POST['stuTelNo'];
	
	
		if(preg_match("/^[0-9]*$/",$stuId)){
			
			$qry = "insert into Studio(studioId, studioName, studioAddress, studioPCode, studioTelNo) values('".$stuId."','".$stuName."','".$stuAddress."','".$stuPCode."','".$stuTelNo."')";
		
			$res = mysql_query($qry);
			
			if (mysql_errno($conn)==0){
				
				echo "A new studio has been added successfully";
			}

			if (mysql_errno($conn)==1062)
		{
			
			echo "The value entered for the new studio id or studio name is not valid as it is already used.";
			
		}
			
		}else{
			
			echo "Studio Id should be a number.";
			
		}		
		
	}
	
	
?>

<html>
<head>
<title>Add a Studio</title>

</head>

<body>
<br>
<h2>Add a Studio</h2>

<form  action= "addstudio.php" method="post">
<table height="300" width="500" cellspacing="1" cellpadding="3" >
<tr><td>*Studio Id Number</td><td ><input type="text" name="stuId" required ></td></tr>
<tr><td>*Studio Name</td><td><input type="text" name="stuName" required></td></tr>
<tr><td>*Studio Address</td><td><input type="text" name="stuAddress" required></td></tr>
<tr><td>*Studio Postcode</td><td><input type="text" name="stuPCode" required ></td></tr>
<tr><td>*Telephone Number</td><td><input type="text" name="stuTelNo" required></td></tr>
<tr><td><input type="submit" name="addButton" value="Add Studio"></td>
<td><input type="reset" name="clearButton" value="Clear Form" ></td></tr>
</table>
</form>



</body>
