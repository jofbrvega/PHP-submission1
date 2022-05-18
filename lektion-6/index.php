<?php
require_once './functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 6</title>
</head>

<body>

    <?php /* Detta är en PHP-kommentar */  ?>
    <?php get_header(); ?>

    <hr>

    <h3>Skapar funktionen</h3>
    <?php
    function say_hello()
    {
        echo "Hello!";
    }
    ?>

    <h3>Anropar funktionen</h3>
    <?php say_hello(); ?>

    <h3>Anropar funktionen från annan fil</h3>
    <?php say_hey(); ?>

    <h3>Anropar count funktionen med argument</h3>
    <?php count_to(10); ?>
    <?php count_to(9); ?>
    <?php count_to(8); ?>

    <h3>Anropar namn funktionen med returvärde</h3>
    <?php echo get_firstname(); ?>

    <h3>Returnerar double_number </h3>
    <?= double_number(6); ?> <br>
    <?= double_number(5); ?> <br>

    <?php require_once './footer.php';?> 
    <?php get_footer(2020, 2025); ?>


</body>

</html>