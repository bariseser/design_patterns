<?php
include './vendor/autoload.php';

use IceCream\IceCream;
use IceCream\Nutty;

$iceCream = new IceCream();
$nutty = new Nutty($iceCream);
echo $nutty->makeIceCream() . PHP_EOL;
echo $nutty->getPrice() . PHP_EOL;
