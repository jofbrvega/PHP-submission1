<?php
    require_once "./Car2.php";
    require_once "./Fruit2.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 8</title>
</head>
<body>
    <h1>Lektion 8</h1>
    <hr>
    
    <h2>Skapa nytt objekt</h2>
    <?php
        $my_car = new Car("Tesla", "XYZ"); 
    ?>
    <hr>

    <h2>Skapa nytt objekt av klassen Fruit</h2>
    <?php
        $my_fruit = new Fruit("Apelsin");

        // ...

        echo $my_fruit->get_name();
    ?>
</body>
</html>