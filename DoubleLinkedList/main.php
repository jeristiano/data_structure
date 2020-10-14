<?php
require_once 'DoubleLinkedList.php';

$linked = new DoubleLinkedList();
//$linked->unshift('a');
//$linked->unshift('b');
//$linked->unshift('c');
//$linked->unshift('d');
$linked->push('1');
$linked->push('2');
$linked->push('3');
$linked->push('4');
$linked->push('5');
print_r($linked->getLength());
//var_dump($linked->pop());
//var_dump($linked->pop());
//var_dump($linked->pop());
//var_dump($linked->pop());
//var_dump($linked->pop());
var_dump($linked->shift());
var_dump($linked->shift());
var_dump($linked->shift());
var_dump($linked->shift());
var_dump($linked->shift());

//output
//string(1) "1"
//string(1) "2"
//string(1) "3"
//string(1) "4"
//string(1) "5"