
<?php


  echo "<br>";


function decimalToBinary($num) {
    $binary = '';
    while ($num > 0) {
        $binary = ($num % 2) . $binary;
        $num = intdiv($num, 2);
    }
    return $binary ?: '0';
}

function decimalToOctal($num) {
    $octal = '';
    while ($num > 0) {
        $octal = ($num % 8) . $octal;
        $num = intdiv($num, 8);
    }
    return $octal ?: '0';
}

function decimalToHexadecimal($num) {
    $hexadecimal = '';
    $hexDigits = '0123456789ABCDEF';
    while ($num > 0) {
        $hexadecimal = $hexDigits[$num % 16] . $hexadecimal;
        $num = intdiv($num, 16);
    }
    return $hexadecimal ?: '0';
}

$decimalNumber = 123; // Example number

echo "Decimal: $decimalNumber\n";echo "<br>";

echo "Binary: " . decimalToBinary($decimalNumber) . "\n";echo "<br>";

echo "Octal: " . decimalToOctal($decimalNumber) . "\n";echo "<br>";

echo "Hexadecimal: " . decimalToHexadecimal($decimalNumber) . "\n";



echo "<br>";
echo "<br>";

//////

function binaryToDecimal($binary) {
    $decimal = 0;
    $length = strlen($binary);
    for ($i = 0; $i < $length; $i++) {
        $bit = $binary[$length - $i - 1];
        if ($bit == '1') {
            $decimal += pow(2, $i);
        }
    }
    return $decimal;
}

function decimalToOctal1($num) {
    $octal = '';
    while ($num > 0) {
        $octal = ($num % 8) . $octal;
        $num = intdiv($num, 8);
    }
    return $octal ?: '0';
}

function decimalToHexadecimal1($num) {
    $hexadecimal = '';
    $hexDigits = '0123456789ABCDEF';
    while ($num > 0) {
        $hexadecimal = $hexDigits[$num % 16] . $hexadecimal;
        $num = intdiv($num, 16);
    }
    return $hexadecimal ?: '0';
}

$binaryNumber = '1111011'; // Example binary number

$decimalNumber = binaryToDecimal($binaryNumber);

echo "Binary: $binaryNumber\n";echo "<br>";

echo "Decimal: $decimalNumber\n";echo "<br>";
echo "Octal: " . decimalToOctal($decimalNumber) . "\n";echo "<br>";
echo "Hexadecimal: " . decimalToHexadecimal($decimalNumber) . "\n";




echo "<br>";echo "<br>";



//////
// 1) Declare and initialize the array
$array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

// 2) Print all elements of the array
echo "Array elements: " . implode(', ', $array) ;echo "<br>";

// 3) Calculate and print the total of all elements
$total = array_sum($array);
echo "Total of all elements: $total";echo "<br>";

// 4) Calculate and print the total of even elements
$totalEven = 0;
foreach ($array as $value) {
    if ($value % 2 == 0) {
        $totalEven += $value;
    }
}
echo "Total of even elements: $totalEven";echo "<br>";

// 5) Calculate and print the total of odd elements
$totalOdd = 0;
foreach ($array as $value) {
    if ($value % 2 != 0) {
        $totalOdd += $value;
    }
}
echo "Total of odd elements: $totalOdd";echo "<br>";

// 6) Find minimum element and its positions
$minValue = min($array);
$minPositions = [];
foreach ($array as $index => $value) {
    if ($value == $minValue) {
        $minPositions[] = $index;
    }
}
echo "Minimum element: $minValue at positions: " . implode(', ', $minPositions);echo "<br>";

// 7) Find maximum element and its positions
$maxValue = max($array);
$maxPositions = [];
foreach ($array as $index => $value) {
    if ($value == $maxValue) {
        $maxPositions[] = $index;
    }
}
echo "Maximum element: $maxValue at positions: " . implode(', ', $maxPositions);echo "<br>";







echo "<br>";echo "<br>";



