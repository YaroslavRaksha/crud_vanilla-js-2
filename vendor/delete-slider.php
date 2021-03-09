<?php 
require_once '../config/connect.php';
$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `slider` WHERE `slider`.`id` = '$id'");

header("location: ../admin/admin-slider.php"); 
?> 