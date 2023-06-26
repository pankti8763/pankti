<?php
// asort()
// $a  = ["Peter" => "35", "Joe" => "43", "Ben" => "37"];
// $key = array_keys($a);
// function aa_sort($a)
// {
//   $value = array_values($a);
//   for ($i = 0; $i < count($value); $i++) {
//     for ($j = 0; $j < count($value) - 1; $j++) {
//       if ($value[$j] > $value[$j + 1]) {
//         $temp = $value[$j + 1];
//         $value[$j + 1] = $value[$j];
//         $value[$j] = $temp;
//       }
//     }
//     $name =  array_keys($a, $value[$i], true)[0];
//     $result[$name] = $value[$i];
//   }
//   return $result;
// }
// $result = aa_sort($a);
// echo "<pre>";
// print_r($result);
// exit;
// arsort()
// $a  = ["Peter" => "35", "Joe" => "43", "Ben" => "37"];
// $key = array_keys($a);
// function ar_sort($a)
// {
//   $value = array_values($a);
//   for ($i = 0; $i < count($value); $i++) {
//     for ($j = 0; $j < count($value) - 1; $j++) {
//       if ($value[$j] < $value[$j + 1]) {
//         $temp = $value[$j + 1];
//         $value[$j + 1] = $value[$j];
//         $value[$j] = $temp;
//       }
//     }
//     $name =  array_keys($a, $value[$i], true)[0];
//     $result[$name] = $value[$i];
//   }
//   return $result;
// }
// $result = ar_sort($a);
// echo "<pre>";
// print_r($result);
// exit;
// ksort()
// $a  = ["Peter" => "35", "Joe" => "20", "John" => "20", "Abc" => "50", "Ben" => "90", "Pall" => "50", "Chahat" => "190"];
// function k_sort($a)
// {
//   $keys = array_keys($a);
//   $num = count($keys);

//   for ($i = 0; $i < $num; $i++) {
//     for ($j = $i + 1; $j < $num; $j++) {
//       if ($keys[$i] > $keys[$j]) {
//         $temp = $keys[$i];
//         $keys[$i] = $keys[$j];
//         $keys[$j] = $temp;
//       }
//     }
//     $result[$keys[$i]] = $a[$keys[$i]];
//   }
//   return $result;
// }
// $result = k_sort($a);
// echo "<pre>";
// print_r($result);
// exit;
// $a  = ["Peter" => "35", "Joe" => "43", "Ben" => "37", "Cef" => "10", "Dev" => "8"];
// $keys = array_keys($a);
// function kr_sort($a, $keys)
// {
//   // $result = [];
//   // foreach ($a as $key => $value) {
//   //   $result[] = $value;
//   // echo count($keys);
//   for ($i = 0; $i < count($keys); $i++) {
//     for ($j = 0; $j < count($keys) - 1; $j++) {
//       // echo $keys[$i] . "--" . $keys[$j] . "</br>";
//       if ($keys[$j] < $keys[$j + 1]) {
//         $temp = $keys[$j + 1];
//         $keys[$j + 1] = $keys[$j];
//         $keys[$j] = $temp;
//       }
//     }
//     $result[$keys[$i]] = $a[$keys[$i]];
//   }
//   // }
//   return $result;
// }
// $result = kr_sort($a, $keys);
// echo "<pre>";
// print_r($result);
// exit;
// sort()
// $cars  = ["Volvo", "BMW", "Toyota", 'bmw', 'BA'];
// $count = count($cars);
// function a_sort($cars, $count)
// {
//   for ($i = 0; $i < $count; $i++) {
//     for ($j = 0; $j < $count - 1; $j++) {
//       if ($cars[$j] > $cars[$j + 1]) {
//         $temp = $cars[$j + 1];
//         $cars[$j + 1] = $cars[$j];
//         $cars[$j] = $temp;
//       }
//     }
//   }
//   return $cars;
// }
// echo "<pre>";
// print_r($cars);
// exit;
// rsort()
// $cars  = ["Volvo", "BMW", "Toyota"];
// $count = count($cars);
// function r_sort($cars, $count)
// {
//   for ($i = 0; $i < $count; $i++) {
//     for ($j = 0; $j < $count; $j++) {
//       if ($cars[$j] < $cars[$j + 1]) {
//         $temp = $cars[$j + 1];
//         $cars[$j + 1] = $cars[$j];
//         $cars[$j] = $temp;
//       }
//     }
//   }

