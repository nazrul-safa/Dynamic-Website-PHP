<?php
session_start();
require_once 'includes/db.php';


$select_profile_pic_query = "SELECT about_img FROM about_img";
$select_profile_pic = mysqli_query($db_connect, $select_profile_pic_query);
$after_assoc_about_img = mysqli_fetch_assoc($select_profile_pic)['about_img'];
unlink("img/about_img/" . $after_assoc_about_img);
$query = "DELETE FROM about_img ";
mysqli_query($db_connect, $query);
header('location:about_img.php');
$_SESSION['del'] = "Delete Portfolio Image Succesfully";
?>