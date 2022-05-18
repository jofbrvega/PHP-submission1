<?php
require_once './db.php';
?>

<!DOCTYPE html> <?php /* http://localhost/lektion-6/my-cars */ ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cars</title>
</head>

<body>

    <h1>My cars</h1>

    <form action="post-car.php" method="post">
        <input type="text" name="make" placeholder="make"> <br>
        <input type="text" name="model" placeholder="model"> <br>
        <input type="SUBMIT" value="Save">
    </form>

    <ul>
        <?php
        $cars = get_cars();

        foreach ($cars as $car) {
            echo "<li> 
            <a href='single-car.php?id={$car['id']}'>
            {$car['make']} : {$car['model']}
            </a>
            </li>";
        }
        ?>
    </ul>
</body>

</html>