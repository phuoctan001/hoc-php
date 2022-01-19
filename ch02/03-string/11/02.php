<?php 
    $str = "PHP is easy\n\n\n";
    echo "Input: " . $str . " Length: " . strlen($str);
    
    $str = rtrim($str);
    
    echo "<br/>";
    echo "Output: " . $str . " Length: " . strlen($str);
?>
