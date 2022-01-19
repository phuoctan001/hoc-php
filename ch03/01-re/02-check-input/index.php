<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Register Form</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php
    require_once 'function.php';
    $error = array('email'=>'','username'=>'','password'=>'','website'=>'');
    $email = '';
    $password = '';
    $username = '';
    $website = '';
    if (!empty($_POST)){
        $error = array();
        // Check Email
        $email = $_POST['email'];
        if (trim($email)==''){
            $error['email'] = '<p>Email không được rỗng!!!</p>';
        }
        else{ 
            if(checkInput($email, 'email') == false) {
            $error['email'] = '<p>Giá trì Email không hợp lệ!!!</p>';
            $email = '';
            }else{
                $error['email'] = '';
            }
        }
        //Check Username
        $username = $_POST['name'];
        if (trim($username)==''){
            $error['username'] = '<p>Username không được rỗng!!!</p>';
        }else{
        if (checkInput($username, 'username') == false) {
            $error['username'] = '<p>Giá trì Username không hợp lệ!!!</p>';
            $username = '';
            }else{
                $error['username'] = '';
            }
        }
        //Check Password
        $password = $_POST['password'];
        if (trim($password)==''){
            $error['password'] = '<p>Password không được rỗng!!!</p>';
        }else{
        if (checkInput($password, 'password') == false) {
            $error['password'] = '<p>Giá trì Password không hợp lệ!!!</p>';
            $password = '';
            }else{
                $error['password'] = '';
            }
        }
        //Check Website
        $website = $_POST['website'];
        if (trim($website)==''){
            $error['website'] = '<p>Website không được rỗng!!!</p>';
        }else{
        if (checkInput($website, 'website') == false) {
            $error['website'] = '<p>Giá trì Website không hợp lệ!!!</p>';
            $website = '';
            }else{
                $error['website'] = '';
            }
        }
    }
    
    $strEmail = createInput('input', 'Email','<input type="text" name="email" value="'.$email.'"/>',$error['email']);
    $strUsername = createInput('input', 'Username','<input type="text" name="name" value="'.$username.'"/>',$error['username']);
    $strPassword = createInput('input', 'Password','<input type="password" name="password" value="'.$password.'"/>',$error['password']);
    $strWebsite = createInput('input nobottomborder', 'Website','<input type="text" name="website" value="'.$website.'"/>',$error['website']);
?>
	<div class="wrapper">
		<form class="form1" action="#" method="post">
			<div class="formtitle">Login to your account</div>
				<?php echo $strEmail . $strUsername . $strPassword . $strWebsite;?>
			
			<div class="buttons">
				<input class="orangebutton" type="submit" value="Login" />
			</div>
		</form>
	</div>
</body>
</html>