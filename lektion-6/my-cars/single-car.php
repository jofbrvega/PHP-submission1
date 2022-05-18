<?php 
require_once './db.php';
$car = get_car($_GET['id']); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single car</title>
</head>

<body>
    <h1>SINGLE CAR</h1>

    <h2>
    <?= $car['make'] ?> <?= $car['model'];?> 
    </h2>
    
    <form action="delete-car.php?id=<?= $car['id']?>" method="post">
        <input type="submit" value="Delete">
    </form>

</body>

</html>