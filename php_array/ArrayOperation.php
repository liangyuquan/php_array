<?php
/**
 * 数字连接操作代码
 * @author GreenForestQuan
 */

$array1 = ['a' => 'a', 'b' => 'b', 'c' => 'c'];
$array2 = ['a' => 'A', 'b' => 'B', 'D' => 'D'];

$merge1 = array_merge($array1, $array2);
$merge2 = $array1 + $array2;

//相同key取后者
//print_r($merge1);
//Array ( [a] => A [b] => B [c] => c [D] => D )

//相同key取前者
//print_r($merge2);
//Array ( [a] => a [b] => b [c] => c [D] => D )


$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];

$diff = array_diff($array1, $array2);
$intersect = array_intersect($array1, $array2);
//print_r($diff); // 差集 [0 => 1, 1 => 2]
//print_r($intersect); //交集 [2 => 3, 3 => 4]


/**
 * 数组运算
 * @var array $numbers
 */
$numbers = [1, 2, 3, 4, 5];

/* print_r(array_sum($numbers));// 15

print_r(array_product($numbers));// 120

print_r(array_reduce($numbers, function ($carry, $item) {
    return $carry ? $carry / $item : 1;
}));// 0.0083 = 1/2/3/4/5 */

$things = ['apple', 'apple', 'banana', 'tree', 'tree', 'tree'];
$values = array_count_values($things);
//print_r($values);
//Array ( [apple] => 2 [banana] => 1 [tree] => 3 )


/**
 * 生成数组
 */

$bind = array_fill(0, 5, 'GreenForestQuan');
//print_r($bind);
//Array ( [0] => GreenForestQuan [1] => GreenForestQuan [2] => GreenForestQuan [3] => GreenForestQuan [4] => GreenForestQuan )

//获取范围内的数组
$words = range('a', 'z');
//print_r($words); 
//Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => f [6] => g [7] => h [8] => i [9] => j [10] => k [11] => l [12] => m [13] => n [14] => o [15] => p [16] => q [17] => r [18] => s [19] => t [20] => u [21] => v [22] => w [23] => x [24] => y [25] => z ) 

$words = range('A', 'z');
//print_r($words);
/*  Array ( [0] => A [1] => B [2] => C [3] => D [4] => E [5] => F [6] => G [7] => H [8] => I [9] => J [10] => K [11] => L [12] => M 
[13] => N [14] => O [15] => P [16] => Q [17] => R [18] => S [19] => T [20] => U [21] => V [22] => W [23] => X [24] => Y [25] => Z 
     [26] => [ [27] => \ [28] => ] [29] => ^ [30] => _ [31] => ` [32] => a [33] => b [34] => c [35] => d [36] => e [37] => f 
     [38] => g [39] => h [40] => i [41] => j [42] => k [43] => l [44] => m [45] => n [46] => o [47] => p [48] => q [49] => r 
     [50] => s [51] => t [52] => u [53] => v [54] => w [55] => x [56] => y [57] => z ) */

$words = range('a', 'Z');
//print_r($words);
//Array ( [0] => a [1] => ` [2] => _ [3] => ^ [4] => ] [5] => \ [6] => [ [7] => Z )

$hours = range(0, 10);
//print_r($hours); 
// Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 [6] => 6 [7] => 7 [8] => 8 [9] => 9 [10] => 10 )

//获取数组前三个元素
$top = array_slice($hours, 0, 3);
print_r($top);
//Array ( [0] => 0 [1] => 1 [2] => 2 )

$model = ['id' => 1, 'title' => 2];
$models = [$model, $model, $model];

$id_to_title = array_combine(
    array_column($models, 'id'), 
    array_column($models, 'title')
);

//print_r($id_to_title);
//Array ( [1] => 2 )

/**
 * 统计出现次数最多的3个
 */
$letters = ['a', 'a', 'a', 'a', 'b', 'b', 'c', 'd', 'd', 'd', 'd', 'd'];

$values = array_count_values($letters);
arsort($values);
$top = array_slice($values, 0, 3);
print_r($top);


/**
 * array_sum() 和 array_map() 函数仅需数行就能完成计算订单的价格：
 */ 
$order = [
    ['product_id' => 1, 'price' => 99, 'count' => 1],
    ['product_id' => 2, 'price' => 50, 'count' => 2],
    ['product_id' => 2, 'price' => 17, 'count' => 3],
];

$sum = array_sum(array_map(function ($product_row) {
    return $product_row['price'] * $product_row['count'];
}, $order));

//print_r($sum);// 250





