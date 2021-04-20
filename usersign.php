<?php

$conn2=mysqli_connect('localhost','root');

if($conn2)
{
    echo "<p><font color = green> Connection Estabilished </font> </p>";
	
}
else{
    echo "<p><font color = red> Connection Failure</font></p>";
}

mysqli_select_db($conn2,'signusers');

$fi = $_GET['firstname'];
$lt = $_GET['lastname'];
$em = $_GET['email'];
$pass = $_GET['password'];
$con = $_GET['confirm_password'];


$query2 = "Insert into signupcan (firstname,lastname,email,password,confirm_password) Values('$fi','$lt','$em','$pass','$con')";



mysqli_query($conn2,$query2);

header('location:login.php');





             







?>