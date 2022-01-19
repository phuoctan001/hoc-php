<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hình ảnh ngẩu nhiên</title>
<link type="text/css" rel="stylesheet" href="../style.css">
<script type="text/javascript">
	function refreshPage() {
		window.location.reload();
	}

</script>
</head>
<body>

	<div class="content3">
		<h1>Hình ảnh ngẩu nhiên</h1>
		<div class="image">
			<?php 
			 $number = rand(1,4);
			 echo '<img src="image/nature-0'.$number.'.jpg">';
			?>
		
		</div>
		<a href="javascript:refreshPage();">Ramdom Image</a>
	</div>
</body>
</html>