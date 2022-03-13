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
	<link rel="stylesheet" type="text/css"
					href="style.css">
</head>
<body>
	<div class="header">
		<h2>EasyPay Dashboard</h2>
	</div>
	<div class="content">

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
			


<p>
				<strong>
					<?php echo $_SESSION['username']; ?>
				</strong>
			</p>





			


<p>
				<a href="index.php?logout='1'" style="color: red;">
					Click here to Logout
				</a>
			</p>



		<?php endif ?>
	</div>


<!-- The text field -->
<h1>Copy this Code Snippet and paste it in your Website Codebase</h1>

<div id='myInput'>
	
	<xmp>
	<iframe src="http://localhost/EasyPay/GujaratGas_199302033/" width="100%" height="900" style="border:none;"></iframe>
	</xmp>
	<button onclick="myFunction()">Copy</button>
</div>

<!-- The button used to copy the text -->
<!-- <button onclick="myFunction()">Copy</button> -->


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
<?php
	echo '<button><a href="add.php">Add</a></button>';
	echo '<button><a href="edit.php">Edit</a></button>';
?>

<?php
include 'table.php';
?>

</body>
</html>
