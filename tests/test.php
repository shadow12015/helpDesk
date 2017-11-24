<?php
$array1 = ["a" => "green", "pink", "blue", "red", "brown", "r" => "red", "red"];
$array2 = ["b" => "green", "brown", "black", "yellow", "pink",];
$result = array_keys(array_diff($array1, $array2));

print_r($result);
?>