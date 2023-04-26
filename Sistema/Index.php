
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5..0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<?php
	
	require_once 'config.php';
	include_once 'Helpers.php';
	include 'C:\xampp\htdocs\blog\Sistema\Nucleo\Mensagem.php';
		 $msg = new Mensagem();
		 echo $msg->sucesso('Sucesso mensagem')->renderizar();
		 echo '<hr>';
		
?>




