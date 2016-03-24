<html>
	<head>
	</head>
	<body>
		<br><br>
		<center>
			<b>Login</b><br>
			<?php
			if (isset($msg)) {
				echo "<font color='red'>$msg</font>";
			}
			?>
			<br>
			<form method="post" action="index.php">
				Login: <input type="text" name="login">
				<br><br>
				Senha: <input type="password" name="senha">
				<br><br>
				<input type="submit" value="Entrar" name="btn_send">
			</form>
		</center>
	</body>
</html>