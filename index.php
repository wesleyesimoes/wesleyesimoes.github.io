<!DOCTYPE html>
<html>
<head>
	<title>Página de login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="login.php" method="post">
		<label for="username">Nome de usuário:</label>
		<input type="text" name="username" required>
		<br><br>
		<label for="password">Senha:</label>
		<input type="password" name="password" required>
		<br><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>
