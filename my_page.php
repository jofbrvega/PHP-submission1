<!-- HÄR SKRIVS PHP -->
<?php
    $my_name = "Johanna Vega";
    $my_age = 26;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PHP</title>
</head>
<body>
    <h1>MY PHP PAGE</h1>

    <p>
        My name is: 
    <?php echo $my_name; ?>
    </p>

    <p>
        My age is: 
        <?= $my_age ?>
    </p>

    <?php if($my_age >= 18){
        echo "<p> Du får köpa snus</p>";
    }
    else{
        echo "<p> Du får inte köpa snus </p>";
    }
    ?>

    

</body>
</html>