<?php
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$email_user_1 = "paulo@teste.com";
	$senha_user_1 = "123";
	$email_user_2 = "outro@teste.com";
	$senha_user_2 = "456";
	$redirecionar = ('../index.php');
	$entrar = ('../home.php');

	session_start();
	session_destroy();

	if ($email == $email_user_1 && $senha == $senha_user_1 || $email == $email_user_2 && $senha == $senha_user_2) {
		header("location:".$entrar);
	} else {
		header("location:".$redirecionar);
	}
?>