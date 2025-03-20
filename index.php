<?php

class Person {
    public $name;
    public static $count;

    public static function example(){
        var_dump(static::$count);
        var_dump(static::class);
        var_dump(self::class);
    }

    public function getCount(){
        var_dump(static::$count);
    }
}

class Client extends Person {
    public static $count = 30;
}

$person = new Person();
$person->getCount();

Person::$count = 1;

Person::$count = 2;

Person::example();
Client::example();

var_dump(Person::$count, Person::$count);