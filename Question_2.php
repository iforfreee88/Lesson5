<?php

$arr = [
    1=>'2',
    2=>'5',
    3=>'3',
    4=>'9',

];
$result1= $arr[1]*$arr[2];

var_dump ($result1);
echo '<br>';

$result2= $arr[3]*$arr[4];
echo '<br>';
var_dump ($result2);

$result3=$result1+$result2;
echo '<br>';
var_dump ($result3);

