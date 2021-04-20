<?php

$conn1=mysqli_connect('localhost','root');

if($conn1)
{
    echo "<p><font color = green> Connection Estabilished </font> </p>";
	
}
else{
    echo "<p><font color = red> Connection Failure</font></p>";
}

mysqli_select_db($conn1,'signin');

$user = $_GET['username'];
$pass = $_GET['password'];


$query1 = "Insert into userinfo2(username,password) Values('$user','$pass')";



mysqli_query($conn1,$query1);

header('location:index.php');





             







?>