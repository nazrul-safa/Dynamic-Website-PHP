<?php
session_start();
require_once 'includes/db.php';
$id = $_GET['id'];
$img_name_query = "SELECT img FROM portfolio_img WHERE id='$id'";
echo $result_img_name_query = mysqli_fetch_assoc(mysqli_query($db_connect, $img_name_query))["img"];
unlink("img/portfolio_img/" . $result_img_name_query);
$query = "DELETE FROM portfolio_img  WHERE id= $id";
mysqli_query($db_connect, $query);
header('location:portfolio_img.php');
$_SESSION['del']= "Delete Portfolio Image Succesfully";
?>