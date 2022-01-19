
<?php
    $data = file('options.txt') or die("Không thể đọc file");
    
    array_shift($data);

     
     $arrayOptions = array();
     foreach ($data as $key => $value){

           $tmp = explode("|", $value);
           $questionID  = $tmp[0];
           $optionID    = $tmp[1];
           $answer      = $tmp[2];
           $point       = $tmp[3];
           $arrayOptions[$questionID][$optionID]["option"] = $answer;
           $arrayOptions[$questionID][$optionID]["point"] = $point;
     }
