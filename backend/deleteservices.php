<?php

    session_start();
    include('../config/init.php');

    if(!isset($_SESSION['emailad']))
    {
        header('Location: ../login.php');
    }

	$id = $_GET['id'];

	$qry = "DELETE FROM services WHERE id =$id";
	$result= $connection->query($qry);

	if ($result){
        header("Location:services.php?success=" . urlencode("Services deleted successfully!!"));
	}else{
    echo "ERROR OCCURED";
	}
?>