<?php
class ParentClass
{
    private function vehical()
    {
        echo "Hello vehicle";
    }
    public function test()
    {
        return $this->vehical();
    }
}
class ChildClass extends ParentClass
{
}
// $childObj = new ChildClass();
// $childObj->vehical();
$childObj = new ParentClass();
$childObj->test();
