<?php

    require_once 'config/connect.php';


    $users_id = $_GET['id'];


    $users = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$users_id'");


    $users = mysqli_fetch_assoc($users);

    $comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `users_id` = '$users_id'");

    $comments = mysqli_fetch_all($comments);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Users</title>
</head>
<body>
    <h2>username: <?= $users['username'] ?></h2>
    <h4>email: <?= $users['email'] ?></h4>
    <p>role: <?= $users['role'] ?></p>

    <hr>

    <h3>Add comment</h3>
    <form action="vendor/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $users['id'] ?>">
        <textarea name="body"></textarea> <br><br>
        <button type="submit">Add comment</button>
    </form>

    <hr>

    <h3>Comments</h3>
    <ul>
        <?php

            foreach ($comments as $comment) {
            ?>
                <li><?= $comment[2] ?></li>
            <?php
            }
        ?>
    </ul>
</body>
</html>