//   return $cars;
// }
// $cars = r_sort($cars, $count);
// echo "<pre>";
// print_r($cars);
// exit;
// // sizeof()
// $cars = ["Volvo", "BMW", "Toyota", "Honda"];
// function a_sizeof($cars)
// {
//   foreach ($cars as $value) {
//     $result = $result + 1;
//   }
//   return $result;
// }
// $result = a_sizeof($cars);
// echo "<pre>";
// print_r($result);
// exit;
// shuffle()
// $a = ["red", "green", "blue", "yellow", "brown"];
// function a_shuffle($a)
// {
//   $result = [];
//   foreach ($a as $key => $value) {
//     $result[rand($key, 2)] = $value;
//   }
//   return $result;
// }
// $result = a_shuffle($a);
// echo "<pre>";
// print_r($result);
// exit;
// reset()
// $a = ["John", "Peter", "Joe", "Glenn", "Cleveland"];
// // echo "$a[0]";
// function a_reset($a)
// {
//   return $a[0];
// }
// $result = a_reset($a);
// echo "<pre>";
// print_r($result);
// exit;
// range()
// function a_range($start, $end)
// {
//   $result = [];
//   for ($i = $start; $i <= $end; $i++) {
//     $result[] = $i;
//   }
//   return $result;
// }
// $result = a_range('a', 'f');
// echo "<pre>";
// print_r($result);
// exit;

// prev()
// $people = ["Peter", "Joe", "Glenn", "Cleveland"];

// function a_prev($people, $current_value)
// {
//   $result = [];
//   foreach ($people as $k => $v) {
//     if ($v == $current_value) {
//       $result = $people[$k - 1];
//     }
//   }
//   return $result;
// }
// $result = a_prev($people, 'Cleveland');
// echo "<pre>";
// print_r($result);
// exit;
// pos()
// $people = ["Peter", "Joe", "Glenn", "Cleveland"];
// function a_pos($people)
// {
  
//   return $people[0];
// }
// $result = a_pos($people);
// echo "<pre>";
// print_r($result);
// exit;
// next()
// $people = ["Peter", "Joe", "Glenn", "Cleveland"];

