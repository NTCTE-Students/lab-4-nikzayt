<?php
function countWords($str) {
    return str_word_count($str);
}


$text = "Hello, world! This is a test.";
echo countWords($text); 
?>