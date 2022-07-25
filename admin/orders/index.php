<?php
        require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="/../css/admin_style.css">
</head>


    <body>

    <form>
      <input type="button" onclick="window.location.href ='/admin/';" value="Admin"/>
    </form>

    <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>type</th>
                            <th>size</th>
                            <th>paper</th>
                            <th>amount</th>
                            <th>users_id</th>
                            <th>options</th>

                        </tr>
         </thead>

          <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                    </tbody>
        <?php

            
            $orders = mysqli_query($connect, "SELECT * FROM `orders`");

            $orders = mysqli_fetch_all($orders);

            foreach ($orders as $orders) {
                ?>
                    <tr>
                        <td><?= $orders[0] ?></td>
                        <td><?= $orders[1] ?></td>
                        <td><?= $orders[2] ?></td>
                        <td><?= $orders[3] ?></td>
                        <td><?= $orders[4] ?></td>
                        <td><?= $orders[5] ?></td>
                        <td>
                            <a href="update.php?id=<?= $orders[0] ?>">Update</a>
                        <a style="color: red;" href="vendor/delete.php?id=<?= $orders[0] ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>
