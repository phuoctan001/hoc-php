<?php

    /*Tính giai thừa
     * Ví dụ: 
     * 4! = 4 * 3 * 2 * 1
     * 5! = 5 * 4 * 3 * 2 * 1
     * 0! = 1
     * 1! = 1 * 1 = 1  */

      function factorial($number){
          $result = 1;
          if ($number>= 1){
              for ($i = 1; $i <= $number; $i++){
                  $result *= $i;
              }
          }
          return $result;
      }
      $number = 4;
      $str = '';
      for ($i = $number; $i >= 1; $i--){
         $str .= $i . " * ";
      }
      $result = factorial($number);
      $str = substr($str, 0, strlen($str) - 2);
      echo "$number! = $str => $number! = $result ";