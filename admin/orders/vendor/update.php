<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';


$id = $_POST['id'];
$type = $_POST['type'];
$size = $_POST['size'];
$paper = $_POST['paper'];
$amount = $_POST['amount'];
$users_id = $_POST['users_id'];



/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `orders` SET `type` = '$type', `size` = '$size', `paper` = '$paper', `amount` = '$amount', `users_id` = '$users_id' WHERE `orders`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: /admin/orders/');