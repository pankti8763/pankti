<?php
class TestClass
{
    public $name;
    function __construct()
    {
        echo "hello world";
    }
    function welcome()
    {
        return "welcome";
    }

    function getName()
    {
        if (!isset($this->name)) {
            return "No name";
        } else {
            return $this->name;
        }
    }

    function setName($name)
    {
        $this->name = $name;
        echo "successfully set";
    }
}
$testObj = new TestClass();
echo "<br>";
echo $testObj->welcome();
echo "<br>";
echo $testObj->getName();
echo "<br>";
$testObj->setName('llkkllkl');
echo "<br>";
echo $testObj->getName();
echo "<br>";
