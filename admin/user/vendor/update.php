<?php



require_once '../config/connect.php';




$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$role = $_POST['role'];


mysqli_query($connect, "UPDATE `users` SET `username` = '$username', `email` = '$email', `role` = '$role' WHERE `users`.`id` = '$id'");


header('Location: http://localhost/admin/user/');