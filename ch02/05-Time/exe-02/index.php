<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Làm việc với thời gian</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="content">
<h1>Làm việc với thời gian</h1>
    <?php 
         $result = date('h:i A D, \N\g\à\y d/m/Y', time());
         
         $arrayEn = array('Mon','Tue','Wed','Thu','Fri','Sat','Sun');
         $arrayVi = array('Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7','Chủ Nhật');
         
         $result = str_replace($arrayEn, $arrayVi, $result);
         //$result = str_replace(",", ", Ngày", $result);
         
         echo $result;
    ?>
 </div>
</body>
</html>