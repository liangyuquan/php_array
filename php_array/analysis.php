<?php
//php7.2.7
/* echo memory_get_usage(), "\n";
$start = memory_get_usage();
$a = Array();
for ($i = 0; $i < 1000; $i ++) {
    $a[$i] = $i + $i;
}
$mid = memory_get_usage();
echo memory_get_usage(), "\n";
for ($i = 1000; $i < 2000; $i ++) {
    $a[$i] = $i + $i;
}
$end = memory_get_usage();
echo memory_get_usage(), "\n";
echo 'argv:', ($mid - $start) / 1000, 'bytes', "\n";
echo 'argv:', ($end - $mid) / 1000, 'bytes', "\n"; */

/*
 * 输出的结果 
 389920
 426872
 459640
 argv:36.92bytes
 argv:32.768bytes */

$start = memory_get_usage();
$a = array_fill(0, 10000, 1);
$mid = memory_get_usage(); //10k elements array;	
echo 'argv:', ($mid - $start )/10000,'byte' , "\n";	
$b = array_fill(0, 10000, 1);	
$end = memory_get_usage(); //10k elements array;	
echo 'argv:', ($end - $mid)/10000 ,'byte' , "\n";

//argv:52.844byte
//argv:52.8472byte
