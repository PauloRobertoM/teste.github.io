<?php
	$pizza = $_POST['pizza'];
	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];

	$total = $preco * $quantidade;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Pizzaria</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>

	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<ul class="nav nav-pills">
							<li role="presentation"><a href="home.php">Home</a></li>
							<li role="presentation"><a href="cardapio.php">Cardápio</a></li>
							<li role="presentation"><a href="galeria.php">Galeria de Fotos</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<h1>Pizzaria</h1>
			<h3>Compra Finalizada!</h3>
			
			<p>Obrigado por ter comprado conosco! Volte sempre e aproveite a pizza.</p>

			<p>Ainda com fome? Escolha outra opção de pizza: <a href="cardapio.php" class="btn btn-info">Clique aqui</a></p>
		</div>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>