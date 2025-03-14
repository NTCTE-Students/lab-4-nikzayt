<?php
function secondLargest($arr) {
    rsort($arr);
    return $arr[1];
}


$numbers = [3, 7, 2, 9, 5];
echo secondLargest($numbers);
?>