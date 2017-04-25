<?php

$conn = mysql_connect("localhost","root","");//create connection

if(!$conn){
	die('Could not connect'.mysql_error());

}

mysql_select_db("SoundSpace",$conn)or die("cannot select DB");//select database


	

?>