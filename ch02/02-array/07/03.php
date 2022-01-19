<?php
    $course = array("PHP", "Joomla","Zend Framework","JQuery");
    
    function removeItem(&$array, $type = "first", $total = 2){
        
        $result = array();
        
        if (!empty($array)){
            if ($total >= count($array)){
                $result = $array;
                $array = null;
            }else{
            if ($type == "first"){
                for ($i = 1; $i <= $total; $i++){
                    $result[] = array_shift($array);
                }
            }else if($type == "last"){
                for ($i = 1; $i <= $total; $i++){
                    $result[] = array_pop($array);
                }
            }
            }
        }
        
        return $result;
        
    }
    
    echo "arrayItem: <br/>";
    echo "<pre>";
    print_r($course);
    echo "<pre/>";
    
    $arrayItem = removeItem($course, "last",20);
    
    
    echo "arrayItem: <br/>";
    echo "<pre>";
    print_r($arrayItem); 
    echo "<pre/>";
     
    echo "course: <br/>";
     echo "<pre>";
     print_r($course);
     echo "<pre/>";