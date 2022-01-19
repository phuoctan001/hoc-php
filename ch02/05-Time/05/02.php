<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Thao tác với ngày tháng</title>
<link rel="stylesheet" media="screen" href="style.css">
</head>
<body>
<?php 
    $arrayDay = range(1, 31);
    $arrayMoth = range(1, 12);
    $arrayYear = range(1970, 2030);
    
    function createSelctbox($arrayData, $name, $keySelected){
        $strDay = "";
        if (!empty($arrayData)){
            $strDay .= '<select name="'.$name.'">';
            for ($i = 0; $i < count($arrayData); $i++){
                if ($keySelected == $i){
                $strDay .= '<option value="'.$i.'" selected="true">'.$arrayData[$i].'</option>';
                }else{
                    $strDay .= '<option value="'.$i.'">'.$arrayData[$i].'</option>';
                }
            }
            $strDay .= '</select>';
        }
        return $strDay;
    }
     
      $day = (isset($_POST['days_select'])) ? $_POST['days_select'] : 0;
      $moth = (isset($_POST['moth_select'])) ? $_POST['moth_select'] : 0;
      $year = (isset($_POST['year_select'])) ? $_POST['year_select'] : 0;
      
      $strDay = createSelctbox($arrayDay, "days_select", $day);
      $strMoth = createSelctbox($arrayMoth, "moth_select",$moth);
      $strYear = createSelctbox($arrayYear, "year_select",$year);
?>
	<div class="content">
	<h1>Thao tác với thời gian</h1>
		<form action="#" method="post" id="mainForm" name="mainForm">
			<div class="row">
				<span>Ngày</span>
				<?php echo $strDay;?>
			</div>
			<div class="row">
				<span>Tháng</span>
				<?php echo $strMoth;?>
			</div>
			<div class="row">
				<span>Năm</span>
				<?php echo $strYear;?>
			</div>
			<div class="row">
				<input type="submit" value="check date">
			</div>
			<div class="result">
				<?php 
				    echo "Ngày được chọn: $arrayDay[$day]/$arrayMoth[$moth]/$arrayYear[$year]";
				    if (checkdate($arrayMoth[$moth], $arrayDay[$day], $arrayYear[$year])){
				        echo "<p>Ngày hợp lệ</p>";
				    }else{
				        echo "<p>Ngày không hợp lệ</p>";
				    }
				?>
			</div>
		</form>
	</div>
</body>
</html>