<?php

/*
// sum
$a = 10;
$b = 20;

$sum = $a + $b;

echo $sum . "<br>";   // 20
///////////////////////////

$a = 10;
$b = 20;

$minus = $a - $b;

echo $minus . "<br>"; //-10
//////////////////////////
$a = 10;
$b = 20;

$c = $a * $b;
echo $c . "<br>";  // 200
////////////////////////﻿


//////////////////////// //

$a = 10;
$b = 20;

$d = $a / $b;

echo $d . "<br>"; //0.5
////////////////////////﻿//

$a = 10;
$b = 20;

$m = $a % $b;
echo $m . "<br>"; //10
*/

// $a = 10;
// $b = 20;
// echo $a++;
// echo "<br>";
// echo ++$a;
// echo "<br>";
// echo $a--;
// echo "<br>";
// echo --$a;
// echo "<br>";
// echo $a += $b;
// echo "<br>";

// declare Html Inside Php Code
// <html>

// <body>
//     Welcome to operators <br>

//     <?php echo "Hello World"; 
// </body>
//</html>



// Declare Function In php
// function Calc(int $val1, int $val2): int
// function Calc(int $val1, int $val2): string
// function Calc(int $val1, int $val2): array
// function Calc(int $val1, int $val2): mixed
// Return Type Of Function
// function Calc(int $val1, int $val2): object
// {
//     $obj = new stdClass;

//     $obj->total = $val1 + $val2;
//     // $obj->total = $val1 + $val2;

//     return $obj;
// }


// $x = "10";
// $y = "20";


// $calc = Calc($x, $y);
// // echo $calc;
// var_dump($calc->total);



// Argument Of Function

// function Calc(...$args): array
// {
//     // echo $args[0];
//     return $args;
// }


// $x = "10";
// $y = "20";

// $calc = Calc($x, $y, null, true, "hello", 10.2);

// var_dump($calc);




// scope in functions


// $x = "10";
// $y = "20";

// // Global Scope
// function Calc()
// {
//     // local Scope
//     // $x = 20;
//     // $y = 20;
//     // echo $x * $y;

//     // global $x, $y;
//     // echo $GLOBALS["x"];

//     // Static Scope
//     static $x = 20;
//     static $y = 20;
//     echo $x * $y;
// }

// Calc();


// Build in Function PHP

//Count words in string   str_word_count

// $a = "Hello World";
// echo str_word_count($a);


// count Numbers of elements in array
// $arr = ['php', 'laravel', 'HTML', 'CSS'];

// echo count($arr);


// // Replace word in string
// $a = 'Welcome to PHP';
// replace to word for in

// // searchWord   word replace  Place
// echo str_replace('to', 'in', $a);

// $result = explode(' ', $a);

// var_dump($result);

// echo $result[0];

// //////////////////////////////

// $arr = ['php', 'laravel'];

// echo implode(' ', $arr);

/////////////////////////////////////
// $final = '|PHP V8|';

// $final = ltrim($final, '|');
// $final = rtrim($final, '|');

// echo $final;

// $b = 'WELCOME TO PHP';

// echo strtolower($b); // lower case Letters
// echo strtoupper($b); // Upper case Letters
// echo strlen($b);


// $arr = ['php', 'laravel'];
// $a = 'Hello from php';

// Option 1: Print the array using print_r() or var_dump()
// $result = explode(' ', $a);

// print_r($result);



//  Option 3: If you want to show all elements with a separator


// echo implode(',', $arr);  // remove , or separator between '' prints "Hello, from, php"

// echo $result = implode(',', $arr);

// الخلاصة بالعربي اهوة 
// الاتنين بيقصو وبقلهم في اول بارمتير قص من اول كذا والحاجة التانية بقلو قص في المتغير او المصفوفة دي 

// $arr = ['php', 'laravel'];
// $a = 'Hello from php';
// explode => convert string to array   => explode(' ', $a)

// implode => convert array to string   => implode(',', $arr)