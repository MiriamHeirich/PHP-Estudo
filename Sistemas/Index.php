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
		<?php
	
         require_once 'config.php';
         include_once 'Helpers.php';

         echo ''.saudacao().' <br> '.'Hoje é  '.'  '. dataAtual();
         echo'<hr>';
?>
	</div>
</body>
</html





