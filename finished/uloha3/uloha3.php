<?php

// define the array with elements
$pole = array("Brambory", "Celer", "Dýně", "Tykve", "Okurky", "Petržel");

// check if the array is empty
if (empty($pole)) {
    echo "Toto pole neni osazeno";

} else {
    // loop through each element
    for ($i = 0; $i < count($pole); $i++) {
        // check if the array is over 10 elements
        if (count($pole) > 10) {
            echo "Pole je prilis plne";
            break;
        }
        if (($i % 2) == 0) {
            echo ("-" . $pole[$i] . "-");
        }
        // print odd elements
        else {
            echo "   " . $pole[$i]. "   ";
        }
    }
}
?>