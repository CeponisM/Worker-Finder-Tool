<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css">
<title> Sign-In</title>
</head>
<body>

<div class="top-container">
  <h1>Worker Finder Tool</h1>
  <p>Individual Service Provider Discovery Tool</p>
</div>

<div class="header" id="menuBar">
	<div id="menuMain">
	</div>
	<div id="menuButtons">
		<button type="button" onclick="window.location.href='/test/SignIn.php';">Sign In</button>
		<button type="button" onclick="window.location.href='/test/Join.php';">Join</button>
		<button type="button" onclick="window.location.href='/test/Account.php';">Account</button>
	</div>
	<br style="clear:both;"/>
</div>

<br><br><br><br>
<center>

<form class="signin" action="submit.php" method="post">
	<div class="signIn-header">
	<h3>Sign in to your account</h3>
	</div>
	Username:<br>
	<input type="text" name="username" >
	<br>
	Password:<br>
	<input type="text" name="password">
	<br><br>
	<input type="submit" value="Submit">
</form>

</center>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("menuBar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html>