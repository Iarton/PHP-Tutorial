<?php
	session_start();

	$_SESSION['txt'] = $_POST['txt'];
	header('Location: php2.php');
?>