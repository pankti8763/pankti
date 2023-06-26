<?php
class StringClass
{
  function ucfirst()
  {
    $str = "hello world";
    echo  $str[0];
    exit;
    return "hello";
  }
}
$classObj = new StringClass();
$result = $classObj->ucfirst();
echo $result."\n";
