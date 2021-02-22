<?php

$Name = $_POST['name'];  
$EmailID= $_POST['email'];
$PhoneNo = $_POST['phoneno'];  
$Subject= $_POST['subject'];




$con= mysqli_connect('localhost','root','','hostel');
$query="INSERT INTO `complaint`( `Name`, `EmailID`, `PhoneNo`, `Subject`) VALUES ('$Name','$EmailID','$PhoneNo','$Subject')";
$go = mysqli_query($con,$query);
if($go==true)
header("refresh:1;url=contactus.php");
else
echo "error";








?>