<?php

$con=mysqli_connect('localhost','root');
if(!$con)
{
	echo 'not connected to server';
}

if(!mysqli_select_db($con,'result'))
{
	echo 'database not selected';
}
$Roll =$_POST['f1'];
$Name =$_POST['f2'];
$Fname =$_POST['f3'];
$English =$_POST['f4'];
$Math =$_POST['f5'];
$PHYSICS =$_POST['f6'];
$Chemistry=$_POST['f7'];
$computer =$_POST['f8'];
$total =$_POST['f9'];
$percentage =$_POST['f10'];

$sql ="INSERT INTO engadget (roll_no, student_name, fathers_name, English, math, physics, chemistry, computer_science, total, percentage) VALUES ('$Roll','$Name','$Fname','$English','$Math','$PHYSICS','$Chemistry','$computer','$total','$percentage')";
if(!mysqli_query($con,$sql))
{
	echo ' not inserted';
}
else
{
	echo'inserted';
}
header("refresh:1; url=http://localhost/projiii/index.php");
?>