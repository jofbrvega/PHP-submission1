<?php
require_once './Car.php';
require_once './Fruit.php';
require_once './BankAccount.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 7</title>
</head>

<body>
    <h1>Lektion 7</h1>
    <hr>

    <h2>Skapar objekt av klassen Car</h2>
    <?php
    $toyota_prius = new Car();
    $ford_mustang = new Car();
    var_dump($toyota_prius);
    var_dump($ford_mustang);

    $apple = new Fruit();
    $orange = new Fruit();

    var_dump($apple, $orange);
    ?>
    <hr>

    <h2>Skapar objekt av BankAccount</h2>
    <?php
    $linus_account = new BankAccount();
    $linus_account->account_number = "123123123";
    $linus_account->balance = 0;
    var_dump($linus_account);

    $bills_account = new BankAccount();
    $bills_account->account_number = "543543543";
    $bills_account->balance = 70000;
    var_dump($bills_account);
    ?>
    <hr>

    <h2>Uppdaterar properties på Car</h2>
    <?php
    $toyota_prius->make = "Toyota";
    $toyota_prius->model = "Prius";
    $toyota_prius->speed = "500";

    $ford_mustang->make = "Ford";
    $ford_mustang->model = "Mustang";
    $ford_mustang->speed = "50";
    var_dump($ford_mustang, $toyota_prius);
    ?>
    <hr>

    <h2>Skapar objekt av Fruits</h2>
    <?php
    $apple->name = "Apple";
    $apple->taste = "Sweet";

    $orange->name = "Orange";
    $orange->taste = "Fresh";

    var_dump($apple, $orange);
    ?>
    <hr>

    <h2>Anropar Cars metod speed_up</h2>
    <?php
        var_dump($toyota_prius);
        $toyota_prius->speed_up();
        $toyota_prius->speed_up();
        $toyota_prius->speed_up();
        var_dump($toyota_prius, $ford_mustang); // Toyota speed 530

        for ($i=0; $i < 10; $i++) { 
            $ford_mustang->speed_up();
        }
        var_dump($toyota_prius, $ford_mustang); // Ford speed 800
    ?>
    <hr>

    <h2>Anropar Cars metod brake</h2>
    <?php
        $toyota_prius->brake();
        var_dump($toyota_prius); // Toyota speed 480

        $ford_mustang->brake();
        $ford_mustang->brake();
        $ford_mustang->brake();
        var_dump($ford_mustang);
    ?>

    <h2>Anropar Fruit metod Eat</h2>
    <?php
        $apple->eat();
        $orange->eat();
        
    ?>

    <h2>Anropar Fruit metod throw_out</h2>
    <?php
    $apple->throw_out();

    $banana = new Fruit();
    $banana->name = "Banana";
    $banana->taste = "Sweet";
    $banana->eat();
    $banana->throw_out();
    ?>
    <hr>

    <h2>Anropar BankAccounts metod: Deposit</h2>
    <?php
    $linus_account->deposit(100);
    $bills_account->deposit(10000);
    var_dump($linus_account, $bills_account);
    ?>

    <h2>Anropar Bankaccout metod: withdraw</h2>
    <?php
    $withdraw_success = $linus_account->withdraw(1);

    if ($withdraw_success) {
        echo "Withdrawal processed from Linus";
    }else{
        echo "Your balance is too low";
    }
    ?>
</body>

</html>