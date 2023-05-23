<?php
class ParentClass
{
    public function vehical()
    {
        echo "I Am A Parent from Vehicle";
    }
}
class ChildClass extends ParentClass
{
    // public function child()
    // {
    //     echo "I Am A Child from Vehicle";
    // }
}

$childObj = new ChildClass();
$childObj->vehical();
