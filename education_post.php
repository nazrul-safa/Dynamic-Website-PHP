<?php
session_start();
require_once 'includes/db.php';
$year_start = $_POST['year_start'];
$year_end = $_POST['year_end'];
$title = $_POST['title'];
$des = $_POST['des'];

$insert_query = "INSERT into education(year_start,year_end,title,des) VALUES('$year_start','$year_end','$title','$des')";
mysqli_query($db_connect,$insert_query);
$_SESSION['status']="Yor Education added Successfully";
header('location:education.php');
