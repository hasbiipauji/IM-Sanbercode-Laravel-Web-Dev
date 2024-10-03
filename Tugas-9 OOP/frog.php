<?php

require_once 'animal.php';

class Frog extends Animal{
    public function jump(){
        $frog = "{$this->get()} <br> Jump = {$this->jump}";

        return $frog;
    }
}

$kodok = new Frog("buduk", 4, "no", "Hop Hop", "");

