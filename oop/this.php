<?php
class ParentClass
{
    function test()
    {
        echo "Parent Class";
    }
}
class Child1Class extends ParentClass
{
    function test1()
    {
        return $this->test();
    }
}
$childObj = new Child1Class();
$childObj->test1();
