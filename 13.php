<?php
function average($arr) {
    return array_sum($arr) / count($arr);
}


$numbers = [1, 2, 3, 4, 5];
echo average($numbers);
?>