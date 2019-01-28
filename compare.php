<?php 
// class MyQueue extends SplPriorityQueue
// {
// 	public function compare($priority1, $priority2)
// 	{
// 		if($priority1->age === $priority2->age){
// 			return 0;
// 		}
// 		return $priority1->age < $priority2->age ? -1 : 1;
// 	}
// }

// class Person
// {
// 	public $age;
// 	public function __construct($age)
// 	{
// 		$this->age = $age;
// 	}
// }

// $queue = new MyQueue();

// $queue->insert('A', new Person(2));
// $queue->insert('B', new Person(17));
// $queue->insert('C', new Person(4));
// $queue->insert('D', new Person(10));
// $queue->insert('E', new Person(1));

// echo $queue->top()."\n";

// while($queue->valid()){
// 	echo $queue->current()."<br/>";
// 	$queue->next();
// }

// $fSI = new FileSystemIterator('.');
// /** @var FileSystemIterator $fInfo */
// // 模拟 windows dir
// foreach ($fSI as $fInfo) {
//     printf("%8s%8s%8s %8s\n",
//         date("Y-m-d H:i:s", $fInfo->getMtime()),
//         $fInfo->isDir() ? '<DIR>' : '',
//         number_format($fInfo->getSize()),
//         $fInfo->getFileName()
//     );
// }

// //模拟 linux ls
// foreach ($fSI as $fInfo) {
//     printf("%8s  ",
//         $fInfo->getFileName()
//     );
// }


$list = new SplDoublyLinkedList();
$list->push('a');
$list->push('b');
$list->push('c');
$list->push('d');

// $list->unshift('top');
// $list->shift();
// $list->next();
$list->rewind();
// var_dump($list);
// if($list->valid()){
// 	echo 'current node is valid';
// 	var_dump($list->current());
// }else{
// 	echo "current node is not valid";
// 	var_dump($list->current());
// }
// $list->next();
// // echo $list->current()."<br/>";
// $list->rewind();
// $list->next();
// $list->prev();
// echo $list->current();

// var_dump(array(
// 	'pop' => $list->pop(),
// 	'count' => $list->count(),
// 	'isEmpty' => $list->isEmpty(),
// 	'bottom' => $list->bottom(),
// 	'top' => $list->top()
// ));

// $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
// var_dump($list->getIteratorMode());
// echo "<br/>";

// for($list->rewind();$list->valid();$list->next()){
// 	echo $list->current().PHP_EOL;
// }
// echo "<br/>";
// var_dump($a = $list->serialize());


// $arr = new SplFixedArray(3);
// $arr[0] = 'php';
// $arr[1] = 1;
// $arr[3] = 'python';

// foreach($arr as $v){
// 	echo $v.PHP_EOL;
// }

// echo "<br/>".$arr->getSize().PHP_EOL;

// $arr->setSize(5);

// echo "<br/>".$arr->getSize().PHP_EOL;
// $arr[2] = 'new one';
// var_dump($arr);

class A {
	public $i;
	public function __construct($i) {
		$this->i = $i;
	}
}

$a1 = new A(1);
$a2 = new A(2);
$a3 = new A(3);
$a4 = new A(4);

$container = new SplObjectStorage();

$container->attach($a1);
$container->attach($a2);
$container->attach($a3);
$container->attach($a4);
var_dump($container);



