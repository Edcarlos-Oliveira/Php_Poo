<?php 
    // Criando os atributos (protected para acessar os dados pelas classes filhas)
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;

        // Criando os métodos personalizados
        public final function fazAniver() {
            $this->idade ++;
        }
        // Criando os métodos especiais
        public function getNome() {
            return $this->nome;
        }
        public function setNome($n) {
            return $this->nome = $n;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($i) {
            return $this->idade = $i;
        }
        public function getSexo() {
            return $this->sexo;
        }
        public function setSexo($s) {
            return $this->sexo = $s;
        }
    }
?>