<?php 
  require('partials/header.php');

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
    <header class="logo">
        <img src="img/logo.svg">
        <!-- <p>Дизан друк Доставка</p> -->
    </header>

    <div class="mainText">
        <h2>Наклейки</h2>
        <p>створення та друк наклейок, етикеток, ціників</p>
        <ul>
            <li>друк за 1-3 робочий дні</li>
            <li>замовлення за декілька хвилин</li>
            <li>наклейки на папері, водостійкий білий та прозорий плівці</li>
        </ul>
    </div>
<main class="loginForm">
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
</main>
<footer>
        <h3>сучасне власне виробництво</h3>
        <ul class="mainFooter">
            <li>Цільний друк</li>
            <li>Офісний друк</li>
            <li>Широкоформатний друк</li>
            <li>Пластикові картики</li>
        </ul>
    </footer>

<?php 
  require('partials/footer.php');
?>


