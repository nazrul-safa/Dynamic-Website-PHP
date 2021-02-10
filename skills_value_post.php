<?php
session_start();
require_once 'includes/db.php';
$value = $_POST['vol'];
$id= $_GET['id'];
$skills_update_query = "UPDATE services_skills SET data_value = '$value' WHERE id = $id";
$skills_value = mysqli_query($db_connect, $skills_update_query);
$_SESSION['value_change']= "Skills Value Changes Successfully";
header('location:service_skills.php');
?>