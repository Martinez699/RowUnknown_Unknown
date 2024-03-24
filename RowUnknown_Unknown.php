<?php
// Convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

// Convert Celsius to Kelvin
function celsiusToKelvin($celsius) {
    $kelvin = $celsius + 273.15;
    return $kelvin;
}

// Example usage:
$celsius = 20;
$fahrenheit = celsiusToFahrenheit($celsius);
$kelvin = celsiusToKelvin($celsius);

echo "Celsius: $celsius\n";
echo "Fahrenheit: $fahrenheit\n";
echo "Kelvin: $kelvin\n";

?>