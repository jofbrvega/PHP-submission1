<?php

class Fruit{
    private $fruit_name; 

    public function __construct($input_name)
    {
        $this->$fruit_name = $input_name;
    }

    public function get_name()
    {
        return $this->$fruit_name;
    }
}