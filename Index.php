<?php
require_once 'config.php';
include_once 'Helpers.php';

echo '<h1>Arquivo Index</h1>';

echo saudacao();
echo'<hr>';

echo'<hr>';
$valor = 5;

// if ($valor){
//    echo $valor;
// }
// else{
//    echo  0;
// }

//Operador Ternário da função IF acima.
echo ($valor ? $valor:0);
echo'<hr>';
$data  = date('d/m/Y  H:i:s') ;
 echo $data;
 echo'<hr>';
 echo contarTempo('2023-04-13 00:05:15');
