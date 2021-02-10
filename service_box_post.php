<?php
session_start();
require_once 'includes/db.php';

$title = $_POST['title'];
$des = $_POST['des'];

$insert_query = "INSERT into services_box(services_box_title,services_box_des) VALUES('$title','$des') ";
mysqli_query($db_connect,$insert_query);
$_SESSION['status']="Yor services added Successfully";
header('location:service_box.php');

?>
