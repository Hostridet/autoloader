<?php
require_once __DIR__ . '/../autoload.php';
use secclass\goodbye;


$class1= new ClassHello();
$class2 = new ClassGoodbye();
$class1->say();
$class2->say();