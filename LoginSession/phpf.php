<?php 
	session_start();
	$_SESSION['pag'] = 'lo';
?>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		echo '<h5 align="right">Usuario: '.$_SESSION['un'].'</h5>';
		?>
		<table style="width:100%">
			<tr>
				<th>Nome</th>
				<th>Senha</th>
			</tr>
			<tr>
				<td>adm</td>
				<td>123</td>
			</tr>
			<tr>
				<td>Airton</td>
				<td>123</td>
			</tr>
		</table>
		<form action="phpb.php" method="post" align ="center">
			<input type="submit" value="Deslogar">
		</form>
	</body>
</html>