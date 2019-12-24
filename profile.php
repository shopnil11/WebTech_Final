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
<b><font size="6"  color="dark">Restaurant Management System</font> <br />

<body>

<marquee><font size="6" color="yellow">Welcome to Your Profile!</font></marquee>
<div class="container">
<a class="float-right" href="logout.php"> Logout</a>
<h1>Hi..  <?php echo $_SESSION['username']; ?> </h1>

<img src="profile.jpg" alt="Trulli" width="250" height="133"></br>
<font size="6"  color="white">This is your profile.</font></br>

</script> 
<button onclick="goBack()">Back</button>
<script>
function goBack() {
  window.history.back();
}
</script> 

<a class="float-right" href="logout.php"> Logout</a>

</div>
</body>

</html>