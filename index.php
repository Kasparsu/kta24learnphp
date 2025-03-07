<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

$box1 = new Box();
$box1->width = 10;
$box1->height = 20;
$box1->length = 30;
var_dump($box1);
var_dump($box1->volume());

$box2 = new Box();
$box2->width = 40;
$box2->height = 50;
$box2->length = 60;
var_dump($box2);
var_dump($box2->volume());
var_dump($box1);