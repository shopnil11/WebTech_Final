<?php

session_start();
//header('location:login.php');

$con= mysqli_connect('localhost','root','1234567');
mysqli_select_db($con, 'userregistration');

$name=$_POST['user'];
$pass=$_POST['password'];

$s=" select * from usertable where name= '$name'";

$result= mysqli_query($con, $s);

$num= mysqli_num_rows($result);

if($num == 1){
	echo "<font color='dark'>Username already Taken";
}else{
	$reg= " insert into usertable(name, password) values('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo "<font color='green'>Registration Successful";
}
?>



<html>

<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
<div class="container">
<a href="login.php"> Back</a>
</div>
</body>

</html>