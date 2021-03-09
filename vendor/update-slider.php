<?php 
require_once '../config/connect.php';

$id = $_POST['id'];
$item_id = $_POST['slideID'];
$name = $_POST['slideNAME'];
$price = $_POST['slidePRICE'];
$img = $_POST['slideIMG'];

mysqli_query($connect, "UPDATE `slider` SET `item_id` = '$item_id', `name` = '$name', `price` = '$price', `img` = '$img' WHERE `slider`.`id` = '$id'");

header("location: ../admin/admin-slider.php");
?>