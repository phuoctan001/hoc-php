<?php
    
    function joinStr($str1, $str2, $joinCharacter = " "){
        $result = $str1 . $joinCharacter . $str2;
        return $result;
    }
    
    $result = joinStr("PHP", "is easy", "-------");
    echo $result;