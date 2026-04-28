<?php
function multiplicationTable($num) {
    echo "Multiplication Table of $num <br>";
    for($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}

multiplicationTable(5);
?>