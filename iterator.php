<?php 
$fSI = new FileSystemIterator('../');
var_dump($fSI);

foreach ($fSI as $fInfo) {
	printf("%8s%8s%8s %8s\n",
		date("Y-m-d H:i:s",$fInfo->getMtime()),
		$fInfo->isDir() ? '<DIR>' : '',
		number_format($fInfo->getSize()),
		$fInfo->getFileName()
	);
}
echo "<br>";
printf("%8s%8s%8s\n","hhh","vvv","kk");
echo 'lll';
echo "<br>";
printf("%8s",'hhhhhh');