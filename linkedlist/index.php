<?php

$a = new SplDoublyLinkedList;
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12];
for ($i = 0; $i < count($arr); $i++) {
    $a->add($i, $arr[$i]);
}

$a->add(10,11); //Add/insert a new value at the specified index
$a->unshift(0); //First
$a->push(13); // End

//Remove
//$a->shift(1); //First
//$a->pop(); //last
$a->rewind();
$a->next();
print_r($a->current());

echo PHP_EOL;
/*
 //initial from first


echo "SplDoublyLinkedList array last/top value " .  $a->top() ." \n";
echo "SplDoublyLinkedList array count value " .  $a->count() ." \n";
echo "SplDoublyLinkedList array first/top value " . $a->bottom() . " \n\n";

while($a->valid()){ //check with valid method
    echo 'key ', $a->key(), ' value ', $a->current(),"\n"; //key and current method use here
    $a->next(); //next method use here
}

$a->pop(); //remove array last value

print_r($a);
$s=$a->serialize();
echo $s;

*/
