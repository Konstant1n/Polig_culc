<?php

    require_once 'config/connect.php';


    $orders_id = $_GET['id'];


    $orders = mysqli_query($connect, "SELECT * FROM `orders` WHERE `id` = '$orders_id'");


    $orders = mysqli_fetch_assoc($orders);

    $comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `orders_id` = '$orders_id'");

    $comments = mysqli_fetch_all($comments);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Orders</title>
</head>
<body>
    <h2>type: <?= $orders['type'] ?></h2>
    <h4>size: <?= $orders['size'] ?></h4>
    <p>paper: <?= $orders['paper'] ?></p>
    <p>amount: <?= $orders['amount'] ?></p>
    <p>username: <?= $orders['users_id'] ?></p>
    <hr>





    <h3>Add comment</h3>
    <form action="vendor/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $orders['id'] ?>">
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