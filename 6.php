<?php
function sumOfDigits($number) {
    return array_sum(str_split(abs($number))); 
}


echo sumOfDigits(12345);
?>