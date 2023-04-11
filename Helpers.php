<?php
echo '<br>Arquivos de Funções</br>';
function saudacao()
{
   $hora = date('H', 'I','S');
   echo $hora;
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

function resumirTexto($texto, int  $limite, $continue = '...')
{
   return $texto;
}
