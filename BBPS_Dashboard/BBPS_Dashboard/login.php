<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login and Registration
		System - LAMP Stack
	</title>
	
	<link rel="stylesheet" href="./styleOG.css">
</head>
<body >
<h1 class="heading-title" style="background-color: #133158; color:#BBD6FF">EasyPay Dashboard</h1>
	
	<div class="container" style="background-color: #bde0f8; margin-bottom: 2em;">
		<div class="left-container" style="background-color:#eaf1ee">
		<h1 class="sub-heading-title" style="background-color:#eaf1ee" >Login here</h1>
		<form method="post" action="login.php" style="background-color:#eaf1ee" >

<?php include('errors.php'); ?>


	<h2 class="CID-label" style="background-color:#eaf1ee" >Enter Username</h2>
	<input type="text" name="username"  style="background-color: #bde0f8" >


	<h2 class="CID-label" style="background-color:#eaf1ee" >Enter Password</h2>
	<input type="password" name="password" style="background-color: #bde0f8" >
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
				name="login_user">
		Login
	</button>


<br>
<br>
<br>

<p style="background-color:#eaf1ee" >
	New Here?
	<a href="register.php" style="background-color:#eaf1ee" >
		Click here to register!
	</a>
</p>



</form>
		</div>
	</div>


</body>

</html>
