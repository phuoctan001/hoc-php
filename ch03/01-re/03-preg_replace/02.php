<?php
    $content = file('script.txt') or die('Không thể đọc được file');
    
    $content = implode('', $content);
    
    $pattern = array('#<script([^>]*)>#i', '#</script([^>]*)>#i');
    $replacement = array('<pre>&lt;script\\1&gt;', '&lt;script&gt\\1;');
    $result = preg_replace($pattern, $replacement, $content);
    
    echo $result;
     