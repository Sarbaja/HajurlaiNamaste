<?php

    session_start();
	include('config/init.php');

	if(!isset($_SESSION['emailad']))
	{
		header('Location: login.php');
	}

	$check = $_SESSION['emailad'];
	$sql="SELECT * FROM users WHERE Email = '$check' ";
	$result = $connection->query($sql);
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Advanced Web Technology</title>
	<link rel="stylesheet" type="text/css" href="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <p><?php echo $_SESSION['emailad']; ?></p> 
        <p><?php echo $_SESSION['name']; ?></p>
        <a href="includes/logout.php">Logout</a>
    </div>
</body>
</html>