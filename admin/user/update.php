<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

  
    $users_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $users = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$users_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $users = mysqli_fetch_assoc($users);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update users</title>
    <link rel="stylesheet" type="text/css" href="/css/updete.css">
</head>
<body>
    <h3>Update users</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $users['id'] ?>">
        <p>username</p>
        <input type="text" name="username" value="<?= $users['username'] ?>">
        <p>email</p>
        <textarea name="email"><?= $users['email'] ?></textarea>
        <p>role</p>
        <input type="text" name="role" value="<?= $users['role'] ?>"> <br> <br>
        <button type="submit">Update</button>
    </form>




</body>
</html>