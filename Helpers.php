<?php
echo '<br>Arquivos de Funções</br>';
function saudacao()
{
   $hora = date('H');
   echo $hora. '' .'hrs';
   echo '<br></br>';
   $saudacao1  = 'Bom dia';
   if ($hora >= 0 and $hora <= 5) {
      return $saudacao1;
   } else if ($hora >= 6 and $hora <= 12) {
      $saudacao1 = 'Boa tarde!';
      return $saudacao1;
   } else {
      $saudacao1 = 'Adeus';
      return $saudacao1;
   }
}

/**
 * Resume um texto
 * 
 * @param string $texto texto para resumir
 * @param int  $limite quantidade de caractgeres
 * @param string $continue exibe ao final do resumo 
 * @return string texto resumido
 */
function resumirTexto($texto, int  $limite, $continue = '...')
{
   return $texto;
}
