<?php
// Step 1 
for ($i=1; $i<=20; $i++) {
    if($i % 15 == 0) {
        echo "fizzbuzz ";
    } elseif ($i % 5 == 0) {
        echo "buzz ";
    } elseif ($i % 3 == 0) {
        echo "fizz ";
    } else {
        echo "$i ";
    }
}
?>