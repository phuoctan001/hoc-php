<?php
    $str = "&lt;b&gt;PHP&lt;/b&gt; is easy &copy;copy;";
    
    echo "Input: ".$str ."<br/>";
    echo "Output: ". html_entity_decode($str);