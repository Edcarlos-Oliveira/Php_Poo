<?php 
    // Criando os atributos:
    abstract class Animal {
        protected $peso;
        protected $idade;
        protected $membros;

        // Criando os métodos abstratos
        abstract function locomover(); 
        abstract function alimentar(); 
        abstract function emitirSom(); 
        
        // Criando os métodos especiais
        public function getPeso() {
            return $this->peso;
        }
        public function setPeso($peso) {
            return $this->peso = $peso;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idade) {
            return $this->idade = $idade;
        }
        public function getMembros() {
            return $this->membros;
        }
        public function setMembros($membros) {
            return $this->membros = $membros;
        }

    }
?>