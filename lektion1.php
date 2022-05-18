<!-- HÄR GÅR VI IGENOM BAS FÖR PHP -->

<?php

// Skriver ut hej!!!! 
    echo "Hej!!!!"; 

// (\n) Detta är ett mellan rum, men alla mellan rum inom citat tecken räknas som mellanrum.

//skriver ut all info om PHP på sidan. Används som verktyg
// phpinfo(); 

    echo "<br>"; // brytpunkt / 

// Skapa variabler
// Variabel name - STRING
    $name =  "Johanna Vega";
    // echo $name;

// variabel namn - INT
    $my_age = 12;
    // echo $my_age;

// Lägg ihop variabler som strings (concat)
    echo $name . "s ålder är " . $my_age . " <br> ";
    echo "{$name}s ålder är {$my_age} <br>" ; 

// BOOLEAN
    $is_hungry = true;
    echo "{$name}s is hungry: $is_hungry <br>";

// Var damp, används för att skriva ut variabler, deras värde & typ
    var_dump($name);
    var_dump($my_age);
    var_dump($is_hungry);