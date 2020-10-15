<?php
include_once 'Stack.php';

$stack = new Stack(5);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->pop();
print_r($stack);

