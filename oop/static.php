<?php
// echo mt_rand(0, 0xFFFFFF);
// echo sprintf('#%06X', mt_rand(0, 0xFFFFFF));
// exit;
class ParentClass
{
    static $val = "Hello World";
    static function test()
    {
        echo "Parent Class";
    }

    
    // function __construct(){
    //     self::test();
    // }
}
// new ParentClass();
echo ParentClass::$val . "<br>";
ParentClass::test();
// class ChildClass extends ParentClass
// {
//     function test1()
//     {
//         // self::test();
//         return $this->test();
//     }
//     function test2()
//     {
//         echo "Test 2";
//     }
// }
// $childObj = new ChildClass();
// $childObj->test1();
// $childObj->test2();
