<?php
final class ParentClass
{
  function test(){
    echo "ParentClass";
  }
}
// class Child1Class extends ParentClass{
//     function test(){
//         echo "Child1Class";
//     }
// }
$parentObj = new ParentClass(); 
$parentObj->test();
// $childObj = new Child1Class();
// $childObj->test();
