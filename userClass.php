<?php
class User {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function sayHello() {
        echo "Hello, my name is {$this->name} and I am {$this->age} years old.";
    }
}