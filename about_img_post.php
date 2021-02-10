<?php
    session_start();
    require_once 'includes/db.php';

    
if ($_FILES['about_img']['name'])
{
  echo "plz delete 1st";
}
//Find Extention Start
$img_name = $_FILES['about_img']['name'];

$name_after_explode = explode(".", $img_name);
$extention = end($name_after_explode);
//Find Extention End

//upload img start
$new_img_name =  time() . "." . rand(1000, 9999) . "." . $extention;
$temp_loc = $_FILES['about_img']['tmp_name'];
$new_loc = "img/about_img/" . $new_img_name;
move_uploaded_file($temp_loc, $new_loc);
//upload img end

//database updae
$query = "INSERT into about_img(about_img) VALUES('$new_img_name')";
mysqli_query($db_connect, $query);
$_SESSION['status'] = "About Images added successfully";
header('location:about_img.php');
?>