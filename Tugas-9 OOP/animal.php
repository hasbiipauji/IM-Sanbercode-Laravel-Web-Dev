<?php

require_once 'index.php';
require_once 'frog.php';
require_once 'ape.php';

class Animal{
    public $name,
           $legs,
           $cold_blooded,
           $jump,
           $yell;
       

    public function __construct($name = 'shaun', $legs = 4, $cold_blooded = 'no', $jump = 'hop hop', $yell = 'auoo')
    {
        $this->name         = $name;
        $this->legs         = $legs;
        $this->cold_blooded = $cold_blooded;
        $this->jump         = $jump;
        $this->yell         = $yell;
    }

    public function get(){
        $animal = "Name = {$this->name} <br> Legs = {$this->legs} <br> Cold Blooded = {$this->cold_blooded} ";

        return $animal;
    }
}


