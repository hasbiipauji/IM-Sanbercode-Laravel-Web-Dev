<?php
require_once 'animal.php';

$sheep = new Animal("Shaun", 4, "no");

echo $sheep->get() . "<br><br>";
echo $kodok->jump() . "<br><br>";
echo $sungokong->yell() . "<br><br>";