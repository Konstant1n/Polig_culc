<?php
          require($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

         
          session_start();
          
           
              if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
                  $sql = "SELECT * FROM users WHERE id=" . $_SESSION["user_id"];
                      $result = mysqli_query($conn, $sql);
                      $user = $result->fetch_assoc();
          
                  if($user['role'] !="admin") {
                      header("Location: /");
                  }
                      } else {    
                          header("Location: http://localhost/");
          
              }
          ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="/../css/admin.css">
    <!-- <link rel="stylesheet" type="text/css" href="/../css/style.css"> -->

</head>

<body>

    <div class="calc-head clearfix">
        <div class="logo"></div>


        <div class="hello">
            <?php

            if (isset($_SESSION["user_id"]) && ($_SESSION["user_id"] != null)){
                $sql = "SELECT * FROM users WHERE id =" . $_SESSION["user_id"];
                $result = mysqli_query($conn, $sql);
                $user = $result->fetch_assoc();
                
            }

            ?>

            <h4>Вітаю, <?php echo $user['username']; ?></h4>

            <form>
                <input type="button" onclick="window.location.href ='../calc.php';" value="Вийти" />
            </form>

        </div>
    </div>

    <h3>Обери таблицю, якою бажаєш керувати:</h3>


    <div class="admin-rule">
            <a href="/admin/user/">
                <div class="item">
                <img src="/img/play-users.jpg" width="300" height="300" alt="user">
                <br>
                <span>Керуй юзерами</span>
                </div>
            </a>

            <a href="/admin/orders/">
                <div class="item">
                <img src="/img/play-orders.jpg" width="300" height="300" alt="orders">
                <br>
                <span>Поглянь, що замовили</span>
                
                </div>
            </a>

      </div>
<!-- 

    <p><a href="/admin/user/"><img src="/img/play-users.jpg" width="300" height="300" alt="user"></a>Керуй юзерами
        </p>

        <p><a href="/admin/orders/"><img src="/img/play-orders.jpg" width="300" height="300" alt="orders"></a>Поглянь,
            що замовили</p> -->





</body>

</html>