<?php

class Person {
    private $name;
    private $age;
    public function __construct($name, $age){
        var_dump('object created');
        $this->name = $name;
        $this->age = $age;
    }
    
    public function __invoke(...$args){
        var_dump($args);
    }

    public function __call($name, $args){
        var_dump($name, $args);
    }

    public function __set($name, $value){
        var_dump($name, $value);
    }

    public function __get($name){
        var_dump($name);
        return 'some value';
    }

    public function __toString(){
        return "Person is $this->age old and has a name of $this->name";
    }

    public function __destruct(){
        var_dump('object destroyed');
    }
}

$person = new Person('Kaspar', 31);
$person->gender = 'Male';
var_dump($person->weight);
$person->notexists(1, 'lol', 'still works');
echo $person;
$person('asdas');
var_dump($person);