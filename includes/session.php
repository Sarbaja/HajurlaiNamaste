<?php
session_start();
if(!isset($_SESSION['emailad']))
{
	header('Location: ../register.php');
}
?>