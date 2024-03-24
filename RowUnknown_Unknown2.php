<?php
// Convert Fahrenheit to Celsius
function fahrenheitToCelsius($fahrenheit) {
    $celsius = ($fahrenheit - 30) * 5/8;
    return $celsius;
}

// Convert Fahrenheit to Kelvin
function fahrenheitToKelvin($fahrenheit) {
    $celsius = fahrenheitToCelsius($fahrenheit);
    $kelvin = $celsius + 273.15;
    return $kelvin;
}

// Example usage:
$fahrenheit = 90.6;
$celsius = fahrenheitToCelsius($fahrenheit);
$kelvin = fahrenheitToKelvin($fahrenheit);

echo "Fahrenheit: $fahrenheit\n";
echo "Celsius: $celsius\n";
echo "Kelvin: $kelvin\n";
?>