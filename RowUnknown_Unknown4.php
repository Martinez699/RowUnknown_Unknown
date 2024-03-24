<?php
// calculate the sum of two numbers
function addTwoNumbers($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}

// check if a number is odd or even
function isOddOrEven($num) {
    if ($num % 2 == 0) {
        $message = "even";
    } else {
        $message = "odd";
    }
    return $message;
}

// example usage:
$num1 = 5;
$num2 = 3;
$sum = addTwoNumbers($num1, $num2);
$sumType = isOddOrEven($sum);

echo "Number 1: $num1 <br>";
echo "Number 2: $num2 <br>";
echo "Sum: $sum <br>";
echo "Sum is $sumType <br>";
?>