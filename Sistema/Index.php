<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Estudo em PHP</title>
	<meta charset="utf-8">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
		}
		h1 {
			color: #333;
			text-align: center;
			margin-top: 50px;
		}
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
	</style>
</head>
<body>
	<div class="container">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<?php
	
	require_once 'config.php';
	include_once 'Helpers.php';
	include 'C:\xampp\htdocs\blog\Sistema\Nucleo\Mensagem.php';
		 $msg = new Mensagem();
		 echo $msg->sucesso('Sucesso mensagem')->renderizar();
		 echo '<hr>';
		
?>
	</div>

</body>
</html





