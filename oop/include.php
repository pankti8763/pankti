<?php
// interface Test
// {
//     function test();
// }
abstract class Test1Class
{
    public function test1()
    {
        return "Test1";
    }
    abstract public function test();
}
class Test2Class extends Test1Class
{
    function test()
    {
        return "test";
    }
}
$testObj  = new Test2Class();
// $testObj  = new Test1Class();
echo $testObj->test1() . "<br>";
echo $testObj->test();
// $color='red';
// $car='BMW';
