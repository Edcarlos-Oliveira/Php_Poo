<?php 
    //Criando os atributos
    abstract class Animal2 {
        protected $peso;
        protected $idade;
        protected $membros;

        // Criando os métodos abstratos
        public abstract function emSom();
        
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
        public function setMembros($memb) {
            return $this->membros = $memb;
        }
    }
?>