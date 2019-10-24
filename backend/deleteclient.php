<?php

    session_start();
    include('../config/init.php');

    if(!isset($_SESSION['emailad']))
    {
        header('Location: ../login.php');
    }

	$id = $_GET['id'];

	$qry = "DELETE FROM clients WHERE id =$id";
	$result= $connection->query($qry);

	if ($result){
        header("Location:clients.php?success=" . urlencode("Clients deleted successfully!!"));
	}else{
        echo "ERROR OCCURED";
	}
?>