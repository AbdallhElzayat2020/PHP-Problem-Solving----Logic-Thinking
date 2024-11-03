<?php

$a = NULL;

// ternary operator
// if ($a === 101) {
//     //  = 100 and type integer

//     echo "A is positive" . "<br>";
//     echo $a;
// } elseif ($a === 101) {
//     echo "A is negative" . "<br>";
//     echo $a;
// } else {
//     echo "A is zero" . "<br>";
//     echo $a;
// }

// short HAND

// echo $a === 100 ? "A is positive" . "<br>" : "A is negative" . "<br>";

// echo $a ?? 'No value' . "<br>";

//spaceship operator
// echo 10 <=> 20; // < = > -1 , 0 ,1
// echo "<br>";
$a = 100;
$b = 200;
// if ($a === 100 AND $b === 200) {
// if ($a === 100 abd $b === 200) {
// if ($a === 100 && $b === 200) {
// if ($a === 100 OR $b === 200) {
// if ($a === 100 or $b === 200) {
if ($a === 100 || $b === 200) {
    echo "true";
} else {
    echo "false";
}