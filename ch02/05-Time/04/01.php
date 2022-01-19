<?php
    $time = time();
    $time = mktime(12,12,12,12,12,2012);
    
    echo date("d/m/Y A - H:i:s", $time);
    