<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xác định số ngày trong tháng bất kỳ</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="content">
<h1>Xác định số ngày trong tháng bất kỳ</h1>
    <?php 
        $moth = 2;
        $year = 2013;
        
        $tiemStampe = mktime(0,0,0, $moth, 1, $year);
        echo $totalDay = date('t', $tiemStampe);
        
    ?>
 </div>
</body>
</html>