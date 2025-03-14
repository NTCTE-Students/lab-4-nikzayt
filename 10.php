<?php
function removeDuplicates($arr) {
    return array_values(array_unique($arr)); 
}


$numbers = [1, 2, 2, 3, 4, 4, 5];
print_r(removeDuplicates($numbers));
?>