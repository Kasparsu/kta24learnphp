<?php

class Box {
    public $width;
    protected $height;
    private $length;

    public function setLength(int $length) {
        $this->length = $length;
        if($length < 0) {
            $this->length = 0;
        }
    }
    
    public function getLength() {
        return $this->length;
    }

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
    public function visiblity(){
        $this->length = 2;
        var_dump($this->length);
    }
}

class MetalBox extends Box {
    public $weightPerUnit;
    public $material = 'Metal';
    public function mass(){
        return $this->volume() * $this->weigthPerUnit;
    }
    public function childVisiblity(){
        //$this->length = 2;
        var_dump($this->length);
    }
}

$box1 = new MetalBox();
$box1->setLength(23);
$box1->volume();
var_dump($box1);