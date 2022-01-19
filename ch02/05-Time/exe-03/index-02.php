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
    
        $year = 2013;
        if (checkdate(2, 29, $year)){
            echo "Năm nhuận";
        }else{
            echo "Không là năm nhuận";
        }
    ?>
 </div>
</body>
</html>