<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css.css"/>
</head>
<body background="rose2.jpg">
<?php
require('dbconfig.php');
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username' ]);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);

		$query = " SELECT * FROM `login` WHERE username='$username' and password='".md5($password)."";
		$result = mysqli_query($con,$query) or die(mysql_error() );
		$rows = mysqli_num_rows($result);
		
		if($result==1){
		$_SESSION['username'] = $username;
		header("Location: index.php");
		}else{
			echo "<div class='form'>
		<h3>you are registered succesfully.</h3>
		<br/>click here to <a href ='login.php'>Login</a></div>";
		}
}
else{
	?>
	<div class="form">
	<h1>LOGIN</h1>
	<form name="Login" action="" method="post"  >
	<input type="email" name="email" placeholder="email" size="50" required /><br/>
	<input type="password" name="password" placeholder="password" style="width:10em; height:10em;"  required /><br/>
	<input type="submit" name="submit" value="login" style="width:05em; height:05em;"  />
	</form>
	</div>
<?php } ?>
</body>
</html>


	
		
		
	
	 