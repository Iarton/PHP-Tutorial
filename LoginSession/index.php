<?php 
	session_start();
	if($_SESSION['pag'] == 'le'){
			echo '<h2 style="color:red;" align="center">Senha Incorreta</h2>';
	}elseif($_SESSION['pag'] == 'lo'){
			echo 'Deslogado';
	}
	$_SESSION['pag'] = 'l';
?>
<html>
	<head>
		<meta charset="UTF-8">
		
	</head>
	<body>
	<h1 align="center">Login</h1>
		<form action="phpb.php" method="post" align ="center">
			User <input type="text" name="user"><br><br>
			Password <input type="password" name="pass" ><br><br>
			<input type="submit" value="Login">
		</form>
	</body>
</html>