// function a_next($people, $current_value)
// {
//   $i = array_keys($people,$current_value)[0]+1;
//   echo $i;
//   return $people[$i];
// }
// $result = a_next($people, 'Joe');
// echo "<pre>";
// print_r($result);
// exit;
// list()
// $my_array = ["Dog", "Cat", "Horse"];
// function a_list($my_array)
// {
//   $result = [];
//   foreach ($my_array as $key => $value) {
//     $result[$key] = $value;
//   }
//   return $result;
// }
// $result = a_list($my_array);
// echo "<pre>";
// print_r($result);
// exit;
// key()
// $people = ["Peter", "Joe", "Glenn", "Cleveland"];
// function a_key($people)
// {
//   return $people[0];
// }
// $result = a_key($people);
// echo "<pre>";
// print_r($result);
// exit;
// in_array()
// $people = ["Peter", "Joe", 10, "Glenn", "Cleveland"];
// function a_in_array($people, $name)
// {
//   foreach ($people as $key => $value) {
//     if ($value == $name) {
//       $result[$key] = $value;
//     }
//   }
//   return $result;
// }
// $result = a_in_array($people, "Joe");
// echo "<pre>";
// print_r($result);
// exit;
//end()
// $a = ["Peter", "Joe", "Glenn", "Cleveland","John"];
// function en($a)
// {
//   $result = count($a)-1;
//   return $a[$result];
// }
// $result = en($a);
// echo "<pre>";
// print_r($result);
// exit;
// each()
// $people = ["Peter", "Joe", "Glenn", "Cleveland"];
// function a_each($people)
// {
//   $result = [];
//   foreach ($people as $key => $value) {
//     if ($people[0] == $key) {
//       $result[$value] = $key;
//     }
//   }
//   return $result;
// }
// $result = a_each($people);
// echo "<pre>";
// print_r($result);
// exit;
// current()
// $a = ["John", "Peter", "Joe", "Glenn", "Cleveland"];
// // echo "$a[0]";
// function a_current($a)
// {
//   return $a[0];
// }
// $result = a_current($a);
// echo "<pre>";
// print_r($result);
// exit;
// count()
// $cars = ["Volvo", "BMW", "Toyota", "Honda"];
// function a_count($cars)
// {
//   $result = 0;  
//   foreach ($cars as $value) {
//     $result = $result + 1;
//   }
//   return $result;
// }
// $result = a_count($cars);
// echo "<pre>";
// print_r($result);
// exit;
// array_walk_recursive()
// $a1 = ["a" => "red", "b" => "green"];
// $a2 = [$a1, "1" => "blue", "2" => "yellow"];
// function a_walk_recursive($a1, $a2)
// {
//   $result = [];
//   foreach ($a2 as $key => $value) {
//     $result[$key] = $value;
//   }
//   return $result;
// }
// $result = a_walk_recursive($a1, $a2);
// echo "<pre>";
// print_r($result);
// exit;
// // array_walk()
// $a = ["a" => "red", "b" => "green", "c" => "blue"];
// function a_walk($a)
// {
//   $result = [];
//   foreach ($a as $k => $v) {
//     echo "The key $k has the value $v<br>";
//   }
//   return $result;
// }
// $result = a_walk($a);
// echo "<pre>";
// // print_r($result);
// exit;
// // array_values()
// $a = ["Name" => "Peter", "Age" => "41", "Country" => "USA"];
// function a_values($a)
// {
//   $result = [];
//   foreach ($a as $key => $value) {
//     $result[] = $value;
//   }
//   return $result;
// }
// $result = a_values($a);
// echo "<pre>";
// print_r($result);
// exit;
// array_unshift()
// $a = ["a" => "red", "b" => "green"];
// function a_unshift($a)
// {
//   $result = ["blue"];
//   foreach ($a as $key => $value) {
//     $result[$key] = $value;
//   }
//   return $result;
// }
// $result = a_unshift($a);
// echo "<pre>";
// print_r($result);
// exit;
// array_unique()
// $a = ["a" => "red", "b" => "green", "c" => "red", "d" => "green", "e" => "black", "f" => "white"];
// function a_unique($a)
// {
//   foreach ($a as $k => $v) {
//     if (!in_array($v, $result)) {
//       $result[$k] = $v;
//     }
//   }
//   return $result;
// }
// $result = a_unique($a);
// echo "<pre>";
// print_r($result);
// exit;
// // array_uintersect_assoc()
// $a1 = ["a" => "red", "b" => "green", "c" => "blue"];
// $a2 = ["a" => "red", "b" => "blue", "c" => "green"];
// function a_uintersect_assoc($a1, $a2)
// {
//   $result = [];
//   foreach ($a1 as $key => $value) {
//     foreach ($a2 as $k => $v) {
//       if ($value == $v &&  $key == $k) {
//         $result[$key] = $value;
//       }
//     }
//   }
//   return $result;
// }
// $result = a_uintersect_assoc($a1, $a2);
// echo "<pre>";
// print_r($result);
// exit;
// // array_uintersect()
// $a1 = ["a" => "red", "b" => "green", "c" => "blue"];
// $a2 = ["a" => "blue", "b" => "black", "e" => "blue"];
// function a_uintersect($a1, $a2)
// {
//   $result = [];
//   foreach ($a1 as $key => $value) {
//     foreach ($a2 as $k => $v) {
//       if ($value == $v) {
//         $result[$key] = $value;
//       }
//     }
//   }
//   return $result;
// }
// $result = a_uintersect($a1, $a2);
// echo "<pre>";
// print_r($result);
// exit;
// //  array_udiff_assoc()
// $a1 = array("a" => "red", "b" => "green", "c" => "blue");
// $a2 = array("a" => "red", "b" => "blue", "c" => "green");
// function a_udiff_assoc($a1, $a2)
// {
//   $result = [];
//   foreach ($a1 as $key => $value) {
//     if (!isset($a2[$key]) || $a2[$key] !== $value) {
//       $result[$key] = $value;
//     }
//   }
//   return $result;
// }
// $result = a_udiff_assoc($a1, $a2);
// echo "<pre>";
// print_r($result);
// exit;
// //  array_udiff()
// $a1 = ["a" => "red", "b" => "green", "c" => "blue"];
// $a2 = ["a" => "blue", "b" => "black", "e" => "blue"];
// function a_udiff($a1, $a2)
// {
//   $result = [];
//   foreach ($a1 as $key => $value) {
//     if (!in_array($value, $a2)) {
//       $result[$key] = $value;
//     }
//   }
//   return $result;
// }
// $result = a_udiff($a1, $a2);
// echo "<pre>";
// print_r($result);
// exit;
// // array_slice()
// $a = ["red", "green", "blue", "yellow", "brown"];
// function a_slice($a, $n)
// {
//   $result = [];

