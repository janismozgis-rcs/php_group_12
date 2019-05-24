<?php

$someNumber = 123; // integer
$someFloat = 3.14; // float
$someText = 'foo 
bar 
baz'; // string
$someText2 = "foo bar baz";
$someTrue = true; // bool
$someNothing = null;

$someNumber = 321;

$someCars = ['zaz', 'gaz', 'uaz', 'vaz', 'maz', 'bmw']; // array
// $someCars = array(1, 2, 3);
echo $someCars[2] . '<br>';
echo $someCars[5] . '<br>';

$person = [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 21,
];

echo $person['name'];