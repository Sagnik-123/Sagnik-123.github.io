<?php

$conn=mysqli_connect('localhost','root');

if($conn)
{
    echo "<p><font color = green> Connection Estabilished </font> </p>";
	
}
else{
    echo "<p><font color = red> Connection Failure</font></p>";
}

mysqli_select_db($conn,'websitedata');

$us = $_GET['user'];
$ema = $_GET['email'];
$mob = $_GET['mobile'];
$com = $_GET['comment'];

$query = "Insert into userinfodata(user,email,mobile,comment) values('$us','$ema','$mob','$com')";



mysqli_query($conn,$query);

header('location:index.php');

             







?>