<?php
class Mensagem
{
   //atributos (properties) são as caracteristicas da classe
   private $texto;
   private $css;

//metodos dentro de uma classe define o que a classe vai fazer, funções da classe
   public function renderizar(){
      return $this->texto = 'teste';
   }
   private function filtrar (string $mensagem){
      return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);

   }
}