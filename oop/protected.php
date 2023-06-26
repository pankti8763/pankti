<?php
class ParentClass
{
    protected function vehical()
    {
        echo "vehical1";
    }
}

class ChildClass extends ParentClass
{
    function vehical1()
    {
        return $this->vehical();
        // return parent::vehical();
    }
}


$childObj = new ChildClass();
$childObj->vehical1();



$parentObj = new ParentClass();
$parentObj->vehical();