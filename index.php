<?php 
// $queue = new SqlPriorityQueue();

// $queue->insert("A", 2);

// $array = new SplFixedArray(10);
// $array[0] = 123;
// $array[9] = 321;
// var_dump($array);

$queue = new SplQueue();
$queue->enqueue("data1\n");
$queue->enqueue("data2\n");

echo $queue->dequeue();
echo $queue->dequeue();

$stack = new SplStack();
$stack->push("data1\n");
$stack->push("data2\n");

echo $stack->pop();
echo $stack->pop();