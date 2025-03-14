<?php
function formatDate($date) {
    return date("d/m/Y", strtotime($date));
}


echo formatDate("2009-12-31"); 
?>