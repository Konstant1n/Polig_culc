<?php


require_once '../config/connect.php';



$username = $_POST['username'];
$email = $_POST['email'];
$role = $_POST['role'];


mysqli_query($connect,"INSERT INTO `users` (`id`, `username`, `email`, `role`) VALUES (NULL, '$username', '$email', '$role')");



header('Location: http://localhost/admin/user/');