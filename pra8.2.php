<?php
function findLargest($a, $b) {
    if($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$result = findLargest(10, 20);
echo "Largest Number is: " . $result;
?>