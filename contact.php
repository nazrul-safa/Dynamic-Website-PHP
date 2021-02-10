<?php
require_once 'includes/db.php';
session_start();
	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

if (!$_POST['name']) {
	
	header('location:index.php#contactt');
	$_SESSION['name'] = "Please input your Name first";
	die();
}
if (!$_POST['email']) {
	
	header('location:index.php#contactt');
	$_SESSION['email'] = "Please input your valid Email ";
	die();
}

if (!$_POST['message']) {
	
	header('location:index.php#contactt');
	$_SESSION['message'] = "Please write something";
} 
else
{
    $insert= " INSERT into contact (name,email,message) VALUES('$name','$email','$message')";
	echo mysqli_query($db_connect,$insert);
		
	header('location:index.php#contactt');
	$_SESSION['status'] = "Thank you ! Message Send Successfully ";
}

?>