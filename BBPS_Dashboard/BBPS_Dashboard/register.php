<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Registration system PHP and MySQL
	</title>
	<link rel="stylesheet" type="text/css"
					href="./styleOG.css">
</head>

<body>

<h1 class="heading-title" style="background-color: #133158; color:#BBD6FF">EasyPay Dashboard</h1>
	
<div class="container" style="background-color: #bde0f8; margin-bottom: 2em;">
	<div class="left-container" style="background-color:#eaf1ee">
	<form method="post" action="register.php" style="background-color:#eaf1ee">

		<?php include('errors.php'); ?>

		
			<h2 class="CID-label" style="background-color:#eaf1ee">Enter Username</h2>
			<input type="text" name="username" style="background-color: #bde0f8"
				value="<?php echo $username; ?>">
		
		
			<h2 class="CID-label" style="background-color:#eaf1ee">Enter Email</h2>
			<input type="text" name="email" style="background-color: #bde0f8"
				value="<?php echo $email; ?>">
		
		
			<h2 class="CID-label" style="background-color:#eaf1ee">Enter Password</h2>
			<input type="password" name="password_1" style="background-color: #bde0f8">
		
		
			<h2 class="CID-label" style="background-color:#eaf1ee">Confirm password</h2>
			<input type="password" name="password_2" style="background-color: #bde0f8">
		<br>

		
			<button type="submit" style="width: 8em;
	font-weight: 700;
	border: none;
	cursor: pointer;
	padding: 0.5em 1em 0.5em 1em;
	border-radius: 12px;
	font-size: 1.25em;
	text-transform: uppercase;
	background-color: #40db8e;"
								name="reg_user">
				Register
			</button>
		
		

<br><br>
<p style="background-color:#eaf1ee">
			Already having an account?
			<a href="login.php" style="background-color:#eaf1ee">
				Login Here!
			</a>
		</p>



	</form>
	</div>
</div>
	
	
</body>
</html>
