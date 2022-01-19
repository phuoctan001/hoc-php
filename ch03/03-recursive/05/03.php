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
    
    
    function recursive($source, $parents, $level, &$newArr){
        if (count($source) > 0){
            foreach ($source as $key => $value){
                if ($value['parents'] == $parents){
                    $value['level'] = $level;
                    $newArr[] = $value;
                    unset($source[$key]);
                    
                    $newParent = $value['id'];
                    recursive($source, $newParent, $level + 1, $newArr);
                }
            }
        }
    }
    recursive($menu, 0, 1, $newArr);
    
    function cmsSelectBox($source, $selected = 0,$name, $style = null, $size = 0){
        $xhtml = '<select name="'.$name.'" id="'.$name.'" style="'.$style.'" size="'.$size.'">';
        
        foreach ($source  as $key => $value){
            $strSlected = '';
            if ($value['id'] == $selected){
                $strSlected = 'selected="selected"';
            }
                if ($value['level'] == 1){
                    $xhtml .= '<option value="'.$value['id'].'"'.$strSlected.'>+'.$value['name'].'</option>';
                }else{
                    $name = str_repeat('&nbsp;', ($value['level'] - 1) * 5) . '-' . $value['name'];
                    $xhtml .= '<option value="'.$value['id'].'"'.$strSlected.'>'.$name.'</option>';
                }
            }
        
        $xhtml .= '</select>';
        
        return $xhtml;
    }
    
    echo cmsSelectBox($newArr, 2,'selectBox', 'min-width:200px; padding:3px;', 5);
?>


