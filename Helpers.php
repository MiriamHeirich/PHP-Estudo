<?php

echo '<br>Arquivos de Funções</br>';

/**
 * contarTempo
 * Pega a hora atual e reduz dda hora em que foi postado, segundo  banco de dados
 * 
 * @param string $data pega hora no banco de dados
 * @param string $agora pega hora atual
 * @param string $diferenca subtrai hora da postagem dahora atual
 * @return string retorna a data e hora da postagem
 */
function contarTempo (string $data){
   echo $agora = strtotime(date('Y-m-d  H:i:s'));
   echo'<hr>';
   echo $tempo = strtotime($data);
   echo'<hr>';
   echo $diferenca = ($agora - $tempo);
   echo'<hr>';
}
function saudacao()
{
   $hora = date('H');
   echo $hora. '' .'hrs';
   echo'<hr>';
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
 * resumirTexto
 * Resume um texto
 * 
 * @param string $texto texto para resumir
 * @param int  $limite quantidade de caracteres
 * @param string $continue exibe ao final do resumo 
 * @return string texto resumido
 */
function resumirTexto($texto, int  $limite, $continue = '...')
{
   return $texto;
}
