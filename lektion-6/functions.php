<?php

function say_hey()
{
    echo "Hey, denna är anropad från index.php!";
}

function count_to($count)
{

    echo "(";
    for ($i = 0; $i <= $count; $i++) {
        echo $i;

        if ($i < $count) {
            echo "|";
        }
    }
    echo ")";
}

function get_firstname()
{
    return "Johanna";
}

function double_number($input)
{
    $result = $input * 2;
    return $result;
}

function get_header()
{ ?>
    <header>
        <h1>Lektion 6</h1>
        <p>Detta är funktionen GETHEADER</p>
    </header>

<?php }

function get_footer($start_year, $end_year) { ?>
<hr> 
    <footer>
        <p>
            <i>COPYRIGHT <?= $start_year ?> - <?= $end_year ?> (functions.php)</i>
        </p>
    </footer>
<?php }