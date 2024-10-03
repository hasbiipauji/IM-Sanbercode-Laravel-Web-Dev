<?php

require_once 'animal.php';

class Ape extends Animal{
    public function yell(){
        $ape = "{$this->get()} <br> Yell = {$this->yell}";

        return $ape;
    }
}

$sungokong = new Ape("kera sakti", 2, "no", "", "Auoo");
