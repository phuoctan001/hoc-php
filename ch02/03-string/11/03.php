<?php 
    $str = "PHP is easy";
    echo "Input: " . $str . " Length: " . strlen($str);
    
    $str = rtrim($str, "easy");
    
    echo "<br/>";
    echo "Output: " . $str . " Length: " . strlen($str);
?>
