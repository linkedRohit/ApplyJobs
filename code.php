<?php

//function that prints the input name and a random number between 6 and 15 separated by a space.
function printName($name) {
    $randomNum = rand(6,15); //Generating random number between the given range
    return $name . " " . $randomNum;
}

echo printName('Rohit');//This input can be taken by stdin or some html form as well.

?>
