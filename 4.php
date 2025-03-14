<?php
function sortArray($arr) {
    sort($arr);
    return $arr;
}

$numbers = [5, 3, 8, 1];
print_r(sortArray($numbers));
?>