//   for ($i = 0; $i < $n; $i++) {
//     $result[] = $a[$i];
//   }
//   return $result;
// }
// $result = a_slice($a, 4);
// echo "<pre>";
// print_r($result);
// exit;
// // array_splice()
// $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
// $a2 = array("a" => "purple", "b" => "orange");
// function a_splice($a1, $a2)
// {
//   $result = [];
//   foreach ([$a1, $a2] as $key => $value) {
//     foreach ($value as $k => $v) {
//       $result[$k] = $v;
//     }
//   }
//   return $result;
// }
// $result = a_splice($a1, $a2);
// echo "<pre>";
// print_r($result);
// exit;
// exit;
// // array_shift()
// $a = ["0" => "red", "1" => "green", "2" => "blue"];
// function a_shift($a)
// {
//   echo "$a[0]<br>";
//   $index = 0;
//   unset($a[$index]);
//   $result = [];
//   foreach ($a as $k => $v) {
//     $result[] = $v;
//   }
//   return $result;
// }
// $result = a_shift($a);
// echo "<pre>";
// print_r($result);
// exit;
// // array_sum()
// $a = array(10, 15, 20);
// $n = count($a);
// function a_sum($a, $n)
// {
//   $result = 0;
//   for ($i = 0; $i < $n; $i++) {
//     $result = $result + $a[$i];
//   }
//   return $result;
// }
// $result = a_sum($a, $n);
// echo "<pre>";
// print_r($result);
// exit;
// // array_search()
// $a = ["a" => "red", "b" => "green", "c" => "blue"];
// function a_search($a, $search_value)
// {
//   $result = [];
//   foreach ($a as $k => $v) {
//     if ($v == $search_value) {
//       $result[$v] = $k;
//     }
//   }
//   return $result;
// }
// $result = a_search($a, 'blue');
// echo "<pre>";
// print_r($result);
// exit;
// // array_reverse()
// $a = ["Volvo", "BMW", "Toyota", "Honda"];
// function a_reverse($a)
// {
//   $result = [];
//   $count = 0;
//   foreach ($a as $key => $value) {
//     $count++;
//   }
//   for ($i = ($count - 1); $i >= 0; $i--) {
//     $result[] = $a[$i];
//   }
//   return $result;
// }
// $result = a_reverse($a);
// echo "<pre>";
// print_r($result);
// // array_pad()
// $a = ["red", "green"];
// function a_pad($a, $size, $value)
// {
//   $count = count($a);
//   $num = $size - $count;
//   for ($i = 0; $i < $num; $i++) {
//     $a[$count + $i] = $value;
//   }
//   return $a;
// }
// $result = a_pad($a, 5, 'blue');
// print_r($result);
// exit;
// // array_push();
// $a = ["red", "green"];
// $a[] = "blue";
// $a[] = "black";
// // print_r($a);
// function a_push($a)
// {
//   foreach ($a as $key => $value) {
//     $result[] = $value;
//   }
//   return $result;
// }
// $result = a_push($a);
// echo "<pre>";
// print_r($result);
// exit;
// // array_reduce()
// $a = array(10, 15, 20);
// $n = count($a);
// function a_reduce($a, $n)
// {
//   $result = 0;
//   for ($i = 0; $i < $n; $i++) {
//     $result = $result + $a[$i];
//   }
//   return $result;
// }
// $result = a_reduce($a, $n);
// echo "<pre>";
// print_r($result);
// exit;
// // array_rand()
// $a = array("red", "green", "blue", "yellow", "brown");
// function a_rand($a)
// {
//   $length = count($a);
//   $random = rand(1, $length - 1);
//   return $a[$random];
// }
// $result = a_rand($a);
// echo "<pre>";
// print_r($result);
// // $a = array("red", "green", "blue", "yellow", "brown");
// // function a_rand($a)
// // {
// //   $result = [];
// //   foreach ($a as $key => $value) {
// //     $result[rand($key, 2)] = $value;
// //   }
// //   return $result;
// // }
// // $result = a_rand($a);
// // echo "<pre>";
// // print_r($result);
// exit;
// // array_replace()
// $a1 = array("red", "green");
// $a2 = array("blue", "yellow");
// function a_replace($a1, $a2)
// {
//   $result = [];
//   foreach ([$a1, $a2] as $key => $value) {
//     foreach ($value as $k => $v) {
//       $result[$k] = $v;
//     }
//   }
//   return $result;
// }
// $result = a_replace($a1, $a2);
// echo "<pre>";
// print_r($result);
// exit;
// // array_product()
// $a = array(5, 2);
// $n = count($a);
// function a_product($a, $n)
// {
//   $result = 1;
//   for ($i = 0; $i < $n; $i++) {
//     $result = $result * $a[$i];
//   }
//   return $result;
// }
// $result = a_product($a, $n);
// echo "<pre>";
// print_r($result);
// exit;
// array_pop()
$a = ["red", "green", "blue", "black"];
unset($a[count($a) - 1]);
echo "<pre>";
print_r($a);
exit;

