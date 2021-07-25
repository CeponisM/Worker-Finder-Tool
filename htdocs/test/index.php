<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="styles.css">
	<title> WFT - Home</title>
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

<div id="content">
	<div id="sideBar">
		<div style="padding: 12px">
			<h2>Catagories:</h2><br>
			<a href="#">Vehicles</a><br>
			<a href="#">Home Improvement</a><br>
			<a href="#">Demolition</a><br>
			<a href="#">Construction</a><br>
			<a href="#">Electricity</a><br>
			<a href="#">Plumbing</a><br>
			<a href="#">Education</a><br>
			<a href="#">Analysis</a><br>
			<a href="#">Website</a><br>
			<a href="#">Culinary</a><br>
		</div>
	</div>

	<div id="mainBar">
		
		<div id="serviceHeaderBox">
			<p>Service Name, Service Type, Provider, Wage, Rating</p>
		</div>
		
		<div class="serviceBox">
			<p>James's Lawn Mowing, Yard Maintenance, James Brown, $50/hr, 4.96/5</p>
		</div>
		<div class="serviceBox">
			<p>Tom's Paving, Driveway Resealing, Tom El Ron Jr, $66/hr, 5/5</p>
		</div>
		<div class="serviceBox">
			<p>Jerrys Towing, Vehicle Towing, Jarred, $24/hr, 4.7/5</p>
		</div>
		<div class="serviceBox">
			<p>Example, Example, Example, $XX/hr, X.X/5</p>
		</div>
		<div class="serviceBox">
			<p>Example, Example, Example, $XX/hr, X.X/5</p>
		</div>
		<div class="serviceBox">
			<p>Example, Example, Example, $XX/hr, X.X/5</p>
		</div>
		<div class="serviceBox">
			<p>James's Lawn Mowing, Yard Maintenance, James Brown, $50/hr, 4.96/5</p>
		</div>
		<div class="serviceBox">
			<p>Tom's Paving, Driveway Resealing, Tom El Ron Jr, $66/hr, 5/5</p>
		</div>
		<div class="serviceBox">
			<p>Example, Example, Example, $XX/hr, X.X/5</p>
		</div>
		<div class="serviceBox">
			<p>Example, Example, Example, $XX/hr, X.X/5</p>
		</div>
		<div class="serviceBox">
			<p>Example, Example, Example, $XX/hr, X.X/5</p>
		</div>
		<div class="serviceBox">
			<p>Example, Example, Example, $XX/hr, X.X/5</p>
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