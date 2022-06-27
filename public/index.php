<?php

require_once '../autoload.php';
use secclass\ClassHello;
use secclass\ClassGoodbye;

$class1= new ClassHello();
$class2 = new ClassGoodbye();
$class1->say();
$class2->say();