<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box {
    public $weightPerUnit;
    public $material = 'Metal';
    public function mass(){
        return $this->volume() * $this->weigthPerUnit;
    }
}

$box1 = new MetalBox();
var_dump($box1);