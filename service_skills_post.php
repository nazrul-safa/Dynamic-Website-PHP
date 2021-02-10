<?php
session_start();
require_once 'includes/db.php';

$skills_title = $_POST['skills_title'];
$data_value = $_POST['data_value'];

$insert_query = "INSERT into services_skills(skills_title,data_value) VALUES('$skills_title','$data_value') ";
mysqli_query($db_connect,$insert_query);
$_SESSION['status']="Yor services Skills added Successfully";
header('location:service_skills.php');
