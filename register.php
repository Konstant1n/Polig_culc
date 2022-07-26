<?php 
  require('partials/main_header.php');

  if(!empty($_POST)){
    echo $_POST['name'] . " - " . $_POST['email'];

            $sql = "INSERT INTO `users` (`Username`, `email`, `password`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "');";

        if (mysqli_query($conn  , $sql)) {
            
            header("Location: /");

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
<!-- <header class="logo">
        <img src="img/logo.svg">
    </header>

    <div class="mainText">
        <h2>Наклейки</h2>
        <p>створення та друк наклейок, етикеток, ціників</p>
        <ul>
            <li>друк за 1-3 робочий дні</li>
            <li>замовлення за декілька хвилин</li>
            <li>наклейки на папері, водостійкий білий та прозорий плівці</li>
        </ul>
    </div> -->

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
            <input type="text" class="form-control" id="floatingName" name="name" placeholder="Username">
            <label for="floatingInput">Username</label>
        </div>
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
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
</main> -->

<div class="zeroblock clearfix"></div>
<section id="content">
    <form action="#" method="POST">
        <h1>Реєстрація</h1>
        <div>
            <input type="text" placeholder="Ваше ім’я" required="" id="username" name="name" />
        </div>
        <div>
        <div>
            <input type="email" placeholder="Ваш email" required="" id="username" name="email" />
        </div>
        <div>
            <input type="password" placeholder="Пароль" required="" id="password" name="password" />
        </div>

        <!-- <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" value="1"> Запам’ятайте мене
            </label>
        </div> -->

        <div class="big">
            <input type="submit" value="Зареєструватися" />
            <!-- <a href="#">Lost your password?</a> -->
            <!-- <a href="register.php">Зареєструватися</a> -->
        </div>
    </form><!-- form -->
</section><!-- content -->


<?php 
  require('partials/footer.php');
?>