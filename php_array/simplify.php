<?php
/**
 * 简化代码
 * @author GreenForestQuan
 */
#list() 函数，确切的说它不是一个函数，而是一种语言结构，可以在单次操作中将数组中的值赋值给一组变量。
// 定义数组
$array = ['apple', 'banana', 'cup'];

// 不使用 list()
$a = $array[0];
$b = $array[1];
$c = $array[2];
//print_r($a);
//print_r($b);
//print_r($c);
// 使用 list() 函数
list($a, $b, $c) = $array;
//print_r($a);
//print_r($b);
//print_r($c);

$string = 'hello|tom|world';

#这个语言结构结合 preg_split() 或 explode() 这类函数使用效果更佳，如果你无需定义其中的某些值，可以直接跳过一些参数的赋值：
list($hello, ,$world) = explode('|', $string);
//print_r($hello);
//print_r（($world);

#list() 还可用于 foreach 遍历，这种用法更能发挥这个语言结构的优势：
$arrays = [[1, 1], [3, 3], [5, 5]];

foreach ($arrays as list($a, $b)) {
    $c = $a + $b;
    //echo $c, ', ';
}

//extract
$array = [
    'clothes'   => 't-shirt',
    'size'      => 'XXXXXXL',
    'color'     => 'red',
];

extract($array);
//echo $clothes, ' ', $size, ' ', $color;

//compact
$clothes = 't-shirt';
$size = 'XXXXXXL';
$color = 'red';

$array = compact('clothes', 'size', 'color');
//print_r（$array);