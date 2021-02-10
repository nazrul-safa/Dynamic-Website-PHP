<?php
require_once 'includes/db.php';
$picture_name = $_GET['pic_name'];
unlink("img/about_img/". $picture_name);
$upadte_in_db="UPDATE about_img SET about_img ='default.png' WHERE profile_img='$picture_name'";
mysqli_query($db_connect, $upadte_in_db);
header('location:about_img.php');
