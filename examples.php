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

echo $person['name'] . '<br>';

$foo = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

echo $foo[2][1] . '<br>';

$people = [
    [
        'name' => 'John',
        'surname' => 'Doe',
        'age' => 21,
    ],
    [
        'name' => 'Jane',
        'surname' => 'Doe',
        'age' => 25,
    ],
];

echo $people[1]['surname'] . '<br>';

// +
// -
// /
// *
// %

// 1 + '1' = '11' (JS)
// 1 + '1' = 2 (PHP)

// ==
// !=
// >
// <
// >=
// <=

// !==
// ===

if (true) {

} elseif (true) {
    
} else {

}

$variable = 'foo';
switch ($variable) {
    case 'foo':
        // something
        break;
    default:
        // something else
        break;
}


while (false) {
    // something
}

do {
    // something
} while(false);


for ($i = 0; $i < 10; $i++) { 
    echo $i . '<br>';
}

// sakitam no 0 - 50
// ja bez atlikuma dalās ar 2 => fizz
// ja bez atlikuma dalās ar 3 => bazz
// ja bez atlikuma dalās ar abiem => fizz bazz
// citādi izvada skaitli

// fizz bazz
// 1
// fizz
// bazz
// fizz
// 5
// fizz bazz
// 7
// fizz
// bazz
// fizz
// 11
// fizz bazz
// 13
// fizz
// bazz
// fizz
// 17
// fizz bazz
// 19
// fizz
// bazz
// fizz
// 23
// fizz bazz
// 25
// fizz
// bazz
// fizz
// 29


// for ($i = 0; $i < 50; $i++) { 
//     if ($i % 2 == 0 && $i % 3 == 0) {
//         echo 'fizz bazz' . '<br>';
//     } elseif ($i % 2 == 0) {
//         echo 'fizz' . '<br>';
//     } elseif ($i % 3 == 0) {
//         echo 'bazz' . '<br>';
//     } else {
//         echo $i . '<br>';
//     }
// }


$cars = [5 => 'vaz', 6 => 'gaz', 8 => 'zaz', 10 => 'uaz'];

foreach ($cars as $key => $car) {
    echo $key . ' = ' . $car . '<br>';
}

echo strrev('Foo') . '<br>';
echo str_repeat('ab', 10) . '<br>';
echo array_key_exists(6, $cars) . '<br>';

$emails = 'foo@bar.com,baz@something.net';
$emailArray = explode(',', $emails);
var_dump($emailArray);
echo '<br>';
echo implode(', ', $emailArray) . '<br>';

function add(int $num1, int $num2 = 5): int
{
    return $num1 + $num2;
}

echo add(1, 10) . '<br>';
echo add(1) . '<br>';
echo add('1') . '<br>';

function dd($attr) {
    echo '<pre>';
    var_dump($attr);
    die;
}

class Animal 
{
    private $name;
    protected $energy = 10;
    public static $animalCount;

    public function __construct(string $animalName)
    {
        $this->name = $animalName;
        self::$animalCount += 1;
    }

    public function run()
    {
        $this->energy -= 1;
    }
    public function sleep()
    {
        $this->energy += 1;
    }
}

class Cat extends Animal implements CanEat
{
    public function sleep()
    {
        $this->energy += 2;
    }

    public function eat()
    {
        $this->energy += 1;
    }
}

interface CanEat
{
    public function eat();
}

$muris = new Cat('Muris');
$muris->run();
$muris->run();
$muris->run();
$muris->run();

$puka = new Cat('Puka');
$puka->sleep();
$puka->sleep();
$puka->sleep();
$muris->run();
$muris::$animalCount = 10;
dd($puka::$animalCount);
