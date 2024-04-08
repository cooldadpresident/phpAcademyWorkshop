<?php
$start1 = -20; // Start of the first interval
$end1 = 0;   // End of the first interval

$start2 = 10; // Start of the second interval
$end2 = 20;   // End of the second interval
    
// Loop through both intervals and print each number
for ($i = $start1; $i <= $end2; $i++) {
    if ($i >= $start1 && $i <= $end1) {
        echo "Interval 1: $i\n";
    } elseif ($i >= $start2 && $i <= $end2) {
        echo "Interval 2: $i\n";
    }
}
?>
