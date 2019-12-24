<?php

session_start();

?>


<!DOCTYPE HTML>
<html>

<head>
<title>Restaurant Management System</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>


<body>
<b><font size="20"  color="dark">Restaurant Management System</font> <br />
<marquee><font size="6" color="yellow">Welcome user!</font></marquee>

	<div>
				<ul>
					<li><a href="foodorder.html">Food Order</a></li>
					<li><a href="cancelorder.html">Cancel Food Order</a></li>
					<li><a href="extraservice.html">Apply For Extra Service</a></li>
					<li><a href="profile.php">Profile</a></li>
			</ul>
		  <li><a href="contact.html">Contact</a></li>
		  <li><a href="about.html">About</a></li>
		</ul>
		</ul>
		  <li><a href="servicerating.html">Service Rating</a></li>
		</ul>

	</div>





<body>
<div class="container">
<a class="float-right" href="logout.php"> Logout</a>
<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
</div>
</body>

</html>