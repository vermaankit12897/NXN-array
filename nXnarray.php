<?php
// function generateOutputArray($inputArray) {
//     $n = count($inputArray);
//     $outputArray = array();

//     // Initialize the output array with zeros
//     for ($i = 0; $i < $n; $i++) {
//         for ($j = 0; $j < $n; $j++) {
//             $outputArray[$i][$j] = 0;
//         }
//     }

//     $rowStart = 0;
//     $rowEnd = $n - 1;
//     $colStart = 0;
//     $colEnd = $n - 1;
//     $value = 1;

//     // Fill in the output array following the specified pattern
//     while ($rowStart <= $rowEnd && $colStart <= $colEnd) {
//         // Fill the top row
//         for ($i = $colEnd; $i >= $colStart; $i--) {
//             $outputArray[$rowStart][$i] = $value++;
//         }
//         $rowStart++;

//         // Fill the rightmost column
//         for ($i = $rowStart; $i <= $rowEnd; $i++) {
//             $outputArray[$i][$colEnd] = $value++;
//         }
//         $colEnd--;

//         // Fill the bottom row
//         for ($i = $colEnd; $i >= $colStart; $i--) {
//             $outputArray[$rowEnd][$i] = $value++;
//         }
//         $rowEnd--;

//         // Fill the leftmost column
//         for ($i = $rowEnd; $i >= $rowStart; $i--) {
//             $outputArray[$i][$colStart] = $value++;
//         }
//         $colStart++;
//     }

//     return $outputArray;
// }

// Example usage with a 6x6 input array
// $inputArray = array(
//     array(1, 2, 3, 4, 5, 6),
//     array(7, 8, 9, 10, 11, 12),
//     array(13, 14, 15, 16, 17, 18),
//     array(19, 20, 21, 22, 23, 24),
//     array(25, 26, 27, 28, 29, 30),
//     array(31, 32, 33, 34, 35, 36)
// );

// $outputArray = generateOutputArray($inputArray);

// // Print the generated output array
// for ($i = 0; $i < count($outputArray); $i++) {
//     for ($j = 0; $j < count($outputArray[$i]); $j++) {
//         echo $outputArray[$i][$j] . "\t";
//     }
//     echo "\n";
// }














// Define the input array
$input = array (
    array (1, 2, 3, 4, 5, 6),
    array (7, 8, 9, 10, 11, 12),
    array (13, 14, 15, 16, 17, 18),
    array (19, 20, 21, 22, 23, 24),
    array (25, 26, 27, 28, 29, 30),
    array (31, 32, 33, 34, 35, 36)
  );
  
  // Define the size of the array
  $n = 6;
  
  // Create an empty output array
  $output = array();
  
  // Rotate the input array by 90 degrees clockwise
  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
      $output[$i][$j] = $input[$n - $j - 1][$i];
    }
  }
  
  // Print the output array in table format
  echo "<table>";
  foreach ($output as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
      echo "<td>$cell</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
  
?>