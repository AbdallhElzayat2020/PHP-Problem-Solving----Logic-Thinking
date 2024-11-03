<?php

$arr = ['php', 'Css', 'Html', 'Laravel', 'Js', 'JQuery', 'React', 'Vue', 'Angular'];

// for ($i = 0; $i < count($arr); $i++) {
//     // echo $i . "<br>";
//     echo  "$arr[$i] <br>";
// }

foreach ($arr as $key => $e) {
    echo  "key => $key value => $e <br>";
}