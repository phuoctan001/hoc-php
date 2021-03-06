<?php

    $menu = array();
    $menu[] = array('id' => 1, 'name' => 'Home', 'parents' => 0);
    $menu[] = array('id' => 2, 'name' => 'About', 'parents' => 0);
    $menu[] = array('id' => 3, 'name' => 'New', 'parents' => 0);
    $menu[] = array('id' => 4, 'name' => 'Products', 'parents' => 0);
    $menu[] = array('id' => 5, 'name' => 'Contact', 'parents' => 0);
    $menu[] = array('id' => 6, 'name' => 'Tin trong nước', 'parents' => 3);
    $menu[] = array('id' => 7, 'name' => 'Tin nước ngoài', 'parents' => 3);
    $menu[] = array('id' => 8, 'name' => 'Công nghệ thông tin', 'parents' => 6);
    $menu[] = array('id' => 9, 'name' => 'Lập trình', 'parents' => 6);
    $menu[] = array('id' => 10, 'name' => 'IT', 'parents' => 7);
    $menu[] = array('id' => 11, 'name' => 'Progamming', 'parents' => 7);
    $menu[] = array('id' => 12, 'name' => 'Software', 'parents' => 4);
    $menu[] = array('id' => 13, 'name' => 'Mobile', 'parents' => 4);
    $menu[] = array('id' => 14, 'name' => 'Anti Virus', 'parents' => 12);
    $menu[] = array('id' => 15, 'name' => 'Nokia', 'parents' => 13);
    $menu[] = array('id' => 16, 'name' => 'Samsung', 'parents' => 13);
    $menu[] = array('id' => 17, 'name' => 'S1', 'parents' => 16);
    $menu[] = array('id' => 18, 'name' => 'S1.1', 'parents' => 17);
    
    foreach ($menu as $key => $value){
        if ($value['parents'] == 0){
            $value['level'] = 1;
            $newArr[] = $value;
            $parent = $value['id'];
            unset($menu[$key]);
            
            foreach ($menu as $key_1 => $value_1){
                if ($value_1['parents'] == $parent){
                    $value_1['level'] = $value['level'] + 1;
                    $newArr[] = $value_1;
                    unset($menu[$key_1]);
                    
                    $parent_1 = $value_1['id'];
                    foreach ($menu as $key_2 => $value_2){
                        if ($value_2['parents'] == $parent_1){
                            $value_2['level'] = $value_1['level'] + 1;
                            $newArr[] = $value_2;
                            unset($menu[$key_2]);
                            
                        }
                    }
                }
            }
            
        }
    }
    
    echo '<pre>';
    print_r($menu);   
    echo '</pre>';
    
    foreach ($newArr as $key => $value){
        if ($value['level'] == 1){
            echo '<div style="border: 1px solid #ccc">+' . $value['name'] . '</div>'; 
        }else{
            $padding = ($value['level'] - 1)*20;
            $padding = ';padding-left: '.$padding.'px;';
            echo '<div style="border: 1px solid #ccc'.$padding.'">-' . $value['name'] . '</div>'; 
        }
    }
?>

