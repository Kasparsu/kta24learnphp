<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

// $memory = [{h:2}, <- pos 0];

$var1 = 1;
$var2 = $var1;
$var2 = 2;
var_dump($var1);


$box1 = new Box();
$box1->height = 1;
$box2 = clone $box1;
$box2->height = 2;

var_dump($box1->height);
var_dump($box1);
var_dump($box2);