<?php
	session_start();
	echo 'Texto enviado: ' . $_SESSION['txt'];
?>
<html>
	<meta charset="UTF-8">
	<body>
		<form action="voltar.php">
			<input type="submit" value="Voltar">
		</form>
	</body>
</html>
