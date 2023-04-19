<! DOCTYPE html>
<html lang="pt-br">
<head>
<title>Estudo em PHP</title>
<meta charset="utf-8">
</head>
<body>

<?php
require_once 'config.php';
include_once 'Helpers.php';
 
echo ''.saudacao().' <br> '.'Hoje é'.'  '. dataAtual();
echo'<br>';

?>
</body>

