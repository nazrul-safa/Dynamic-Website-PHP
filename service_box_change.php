<?php
require_once 'includes/db.php';
$id = $_GET['id'];
$what_to_do = $_GET['what_to_do'];
$query = "UPDATE services_box SET status='$what_to_do' WHERE id= $id";
mysqli_query($db_connect, $query);
header('location:service_box.php');
