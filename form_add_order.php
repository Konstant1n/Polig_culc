<?php 
include "config/db.php";

if (!empty($_POST)) {
    // Записуємо в змінну значення з обраного чекбоксу
    
    $figure_type = trim($_POST['figure_type']);
    $size = trim($_POST['size']);
    $paper = trim($_POST['paper']);
    $amount = trim($_POST['amount']);

}

         $sql = "INSERT INTO `orders` (`type`, `size`, `paper`, `amount`) VALUES ('{$figure_type}', '{$size}', '{$paper}', '{$amount}')";
    if (mysqli_query($conn, $sql)) {

        echo "New record created successfully";
        header("Location: /calc.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    // Метод повернутися на ту ж сторінку.
    // header("Location: ".$_SERVER["REQUEST_URI"]);

?>