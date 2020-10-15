<?php
//include_once 'Stack.php';
//
//$stack = new Stack(5);
//$stack->push(1);
//$stack->push(2);
//$stack->push(3);
//$stack->pop();
//print_r($stack);
//
include_once 'Queue.php';

$queue = new Queue();
$queue->enQueue(1);
$queue->enQueue(2);
$queue->enQueue(3);
$queue->enQueue(4);
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
var_dump($queue->isEmpty());
//$queue->deQueue();