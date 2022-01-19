<?php
    $content = file_get_contents('https://vnexpress.net/the-gioi');
    
    $pattern = '#<article class="item-news item-news-common" data-offset="[0-9]{1,2}">(.*)</article>#imsU';
    preg_match_all($pattern, $content, $matches);

    $result = array();
    foreach ($matches[0] as $key => $value){
         
        //Lấy link
        $pattern = '#href="(.*)"#imsU';
        preg_match($pattern, $value, $link);
        $result[$key]['link'] = $link[1];
        
        //Lấy Image
        $pattern = '#src="(.*)"#imsU';
        preg_match($pattern, $value, $image);
        $result[$key]['image'] = $image[1];
        
        //Lấy Tỉtle
        $pattern = '#<a data-medium="Item-[0-9]{1,2}" .*>(.*)<#imsU';
        preg_match($pattern, $value, $tile);
        $result[$key]['title'] = trim($tile[1]);
        
        //Lấy description
        $pattern = '#<a data-medium="Item-[0-9]{1,2}" .*>(.*)</a>#imsU';
        preg_match_all($pattern, $value, $description);
        $result[$key]['description'] = $description[0][2];
    }
    
     echo "<pre>";
     print_r($result);
     echo "<pre/>";