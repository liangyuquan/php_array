<?php
/* ++++++++++++++++++++php 7.1 start +++++++++++++++++++*/
/**
 * 可为空类型
 * 参数以及返回值的类型现在可以通过在类型前加上一个问号使之允许为空。 当启用这个特性时，传入的参数或者函数返回的结果要么是给定的类型，要么是 null 。
 */
/* function testReturn(): ?string
{
    return 'elePHPant';
}

var_dump(testReturn()); //string(10) "elePHPant"

function testReturn(): ?string
{
    return null;
}

var_dump(testReturn()); //NULL

function test(?string $name)
{
    var_dump($name);
}

test('elePHPant'); //string(10) "elePHPant"
test(null); //NULL
test(); //Uncaught Error: Too few arguments to function test(), 0 passed in...
 */
/**
 * void
 * 增加了一个返回void的类型
 * todo 不理解
 */
/* function swap(&$left, &$right) : void
{
    if ($left === $right) {
        return;
    }

    $tmp = $left;
    $left = $right;
    $right = $tmp;
}

$a = 1;
$b = 2;
var_dump(swap($a, $b), $a, $b); */

/**
 * 多异常捕获处理
 * 这个功能还是比较常用的，在日常开发之中
 */
try {    
    // some code
} catch (FirstException | SecondException $e) {    
    // handle first and second exceptions
} catch (\Exception $e) {    
    // ...
} finally{
    //
}

