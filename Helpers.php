<?php

echo '<br>Arquivos de Funções</br>';

function validarEmail(string $email): bool{
   return filter_var ($email, FILTER_VALIDATE_EMAIL);//filter em PHP possui várias validações
}

function validarUrl(string $url): bool{
   return filter_var ($url, FILTER_VALIDATE_URL);//filter em PHP possui várias validações
}





/**
 * contarTempo
 * Pega a hora atual e reduz da hora em que foi postado, segundo  banco de dados
 * 
 *  @param string $data pega hora no banco de dados
 *  @param string $agora pega hora atual
 *  @param string $diferenca subtrai hora da postagem da hora atual
 *  @param string $segundo calcula quantos segundos se passaram
 *  @param string $minutos calcula quantos minutos se passaram
 *  @param string $horas calcula quantas horas se passaram
 *  @param string $dias calcula quantos dias se passaram
 *  @param string $semanas calcula quantas semanas se passaram
 *  @param string $meses calcula quantos meses se passaram
 *  @param string $anos calcula quantos anos se passaram
 *  @return string retorna a data e hora da postagem
 */
function contarTempo (string $data){
   echo $agora = strtotime(date('Y-m-d  H:i:s'));
   echo'<hr>';
   echo $tempo = strtotime($data);
   echo'<hr>';
   echo $diferenca = ($agora - $tempo);
   $segundo = $diferenca;
   $horas = round($diferenca/3600);
   $minutos= round($diferenca/60);
   $dias = round($diferenca/86400);
   $semanas = round($diferenca/604800);
   $meses = round($diferenca/2419200);
   $anos = round($diferenca / 29030400);
   echo'<hr>';
   if ($segundo <= 60){
      return  'agora';
   }
   elseif($minutos <=60){
      return ($minutos == 1 ? 'Há um minuto': 'Há '.$minutos.'minutos');
;   }

}

function saudacao()
{
   $hora = date('H');
   echo $hora. '' .'hrs';
   echo'<hr>';
   $saudacao1  = 'Bom dia';
   if ($hora >= 06 and $hora <= 12) {
      return $saudacao1;
   } else if ($hora >= 12 and $hora <= 18) {
      $saudacao1 = 'Boa tarde!';
      return $saudacao1;
   } else {
      $saudacao1 = 'Boa noite';
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
