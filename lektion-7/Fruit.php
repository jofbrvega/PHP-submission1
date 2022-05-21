<?php

class Fruit 
{
    public $name;
    public $taste;

    private $gone = false; // Private betyder att vi endast får tag på denna i samme fil

    public function eat()
    {
        if ($this->gone) {
           echo "The {$this->name} is aldready gone";
        }
        else {
        echo "This {$this->name} tastes {$this->taste} <br>";
            $this->gone = true;
        }  
    }

    public function throw_out()
    {
        if ($this->gone) {
            echo "The {$this->name} is already thrown out <br>";
        } else {
        echo "Throwing away {$this->name} <br>" ;
        $this->gone = true;
        }
    }
}

?>