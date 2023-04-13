<?php
require_once 'config.php';
include_once 'Helpers.php';


echo '<h1>Arquivo Index</h1>';

echo saudacao();
echo '<br></br>';
$texto= 'Contagem de caracteres';
echo $texto = mb_strlen(trim($texto));
// echo'<hr>';
// echo resumirTexto('Meu nome é Miriam', 50,'...' );

echo '<br></br>';
$valor = 5;
// if ($valor){
//    echo $valor;
// }
// else{
//    echo  0;
// }

//Operador Ternário da função IF acima.

echo '<br></br>';
echo ($valor ? $valor:0);
date_default_timezone_set('America/Sao_Paulo');
$data  = date('d/m/Y  H:i:s') ;
echo $data;




