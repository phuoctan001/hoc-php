<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xác định năm nhuận</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="content">
<h1>Xác định năm nhuận</h1>
    <?php 
        function testleapYear($year){
            $flag = false;
            if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0))  $flag = true;
            
            return $flag;
        }   
        $year = 2016;
        if (testleapYear($year) == true){
            echo "Năm nhuận";
        }else{
            echo "Không là năm nhuận";
        }
    ?>
 </div>
</body>
</html>