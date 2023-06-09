<?php

namespace Sistema\Nucleo;

class Mensagem
{
   //atributos (properties) são as caracteristicas da classe
   private $texto;
   private $css;
   public function sucesso(string $mensagem): Mensagem{
      $this-> texto = $this->filtrar($mensagem);
      $this->css = 'alert alert warning';
      return $this;
   }
   //metodos magicos
   public function __toString(){
      return $this->renderizar();
   }

//metodos dentro de uma classe define o que a classe vai fazer, funções da classe
   public function renderizar(){
      return "<div class = '{$this->css}'>{$this->texto}</div>";
   }
   private function filtrar (string $mensagem){
      return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);

   }
}