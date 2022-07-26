<?php 
  require('partials/main_header.php');

  if(!empty($_POST)){
      $sql = "SELECT * FROM `users` WHERE `email` = '" . $_POST['email'] . "' AND `password` = '" . $_POST['password'] . "'";

      $result = mysqli_query($conn, $sql);
      $user = $result->fetch_assoc();
      if($user){
        if(isset($_POST['remember'])) {
          setcookie('user_id', $user['id'], time()+60*60*24*30, '/');
          $_SESSION["user_id"] = $user['id'];
        } else {
          $_SESSION["user_id"] = $user['id'];
        }

          header("Location: calc.php");
      } else {
          $_SESSION["user_id"] = null;
          setcookie('user_id', '', 0, '/');
          echo "<script>alert(\"Пользователь не найден.\");</script>";
      }

  }

?>
<header class="logo">
    <img src="img/logo.svg">
    <!-- <p>Дизан друк Доставка</p> -->
</header>

<div class="mainText">
    <h3> Сервіс друку наклейок, етикеток, ціників</h3>
    <div class="main-image">

    </div>
    <h2>Наклейки</h2>

    <ul class="border clearfix">
        <li>друк за 1-3 робочий дні</li>
        <li>замовлення за декілька хвилин</li>
        <li>наклейки на папері, водостійкий білий та прозорий плівці</li>
    </ul>
</div>


<!-- <main class="loginForm">
    <form action="#" method="POST">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" value="1"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <a href="register.php">register</a>
    </form>
</main> -->
<div class="zeroblock clearfix"></div>
<section id="content">
    <form action="#" method="POST">
        <h1>Вхід</h1>
        <div>
            <input type="email" placeholder="Ваш email" required="" id="username" name="email" />
        </div>
        <div>
            <input type="password" placeholder="Пароль" required="" id="password" name="password" />
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" value="1"> Запам’ятайте мене
            </label>
        </div>

        <div>
            <input type="submit" value="Увійти" />
            <!-- <a href="#">Lost your password?</a> -->
            <a href="register.php">Зареєструватися</a>
        </div>
    </form><!-- form -->

</section><!-- content -->


<div class="fqa">
    <h3>Питання/відповіді</h3>
    <!-- <div class="flip_1">Як створити свою наклейку?</div>
        <div class="panel_1">Після вибору форми наклейки натискайте на іконки "Додати напис",<br>
            "Додати зображення" та "Колір фону" аби створити<br>
            наклейку зі своїми даними.</div> -->

    <div class="flip_2">Як додати штрих-код, qr-код на наклейку?</div>
    <div class="panel_2">Скористайтеся одним з онлайн сервісів генерації таких кодів.
        Наприклад, для генерації штрих-коду –
        http://atilog.ua/services/barcode/,
        для qr-коду – http://ua.qr-code-generator.com/.
        Збережіть згенерований код як jpg
        або png картинку i додайте її на наклейку.
        Розмір картинки коду повинен бути достатнього розміру
        аби уникнути проблем зі
        зчитуванням.
    </div>

    <div class="flip_3">Наклейки бояться води чи ні?</div>
    <div class="panel_3">Якщо вам потрібні водостійкі наклейки,
        вибирайте прозору або непрозору плівку в якості матеріалу
        для наклейок. В цьому випадку наклейки не бояться попадання
        вологи на них.
    </div>

    <div class="flip_4">У яки форматах можна завантажувати зображення?</div>
    <div class="panel_4">Можна завантажувати зображення в форматах
        JPG, PNG, WEBP i PDF
    </div>

    <div class="flip_5">Чи можна надрукувати наклейки зі свого готового файлу?</div>
    <div class="panel_5">Так можна. Вишліть файл на наш email nakl@ddd.ua,
        вкажіть також необхідну кількість наклейок, розмір, матеріал
        для друку i контактну інформацію.
    </div>
</div>
<!-- cod from google search -->


<!-- <footer>
    <h3>сучасне власне виробництво</h3>
    <ul class="mainFooter">
        <li>Цільний друк</li>
        <li>Офісний друк</li>
        <li>Широкоформатний друк</li>
        <li>Пластикові картики</li>
    </ul>
</footer> -->





<!-- (1/2) это тоже нужно , подключает по инету ДжейКвери -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!--  -->
</body>
<!-- (2/2)-й "метод — с локального сервера". Одним словом если это закоментить то не работает -->
<script src="js/accordeon.js"></script>

<?php 
  require('partials/footer.php');
?>