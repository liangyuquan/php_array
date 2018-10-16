<?php
/* ++++++++++++++++++++php 7.2 start +++++++++++++++++++*/
/**
 * 允许分组命名空间的尾部逗号
 */

/* use Foo\Bar\{
    Foo,
    Bar,
    Baz,
}; */

/**
 * 允许重写抽象方法
 */

/* abstract class A
{
    abstract function test(string $s);
}
abstract class B extends A
{
    abstract function test($s) : int;
}

 */
/**
 * 新的对象类型
 */
function test(object $obj) : object  //这里 可以输入对象
{
    return new SplQueue();
}

/*var_dump(test(new StdClass()));
object(SplQueue)#2 (2) {
["flags":"SplDoublyLinkedList":private]=>
int(4)
["dllist":"SplDoublyLinkedList":private]=>
array(0) {
}
} */