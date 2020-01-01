<?php 
session_start();
if(!isset($_SESSION['user'])) {
	header('location:login.php');
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<meta name="aadhil" content="width=device-width, initial-scale=1.0 ">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<a class="float-right" href="logout.php"> LOG OUT </a>
	<h1>Hi, <?php echo $_SESSION['user']; ?></h1>
</div>

</body>
</html>