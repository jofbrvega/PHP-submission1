<?php

class Car 
{
    // Klasslogik (properties & metoder)
    public $make;
    public $model;
    public $speed;

    public function speed_up()
    {
        $this->speed += 10;
        echo "{$this->make} {$this->model} - Vroom Vroom... <br>";
    }

    public function brake()
    {
        $this->speed -= 50;
        echo "{$this->make} {$this->model} - Braking!!!";

        if($this->speed <= 0){
            $this->speed = 0;
            echo "Stopped";
        }
        echo "<br>";
    }
}

?>