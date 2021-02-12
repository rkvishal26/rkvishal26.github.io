<?php
session_start();
// header('location:login.php');
$con=mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'contact');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$reg="insert into usertable(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message')";
	mysqli_query($con,$reg);
	header('location:login.php');