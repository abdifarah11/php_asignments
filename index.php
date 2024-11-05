<?php

//array indexs 
//for exmaple 
$array_index  = [200,300,400] ;
$array_index []=1000;
$array_index []= 'apple';
$array_index []='banan';


print_r($array_index);
echo  "<br>";

// associative arrays
echo  "<br>";
$salaries = array(
    'farah' => 1000,
    'xaliimo' => 2000,
    'bashaka' => 400
);
print_r($salaries);
echo max($salaries);
echo  "<br>";
echo min($salaries); 
$salaries=['maxamed' => 800];
print_r($salaries);
echo "<br>";

;
echo "<br>";
 // Loop Through Array  for lop
 $number = [18,28,38,48,58,68,78];
 for( $i = 0;$i < count($number); $i++) {
    echo $number[$i];

 }
 //foreach loop
 $number = array(18,28,38,48,58,68,78);
 echo "<br>";
 echo  "array element";
 echo "<br>";
 foreach($number as $n => $n) 
 echo $n. "";

echo"<br>";
//multidimensional array:
 $school = [
    'school1' => [
        'class1' => [
            'farah' => ['English' => 100, 'Math' => 96, 'Science' => 89],
            'xaliimo' => ['English' => 90, 'Math' => 87, 'Science' => 78],
        ],
        'class2' => [
            'bashaka' => ['English' => 80, 'Math' => 67, 'Science' => 88],
            'ahmed' => ['English' => 85, 'Math' => 92, 'Science' => 94],
        ],
    ],
    'school2' => [
        'class1' => [
            'filsan' => ['English' => 88, 'Math' => 91, 'Science' => 90],
            'liban' => ['English' => 79, 'Math' => 85, 'Science' => 82],
        ],
        'class2' => [
            'mohamed' => ['English' => 95, 'Math' => 89, 'Science' => 93],
            'deqa' => ['English' => 82, 'Math' => 88, 'Science' => 87],
        ],
    ],
];
// echo $school['school1']['class1']['farah']['English'];  
// echo $school['school2']['class2']['mohamed']['Math'];   
print_r ($school);  