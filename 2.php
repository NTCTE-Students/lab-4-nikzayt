<?php
function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
    return $str === strrev($str);
}


$text = "A man, a plan, a canal, Panama";
echo "Является ли '$text' палиндромом? " . (isPalindrome($text) ? 'Да' : 'Нет') . "\n";