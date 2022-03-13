<?php

// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EasyPay Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	
	<h1 class="heading-title" style="margin-top: 0em; background-color: #133158; color:#BBD6FF">EasyPay Dashboard</h1>

	<div style="margin: 2em 6em 4em 6em; display: flex; flex-direction: row; padding: 4em; border-radius: 15px; background-color: #bde0f8">
		<div style="width: 45em; padding: 2em; background-color: #e9f2f5; border-radius: 15px">
			<!-- The text field -->
			<h2 class="sub-heading-title" style="background-color: #ffe77a10;" >Copy this Code Snippet and paste <br> it in your Website Codebase</h2>

			<!-- <div id='myInput' style="width:30em">
				
				<xmp>
				<iframe src="http://localhost/EasyPay/GujaratGas_199302033/" width="100%" height="900" style="border:none;"></iframe>
				</xmp>
				
			</div> -->

						<!-- The text field -->
			<input type="text" style="height: 4em; width: 32em; background-color: #133158; color: #bbd6ff" value='<iframe src="http://localhost/EasyPay/GujaratGas_199302033/" width="100%" height="900" style="border:none;"></iframe>' id="myInput">
			
			<!-- The button used to copy the text -->
			<button onclick="myFunction()" style="width: 8em;
	font-weight: 700;
	border: none;
	cursor: pointer;
	padding: 0.5em 1em 0.5em 1em;
	border-radius: 12px;
	font-size: 1.25em;
	text-transform: uppercase;
	background-color: #40db8e;">Copy text</button>

			<!-- The button used to copy the text -->
			<!-- <button onclick="myFunction()">Copy</button> -->
		</div>

		<div style="margin:0em 6em 0em 35em; background-color: #bde0f8"  >
			<!-- Creating notification when the
							user logs in -->
					
					<!-- Accessible only to the users that
							have logged in already -->
							<?php if (isset($_SESSION['success'])) : ?>
						<div class="error success" >
							<h3>
								<?php
									echo $_SESSION['success'];
									unset($_SESSION['success']);
								?>
							</h3>
						</div>
					<?php endif ?>

					<!-- information of the user logged in -->
					<!-- welcome message for the logged in user -->
					<?php if (isset($_SESSION['username'])) : ?>
						
					<div style="padding: 1em; width: 16em;  background-color: #40db8e; border-radius: 15px">
						<div style="display: flex; flex-direction:row; ">
							<div style="background-color: #40db8e">
								<img style="width: 4.5em; height:5.5em; background-color: #40db8e; padding-top: 1em; " src="./userlogo.png" alt="">
							</div>	
							<div style="padding: .75em 1em .5em 1em; background-color: #40db8e;">
							<strong style="background-color: #40db8e;">
							<?php echo $_SESSION['username']; ?>
							</strong>
							
							<p style="background-color: #40db8e;">
								<a href="index.php?logout='1'" style="color: green; background-color: #40db8e;">
									Click here to Logout
								</a>
							</p>
							</div>
						</div>
					</div>
						


					<?php endif ?>
		</div>



	</div>	


		
	






<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>


<br/>

<div style="background-color: white; margin-left: 6em">
<?php
	echo '<button style="width: 8em;
	font-weight: 700;
	border: none;
	cursor: pointer;
	padding: 0.5em 1em 0.5em 1em;
	border-radius: 12px;
	font-size: 1.25em;
	text-transform: uppercase;
	margin-right: 2em;
	background-color: #40db8e85;"><a style="cursor: pointer; text-decoration: none; color:black;" href="./add.php">Add</a></button>';

	echo '<button style="width: 8em;
	font-weight: 700;
	border: none;
	cursor: pointer;
	padding: 0.5em 1em 0.5em 1em;
	border-radius: 12px;
	font-size: 1.25em;
	text-transform: uppercase;
	background-color: #40db8e85;"><a style="cursor: pointer; text-decoration: none; color:black;" href="./edit.php">Edit</a></button>';
?>

</div>

<?php
include './table.php';
?>

</body>
</html>
