<?php
// Hybrid Inheritance
class GrandParentClass
{
    function vehical()
    {
        echo "Hello Vehicle <br>";
    }
}
class ParentClass extends GrandParentClass
{
    function vehical1()
    {
        echo "Hello Vehicle1 <br>";
    }
}

class Child1Class extends ParentClass
{
    function vehical2()
    {
        echo "Hello Vehicle2 <br>";
    }
}
class Child2Class extends Child1Class
{
    function vehical3(){
        echo "Hello Vehicle3";
    }
}
$parentObj = new ParentClass();
$parentObj->vehical();
$Child1Obj = new Child1Class();
$Child1Obj->vehical1();
$Child2Obj = new Child2Class();
$Child2Obj->vehical2();
// $Child2Obj->vehical3();
exit;
// Hierarchical Inheritance
// class ParentClass
// {
//     function vehical($str)
//     {
//         echo "Hello $str ";
//     }
// }
// class Child1Class extends ParentClass
// {
// }
// class Child2Class extends ParentClass
// {
// }
// $child1Obj   = new Child1Class();
// $child1Obj->vehical("vehical1<br>");
// $child2Obj   = new Child2Class();
// $child2Obj->vehical("vehical2");
// exit;
// // Multiple inheritance using Traits
// class ParentClass
// {
//     use ParentClass1;
// }
// trait ParentClass1
// {
//     public function vehical1()
//     {
//         echo "Traits <br>";
//     }
// }
// class Child1Class extends ParentClass
// {
// }
// $child1Obj = new Child1Class();
// $child1Obj->vehical1();
// exit;
// Multiple Inheritance using interface
// class ParentClass
// {
//     public function vehical()
//     {
//         echo "ParentClass <br>";
//     }
// }
// interface ParentClass1
// {
//     public function vehical1();
// }
// class Child1Class extends ParentClass implements ParentClass1
// {
//     public function vehical1()
//     {
//         echo "Child1Class <br>";
//     }
// }
// $child1Obj = new Child1Class();
// $child1Obj->vehical();
// $child1Obj->vehical1();
// exit;
// Multilevel Inheritance
// class ParentClass
// {
//     function vehical()
//     {
//         echo "Hello Vehicle <br>";
//     }
// }
// class Child1Class extends ParentClass
// {
//     function vehical1()
//     {
//         echo "Hello Vehicle1";
//     }
// }
// class Child2Class extends Child1Class
// {
// }
// $Child1Obj = new Child1Class();
// $Child1Obj->vehical();
// $Child2Obj = new Child2Class();
// $Child2Obj->vehical1();
// exit;
// single Inheritance
// class ParentClass
// {
//     function vehical()
//     {
//         echo "Hello vehicle";
//     }
// }
// class ChildClass extends ParentClass
// {
// }
// $childObj = new ChildClass();
// $childObj->vehical();
