<?php
session_start();
require_once 'includes/db.php';
$id = $_GET['id'];
$img_name_query = "SELECT img_animation FROM portfolio_img_animation WHERE id='$id'";
$result_img_name_query = mysqli_fetch_assoc(mysqli_query($db_connect, $img_name_query))["img_animation"];
unlink("img/portfolio_img/animation/" . $result_img_name_query);
$query = "DELETE FROM portfolio_img_animation  WHERE id= $id";
mysqli_query($db_connect, $query);
header('location:portfolio_img.php');
$_SESSION['animation']= "Delete Animation Image Succesfully";
?>