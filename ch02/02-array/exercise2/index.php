<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css">
<title>Trắc nghiệm tính cách</title>
</head>
<body>
<?php 
    require_once 'function-a.php'; //lấy mãng $arrQuesion
    require_once 'function-b.php'; //lấy mãng $arrayOptions
    
     $newArr = array();
     
     foreach ($arrQuesion as $key => $value){
         $newArr[$key]["question"] = $value["question"];
         $newArr[$key]["sentences"] = $arrayOptions[$key];
     }
?>
	<div class="content">
		<h1>Trắc nghiệm tính cách</h1>
		<form action="result.php" method="POST" name="mainForm">
		<?php 
		$i = 1;
		  foreach ($newArr as $key => $value){
		      echo '<div class="question">';
		      echo '<p><span>Câu hỏi '.$i.': </span>'.$value["question"].'</p>';
		      echo '<ul>';
		          foreach ($value["sentences"] as $keyC => $valueC ){
		              echo '<li><label><input type="radio" name="'.$key.'" value="'.$valueC["point"].'">'.$valueC["option"].'</label></li>';
		          }
		      echo '</ul>';
		      
		      $i++;
		  }
		?>
			<input type="submit" value="Kiểm tra" name="submit"></input>
		</form>
		
	</div>
</body>
</html>