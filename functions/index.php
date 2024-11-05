<?php
$array1 = array(2, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 191, 20);

function passingArray($array) {
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . " ";
    }
}

passingArray($array1);

echo "<br>";

$a = 5;

function factor(&$x) {
    $result = 1;
    for ($i = 1; $i <= $x; $i++) {
        $result *= $i;
    }
    return $result;
}

echo "Factorial of $a by reference is: " . factor($a);
?>
