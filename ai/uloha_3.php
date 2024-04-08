<?php

// define the array, with elements

$pole = array("brambory", "celer", "dyne", "tykve", "okurky", "petrzel");

// check if the array is empty

if (empty($pole)) {
    echo "This array is empty";
} else {
    // check if it has exactly 10 elements
    if (count($pole) == 10) {
        echo "This array is too full.";
    } else {
        //loop through each element of the array
        for ($i = 0; $i < count($pole) - 1; $i++) {
            // check if the index is even 
            if ($i % 2 == 0) {
                // print even elements like -i-
                echo $pole[$i] . " ";

            } else {
                echo "-" . $pole[$i] . "-";
            }
        }
    }
}

?>