<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Lấy chòm sao của bạn</title>
<link type="text/css" href="style.css" rel="stylesheet"/>
</head>
<body>
<?php 
    $day = "";
    $mon = "";
    $image = "";
    $name = "";
    $time = "";
    $result = "";
    if (isset($_POST["day"]) && isset($_POST["month"])) {
         $day = $_POST["day"];
         $mon = $_POST["month"];
         $flagShow = true;
        if (is_numeric($day) && is_numeric($mon)){
            
            switch ($mon) {
                case 1:
                    if ($day <= 19) { $image = "capricorn";    $name = "Ma Kết";  $time = "23/12 - 19/01";};
                    if ($day >= 20) { $image = "aquarius";   $name = "Bảo Bình"; $time = "20/01 - 19/02";};
                    if ($day < 1 || $day > 31) { $flagShow = false;}
                break;
                case 2:
                    if ($day <= 19) { $image = "aquarius";   $name = "Bảo Bình"; $time = "20/01 - 19/02";};
                    if ($day >= 20) { $image = "pisces";   $name = "Song ngư"; $time = "20/02 - 21/03";};
                    if ($day < 1 || $day > 29) { $flagShow = false;}
                    break;
                default:
                    $flagShow = false;
                    break;
            }
            if ($flagShow == true) {
                $result = '<div class="result">
    			<img alt="'.$image.'" src="image/'.$image.'.jpg">
    			<p>'.$name.' <span>('.ucfirst($image).' '.$time.')</span></p>
    		    </div>';

            }else{
                $result = "Dữ liệu không hợp lệ";
            }
        }else{
            $flagShow = false;
            $result = "Dữ liệu không hợp lệ";
        }
    }
?>
	<div class="content">
		<h1>Lấy chòm sao của bạn</h1>
		<form action="#" method="post" name="main-form">
			<div class="row">
				<span>Ngày sinh</span>
				<input type="text" name="day" value="<?php echo $day; ?>" >
			</div>
			<div class="row">
				<span>Tháng sinh</span>
				<input type="text" name="month" value="<?php echo $mon; ?>">
			</div>
			<div class="row">
				<input type="submit" value="Lấy chòm sao" name="submit">
			</div>

		</form>
<?php 
    echo $result;
?>	
</div>
</body>
</html>