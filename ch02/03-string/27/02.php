<?php
    $str = "&lt;b&gt;PHP is easy&lt;/b&gt;";
    
    echo "Input: ".$str ."<br/>";
    echo "Output: ". htmlspecialchars_decode($str);