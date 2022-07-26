<?php 
  require('partials/header.php');

  ?>

<body>

    <div class="bg">


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

                <h3>Вітаємо, <?php echo $user['username']; ?></h3>

                <form>
                    <input type="button" onclick="window.location.href ='logout.php';" value="Вийти" />
                </form>

                <form>
                    <input type="button" onclick="window.location.href ='/admin/';" value="Управління" id="administration"/>
                </form>

            </div>
        </div>



        <h2>Швидкий розрахунок</h2>

        <form action="form_add_order.php" method="POST">
            <div class="form-block">

                <div>
                    <h3>Тип</h3>
                    <input type="radio" name="figure_type" value="Прямокутні" /><span>Прямокутні</span> <br>
                    <input type="radio" name="figure_type" value="Круглі" /><span>Круглі</span> <br>
                    <input type="radio" name="figure_type" value="Зі скру-ми кутами" /><span>Овальні</span> <br>
                </div>

                <div>
                    <h3>Розмір, мм</h3>
                    <input type="radio" name="size" value="15x15" /><span>15x15</span> <br>
                    <input type="radio" name="size" value="20x20" /><span>20x20</span> <br>
                    <input type="radio" name="size" value="30x30" /><span>30x30</span> <br>
                    <input type="radio" name="size" value="40x40" /><span>40x40</span> <br>
                    <input type="radio" name="size" value="50x50" /><span>50x50</span> <br>
                    <input type="radio" name="size" value="60x60" /><span>60x60</span> <br>
                </div>

                <div>
                    <h3>Матеріал</h3>
                    <input type="radio" name="paper" value="Папір самоклеючий" /><span>Папір самоклеючий</span> <br>
                    <input type="radio" name="paper" value="Плівка біла глянцева" /><span>Плівка біла глянцева</span>
                    <br>
                    <input type="radio" name="paper" value="Плівка біла матова" /><span>Плівка біла матова</span> <br>
                    <input type="radio" name="paper" value="Плівка прозора" /><span>Плівка прозора</span> <br>
                </div>

                <div>
                    <h3>Кількість</h3>
                    <input type="radio" name="amount" value="50" /><span>50</span> <br>
                    <input type="radio" name="amount" value="100" /><span>100</span> <br>
                    <input type="radio" name="amount" value="250" /><span>250</span> <br>
                    <input type="radio" name="amount" value="500" /><span>500</span> <br>
                    <input type="radio" name="amount" value="1 000" /><span>1 000</span> <br>
                    <input type="radio" name="amount" value="2 500" /><span>2 500</span> <br>
                    <input type="radio" name="amount" value="5 000" /><span>5 000</span> <br>
                    <input type="radio" name="amount" value="10 000" /><span>10 000</span> <br>
                </div>

                <input id="submit" type="submit" value="Зробити замовлення">
            </div>

        </form>

            
        
        <div class="table-bloc">
            <?php 
                //$sql = "SELECT * FROM orders WHERE userid =" . $_SESSION["user_id"];
                 $sql = "SELECT * FROM orders WHERE users_id =" . $_SESSION["user_id"];
                    $result = mysqli_query($conn,$sql);
            ?>
            <h4>Історія Ваших замовлень:</h4>
            <table class="resp-tab">
                <thead>
                    <tr>
                        <th>Номер замовлення</th>
                        <th>Тип</th>
                        <th>Розмір</th>
                        <th>Матеріал</th>
                        <th>Кількість</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['type']?></td>
                        <td><?php echo $row['size']?></td>
                        <td><?php echo $row['paper']?></td>
                        <td><?php echo $row['amount']?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>

    </div>

    <?php 
    if($user['role'] !="admin") {
        echo '<script src="js/main.js"></script>';
    }

  require('partials/footer.php');
  
?>