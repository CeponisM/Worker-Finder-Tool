<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="styles.css">
	<title>Account - WFT</title>
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

<div id="accountRight">
	<div class="announcement">
		Account Information
	</div>
	<br />

	<form class="account" action="submit.php" method="post">
		First Name:<br>
		<input type="text" name="fName" >
		<br>
		Last Name:<br>
		<input type="text" name="lName">
		<br>
		Age:<br>
		<input type="text" name="age" >
		<br>
		Sex:<br>
		<input type="text" name="sex">
		<br>
		City:<br>
		<input type="text" name="city" >
		<br>
		Phone:<br>
		<input type="text" name="phone">
		<br>
		Username:<br>
		<input type="text" name="username" >
		<br>
		Password:<br>
		<input type="text" name="password">
		<br><br>
		<input type="submit" value="Submit">
	</form>
</div>

<div id="accountLeft">
	<div class="announcement">
		Your Services
	</div>
	<div id="mainBar">
	
		<div id="serviceHeaderBox">
			<p>Service Name, Service Type, Provider, Wage, Rating</p>
		</div>
		
		<div class="serviceBox">
			<p>James's Lawn Mowing, Yard Maintenance, James Brown, $50/hr, 4.96/5</p>
		</div>
				
		<div class="serviceBox">
			<p>James's Reseeding, Yard Maintenance, James Brown, $33/hr, 5.0/5</p>
		</div>
				
		<div class="serviceBox">
			<p>James's Painting, Painting Services, James Brown, $45/hr, 4.2/5</p>
		</div>
		
		<div class="serviceBox">
			<p>James's Repair, Lawnmower Repair Services, James Brown, $30/hr, 4.8/5</p>
		</div>
	</div>
</div>

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