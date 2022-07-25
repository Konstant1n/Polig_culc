<?php
          require($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

         
          session_start();
          
           
              if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
                  $sql = "SELECT * FROM users WHERE id=" . $_SESSION["user_id"];
                      $result = mysqli_query($conn, $sql);
                      $user = $result->fetch_assoc();
          
                  if($user['role'] !="admin") {
                      header("Location: http://localhost/");
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
</head>

  <body>
  <form>
      <input type="button" onclick="window.location.href ='http://localhost/calc.php';" value="EXIT"/>
    </form>
  <h3>Hello my favorite admin</h3>



  <p><a href="http://localhost/admin/user/"><img src="/img\user.png" width="400" 
   height="400" alt="user"></a></p>




   <p><a href="http://localhost/admin/orders/"><img src="/img\oders.png" width="400" 
   height="400" alt="orders"></a></p>

  

  



</body>
</html>
