<?php

// connection
$conn = mysqli_connect("localhost","root","","users");

if(! $conn){
    die("Connection Failed due to".mysqli_connect_error());
}

// Variable for input html -> post

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$location = $_POST['location'];
$members = $_POST['members'];
$days= $_POST['days'];
$date= date('y-m-d',strtotime($_POST['date']));
$message= $_POST['message'];



// sqli query
$sql= "INSERT INTO bookings(name,email,phone,state,location, members,days,date,message) VALUES('{$name}','{$email}','{$phone}','{$state}','{$location}','{$members}','{$days}','{$date}','{$message}')";


$result= mysqli_query($conn,$sql);
header("Location: sucessBook.html");
?>