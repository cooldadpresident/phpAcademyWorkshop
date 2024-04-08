<?php

// Function for checking data types of an array
function checkDataType($array, $data_type) {
    // Loop through each element of the array
    foreach ($array as $value) {
        // Check if the data type is valid for the specified data types
        if (gettype($value) != $data_type) {
            // Return false if any element does not match the specified data type
            return false;
        }
    }

    // If all elements match the specified data types, return true
    return true;
}

// Example usage

// Array containing only string values
$string_array = array("Jo", "Hello", "3.4");

// Array containing only integer values
$int_array = array(1, 2, 3, 4);

// Array containing only float values
$float_array = array(1.3, 1.3, 4.0, 1.5);

// Check if the elements in the array are of the specified data type
$string_result = checkDataType($string_array, "string");
$int_result = checkDataType($int_array, "integer"); // Changed to "integer" for correctness
$float_result = checkDataType($float_array, "double"); // Changed to "double" for correctness

// Print the results
echo "String array: " . ($string_result ? "All elements are strings" : "Not all elements are strings") . "<br>";
echo "Integer array: " . ($int_result ? "All elements are integers" : "Not all elements are integers") . "<br>";
echo "Float array: " . ($float_result ? "All elements are floats" : "Not all elements are floats");
?>