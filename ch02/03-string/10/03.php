<?php 
    $str = "PHP is easy";
    echo "Input: " . $str . " Length: " . strlen($str);
    
    $str = ltrim($str, "PHP");
    
    echo "<br/>";
    echo "Output: " . $str . " Length: " . strlen($str);
?>
