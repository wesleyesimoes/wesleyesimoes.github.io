<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (isset($config[$username]) && $config[$username] == $password) {
		// As credenciais são válidas, redirecione o usuário para a página de perfil
		header('Location: profile.php');
		exit;
	} else {
		// As credenciais são inválidas, exiba uma mensagem de erro
		echo 'Nome de usuário ou senha inválidos.';
	}
}
?>