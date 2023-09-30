<?php
function generateOutputArray($inputArray) {
    $n = count($inputArray);
    $outputArray = array();

    for ($i = 0; $i < $n; $i++) {
        $outputArray[$i] = array();
        for ($j = 0; $j < $n; $j++) {
            if ($j == 0) {
                $outputArray[$i][$j] = $inputArray[$n - 1 - $i][$n - 1];
            } elseif ($j == $n - 1) {
                $outputArray[$i][$j] = $inputArray[$n - 1 - $i][0];
            } else {
                $outputArray[$i][$j] = $inputArray[$n - 1 - $i][$j];
            }
        }
    }

    return $outputArray;
}

// Example usage with the provided input array:
$inputArray = array(
    array(1, 2, 3, 4, 5, 6, 7, 8),
    array(9, 10, 11, 12, 13, 14, 15, 16),
    array(17, 18, 19, 20, 21, 22, 23, 24),
    array(25, 26, 27, 28, 29, 30, 31, 32),
    array(33, 34, 35, 36, 37, 38, 39, 40),
    array(41, 42, 43, 44, 45, 46, 47, 48),
    array(49, 50, 51, 52, 53, 54, 55, 56),
    array(57, 58, 59, 60, 61, 62, 63, 64)
);

$outputArray = generateOutputArray($inputArray);

// Display the output array
foreach ($outputArray as $row) {
    foreach ($row as $value) {
        echo $value . "\t";
    }
    echo "<br>";
}
?>
