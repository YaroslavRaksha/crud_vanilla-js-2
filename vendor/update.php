<?php 
require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$title = $_POST['title'];
$descr = $_POST['descr'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$img3 = $_POST['img3'];

mysqli_query($connect, "UPDATE `items` SET `name` = '$name', `price` = '$price', `title` = '$title', `descr` = '$descr', `img1` = '$img1', `img2` = '$img2', `img3` = '$img3' WHERE `items`.`id` = '$id'");

header("location: ../admin/admin.php");
?>