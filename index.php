<?php

require 'env.php';
require 'userClass.php';

$person1 = new User('Oscar', 26);
$person1->setName('Pedro');
$person1->sayHello();

