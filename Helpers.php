<?php
echo '<br>Arquivos de Funções</br>';
function saudacao(){
   $hora =5;
   $saudacao1  = 'se lasque';
   if ($hora>=0 && $hora<=5){
      return $saudacao1; 
   }
   if ($hora<=11){
      $saudacao1  = 'Boa tarde!';
      return $saudacao1;
    
   }
}
function resumirTexto($texto,int  $limite, $continue = '...'){
   return $texto;  
}

