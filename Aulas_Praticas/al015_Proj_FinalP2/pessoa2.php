<?php 
    // Criando os atributos
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $expr;

        // Criando o método personalizado
        protected function ganExpr() {
            $this->expr += 1;
        }
        // Criando os métodos especiais
        public function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->expr = 0;
        }
        public function getNome() {
            return $this->nome;
        }
        public function setNome($nom) {
            return $this->nome = $nom;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idd) {
            return $this->idade = $idd;
        }
        public function getSexo() {
            return $this->sexo;
        }
        public function setSexo($sx) {
            return $this->sexo = $sx;
        }
        public function getExpr() {
            return $this->expr;
        }
        public function setExpr($ep) {
            return $this->expr = $ep;
        }
    }
?>