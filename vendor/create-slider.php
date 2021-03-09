<?php 
require_once '../config/connect.php';

$slideID = $_POST['slideID'];
$slideNAME = $_POST['slideNAME'];
$slidePRICE = $_POST['slidePRICE'];
$slideIMG = $_POST['slideIMG'];

mysqli_query($connect, "INSERT INTO `slider` (`id`, `item_id`, `img`, `name`, `price`) VALUES (NULL, '$slideID', '$slideIMG', '$slideNAME', '$slidePRICE')");
header("location: ../admin/admin-slider.php");
?>