///////////
// Declare and initialize the associative array
$colors = [
    'Light' => [
        'Red' => 'Light Red',
        'Green' => 'Light Green',
        'Blue' => 'Light Blue'
    ],
    'Normal' => [
        'Red' => 'Normal Red',
        'Green' => 'Normal Green',
        'Blue' => 'Normal Blue'
    ],
    'Dark' => [
        'Red' => 'Dark Red',
        'Green' => 'Dark Green',
        'Blue' => 'Dark Blue'
    ]
];

// Print the table header
echo "\tRed\tGreen\tBlue\n";

// Print the array elements in table format
foreach ($colors as $shade => $colorValues) {
    echo "$shade";echo "<br>";
    foreach ($colorValues as $color => $value) {
        echo "\t$value";
    }
    echo "<br>";
}











////////

echo "<br>";
echo "<br>";



// 1) Declare and initialize the square array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// 2) Print all elements of the array
echo "Array elements:\n";
foreach ($array as $row) {
    echo implode("\t", $row);    echo "<br>";

}

// 3) Calculate and print total of odd elements
$totalOdd = 0;
foreach ($array as $row) {
    foreach ($row as $value) {
        if ($value % 2 != 0) {
            $totalOdd += $value;
        }
    }
}
echo "Total of odd elements: $totalOdd";    echo "<br>";


// 4) Calculate and print total of even elements
$totalEven = 0;
foreach ($array as $row) {
    foreach ($row as $value) {
        if ($value % 2 == 0) {
            $totalEven += $value;
        }
    }
}
echo "Total of even elements: $totalEven";    echo "<br>";


// 5) Calculate and print total of each row
echo "Total of each row:";    echo "<br>";

foreach ($array as $index => $row) {
    $rowTotal = array_sum($row);
    echo "Row " . ($index + 1) . ": $rowTotal";    echo "<br>";

}

// 6) Calculate and print total of each column
echo "Total of each column:\n";
$columnTotals = array_fill(0, count($array), 0);
foreach ($array as $row) {
    foreach ($row as $index => $value) {
        $columnTotals[$index] += $value;
    }
}
foreach ($columnTotals as $index => $total) {
    echo "Column " . ($index + 1) . ": $total";    echo "<br>";

}

// 7) Calculate and print total of each diagonal
$primaryDiagonalTotal = 0;
$secondaryDiagonalTotal = 0;
for ($i = 0; $i < count($array); $i++) {
    $primaryDiagonalTotal += $array[$i][$i];
    $secondaryDiagonalTotal += $array[$i][count($array) - $i - 1];
}
echo "Total of primary diagonal: $primaryDiagonalTotal";    echo "<br>";

echo "Total of secondary diagonal: $secondaryDiagonalTotal";    echo "<br>";


// 8) Calculate and print total of all elements
$totalAllElements = array_sum(array_map('array_sum', $array));
echo "Total of all elements: $totalAllElements";    echo "<br>";


// 9) Find minimum element and its positions
$minValue = PHP_INT_MAX;
$minPositions = [];
foreach ($array as $rowIndex => $row) {
    foreach ($row as $colIndex => $value) {
        if ($value < $minValue) {
            $minValue = $value;
            $minPositions = [[$rowIndex, $colIndex]];
        } elseif ($value == $minValue) {
            $minPositions[] = [$rowIndex, $colIndex];
        }
    }
}
echo "Minimum element: $minValue at positions: ";
foreach ($minPositions as $pos) {
    echo "(" . ($pos[0] + 1) . ", " . ($pos[1] + 1) . ") ";
}
echo "<br>";

// 10) Find maximum element and its positions
$maxValue = PHP_INT_MIN;
$maxPositions = [];
foreach ($array as $rowIndex => $row) {
    foreach ($row as $colIndex => $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
            $maxPositions = [[$rowIndex, $colIndex]];
        } elseif ($value == $maxValue) {
            $maxPositions[] = [$rowIndex, $colIndex];
        }
    }
}
echo "Maximum element: $maxValue at positions: ";
foreach ($maxPositions as $pos) {
    echo "(" . ($pos[0] + 1) . ", " . ($pos[1] + 1) . ") ";
}

/////////
echo "<br>";
echo "<br>";

