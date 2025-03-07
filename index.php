<?php
// comments are this way

/*
    multi line comment
*/

//echo 'Hello world';

$var = 'Kaspar'; // string
$var = 4; // int
$var = 3.4; // float
$var = true; // bool
$var = false; // bool
$var = null; // null
$var = ['hello', 2, 4, true]; // array
$var = new StdClass(); // object
var_dump($var);
$var = ['hello', 2, 4, true];
foreach($var as $key=>$value){
    var_dump($key);
}

$var = [
    'name' => 'Kaspar',
    'age' => 32,
    'hasCat' => true,
    43,
    'asdasd',
    true
];

var_dump($var);
var_dump($var[0]);
var_dump($var['name']);

function hello($name){
    echo 'hello ' . $name; // text concatinate is with . not with +
}

hello('Kaspar');

$name = 'Martin';
echo "dont be an a** \n $name";