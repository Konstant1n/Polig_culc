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
    <link rel="stylesheet" type="text/css" href="/../../css/admin_style.css">
</head>

    <body>
    <form>
      <input type="button" onclick="window.location.href ='http://localhost/admin/';" value="Admin"/>
    </form>

    <table class="table">
                      <thead>
                              <tr>
            
                            <th>id</th>
                            <th>username</th>
                            <th>email</th>
                            <th>role</th>
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


                        </tr>

                    </tbody>
                    <?php

$users = mysqli_query($connect, "SELECT * FROM `users`");
            
        $users = mysqli_fetch_all($users);

        foreach ($users as $users) {
    ?>
                    <tr>
                        <td><?= $users[0] ?></td>
                        <td><?= $users[1] ?></td>
                        <td><?= $users[2] ?></td>
                        <td><?= $users[4] ?></td>
                       
                        <td>
                            <a href="update.php?id=<?= $users[0] ?>">Update</a>
                        <a style="color: red;" href="vendor/delete.php?id=<?= $users[0] ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>
