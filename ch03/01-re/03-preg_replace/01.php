<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	
	a {
		font-weight: bold;
		color: red;
	}
</style>
<?php
    $content = file('khoa-hoc.txt') or die('Không thể đọc được file');
    
    $content = implode('', $content);
    
    $pattern = '#Zend Framework#i';
    $replacement = '<a href="https://www.facebook.com/profile.php?id=100004800585268">Zend framework</a>';
    $result = preg_replace($pattern, $replacement, $content);
    
    echo $result;