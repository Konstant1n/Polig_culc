<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

  
    $orders_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $orders = mysqli_query($connect, "SELECT * FROM `orders` WHERE `id` = '$orders_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $orders = mysqli_fetch_assoc($orders);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update orders</title>
    <link rel="stylesheet" type="text/css" href="/css/updete.css">

</head>
<body>
    <h3>Update orders</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $orders['id'] ?>">
        <p>type</p>
        <input type="text" name="type" value="<?= $orders['type'] ?>">
        <p>size</p>
        <textarea name="size"><?= $orders['size'] ?></textarea>
        <p>paper</p>
        <input type="text" name="paper" value="<?= $orders['paper'] ?>"> <br> <br>
        <p>amount</p>
        <input type="text" name="amount" value="<?= $orders['amount'] ?>"> <br> <br>
        <p>users_id</p>
        <input type="text" name="users_id" value="<?= $orders['users_id'] ?>"> <br> <br>
        <button type="submit">Update</button>
    </form>





</body>
</html>