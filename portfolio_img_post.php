<?php
session_start();
require_once 'includes/db.php';
//Find Extention Start
$img_name = $_FILES['portfolio_img']['name'];
$name_after_explode = explode(".", $img_name);
$extention = end($name_after_explode);
//Find Extention End

//upload img start
$new_img_name =  time() . "." . rand(1000, 9999).".". $extention;
$temp_loc = $_FILES['portfolio_img']['tmp_name'];
$new_loc= "img/portfolio_img/". $new_img_name;
move_uploaded_file($temp_loc, $new_loc);
//upload img end


//database updae
$query= "INSERT into portfolio_img(img) VALUES('$new_img_name')";
mysqli_query($db_connect,$query);
$_SESSION['status']= "Portfolio Images added successfully";
header('location:portfolio_img.php');
?>