// array_merge_recursive()
$a1 = array("a" => "red", "b" => "green");
$a2 = array("c" => "blue", "b" => "yellow");
function a_merge_recursive($a1, $a2)
{
  $result = [];
  foreach ([$a1, $a2] as $key => $value) {
    foreach ($value as $k => $v) {
      $result[$k][] = $v;
    }
  }
  return $result;
}
$result = a_merge_recursive($a1, $a2);
echo "<pre>";
print_r($result);
exit;
// array_merge() 
$a1 = array("red", "green");
$a2 = array("blue", "yellow");
$a3 = array("blue", "yellow");

function a_merge($a1, $a2, $a3)
{
  $result = [];
  foreach ([$a1, $a2, $a3] as $key => $value) {
    foreach ($value as $v) {
      $result[] = $v;
    }
  }
  return $result;
}
$result = a_merge($a1, $a2, $a3);
echo "<pre>";
print_r($result);
exit;
// array_map()
$a = array(1, 2, 3, 4, 5);
function a_map($a)
{
  $result = [];
  foreach ($a as $key => $value) {
    $result[] = $value * $value;
  }
  return $result;
}
$result = a_map($a);
echo "<pre>";
print_r($result);
exit;
// array_keys_exists()
$a = ["Volvo" => "XC90", "svgdgf" => "X5"];
function a_key_exists($k, $a)
{
  foreach ($a as $key => $value) {
    if ($key === $k) {
      return true;
    }
  }
  return false;
}
if (a_key_exists('Volvo', $a)) {
  echo "key exists";
} else {
  echo "key does not exist";
}
exit;
// array_keys()
$a = array("Volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander", "sdgfe");
function a_keys($a)
{
  $result = [];
  foreach ($a as $key => $value) {
    if ($key) {
      $result[$key] = $value;
    }
  }
  return $result;
}
$result = a_keys($a);
echo "<pre>";
print_r($result);
exit;
//  array_intersect_assoc()
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("a" => "red", "b" => "green", "c" => "blue");
function a_intersect_assoc($a1, $a2)
{
  $result = [];
  foreach ($a1 as $key => $value) {
    // foreach ($a1 as $key => $value) {
    //     if (isset($a2[$key]) || $a2[$value] == $value) {
    //       $result[$key] = $value;
    //     }
    // }
    foreach ($a2 as $k => $v) {
      if ($value == $v || $key == $k) {
        $result[$k] = $value;
      }
    }
  }
  return $result;
}
$result = a_intersect_assoc($a1, $a2);
echo "<pre>";
print_r($result);
exit;
//  array_intersect()
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");
function a_intersect($a1, $a2)
{
  $result = [];
  foreach ($a1 as $key => $value) {
    if (in_array($value, $a2)) {
      $result[$key] = $value;
    }
  }
  return $result;
}
$result = a_intersect($a1, $a2);
echo "<pre>";
print_r($result);
exit;
// array_flip()
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
function a_filp($a1)
{
  $result = [];
  foreach ($a1 as $key => $value) {
    $result[$value] = $key;
  }
  return $result;
}
$result = a_filp($a1);
echo "<pre>";
print_r($result);
exit;
// array_filter()
$a1 = array(1, 3, 2, 3, 4);
function a_filter($a1)
{
  $result = [];
  foreach ($a1 as $key => $value) {
    $result[] = $value;
  }
  return $result;
}
$result = a_filter($a1);
echo "<pre>";
print_r($result);
exit;
// array_fill_keys()
$keys = ["a", "b", "c", "d"];
function a_fill_keys($keys, $v)
{
  $result = [];
  foreach ($keys as $key => $value) {
    $result[$value] = $v;
  }
  return $result;
}
$result = a_fill_keys($keys, 'blue');
echo "<pre>";
print_r($result);
exit;
// array_fill()
function a_fill($a1, $value)
{
  $result = [];
  for ($i = 0; $i <= $a1; $i++) {
    $result[$i] = $value;
  }
  return $result;
}
$result = a_fill(4, 'blue');
echo "<pre>";
print_r($result);
exit;
//  array("a" => "red", "b" => "green", "c" => "blue");
// function a_diff_assoc($a1, $a2)
// {
//   $result = [];
//   foreach ($a1 as $key => $value) {
//  // if (!isset($a2[$key]) || $a2[$key] !== $value)
//     if (!isset($a2[$key])) {
//       $result[$key] = $value;
//     }
//   }
//   return $result;
// }
// $result = a_diff_assoc($a1, $a2);
// echo "<pre>";
// print_r($result);`
// exit;
// array_diff()
// $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
// $a2 = ["e" => "red", "f" => "green", "g" => "blue4", "d" => "yellow4"];
// function a_diff($a1, $a2)
// {
//   $result = [];
//   foreach ($a1 as $key => $value) {
//     if (!in_array($value, $a2)) {
//       $result[$key] = $value;
//     }
//   }
//   return $result;
// }
// $result = a_diff($a1, $a2);
// echo "<pre>";
// print_r($result);
// exit;
// array_count_values()
// $a = ["A", "Cat", "Dog", "A", "Dog"];
// function a_count_values($a)
// {
//   $result = [];
//   foreach ($a as $value) {
//     if (isset($result[$value])) {
//       $result[$value]++;
//     } else {
//       $result[$value] = 1;
//     }
//   }
//   return $result;
// }
// $result = a_count_values($a);
// echo "<pre>";
// print_r($result);
// exit;
