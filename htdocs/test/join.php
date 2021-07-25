<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="styles.css">
	<title>Join WFT</title>
</head>

<body>

<div class="top-container">
  <h1><a href="/test/">Worker Finder Tool</a></h1>
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

<br>
<center>

<form class="signin" action="submit.php" method="post">
	<div class="signIn-header">
	<h3>Make a new account</h3>
	</div>
	
	First Name:<br>
	<input type="text" name="fName" >
	<br>
	Last Name:<br>
	<input type="text" name="lName" >
	<br>
	Username:<br>
	<input type="text" name="username" >
	<br>
	Password:<br>
	<input type="text" name="password">
	<br>
	State:<br>
	<input type="text" name="state" >
	<br>
	City:<br>
	<input type="text" name="city" >
	<br>
	<label for="accountType">Account Type: </label>
	<select name="Account Type" id="accountType">
    <option value="User">User</option>
	<option value="Worker">Worker</option>
	</select>
	<br><br><br>
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