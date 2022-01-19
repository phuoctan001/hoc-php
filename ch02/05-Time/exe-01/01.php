<?php 
    $timeStampe = strtotime("now");
    $timeStampe = strtotime("18 jun 2022");
    $timeStampe = strtotime("next Monday");
    $timeStampe = strtotime("15-mar-2020");
    $timeStampe = strtotime("15/06/2020");
    
    echo date('d-m-Y', $timeStampe);
    
?>