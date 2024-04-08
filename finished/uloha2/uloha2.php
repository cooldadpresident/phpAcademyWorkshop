<?php
$start1 = -20; // start of the first interval
$end1 = 0; // end of the first interval

$start2 = 10; //start of the second interval
$end2 = 20; //end of the second interval

for ($i = $start1; $i <= $end2; $i++) {
    if ($i >= $start1 && $i <= $end1) {
        echo "interval 1: $i\n";

    } 
    elseif ($i >= $start2 && $i <= $end2) {
        echo "interval 2: $i\n";
    }
}

?>
