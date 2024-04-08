<?php
function check_data_type($array, $data_type) {
  // Loop through each element of the array
  foreach ($array as $value) {
    // Check if the data type of the element matches the specified data type
    if (gettype($value) !== $data_type) {
      return false; // Return false if any element has a different data type
    }
  }
  // If all elements match the data type, return true
  return true;
}

// Example usage
$string_array = array("Apple", "Banana", "Orange");
$int_array = array(1, 2, 3);
$float_array = array(3.14, 2.72, 1.6);

// Check if the elements in the arrays are of the expected data type
$string_result = check_data_type($string_array, "string");
$int_result = check_data_type($int_array, "integer");
$float_result = check_data_type($float_array, "double");

// Print the results
echo "String array: " . ($string_result ? "All elements are strings" : "Not all elements are strings") . "<br>";
echo "Integer array: " . ($int_result ? "All elements are integers" : "Not all elements are integers") . "<br>";
echo "Float array: " . ($float_result ? "All elements are floats" : "Not all elements are floats");
?>