// Declare and initialize the associative array
$contacts = [
    'CA201' => [
        'Name' => 'Mohamed Ahmed Ali',
        'Phone' => '0648440403',
        'Address' => 'Laba Dhagax, Wardhiigley'
    ],
    'CA205' => [
        'Name' => 'Ahmed Abdi Jama',
        'Phone' => '0647223201',
        'Address' => 'Taleex, Hodan'
    ],
    'CA206' => [
        'Name' => 'Amina Nur Adan',
        'Phone' => '0646990276',
        'Address' => 'Macmacaanka, Dharkeynley'
    ]
];

// Print the table header
echo "\tName\t\t\tPhone\t\tAddress";echo "<br>";
// Declare and initialize the associative array
$contacts = [
    'CA201' => [
        'Name' => 'Mohamed Ahmed Ali',
        'Phone' => '0648440403',
        'Address' => 'Laba Dhagax, Wardhiigley'
    ],
    'CA205' => [
        'Name' => 'Ahmed Abdi Jama',
        'Phone' => '0647223201',
        'Address' => 'Taleex, Hodan'
    ],
    'CA206' => [
        'Name' => 'Amina Nur Adan',
        'Phone' => '0646990276',
        'Address' => 'Macmacaanka, Dharkeynley'
    ]
];

// Print the table header
echo "\tName\t\t\tPhone\t\tAddress";echo "<br>";
// Declare and initialize the associative array
$contacts = [
    'CA201' => [
        'Name' => 'Mohamed Ahmed Ali',
        'Phone' => '0648440403',
        'Address' => 'Laba Dhagax, Wardhiigley'
    ],
    'CA205' => [
        'Name' => 'Ahmed Abdi Jama',
        'Phone' => '0647223201',
        'Address' => 'Taleex, Hodan'
    ],
    'CA206' => [
        'Name' => 'Amina Nur Adan',
        'Phone' => '0646990276',
        'Address' => 'Macmacaanka, Dharkeynley'
    ]
];

// Print the table header
echo "\tName\t\t\tPhone\t\tAddress";echo "<br>";


// Print the array elements in table format
foreach ($contacts as $code => $info) {
    echo "$code";
    foreach ($info as $key => $value) {
        echo "\t$value";
    }
// Declare and initialize the associative array
$contacts = [
    'CA201' => [
        'Name' => 'Mohamed Ahmed Ali',
        'Phone' => '0648440403',
        'Address' => 'Laba Dhagax, Wardhiigley'
    ],
    'CA205' => [
        'Name' => 'Ahmed Abdi Jama',
        'Phone' => '0647223201',
        'Address' => 'Taleex, Hodan'
    ],
    'CA206' => [
        'Name' => 'Amina Nur Adan',
        'Phone' => '0646990276',
        'Address' => 'Macmacaanka, Dharkeynley'
    ]
];

// Print the table header
echo "\tName\t\t\tPhone\t\tAddress";echo "<br>";


// Print the array elements in table format
foreach ($contacts as $code => $info) {
    echo "$code";
    foreach ($info as $key => $value) {
        echo "\t$value";
    }
// Declare and initialize the associative array
$contacts = [
    'CA201' => [
        'Name' => 'Mohamed Ahmed Ali',
        'Phone' => '0648440403',
        'Address' => 'Laba Dhagax, Wardhiigley'
    ],
    'CA205' => [
        'Name' => 'Ahmed Abdi Jama',
        'Phone' => '0647223201',
        'Address' => 'Taleex, Hodan'
    ],
    'CA206' => [
        'Name' => 'Amina Nur Adan',
        'Phone' => '0646990276',
        'Address' => 'Macmacaanka, Dharkeynley'
    ]
];

// Print the table header
echo "\tName\t\t\tPhone\t\tAddress";echo "<br>";


// Print the array elements in table format
foreach ($contacts as $code => $info) {
    echo "$code";
    foreach ($info as $key => $value) {
        echo "\t$value";
    }
    echo "<br>";
}}}

// Print the array elements in table format
foreach ($contacts as $code => $info) {
    echo "$code";
    foreach ($info as $key => $value) {
        echo "\t$value";
    }
    echo "<br>";
}

// Print the array elements in table format
foreach ($contacts as $code => $info) {
    echo "$code";
    foreach ($info as $key => $value) {
        echo "\t$value";
       
    }

}