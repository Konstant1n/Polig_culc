<?php


$servername = "localhost";
        $database = "blog_php";
        $username = "root";
        $password = "";
        // Создаем соединение
        $connect = mysqli_connect($servername, $username, $password, $database);


if (!$connect) {
    die('Error connect to database!');
}
?>