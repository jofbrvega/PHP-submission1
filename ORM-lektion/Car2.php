<?php

class Car 
{
    public $make;
    public $model;

    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    public function __toString()
    {
        return "{$this->make} - {$this->model}";

    }
}



?>