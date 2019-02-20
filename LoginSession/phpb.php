<?php
	session_start();
	if($_SESSION['pag'] == 'l'){
		$_SESSION['un'] = $_POST['user'];
		if($_SESSION['un'] == 'adm' || $_SESSION['un'] == 'Airton' && $_POST['pass'] == '123'){
			header('Location: phpf.php');
		}else{
			$_SESSION['pag'] = 'le';
			header('Location: index.php');
		}
	}elseif($_SESSION['pag'] == 'lo'){
		header('Location: index.php');
	}
?>