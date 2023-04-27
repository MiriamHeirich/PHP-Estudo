
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5..0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<?php
	
	require_once 'config.php';
	include_once 'C:\xampp\htdocs\blog\Sistema\Nucleo\Helpers.php';
	include 'C:\xampp\htdocs\blog\Sistema\Nucleo\Mensagem.php';
	use Sistema\Nucleo\Mensagem;
		 $msg = new Mensagem;
		 echo $msg->sucesso('Sucesso mensagem')->renderizar();
		 echo '<hr>';
		
?>




