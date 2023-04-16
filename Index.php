<?php
require_once 'config.php';
include_once 'Helpers.php';

echo '<h1>Arquivo Index</h1>';

echo saudacao();
echo'<hr>';

echo'<hr>';
$valor = 5;
 echo'<hr>';


 echo contarTempo('2023-04-13 00:05:15');
 if (validarEmail('teste')){
    echo 'Email válido';
 }else {
    echo'Email inválido';
 }

 //var_dump(validarEmail('franheirich5@gmail.com'));
