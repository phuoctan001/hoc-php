<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery-3.6.0.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#date" ).datepicker({
    	dateFormat: "dd/mm/yy",
    	defaultDate: "+3d",
    	changeYear: true,
    	changeMonth: true,
    	yearRange: "2000:2025"
    });
  } );
  </script>
</head>
<body>
<div class="content">
<h1>Exercise 07</h1>
    <?php          
         require_once 'function.php';
         $arrayType = array('Select Type','Day','Month','Year');
        
         //Lấy giá trị người dụng nhập vào
         $date = (isset($_POST["date"])) ? $_POST["date"] : "";
         $type = (isset($_POST["select-type"])) ? $_POST["select-type"] : "";
         $value = (isset($_POST["value"])) ? $_POST["value"] : "";
         $strType = createSelctbox($arrayType, 'select-type', $type);  
    ?>
    <form action="#" method="post" name="mainForm" id="mainForm">
    	<div class="row">
    		<span>Start: </span>
    			<input readonly="readonly" type="text" id="date" name="date" value="<?php echo $date;?>">
    	</div>
    	<div class="row">
    		<span>Type</span>
    		<?php echo $strType;?>
    	</div>
    	<div class="row">
    		<span>Value</span>
    		<input type="text" id="value" name="value"  value="<?php echo $value;?>">
    	</div>
    	<div class="row">
    	<input type="submit" value="Submit">
    	</div>
    </form>
    <div class="result">
    	<?php 
    	   echo $result = addTime($date,'d/m/Y',$arrayType[$type], $value);
    	?>
    </div>
 </div>
</body>
</html>