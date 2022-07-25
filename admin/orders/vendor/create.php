<?php


require_once '../config/connect.php';



$type = $_POST['type'];
$size = $_POST['size'];
$paper = $_POST['paper'];
$amount = $_POST['amount'];
$users_id = $_POST['users_id'];


mysqli_query($connect,"INSERT INTO `orders` (`id`, `type`, `size`, `paper`, `amount`, `users_id`) VALUES (NULL, '$type', '$size', '$paper', '$amount', '$users_id')");



header('Location: http://localhost/admin/orders/');