<?php

// $arr = ['Hello', 'from', 'php'];
// $a = 'Hello from php';

// $result = explode(' ', $a);
// print_r($result);


// $result_2 = implode(',', $arr);

// print_r($result_2);
// explode => convert string to array   => explode(' ', $a)

// implode => convert array to string   => implode(',', $arr)

//////////////////////////////////////////////////////////////

/*
$b = 'WELCOME TO PHP';

echo strtolower($b) . "<br>"; // lower case Letters
echo strtoupper($b) . "<br>"; // Upper case Letters
echo strlen($b) . "<br>"; // length of string
echo ucfirst($b) . "<br>"; // Capitalize first letter
echo ucwords($b) . "<br>"; // Capitalize first letter of each word
echo strrev($b) . "<br>"; // Reverse string
echo str_shuffle($b) . "<br>"; // Shuffle string

*/

// check if function exists
// function calc()
// {
//     echo "Hello World";
// }

// var_dump(function_exists('calc'));

/////////////////////////

// cut string
// $str = 'Hello World';

// echo substr($str, 1) . "<br>";


// Make a constant with define
// define('PHPINFO', "PHPV8.3");

// echo PHPINFO;

//check is_string is int

$str = 10;
$str = '10';
$arr = [10, 20, 30];
// echo is_string($str) . "<br>";
// echo is_integer($str) . "<br>";
var_dump(is_array($arr)) . "<br>";
// var_dump(is_string($str));