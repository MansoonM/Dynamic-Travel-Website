<?php

$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$message=$_POST["message"];



// Database connectipon
$conn= mysqli_connect("localhost","root","","users");



// insert values into database
$sql= "INSERT INTO contact(first_name,last_name,email,message) VALUES('{$first_name}','{$last_name}','{$email}','{$message}')";
$result=mysqli_query($conn,$sql);


header("Location: home2.php");

die();
exit();

?>
