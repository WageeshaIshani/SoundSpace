<?php
include 'conn.php';

?>


<html>
<head>
<title>Studios Confirmation</title>

</head>
<body>

<h2>Studios Confirmation</h2>

<?php

$sql = "select studioName, studioAddress, studioTelNo from Studio order by studioId DESC limit 3";
$result = mysql_query($sql);


if (mysql_num_rows($result)<> 0) {
	
	$i=1;
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
		
       echo '<hr>'.$i.') ' .$row['studioName'].'<br>'. $row['studioAddress'].'<br>'. $row['studioTelNo'].'<br><br>';
	   
	   $i++;
    }
	
	
} else {
    echo "0 results";
}
?>

