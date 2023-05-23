<?php
  class myIterable {
    function foo(iterable $iterable){
        foreach ($iterable as $key => $value) {
            var_dump($key, $value);
            // print_r($value);
        }
    }
}
$it = new myIterable;
$it->foo(array("A","B","C",));
