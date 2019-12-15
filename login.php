<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system </title>
	<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
			<link rel="stylesheet" type="text/css" href="xCSS/css/all.css">
</head>
<body>
    <div class="head">
    <h1>Doctor's Queue Management System  </h1>
    </div>
  
    <br>
	<div class="header">
		<h2>Client Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label><i class="fas fa-user fa-1x cust" aria-hidden="true"></i> Username</label>
			<input type="text" name="username" ></i>
		</div>
		
		<div class="input-group">
			<label><i class="fas fa-lock fa-1x cust" aria-hidden="true"></i> Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>