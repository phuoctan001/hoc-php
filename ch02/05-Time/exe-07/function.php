<?php
    function createSelctbox($arrayData, $name, $keySelected){
        $strDay = "";
        if (!empty($arrayData)){
            $strDay .= '<select name="'.$name.'">';
            for ($i = 0; $i < count($arrayData); $i++){
                if ($keySelected == $i){
                    $strDay .= '<option value="'.$i.'" selected="true">'.$arrayData[$i].'</option>';
                }else{
                    $strDay .= '<option value="'.$i.'">'.$arrayData[$i].'</option>';
                }
            }
            $strDay .= '</select>';
        }
        
        return $strDay;
        
    }
    
    function addTime($date, $format, $type, $value){
        $arrayDate = date_parse_from_format($format, $date);
        $type = strtolower($type);
        switch ($type){
            case 'day':
                $ts = mktime(0,0,0,$arrayDate['month'], $arrayDate['day'] + $value ,$arrayDate['year']);
                break;
            case 'month':
                $ts = mktime(0,0,0,$arrayDate['month'] + $value, $arrayDate['day'] ,$arrayDate['year']);
                break;
            case 'year':
                $ts = mktime(0,0,0,$arrayDate['month'], $arrayDate['day'] ,$arrayDate['year'] + $value);
                break;
            default:
                $ts = mktime(0,0,0,$arrayDate['month'], $arrayDate['day'] ,$arrayDate['year']);
                break;
        }
        $result = date($format, $ts);
        return $result;
    }