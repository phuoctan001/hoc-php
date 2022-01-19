<?php
    $source = 'files/abc.txt';
    $dest = 'result.txt';
    
    if (copy($source, $dest) == true){
        echo 'Success';
    }else{
        echo 'Fail';
    }
    