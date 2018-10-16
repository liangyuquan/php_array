<?php
/**
 * 过滤代码
 * @author GreenForestQuan
 */
#array_filter
$nums = [1, -1, 0, -2, 2];

$new = array_filter($nums, function ($number) {
    return $number > 0;
});

//print_r($new);
//Array ( [0] => 1 [4] => 2 )

// array_filter() 函数中定义回调函数以删除空值：
$new2 = array_filter($nums);

//print_r($new2);
//Array ( [0] => 1 [1] => -1 [3] => -2 [4] => 2 )


#array_unique() 函数用于从数组中获取唯一值元素。注意该函数会保留唯一元素在原数组中的键名：
$array = [1, 1, 1, 1, 2, 2, 2, 3, 4, 5, 5];
$uniques = array_unique($array);
//print_r($uniques);
//Array ( [0] => 1 [4] => 2 [7] => 3 [8] => 4 [9] => 5 )

#array_column() 函数可以从多维数组（multi-dimensional）中获取指定列的值，
$array = [
    ['id' => 1, 'title' => 'tree'],
    ['id' => 2, 'title' => 'sun'],
    ['id' => 3, 'title' => 'cloud'],
];

$ids = array_column($array, 'id');
//print_r($ids);
// [1, 2, 3]

//从结果集中总取出title列，用相应的id作为键值
$new = array_column($array, 'title', 'id');
//print_r($new);

//username 列是从对象获取 public 的 "username" 属性
class User
{
    public $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

$users = [
    new User('apple'),
    new User('banana'),
    new User('cup'),
];

print_r(array_column($users, 'username'));
//Array([0] => apple [1] => banana [2] => cup)
