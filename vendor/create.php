<?php 
require_once '../config/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$title = $_POST['title'];
$descr = $_POST['descr'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$img3 = $_POST['img3'];

mysqli_query($connect, "INSERT INTO `items` (`id`, `name`, `price`, `title`, `descr`, `img1`, `img2`, `img3`) VALUES (NULL, '$name', '$price', '$title', '$descr', '$img1', '$img2', '$img3')");

header("location: ../admin/admin.php");
?>