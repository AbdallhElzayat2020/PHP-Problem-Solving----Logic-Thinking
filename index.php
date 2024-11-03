<?php

// problem 1
// Print Your Name With Function
/*
function PrintName(string $name): void
{
    echo $name . "<br>";
}

PrintName("Abdullh");
*/

////////////////////////////////

// problem 2
// check if number is even or odd

/*
function checkOddOrEven($number): int
{
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}



echo checkOddOrEven(5) . "<br>"; // Output: Odd
echo checkOddOrEven(8) . "<br>"; // Output: Even
*/

////////////////////////////////

//write a Programme Hire a Driver if have Driver License and Age > 21

/*

function HireDriver($age, $license): void
{
    if ($age >= 21 && $license) {
        echo "Hire Driver" . "<br>";
    } else {
        echo "Rejected Driver" . "<br>";
    }
}

HireDriver(21, true); //Hire Driver
HireDriver(21, false); //Hire Driver
HireDriver(20, true); //Rejected Driver
HireDriver(20, false); //Rejected Driver

*/

////////////////////////////////

//write a Programme Hire a Driver if have Driver License and Age > 21 And if have wasta Hired Directly or Not
/*
function HireDriver($age, $license, $wasta): void
{
    if ($wasta) {
        echo "Hire Driver" . "<br>";
    } elseif ($age >= 21 && $license) {
        echo "Hire Driver" . "<br>";
    } else {
        echo "Rejected Driver" . "<br>";
    }
} 

HireDriver(21, true, 0); //Hire Driver
HireDriver(21, true, 1); //Hire Driver
HireDriver(20, false, 1); //Hire Driver
HireDriver(21, false, 0); //Rejected Driver
HireDriver(20, true, 0); //Rejected Driver
HireDriver(20, false, 0); //Rejected Driver
*/

////////////////////////////////


// ICPC Assiut University Community

// Print Hello + Name
// $a = readline('');
// echo 'Hello, ' . $a;

/*-------------------------------------------*/
// B. Basic Data Types

/*
fscanf(STDIN, '%d %d %c %f %f', $a, $b, $c, $d, $e);

echo $a . "\n", $b . "\n", $c . "\n", $d . "\n", $e;

// or 
echo implode("\n", explode(' ', readline()));
*/

/*-------------------------------------------*/
// C. Simple Calculator
fscanf(STDIN, '%d %d', $a, $b);

echo $a . ' + ' . $b . ' = ' . ($a + $b) . "\n";
echo $a . ' * ' . $b . ' = ' . ($a * $b) . "\n";
echo $a . ' - ' . $b . ' = ' . ($a - $b) . "\n";
