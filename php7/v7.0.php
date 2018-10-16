<?php
/* ++++++++++++++++++++php 7.0 start +++++++++++++++++++*/
/**
 * 标量类型声明
 */
function typeInt(int $a)
{
    echo $a;
}
//typeInt('aaa');
/*Fatal error: Uncaught TypeError: Argument 1 passed to intF() must be of the type integer, string given, called in /datas/htdocs/root/php7/var.php on line 6 and defined in /datas/htdocs/root/php7/var.php:3
 Stack trace:
 #0 /datas/htdocs/root/php7/var.php(6): typeInt('aaa')
 #1 {main}
 thrown in /datas/htdocs/root/php7/var.php on line 3*/
function typeString(string $a)
{
    echo $a;
}
//typeString('aaa');
// aaa


/**
 * 返回值类型声明
 */
function returnArray(): array
{
    return [1, 2, 3, 4];
}

//print_r(returnArray());


/**
 * 合并运算符
 */
$username = $_GET['user'] ?? 'nobody';
//这两个是等效的  当不存在user 则返回?? 后面的参数
//echo $username."\n";
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

//echo $username."\n";


/**
 * 太空船操作符
 */
// 整数
/* echo 1 <=> 1; // 0 当左边等于右边的时候，返回0
 echo 1 <=> 2; // -1  当左边小于右边，返回-1
 echo 2 <=> 1; // 1  当左边大于右边，返回1
 
 // 浮点数
 echo 1.5 <=> 1.5; // 0
 echo 1.5 <=> 2.5; // -1
 echo 2.5 <=> 1.5; // 1
 
 // 字符串
 echo "a" <=> "a"; // 0
 echo "a" <=> "b"; // -1
 echo "b" <=> "a"; // 1 */

/**
 * define 定义数组
 */
define('ANIMALS', ['dog', 'cat', 'bird']);
//echo ANIMALS[1]; // 输出 "cat"

/**
 * use方法 批量导入
 */
// PHP 7 之前的代码
/* use some\namespace\ClassA;
use some\namespace\ClassB;
use some\namespace\ClassC as C;

use function some\namespace\fn_a;
use function some\namespace\fn_b;
use function some\namespace\fn_c;

use const some\namespace\ConstA;
use const some\namespace\ConstB;
use const some\namespace\ConstC;

// PHP 7+ 及更高版本的代码
use some\namespace\{ClassA, ClassB, ClassC as C};
use function some\namespace\{fn_a, fn_b, fn_c};
use const some\namespace\{ConstA, ConstB, ConstC}; */

//Unicode codepoint 转译语法
/* echo "\u{aa}"; //ª
echo "\u{0000aa}";  //ª
echo "\u{9999}"; //香
 */

/**
 * 匿名类 
 * todo 不理解
 */
/* interface Logger {
    public function log(string $msg);
}

class Application {
    private $logger;

    public function getLogger(): Logger {
        return $this->logger;
    }

    public function setLogger(Logger $logger) {
        $this->logger = $logger;
    }
}

$app = new Application;
$app->setLogger(new class implements Logger {  //这里就是匿名类
    public function log(string $msg) {
        echo $msg;
    }
}); */

/**
 * foreach 支持list()
 * 对于“数组的数组”进行迭代，之前需要使用两个foreach，现在只需要使用foreach + list了，但是这个数组的数组中的每个数组的个数需要一样。看文档的例子一看就明白了。
 */

$array = [
    [1, 2],
    [3, 4],
];
/* foreach ($array as list($a, $b)) {
    echo "A: $a; B: $b\n";
} */
/* A: 1; B: 2
A: 3; B: 4 */
    
/**
 * 短数组语法 Symmetric array destructuring
       短数组语法（[]）现在可以用于将数组的值赋给一些变量（包括在foreach中）。 这种方式使从数组中提取值变得更为容易。
 * @var array $data
 */
/* $data = [['id' => 1, 'name' => 'Tom'], ['id' => 2, 'name' => 'Fred']];
while (['id' => $id, 'name' => $name] = $data) {   
  
} */
/**
 * list()现在支持键名
 现在list()支持在它内部去指定键名。这意味着它可以将任意类型的数组 都赋值给一些变量（与短数组语法类似）
 * @var array $data
 */
$data = [['id' => 1, 'name' => 'Tom'], ['id' => 2, 'name' => 'Fred']];
while (list('id' => $id, 'name' => $name) = $data) {    
    // logic here with $id and $name
}


