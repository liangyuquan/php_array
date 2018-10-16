<?php
/**
 * 过滤代码
 * @author GreenForestQuan
 */
#通过使用 array_map()，你可以对数组中的每个元素执行回调方法。你可以基于给定的数组传入函数名称或匿名函数来获取一个新数组
$animal = ['Dog', 'Cat', 'Snake', 'Lion'];
$aliases = array_map('strtolower', $animal);

//print_r($aliases);
// Array ( [0] => dog [1] => cat [2] => snake [3] => lion )

$numbers = [1, -2, 3, -4, 5];
$squares = array_map(function ($number) {
    return $number ** 2;
}, $numbers);

//print_r($squares);
// [1, 4, 9, 16, 25]

// 同时将数组的键名和键值传入到回调函数
$fruits = [
    'banana' => 'yellow',
    'apple' => 'green',
    'orange' => 'orange',
];
$res = array_map(function ($key, $value) {
    return $key . ' is ' . $value;
}, array_keys($fruits), $fruits);

//print_r($res);
//Array ( [0] => banana is yellow [1] => apple is green [2] => orange is orange )

//上面的写法可能没这么好看 可以用array_walk代替
array_walk($fruits, function (&$value, $key) {
    $value = $key . ' is ' . $value;
});

//print_r($fruits);
//Array ( [banana] => banana is yellow [apple] => apple is green [orange] => orange is orange )