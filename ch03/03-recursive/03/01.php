<?php

    /*Tính tổng từ 1 đến n
     * sum(n) = sum(n - 1) + n
     * */

      function sum($number){
         
          $result = 0;
          if ($number >= 1){
              $result = sum($number - 1) + $number;
          }
          return $result;
          
      }
      
      echo $result = sum(4);
