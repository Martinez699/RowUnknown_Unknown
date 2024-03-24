<?php
// Function to calculate the hypotenuse of a right triangle
function calculateHypotenuse($side1, $side2) {
    $hypotenuse = sqrt(pow($side1, 2) + pow($side2, 2));
    return $hypotenuse;
}

// Example usage:
$side1 = 2;
$side2 = 1;
$hypotenuse = calculateHypotenuse($side1, $side2);

echo "The length of side 1 is $side1 <br>";
echo "The length of side 2 is $side2 <br>";
echo "The length of the hypotenuse is $hypotenuse <br>";
?>