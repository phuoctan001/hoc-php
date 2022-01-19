<?php

    /*1KB = 1024B
     *1MB = 1024KB
     *1GB = 1024MB
     *1T = 1024GB*/
    $filename = 'files/Quản lý bệnh nhân - Google Chrome 2021-10-13 16-11-47.mp4';
    
    $size = filesize($filename);
  
    
    function convertSize($size, $totalFigit = 2, $ditance = ' '){
        $units = array('B', 'KB', 'MB', 'GB', 'TB');
        $length = count($units);
        for ($i = 0; $i < $length; $i++){
            if ($size > 1024){
                $size = $size / 1024;
            }else{
                $unit = $units[$i];
                break;
            }
        }
        $result = round($size, $totalFigit) . $ditance. $unit;
        return $result;
    }
    
    echo convertSize($size, 3, '-');