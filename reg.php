<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
require('db.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = ("y-m-d H:m:s");
		$query = " INSERT into `users` (username, password, email,trn_date) 
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
		$result = mysqli_query($con,$query);
		if($result){
			echo "<div class='form'>
		<h3>you are registered succesfully.</h3>
		<br/>click here to <a href ='login.php'>Login</a></div>";
		}
}
else{
	?>
	<div class="form">
	<h1>Registration</h1>
	<form name="registration" action="" method="post">
	<input type="text" name="username" placeholder="username" required />
	<input type="email" name="email" placeholder="email" required />
	<input type="password" name="password" placeholder="password" required />
	<input type="submit" name="submit" value="Register" />
	</form>
	</div>
<?php } ?>
</body>
</html>


	
		
		
	
	 