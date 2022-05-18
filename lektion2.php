<!-- HÄR GÅR VI IGENOM OLIKA LOOPS -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 2</title>
</head>
<body>
    <h1>Lektion 2 </h1>    

    <hr>

    <h2>Arrayer med numeriska index</h2>
    <?php
    $my_array = array("Johanna", "Rasmus", "Jovan", "Chyrell");
    var_dump($my_array); 
    var_dump($my_array[1]);
    ?>

    <hr>

    <h2>Array med vänners åldrar</h2>
    <?php
    $friends_ages = [26, 25, 20, 51];
    var_dump($friends_ages);
    $average_age = array_sum($friends_ages) / count($friends_ages);
    var_dump($average_age);
    ?>

    <hr>

    <h2> Array: Nyckelvärde-par</h2>
    <?php
    $me = [
        "name" => "Johanna Vega",
        "age" => 26,
        "motto" => "No stress, there's a timing for everything"
    ];
    var_dump($me)
    ?>

    <p>
        <b>Mitt motto är: </b> 
        <?= $me["motto"] ?> 
    </p>

    <h2>While-loop</h2>
    <?php
    $counter = 1;
    while($counter <= 12) {
        echo $counter . "<br>";
        // $counter = $counter + 1;
        // $counter += 1;
        $counter++;
    
    // Detta avbryter närmster loop om counter = 5 (slutar allså vid 4)
    if($counter == 5){
        break;
    }
}
    ?>

    <h2>For-loop</h2>
    <?php
    for($i = 0; $i < 10; $i++){
        echo $i . " / ";
    }
    var_dump($me);
    ?>

    <h2>Foreach-loop (numeriska index)</h2>
    <?php
    foreach($friends_ages as $age){
        echo $age . ", ";
    }
    ?>
    <hr>

    <h2>Foreach-loop (Nyckelvärde-par)</h2>
    <?php
    foreach($me as $key => $value){
        echo "<b>{$key}:</b> {$value} <br>";
    }
    ?>
    



</body>
</html>