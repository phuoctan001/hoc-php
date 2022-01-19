<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Break - Continue</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content5">
		<?php 
		  $money = 0;
		  if (isset($_POST["money"])) $money = $_POST["money"];
		?>
		<div class="info">
			<img src="image/atm.jpg" />
			<h1>Mô phỏng Máy ATM</h1>
			<form action="#" method="post">
				<p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
				<input type="text" name="money"  value="<?php number_format($money);?>" />
				<input type="submit" value="Rút tiền" />
			</form>
		</div>
		<div class="clr"></div>
		<div class="result">
			<div class="normal">
				<p class="col1">Mệnh giá</p>
				<p class="col2">Số lượng</p>
				<p class="col3">Thành tiền</p>
			</div>
			<div class="clr"></div>
			<?php 
			 define("one", 1000);
			 define("two", 2000);    
			 define("five", 5000);    
			 define("one_0", 10000);    
			 define("two_0", 20000);    
			 define("five_0", 50000);    
			 define("one_00", 100000);    
			 define("two_00", 200000);    
			 define("five_00", 500000);   
			 
			 $five00 = 0;
			 $two_00 = 0;
			 $one_00 = 0;
			 $five_0 = 0;
			 $flagshow = false;
			 if (is_numeric($money) && $money >= 1000) {
			     $flagshow = true;
			     while ($money >= five_00 ){
			         $five00+=1;
			         $money = $money - five_00;
			     }
			     while ($money >= two_00 ){
			         $two_00+=1;
			         $money = $money - two_00;
			     }
			     while ($money >= one_00 ){
			         $one_00+=1;
			         $money = $money - one_00;
			     }
			     while ($money >= five_0 ){
			         $five_0+=1;
			         $money = $money - five_0;
			     }
			     $total = five_00 * $five00 + two_00 * $two_00 + one_00 * $one_00 + five_0 * $five_0;
			 }
			?>
			<?php 
			if ($five00 > 0 ){
			    echo '<div class="normal">
				<p class="col1">'.number_format(five_00).'</p>
				<p class="col2">'.$five00.'</p>
				<p class="col3">'.number_format(five_00 * $five00) .'</p>
			    </div>
			    <div class="clr"></div>';
			}
			if ($one_00 > 0 ){
			    echo '<div class="normal">
				<p class="col1">'.number_format(one_00).'</p>
				<p class="col2">'.$one_00.'</p>
				<p class="col3">'.number_format(one_00 * $one_00) .'</p>
			    </div>
			    <div class="clr"></div>';
			}
			if ($two_00 > 0 ){
			    echo '<div class="normal">
				<p class="col1">'.number_format(two_00).'</p>
				<p class="col2">'.$two_00.'</p>
				<p class="col3">'.number_format(two_00 * $two_00) .'</p>
			    </div>
			    <div class="clr"></div>';
			}
			if ($five_0 > 0 ){
			    echo '<div class="normal">
				<p class="col1">'.number_format(five_0).'</p>
				<p class="col2">'.$five_0.'</p>
				<p class="col3">'.number_format(five_0 * $five_0) .'</p>
			    </div>
			    <div class="clr"></div>';
			}
			if ($flagshow == true){
			    echo '<p class="total">Tổng tiền: '. number_format($total) .' VNĐ</p>';
			}
			?>
				
		</div>
    </div>
</body>
</html>